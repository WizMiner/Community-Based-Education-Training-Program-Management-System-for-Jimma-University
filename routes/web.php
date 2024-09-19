<?php

use App\Http\Controllers\CbeController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SupervisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** CBE Routes Start */
Route::middleware(['auth', 'user-access:cbe'])->group(function () {
    Route::prefix('cbe')->group(function () {
        Route::get('/home', function (){
            return view('pages.cbe.home');
        })->name('cbe.home');

        Route::prefix('/department')->group(function (){
            Route::get('/add', [CbeController::class, 'departmentindex'])->name('cbe.department.add');
            Route::get('/adds', [CbeController::class, 'departmentcreate'])->name('cbe.department.create');
            Route::post('/add', [CbeController::class, 'departmentStore'])->name('cbe.department.store');
            Route::get('/list', function (){
                return view('pages.cbe.department.list');
            })->name('cbe.department.list');
            Route::get('/view/{department}', function (){
                return view('pages.cbe.department.view');
            })->name('cbe.department.view');
            Route::get('/edit/{department}', [CbeController::class, 'departmentEdit'])->name('cbe.department.edit');
            Route::post('/update/{department}', [CbeController::class, 'update'])->name('cbe.department.update');
            Route::get('/delete/{department}', [CbeController::class, 'destroy'])->name('cbe.department.delete');
        });

        Route::prefix('training-types')->group(function () {
            Route::get('/add', [CbeController::class, 'trainingTypeCreate'])->name('cbe.training-type.add');
            Route::post('/add', [CbeController::class, 'trainingTypeStore'])->name('cbe.training-type.store');
            Route::get('/list', [CbeController::class, 'trainingTypeList'])->name('cbe.training-type.list');
        });

        Route::prefix('students')->group(function () {
            Route::get('/list', [CbeController::class, 'studentList'])->name('cbe.students.list');

            Route::get('/trainings/add', [CbeController::class, 'studentTrainingCreate'])->name('cbe.student-training.add');
            Route::post('/trainings/add', [CbeController::class, 'studentTrainingStore'])->name('cbe.student-training.store');
            Route::get('/trainings/list', [CbeController::class, 'studentTrainingList'])->name('cbe.student-training.list');
        });

        Route::prefix('questionnaire')->group(function () {
            Route::get('/view', [CbeController::class, 'questionnaireIndex'])->name('cbe.questionnaire.view');

            Route::get('/setting', [CbeController::class, 'questionnaireSetting'])->name('cbe.questionnaire.setting.add');
            Route::post('/setting/add', [CbeController::class, 'questionnaireSettingStore'])->name('cbe.questionnaire.setting.store');
            Route::post('/update-status', [CbeController::class, 'questionnaireUpdateStatus'])->name('cbe.questionnaire.update-status');
        });

        Route::prefix('assessment')->group(function () {
            Route::get('/supervisor', [CbeController::class, 'supervisorAssessmentIndex'])->name('cbe.assessment.supervisor.index');
            Route::get('/supervisor/view/{id}', [CbeController::class, 'supervisorAssessmentView'])->name('cbe.assessment.supervisor.view');

            Route::get('/institution', [CbeController::class, 'institutionAssessmentIndex'])->name('cbe.assessment.institution.index');
            Route::get('/institution/view', [CbeController::class, 'institutionAssessmentView'])->name('cbe.assessment.institution.view');
        });

        Route::get('/notice-board', [CbeController::class, 'noticeBoardIndex'])->name('cbe.notice-board.index');
        Route::get('/notice-board/add', [CbeController::class, 'noticeBoardCreate'])->name('cbe.notice-board.create');
        Route::post('/notice-board/store', [CbeController::class, 'noticeBoardStore'])->name('cbe.notice-board.store');
        Route::get('/notice-board/edit/{id}', [CbeController::class, 'notice_edit'])->name('cbe.notice-board.edit');
        Route::post('/notice-board/update', [CbeController::class, 'studentUpdate'])->name('cbe.notice-board.update');
        Route::post('/notice-board/destroy/{id}', [CbeController::class, 'studentDestroy'])->name('cbe.notice-board.destroy');

    });
});
/** CBE Routes End */

