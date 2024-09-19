<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.cbe.home');
    }

    public function studentIndex()
    {
        return view('pages.student.home');
    }
    public function departmentIndex()
    {
        return view('pages.department.home');
    }

    public function supervisorIndex()
    {
        return view('pages.supervisor.home');
    }

    public function institutionIndex()
    {
        return view('pages.institution.home');
    }
}
