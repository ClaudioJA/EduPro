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

    public function createExercise(){
        return view('CreateExercise');
    }

    public function createExerciseProcess(Request $request){
        $validation = $request->validate([
            'selectedSubject' => 'required',
            'title' => 'required | min:5'
        ]);

        $new = new Exerciseheader();
        $new->subject = $validation['selectedSubject'];
        $new->title = $validation['title'];
        $new->save();

        return redirect('/exercise');
    }

    public function getQuestion($id){

        $exercise = Exerciseheader::find($id);
        $question = Exercisequestion::where('exerciseId', $id)->get();

        return view('QuestionListPage', ['exercise' => $exercise, 'question' => $question]);
    }

    public function addQuestion($id){
        return view('AddQuestion', ['id' => $id]);
    }

    public function addQuestionProcess(Request $request){
        $validation = $request->validate([
            'exerciseId' => 'required',
            'question' => 'required | min:5',
            'optionA' => 'required',
            'optionB' => 'required',
            'optionC' => 'required',
            'optionD' => 'required',
            'correctOption' => 'required',
        ]);

        $new = new Exercisequestion();
        $new->exerciseId = $validation['exerciseId'];
        $new->question = $validation['question'];
        $new->optionA = $validation['optionA'];
        $new->optionB = $validation['optionB'];
        $new->optionC = $validation['optionC'];
        $new->optionD = $validation['optionD'];
        $new->correctOption = $validation['correctOption'];
        $new->save();

        return redirect('/exercise');
    }

    public function checkAnswer(Request $request){
        if(count($request->all()) <= 2){
            return redirect()->back();
        }

        $answers = $request->except('_token');
        $questionId = $request->questionId;
        $question = Exercisequestion::where('exerciseId', $questionId)->get();  
        
        $total = count($question);
        $correct = 0;

        for($i = 0; $i < count($question); $i++){
            $correctAnswer = $question[$i]->correctOption;

            if ($answers[$i+1] !== null) {
                if($answers[$i+1] === $correctAnswer){
                    $correct++;
                }
            }
        }

        if($total <= 0){
            $total = 1;
        }
        $score = ($correct / $total) * 100;

        return view('ExerciseScore', ['score' => $score]);
    }
}
