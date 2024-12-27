<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function homePage()
    {
        return view('quiz.home');
    }
    public function homePage1()
    {
        return view('quiz.home1');
    }
    public function homePage2()
    {
        return view('quiz.home2');
    }
    public function homePage3()
    {
        return view('quiz.home3');
    }
}
