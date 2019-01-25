<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.test');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function resources()
    {
        return view('pages.resources');
    }

    public function secretsauce()
    {
        return view('pages.secretsauce');
    }

    public function lifestyle()
    {
        return view('pages.lifestyle');
    }

}
