<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function homePage()
    {
        return view('quiz.home');
    }
}
