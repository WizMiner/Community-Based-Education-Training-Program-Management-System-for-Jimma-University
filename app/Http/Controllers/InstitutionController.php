<?php

namespace App\Http\Controllers;

use App\Models\institution;
use App\Models\institution_assesment;
use App\Models\student_trainings;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function trainingIndex(){
        $institutionId = auth()->user()->Institution?->institution_place_id;
        $studentTrainingList = student_trainings::where('institution_id', $institutionId)->get();

        return view('pages.institution.training.index', compact('studentTrainingList'));
    }

    public function trainingView(){
    }

    public function assessmentIndex(){
        $assessments = institution_assesment::where('institution_id', auth()->user()->id)->get();

        return view('pages.institution.assessment.index', compact('assessments'));
    }

    public function assessmentCreate($id){
        $trainingId = (int)$id;
        return view('pages.institution.assessment.add', compact('trainingId'));
    }

    public function assessmentStore(Request $request){
        $data = [];
        $data = $request->except('_token', 'training_id');
        $data['institution_id'] = auth()->user()->id;
        $data['assesment_date'] = now();
        $data['stud_training_id'] = $request->training_id;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/institution/Assessments', 'sena');
            $data['file'] = $path;
        }

        institution_assesment::create($data);

        return redirect()->route('institution.training.index')->with('success', 'Assessment added successfully');
    }
}
