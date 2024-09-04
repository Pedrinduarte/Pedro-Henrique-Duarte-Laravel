<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sasController extends Controller
{
    public function sas ()
    {
        var_dump($_POST);
        return View('site.login');
    }
}