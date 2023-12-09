<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Reply;
use App\Models\User;

class ForumController extends Controller
{
    public function getAllForum(){
        $forum = Forum::all();
        $user = auth()->user();
        return view('ForumListPage', ['forum' => $forum, 'user' => $user]);
    }

    public function getForumDetail($forumId){
        $forum = Forum::find($forumId);
        $creator = User::where('id', $forum->creatorId)->first();

        $replies = Reply::where('forumId', $forumId)->get();
        return view('ForumPage', ['forum' => $forum, 'reply' => $replies, 'creator' => $creator]);
    }

    public function addForumProcess(Request $request){

        $validation = $request->validate([
            'creatorId' => 'required',
            'selectedSubject' => 'required',
            'selectedGrade' => 'required',
            'question' => 'required | min:5'
        ]);

        $new = new Forum();
        $new->title = '';
        $new->creatorId = $validation['creatorId'];
        $new->subject = $validation['selectedSubject'];
        $new->grade = $validation['selectedGrade'];
        $new->question = $validation['question'];
        $new->save();

        return redirect()->back();
    }

    public function addReplyProcess(Request $request){

        $validation = $request->validate([
            'answer' => 'required | min:5',
            'forumId' => 'required',
            'userName' => 'required'
        ]);

        $new = new Reply();
        $new->forumId = $validation['forumId'];
        $new->userName = $validation['userName'];
        $new->answer = $validation['answer'];
        $new->save();

        return redirect()->back();
    }
}
