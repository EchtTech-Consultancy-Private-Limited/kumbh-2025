<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class QuizController extends Controller
{    
    /**
     * homePage
     *
     * @return void
     */
    public function homePage()
    {
        return view('quiz.home');
    }
        
    /**
     *  @quizStart HOme Page
     *
     * @return void
     */
    public function quizStart()
    {
        return view('quiz.quiz_start');
    }

    /**
     *  @storeUser store user
     *
     * @param  mixed $request
     * @return void
     */
    public function storeUser(Request $request)
    {
        try {
            User::create([
                'name' => $request->input('name'),
                'age' => $request->input('age'),
                'mobile_no' => $request->input('mobile'),
            ]);
            return view('quiz.quiz_question')->with('success', 'User details saved successfully!');
        } catch (\Exception $e) {
            \Log::error('Error saving user: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while saving the user details. Please try again.');
        }
    }

        
    /**
     *  @quizQuestion Question
     *
     * @return void
     */
    public function quizQuestion()
    {
        return view('quiz.quiz_question');
    }
        
    /**
     *  @quizCerticate download
     *
     * @return void
     */
    public function quizCerticate()
    {
        return view('quiz.quiz_certificate');
    }
}
