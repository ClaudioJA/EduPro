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

    public function checkAnswer(Request $request){
        $answers = $request->except('_token');
        $questionId = $request->questionId;
        $question = Exercisequestion::where('exerciseId', $questionId)->get();

        // dd($question[0]->correctOption);    

        $total = 0;
        $correct = 0;

        foreach($question as $q){
            $userAnswer = $answers;
            $correctAnswer = $q->correctOption;

            if ($userAnswer !== null && $userAnswer === $correctAnswer) {
                $correct++;
            }

            $total++;
        }

        return ($correct / $total) * 100;
    }
}
