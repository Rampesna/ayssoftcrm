<?php

use App\Http\Api\AyssoftIkApi;
use App\Http\Api\AyssoftTakipApi;
use App\Services\TvPanelService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/deneme',function (){
    return response()->json(TvPanelService::AbandonService(), 200);
});


Route::namespace('App\\Http\\Controllers')->group(function () {
    Route::any('CallQuees', 'CallApi@CallQuees');
    Route::any('GetJobList', 'CallApi@GetJobList');
    Route::any('EmployeeAndJobTracking', 'CallApi@EmployeeAndJobTracking');
    Route::any('ShiftEmployeesLastSunday', 'CallApi@ShiftEmployeesLastSunday');
    Route::any('Abandon', 'CallApi@Abandon');
    Route::any('GetPointDay', 'CallApi@GetPointDay');
    Route::any('GetPointWeek', 'CallApi@GetPointWeek');
    Route::any('GetMonthJobRanking', 'CallApi@GetMonthJobRanking');
});

Route::middleware([])->namespace('App\\Http\\Controllers')->group(function () {
    View::composer('*', function ($view) {
        if (Auth::check()) {
            $view->with('authUser', Auth::user());
        }
    });

    Route::get('/', function () {
        return redirect()->route('dashboard.index');
    });
    Route::get('/index', 'Dashboard@Index')->name('dashboard.index');

    Route::prefix('tv')->group(function () {
        Route::get('/', function () {
            return redirect()->route('tv.index');
        });
        Route::get('/index', 'TvPanel@Index')->name('tv.index');
        Route::post('/store', 'TvPanel@Store')->name('tv.store');

        Route::get('/abandons', 'TvPanel@Abandons')->name('dashboard.abandons');

        Route::prefix('sections')->group(function () {
            Route::get('section/1', 'TvPanel@Section1')->name('tv.section.1');
            Route::get('section/2', 'TvPanel@Section2')->name('tv.section.2');
            Route::get('section/3', 'TvPanel@Section3')->name('tv.section.3');
            Route::get('section/4', 'TvPanel@Section4')->name('tv.section.4');
            Route::get('section/5', 'TvPanel@Section5')->name('tv.section.5');

        });
    });

    Route::prefix('users')->namespace('User')->group(function () {
        Route::get('/', function () {
            return redirect()->route('users.index');
        });
        Route::get('/index', 'UserController@Index')->name('users.index');
        Route::get('/create', 'UserController@Create')->name('users.create');
        Route::post('/store', 'UserController@Create')->name('users.store');
        Route::get('/{id}/edit', 'UserController@Edit')->name('users.edit');
        Route::post('/update', 'UserController@Update')->name('users.edit');
        Route::post('/delete', 'UserController@Delete')->name('users.delete');

        Route::get('/notes', 'UserController@Notes')->name('users.notes');

    });

    Route::prefix('exams')->namespace('Exam')->group(function () {
        Route::get('/', function () {
            return redirect()->route('exams.index');
        });
        Route::get('/index', 'ExamController@Index')->name('exams.index');
        Route::get('/create', 'ExamController@Create')->name('exams.create');
        Route::post('/store', 'ExamController@Create')->name('exams.store');
        Route::get('/{id}/edit', 'ExamController@Edit')->name('exams.edit');
        Route::post('/update', 'ExamController@Update')->name('exams.edit');
        Route::post('/delete', 'ExamController@Delete')->name('exams.delete');

        Route::prefix('questions')->group(function () {
            Route::get('/index', 'ExamQuestionController@Index')->name('exams.questions');
            Route::get('/create', 'ExamQuestionController@Create')->name('exams.questions.create');
            Route::post('/store', 'ExamQuestionController@Create')->name('exams.questions.store');
            Route::get('/{id}/edit', 'ExamQuestionController@Edit')->name('exams.questions.edit');
            Route::post('/update', 'ExamQuestionController@Update')->name('exams.questions.edit');
            Route::post('/delete', 'ExamQuestionController@Delete')->name('exams.questions.delete');
        });

        Route::prefix('answers')->group(function () {
            Route::get('/index', 'ExamAnswerController@Index')->name('exams.answers');
            Route::get('/create', 'ExamAnswerController@Create')->name('exams.answers.create');
            Route::post('/store', 'ExamAnswerController@Create')->name('exams.answers.store');
            Route::get('/{id}/edit', 'ExamAnswerController@Edit')->name('exams.answers.edit');
            Route::post('/update', 'ExamAnswerController@Update')->name('exams.answers.edit');
            Route::post('/delete', 'ExamAnswerController@Delete')->name('exams.answers.delete');
        });

    });

    Route::prefix('surveys')->namespace('Survey')->group(function () {
        Route::get('/', function () {
            return redirect()->route('surveys.index');
        });
        Route::get('/index', 'SurveyController@Index')->name('surveys.index');
        Route::get('/create', 'SurveyController@Create')->name('surveys.create');
        Route::post('/store', 'SurveyController@Create')->name('surveys.store');
        Route::get('/{id}/edit', 'SurveyController@Edit')->name('surveys.edit');
        Route::post('/update', 'SurveyController@Update')->name('surveys.edit');
        Route::post('/delete', 'SurveyController@Delete')->name('surveys.delete');

        Route::prefix('questions')->group(function () {
            Route::get('/index', 'SurveyQuestionController@Index')->name('surveys.questions');
            Route::get('/create', 'SurveyQuestionController@Create')->name('surveys.questions.create');
            Route::post('/store', 'SurveyQuestionController@Create')->name('surveys.questions.store');
            Route::get('/{id}/edit', 'SurveyQuestionController@Edit')->name('surveys.questions.edit');
            Route::post('/update', 'SurveyQuestionController@Update')->name('surveys.questions.edit');
            Route::post('/delete', 'SurveyQuestionController@Delete')->name('surveys.questions.delete');
        });

        Route::prefix('answers')->group(function () {
            Route::get('/index', 'SurveyAnswerController@Index')->name('surveys.answers');
            Route::get('/create', 'SurveyAnswerController@Create')->name('surveys.answers.create');
            Route::post('/store', 'SurveyAnswerController@Create')->name('surveys.answers.store');
            Route::get('/{id}/edit', 'SurveyAnswerController@Edit')->name('surveys.answers.edit');
            Route::post('/update', 'SurveyAnswerController@Update')->name('surveys.answers.edit');
            Route::post('/delete', 'SurveyAnswerController@Delete')->name('surveys.answers.delete');
        });

        Route::prefix('job-groups')->group(function () {
            Route::get('/index', 'SurveyJobGroupController@Index')->name('surveys.job-groups');
            Route::get('/create', 'SurveyJobGroupController@Create')->name('surveys.job-groups.create');
            Route::post('/store', 'SurveyJobGroupController@Create')->name('surveys.job-groups.store');
            Route::get('/{id}/edit', 'SurveyJobGroupController@Edit')->name('surveys.job-groups.edit');
            Route::post('/update', 'SurveyJobGroupController@Update')->name('surveys.job-groups.edit');
            Route::post('/delete', 'SurveyJobGroupController@Delete')->name('surveys.job-groups.delete');
        });

    });

    Route::prefix('teams')->namespace('Team')->group(function () {
        Route::get('/', 'TeamController@Index')->name('teams.index');
        Route::get('/create', 'TeamController@Create')->name('teams.create');
        Route::post('/store', 'TeamController@Create')->name('teams.store');
        Route::get('/{id}/edit', 'TeamController@Edit')->name('teams.edit');
        Route::post('/update', 'TeamController@Update')->name('teams.edit');
        Route::post('/delete', 'TeamController@Delete')->name('teams.delete');
    });

    Route::prefix('todo-list')->namespace('TodoList')->group(function () {
        Route::get('/', 'TodoListController@Index')->name('todo-list.index');
        Route::get('/create', 'TodoListController@Create')->name('todo-list.create');
        Route::post('/store', 'TodoListController@Create')->name('todo-list.store');
        Route::get('/{id}/edit', 'TodoListController@Edit')->name('todo-list.edit');
        Route::post('/update', 'TodoListController@Update')->name('todo-list.edit');
        Route::post('/delete', 'TodoListController@Delete')->name('todo-list.delete');
    });

    Route::prefix('uyum-crm')->namespace('UyumCrm')->group(function () {
        Route::get('/', function () {
            return redirect()->route('uyum-crm.manage');
        });
        Route::get('/manage', 'Manage@Index')->name('uyum-crm.manage');
        Route::get('/group-names', 'Group@Index')->name('uyum-crm.group-names');
        Route::get('/constants', 'Constant@Index')->name('uyum-crm.constants');

    });
});

