<?php

namespace App\Http\Controllers;

use App\Models\Cbe;
use App\Models\User;
use App\Models\department;
use App\Models\institution;
use App\Models\institution_assesment;
use App\Models\InstitutionPlace;
use App\Models\notice_board;
use App\Models\questionery;
use App\Models\supervisor;
use App\Models\student_list;
use Illuminate\Http\Request;
use App\Models\training_types;
use App\Models\student_trainings;
use App\Models\supervisor_assesment;

class CbeController extends Controller
{

    public function departmentindex(){
        $departments = Department::all();
        return view('pages.cbe.department.add',['departments'=>$departments]);
    }
    public function departmentcreate(){
        return view('pages.cbe.department.create');
    }
    public function departmentStore(Request $request){
        $data=$request->validate([

            'name'=>'required',
            'coll_id'=>'required|numeric'
        ]);
        $newdep=Department::create($data);

        return redirect()->route('cbe.department.list');
    }
    public function departmentEdit(Request $request){
       return view('pages.cbe.department.edit');
    }
    public function trainingTypeList(){
        $trainingTypes = training_types::all();
        return view('pages.cbe.setting.training-types.list', compact('trainingTypes'));
    }
    public function trainingTypeCreate(){
        return view('pages.cbe.setting.training-types.add');
    }

    public function trainingTypeStore(Request $request){
        $input = $request->except('_token');
        training_types::create($input);

        return redirect()->route('cbe.training-type.list')->with('success', 'Training Type Added Successfully');
    }

    public function studentList(){
        $studentList = User::where('type', 0)->get();

        return view('pages.cbe.student.list.list', compact('studentList'));
    }

    public function studentTrainingList(){
        $studentTrainingList = student_trainings::all();

        return view('pages.cbe.student.trainings.list', compact('studentTrainingList'));
    }

    public function studentTrainingCreate(){
        $trainingTypes = training_types::all();
        $supervisors = supervisor::all();
        $departments = department::all();
        $institutions = InstitutionPlace::all();

        return view('pages.cbe.student.trainings.add', compact('trainingTypes', 'departments', 'institutions', 'supervisors'));
    }

    public function studentTrainingStore(Request $request){
        // dd($request->all());
        $data = [];
        $data = $request->except('_token');

        $cbe_id = auth()->user()->id;
        $data['cbe_id'] = $cbe_id;

        if ($request->hasFile('student_list')) {
            $file = $request->file('student_list');
            $path = $file->store('uploads/Training/StudentList', 'sena');
            $data['student_list'] = $path;
        }

        student_trainings::create($data);

        return redirect()->route('cbe.student-training.list')->with('success', 'Training saved successfully');
    }

    public function questionnaireIndex(){
        $questionnaire = questionery::first();
        return view('pages.cbe.questionnaire.view', compact('questionnaire'));
    }

    public function questionnaireUpdateStatus(Request $request){
        questionery::where('id', 1)->update([
            'status' => $request->has('status') ? true : false
        ]);

        return redirect()->route('cbe.questionnaire.view')->with('success', 'Questionnaire status updated successfully');
    }

    public function supervisorAssessmentIndex(){
        $supervisorAssessments = supervisor_assesment::all();

        return view('pages.cbe.assessment.supervisor.list', compact('supervisorAssessments'));
    }

    public function institutionAssessmentIndex(){
        $institutionAssessments = institution_assesment::all();

        return view('pages.cbe.assessment.institution.list', compact('institutionAssessments'));
    }

    public function noticeBoardIndex(){
        $collegeId = Cbe::where('user_id', '=', auth()->user()->id)->first()?->coll_id;
        $noticeBoard = notice_board::where('college_id', $collegeId)->get();

        return view('pages.cbe.notice-board.index', compact('noticeBoard'));

    }

    public function noticeBoardCreate(){
        return view('pages.cbe.notice-board.add');
    }

    public function noticeBoardStore(Request $request){
        $collegeId = Cbe::where('user_id', '=', auth()->user()->id)->first()?->coll_id;
        $data = [];
        $data =  $request->except('_token');
        $data['college_id'] = $collegeId;

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = $file->store('uploads/NoticeBoard', 'sena');
            $data['attachment'] = $path;
        }

        notice_board::create($data);
        return redirect()->route('cbe.notice-board.index')->with('success', 'Notice Board added successfully');
    }
    public function notice_edit(Request $request){
        dd($request);
    }

}
