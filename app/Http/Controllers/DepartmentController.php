<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\student_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DepartmentController extends Controller
{
    public function index(){
    }

    public function studentIndex(){
        $studentList = student_list::all();
        return view('pages.department.student.list', compact('studentList'));
    }

    public function studentCreate(){
        $programs = program::all();
        return view('pages.department.student.add', compact('programs'));
    }

    public function studentStore(Request $request){

        $request->validate([
            'program' => 'required',
            'file' => 'required'
        ]);

        $input = $request->all();

        // TODO: get this values from database
        $cbeId = 1;
        $depId = 1;

        $data['dep_id'] = $depId;
        $data['cbe_id'] = $cbeId;
        $data['program_id'] = $input['program'];
        $data['dep_user_id'] = auth()->user()->id;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/StudentList', 'sena');
            $data['file'] = $path;
        }

        student_list::create($data);

        return redirect()->route('department.student.index')->with('success', 'List Uploaded Successfully');
    }

    public function studentEdit(Request $request, $id){
        $list = student_list::findOrFail($id);
        $programs = program::all();

        return view('pages.department.student.edit', compact('list', 'programs'));
    }
    public function studentUpdate(Request $request)
    {
        $request->validate([
            'program' => 'required',
            'file' => 'required'
        ]);

        $studentList = student_list::findOrFail($request->list);

        if ($request->hasFile('file')) {
            Storage::disk('sena')->delete($studentList->file);

            $filePath = $request->file('file')->store('uploads/StudentList', 'sena');

            $studentList->update([
                'program_id' => $request->input('program'),
                'file' => $filePath]);
        }

        return redirect()->route('department.student.index')->with('success', 'List updated successfully.');
    }

    public function studentDestroy($id)
    {
        $studentList = student_list::findOrFail($id);

        Storage::disk('sena')->delete($studentList->file);

        $studentList->delete();

        return redirect()->route('department.student.index')->with('success', 'List deleted successfully.');
    }

    public function studentListDownload($file)
    {
        $filePath = student_list::where('id', $file)->value('file');

        if ($filePath && Storage::disk('sena')->exists($filePath)) {
            return response()->download(Storage::disk('sena')->path($filePath));
        } else {
            return redirect()->back()->with('error', 'File not found');
        }
    }
}
