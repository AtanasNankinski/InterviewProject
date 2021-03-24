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

    //Function getting the login variables and using them for login validation by calling
    //the DBCheck function
    public function user(Request $req){
    	$email = $req->input('email');
    	$password = $req->input('password');

    	$this->DBCheck($email, $password);

    	return redirect('/');
    }

    //Function validating the email checking if there is one email in the database
    //because i am not expecting repeating emails in the DB
    public function DBCheck($email, $password){
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
    			echo 'Wrong email or password';
    		}
    	}
    	else{
    		echo 'Wrong email or password';
    	}
    }

    //Functuon for the logout button which serves for stopping the session
    public function logout(){
    	
    	session()->pull('user');

    	return redirect('/');
    }

    //Function for inserting employee information into the database
    public function addEmployee(Request $req1){
    	$input = $req1->all();
    	Employee::insert(['firstName'=>$input['firstName'], 
    					'lastName'=>$input['lastName'],
    					'phoneNum'=>$input['phoneNum'],
    					'department'=>$input['department'],
    					'position'=>$input['position'],
    					'salary'=>$input['salary']]);

    	print_r($input);

    	return redirect('information/addinfo');

    }
}
