<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    protected $user;


    public function __construct()
    {

        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
        
            $this->user = Auth::user();
           
            view()->share('user', $this->user);
           
            return $next($request);
        });


    }

}