/** Department Route Start */
Route::middleware(['auth', 'user-access:department'])->group(function () {
    Route::prefix('/department')->group(function (){
        Route::get('/home', [DashboardController::class, 'departmentIndex'])->name('department.home');

        Route::get('/student/list', [DepartmentController::class, 'studentIndex'])->name('department.student.index');
        Route::get('/student/add', [DepartmentController::class, 'studentCreate'])->name('department.student.add');
        Route::get('/student/edit/{id}', [DepartmentController::class, 'studentEdit'])->name('department.student.edit');
        Route::post('/student/update', [DepartmentController::class, 'studentUpdate'])->name('department.student.update');
        Route::post('/student/destroy/{id}', [DepartmentController::class, 'studentDestroy'])->name('department.student.destroy');
        Route::post('/student/store', [DepartmentController::class, 'studentStore'])->name('department.student.store');
        Route::get('/student/download/{file}', [DepartmentController::class, 'studentListDownload'])->name('department.download.studentlist');

    });
});
/** Department Route End */

/** Supervisor Route Start */
Route::middleware(['auth', 'user-access:supervisor'])->group(function () {
    Route::prefix('/supervisor')->group(function (){
        Route::get('/home', [DashboardController::class, 'supervisorIndex'])->name('supervisor.home');

        Route::prefix('training')->group(function () {
            Route::get('/list', [SupervisorController::class, 'trainingIndex'])->name('supervisor.training.index');
            Route::get('/list/view/{id}', [SupervisorController::class, 'trainingView'])->name('supervisor.training.view');

            Route::get('/assessment', [SupervisorController::class, 'assessmentIndex'])->name('supervisor.training.assessment.index');
            Route::get('/assessment/add/{id}', [SupervisorController::class, 'assessmentCreate'])->name('supervisor.training.assessment.create');
            Route::post('/assessment/store', [SupervisorController::class, 'assessmentStore'])->name('supervisor.training.assessment.store');
        });

        Route::get('/notice-board', [SupervisorController::class, 'noticeBoard'])->name('supervisor.notice-board');
    });
});
/** Supervisor Route End */

/** Institution Route Start */
Route::middleware(['auth', 'user-access:institution'])->group(function () {
    Route::prefix('/institution')->group(function (){
        Route::get('/home', [DashboardController::class, 'institutionIndex'])->name('institution.home');

        Route::prefix('trainings')->group(function () {
            Route::get('/list', [InstitutionController::class, 'trainingIndex'])->name('institution.training.index');
            Route::get('/list/view/{id}', [InstitutionController::class, 'trainingView'])->name('institution.training.view');

            Route::get('/assessment', [InstitutionController::class, 'assessmentIndex'])->name('institution.training.assessment.index');
            Route::get('/assessment/add/{id}', [InstitutionController::class, 'assessmentCreate'])->name('institution.training.assessment.create');
            Route::post('/assessment/store', [InstitutionController::class, 'assessmentStore'])->name('institution.training.assessment.store');
        });

    });
});
/** Institution Route End */

/** Student Route Start */
Route::middleware(['auth', 'user-access:student'])->group(function () {
    Route::prefix('/student')->group(function (){
        Route::get('/home', [DashboardController::class, 'studentIndex'])->name('student.home');
        Route::get('/notice-board', [StudentController::class, 'noticeBoard'])->name('student.notice-board');

        Route::get('/training', [StudentController::class, 'trainingIndex'])->name('student.training.list');
        Route::post('/training', [StudentController::class, 'trainingStore'])->name('student.training.store');
        Route::get('/training/questionnaire/{id}', [StudentController::class, 'questionnaireIndex'])->name('student.questionnaire.index');

    });
});
/** Student Route End */
