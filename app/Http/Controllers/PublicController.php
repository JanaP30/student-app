<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends BaseController
{
    public function success(){
        return view('success');
    }
}
