<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exerciseheader;
use App\Models\Exercisequestion;

class ExerciseController extends Controller
{
    public function getAllExercise($subject = null){
        
        if($subject !== null){
            $exercise = Exerciseheader::where('subject', $subject)->get();
        }
        else{
            $exercise = Exerciseheader::all();
        }

        return view('ExerciseListPage', ['exercise' => $exercise]);
    }

    public function getQuestion($id){

        $exercise = Exerciseheader::find($id);
        $question = Exercisequestion::where('exerciseId', $id)->get();

        return view('QuestionListPage', ['exercise' => $exercise, 'question' => $question]);
    }
}
