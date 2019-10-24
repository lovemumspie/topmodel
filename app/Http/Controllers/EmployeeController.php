<?php

namespace App\Http\Controllers;

use App\User;
class EmployeeController extends Controller
{
    public function showUsersCards(){
		$objects = User::where('role_id',3)->orderBy('id','DeSC')->paginate(10);
		return view('models',compact('objects'));
		
	}
	
	
}
