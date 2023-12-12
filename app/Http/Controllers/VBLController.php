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

        if($curr){
            return view('VBLDetailPage', ['curr' => $curr, 'list' => $list, 'headerId' => $id]);
        }
        else{
            if($list->isNotEmpty()){
                $top = Vbldetail::where('headerId', $id)->orderBy('chapter', 'asc')->first();
                return view('VBLDetailPage', ['curr' => $top, 'list' => $list, 'headerId' => $id]);
            }
            else{
                return view('VBLDetailPage-Empty', ['headerId' => $id]);
            }
        }
    }

    public function createVBLForm(){
        return view('CreateVBL');
    }

    public function createVBLProcess(Request $request){
        $validation = $request->validate([
            'title' => 'required | min:5',
            'instructor' => 'required | min:5'
        ]);

        $new = new Vblheader();
        $new->name = $validation['title'];
        $new->teacherName = $validation['instructor'];
        $new->save();

        return redirect('/vbl');
    }

    public function createVBLDetailForm($id){
        return view('CreateVBLDetail', ['headerId' => $id]);
    }

    public function createVBLDetailProcess(Request $request){
        $validation = $request->validate([
            'headerId' => 'required',
            'title' => 'required | min:5',
            'chapter' => 'required',
            'videoUrl' => 'required',
            'desc' => 'required | min:5'
        ]);

        $new = new Vbldetail();
        $new->headerId = $validation['headerId'];   
        $new->title = $validation['title'];
        $new->chapter = $validation['chapter'];
        $new->videoUrl = $validation['videoUrl'];
        $new->desc = $validation['desc'];
        $new->save();

        return redirect("/vbl");
    }   
}
