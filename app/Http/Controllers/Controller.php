<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**this method return the home view*/
    public function index()
    {
        return view('pages.home');
    }
    /**this method return the login view*/
    public function userLogin()
    {
        return view('pages.login');
    }
    /**this method return the registration view*/
    public function userRegister()
    {
        return view('pages.register');
    }
}
