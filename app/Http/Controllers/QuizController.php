<?php

namespace App\Http\Controllers;

use App\Models\Oex_question_master;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
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
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:150',
            'mobile' => 'required|digits:10',
        ]);
        try {
            $existingUser = User::where('mobile_no', $request->input('mobile'))
                            ->where('name', $request->input('name'))
                            ->first();
            if ($existingUser) {
                \Toastr::error('The exam has already been submitted from this mobile and name number', 'Error');
                return back()->with('error', 'The exam has already been submitted from this mobile number.');
            }
            User::create([
                'name' => $request->input('name'),
                'age' => $request->input('age'),
                'mobile_no' => $request->input('mobile'),
            ]);
            // Get Questions ramdon 10 question
            $questions = Oex_question_master::inRandomOrder()->take(10)->get();
            // End Get Question

            return view('quiz.quiz_question',compact('questions'))->with('success', 'User details saved successfully!');
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
