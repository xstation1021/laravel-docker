<?php

namespace App\Http\Controllers;

use App\User;


class UserController extends Controller
{
    public function showUsers() {
    	$users = User::all();

    	return view('user.list', compact('users'));
    }
}
