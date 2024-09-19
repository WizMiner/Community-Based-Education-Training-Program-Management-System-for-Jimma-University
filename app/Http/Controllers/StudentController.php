<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\department;
use App\Models\notice_board;
use App\Models\questionery;
use Illuminate\Http\Request;
use App\Models\student_trainings;

class StudentController extends Controller
{
    public function noticeBoard(){
        $program = program::findOrFail(auth()->user()->Student?->program_id);
        $dept = department::findOrFail($program?->dep_id);
        $collegeId = $dept?->coll_id;
        $noticeBoard = notice_board::where('college_id', $collegeId)->get();

        return view('pages.student.notice-board.index', compact('noticeBoard'));
    }

    public function trainingIndex(){

        // TODO: fix schema to apply student trainings
        $trainings = student_trainings::where('id', 1)->get();

        return view('pages.student.training.index', compact('trainings'));
    }
    public function questionnaireIndex($id){
        $trainingId = $id;
        $questionnaire = questionery::first();
        return view('pages.student.training.questionnaire', compact('trainingId', 'questionnaire'));
    }
    public function trainingStore(Request $request){
        $question=$request->validate([
            
        ]);
    }
}
