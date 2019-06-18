<?php

use App\student;
use App\fees;
use Illuminate\Support\Facades\Input;
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
// Route::resource('students','studentController');
Route::get('/', function () {
    return view('welcome');
});
Route::post('/store', 'studentController@store' );
Route::get('101169/layout', function () {
    return view('101169/layout');
});
Route::get('101169/student', function () {
    return view('101169/student');
});

Route::get('101169/fees', function () {
	$student = student::all();
	//dd($student->id);
    return view('101169/fees')->with('student', $student);
});

Route::get('101169/search', function () {
    return view('101169/search');
});

Route::post ( '101169/search', function () {
    $search = Input::get ( 'search' );
    // dd($search);
    $student = student::where ( 'id', 'LIKE', '%' . $search . '%' )->first();
    $students = fees::with ( 'student')->where('student_id',$student->id)->get ();
    // dd($students);

    if (count ( $students ) > 0)
        return view ( '101169/search' )->withDetails ( $students )->withQuery ( $search );
    else
        return view ( '101169/search' )->withMessage ( 'No Details found. Try to search again !' );
} );


Route::get('101169/view', function () {
	$student = student::has('fees')->withCount([
		'fees as amount' => function($query){
			$query->select(DB::raw('sum(amount)'));
		}
	])->get();
	// dd($student);
    return view('101169/view',['student' => $student]);
    //return view('101169/view');
});

Route::post('/fee', 'feesController@fee' );
// Route::get('form-validation', 'studentController@formValidation');
// Route::post('form-validation', 'studentController@formValidationPost');
// Route::get('101169/index', function () {
//     return view('101169/index');
// });


