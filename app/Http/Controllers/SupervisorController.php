<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\notice_board;
use App\Models\student_trainings;
use App\Models\supervisor_assesment;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function trainingIndex(){
        $studentTrainingList = student_trainings::where('supervisor_id', auth()->user()->id)->get();

        return view('pages.supervisor.training.index', compact('studentTrainingList'));
    }

    public function trainingView(){
    }

    public function assessmentIndex(){
        $assessments = supervisor_assesment::where('supervisor_id', auth()->user()->id)->get();

        return view('pages.supervisor.assessment.index', compact('assessments'));
    }

    public function assessmentCreate($id){
        $trainingId = (int)$id;
        return view('pages.supervisor.assessment.add', compact('trainingId'));
    }

    public function assessmentStore(Request $request){
        $data = [];
        $data = $request->except('_token', 'training_id');
        $data['supervisor_id'] = auth()->user()->id;
        $data['assesment_date'] = now();
        $data['stud_training_id'] = $request->training_id;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/Supervisor/Assessments', 'sena');
            $data['file'] = $path;
        }

        supervisor_assesment::create($data);

        return redirect()->route('supervisor.training.index')->with('success', 'Assessment added successfully');
    }

    public function noticeBoard(){
        $dept = department::findOrFail(auth()->user()->Supervisor?->dep_id);
        $collegeId = $dept?->coll_id;
        $noticeBoard = notice_board::where('college_id', $collegeId)->get();

        return view('pages.supervisor.notice-board.index', compact('noticeBoard'));
    }
}
