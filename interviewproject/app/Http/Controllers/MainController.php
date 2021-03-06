<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
	//Home page controller
    public function home(){
    	return view('home');
    }
    //Login page controller
    public function login(){

    	return view('login');
    }
    //Information page controller
    public function information(){
    	$employees = Employee::get();

    	return view('information', ['employees' => $employees]);
    }
    //Add employee information page controller
    public function addinfo(){

    	return view('addinfo');
    }

    //Function for the login function
    public function user(Request $req){
    	$input = $req->all();

    	$validator = Validator::make($input, [
            'email' => 'required',
            'password' => 'required'
        ]);

    	$email = $req->input('email');
    	$password = $req->input('password');

    	$checkEmail = DB::table('users')
    	->where('email', $email)
    	->count();

    	if ($checkEmail == 1) {
    		$checkPass = DB::table('users')
    		->select('password')
    		->where('email', [$email])
    		->value('password');

    		if ($checkPass == $password) {
    			session()->put('user', [$email]);
    		}
    		else{
    			return redirect('/login')->with('message', 'wrongPass');
    		}
    	}
    	else{
    		return redirect('/login')->with('message', 'wrongEmail');
    	}

		return redirect('/')->with('message', 'loggedIn');
    }

    //Functuon for the logout button which serves for stopping the session
    public function logout(){
    	
    	session()->pull('user');

    	return redirect('/')->with('message', 'loggedOut');
    }

    //Function for inserting employee information into the database
    public function addEmployee(Request $req1){
    	$input = $req1->all();

    	//Server-side validation if the fields are empty
    	$validator = Validator::make($input, [
    		'firstName' => 'required',
    		'lastName' => 'required',
    		'phoneNum' => 'required',
    		'department' => 'required',
    		'position' => 'required',
    		'salary' => 'required'
    	]);

    	if ($validator->fails()) {
    		return redirect()->back()->with('message', 'insertEmpty');
    	}

    	Employee::insert(['firstName'=>$input['firstName'], 
    					'lastName'=>$input['lastName'],
    					'phoneNum'=>$input['phoneNum'],
    					'department'=>$input['department'],
    					'position'=>$input['position'],
    					'salary'=>$input['salary']]);

    	return redirect()->back()->with('message', 'insertSucc');
    }

    //Function for redacting employee information in the database
    public function redactEmp(Request $req2){
    	$input = $req2->all();

    	$validator = Validator::make($input, [
    		'empId' => 'required',
    		'firstName' => 'required',
    		'lastName' => 'required',
    		'phoneNum' => 'required',
    		'department' => 'required',
    		'position' => 'required',
    		'salary' => 'required'
    	]);

    	if ($validator->fails()) {
    		return redirect()->back()->with('message', 'redactEmpty');
    	}

    	Employee::where('id', '=', $input['empId'])
    	->update(['firstName' => $input['firstName'],
    				'lastName' => $input['lastName'],
    				 'phoneNum' => $input['phoneNum'],
    				  'department' => $input['department'],
    					'position' => $input['position'],
    					'salary' => $input['salary']]);

    	return redirect()->back()->with('message', 'redactSucc');
    }

    //Function for deleting employee information by id
    public function deleteEmp(Request $req3){
    	$input = $req3->all();

    	$validator = Validator::make($input, [
            'empId' => 'required'
        ]);
		if ($validator->fails()) {
    		return redirect()->back()->with('message', 'deleteEmpty');
		}

    	Employee::where('id', '=', $input['empId'])
    	->delete();

    	return redirect()->back()->with('message', 'deleteSucc');
    }
}
