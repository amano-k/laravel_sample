<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class VueController extends Controller
{
    public function sample(Request $request)
    {
        return view('vue.sample');
    }
}
