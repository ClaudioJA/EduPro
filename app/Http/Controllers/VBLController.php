<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vblheader;
use App\Models\Vbldetail;

class VBLController extends Controller
{
    public function getAllVBLHeader(){
        $vbl = VblHeader::all();
        return view('VBLHeaderPage', ['vbl' => $vbl]);
    }

    public function getVBLDetail($id, $chapterId){
        if($chapterId == null || $chapterId == 0){
            $chapterId = 1;
        }

        $curr = Vbldetail::where('headerId', $id)->where('chapter', $chapterId)->first();
        $list = Vbldetail::where('headerId', $id)->orderBy('chapter', 'asc')->get();

        return view('VBLDetailPage', ['curr' => $curr, 'list' => $list]);
    }
}
