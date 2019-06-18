<?php

namespace App\Http\Controllers;
use Request;
use DB;
// use App\Htpp\Request as HttpRequest;
use Illuminate\Http\Request as HttpRequest;
use App\Http\Controllers\Controller;
use App\fees;
use Illuminate\Support\Facade\URL;


class feesController extends Controller
{

	public function fee(HttpRequest $request)
	{
		$this->validate($request,[
    			'id' => 'required|max:35',
    			'amount' => 'required',
    			'date' => 'required|date',
    			
    			
    		],[
    			'id.required' => ' The student id is required.',
    			'amount.min' => ' The amount required.',
    			
    		]);


		// print_r($request->input());
$id = $request->input('id');
$amount = $request->input('amount');
$date  = $request->input('date');

$data=array('date'=>$date,'amount'=>$amount,'student_id'=>$id,);
DB::table('fees')->insert($data);
echo "Record inserted successfully.<br/>";
echo '<a href = "/101169/layout">Click Here</a> to go back.';

//retrieving data
// $users = DB::table('fees')->get();
// foreach ($users as $user) {
//     echo $user->firstname;
// 	}
	//$total = DB::table('fees')->sum('amount');

	}
}
