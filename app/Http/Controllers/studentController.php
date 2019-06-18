<?php

namespace App\Http\Controllers;
use Request;
use DB;
// use App\Htpp\Request as HttpRequest;
use Illuminate\Http\Request as HttpRequest;
use App\Http\Controllers\Controller;
use App\student;
use Illuminate\Support\Facade\URL;


class studentController extends Controller
{

	public function store(HttpRequest $request)
	{
		$this->validate($request,[
    			'firstname' => 'required|min:5|max:35',
    			'secondname' => 'required|min:5|max:35',
    			'email' => 'required|email|unique:users',
    			'date' => 'required|date',
    			// 'age' => 'required|min:18|max:100',
    			
    		],[
    			'firstname.required' => ' The first name field is required.',
    			'firstname.min' => ' The first name must be at least 5 characters.',
    			'firstname.max' => ' The first name may not be greater than 35 characters.',
    			'secondname.required' => ' The last name field is required.',
    			'secondname.min' => ' The last name must be at least 5 characters.',
    			'lastname.max' => ' The last name may not be greater than 35 characters.',
    			// 'age.min' => ' The student should not be younger than 18.',
    			// 'age.max' => ' The student should be younger than 100.',
    		]);


		// print_r($request->input());
$firstname = $request->input('firstname');
$secondname = $request->input('secondname');
$email = $request->input('email');
$date  = $request->input('date');

$data=array('firstname'=>$firstname,'date'=>$date,'secondname'=>$secondname,"email"=>$email);
DB::table('students')->insert($data);
echo "Record inserted successfully.<br/>";
echo '<a href = "/101169/layout">Click Here</a> to go back.';
	}

	
}
