<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\User;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $question = Question::all();
        // $user = User::all();
        return view('question.index', compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('question.form', compact('user'));
    }

    /**
     * Store a newly created resource in storage.s
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Question::create([
            'title' => $request['title'],
            'question' => $request['question'],
            'user_id' => $request['user_id'],
        ]);

        // $request['question'] = str_replace("<p>","",$request['question']);
        // $request['question'] = str_replace("</p>","",$request['question']);

        return redirect('/question');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find_by_id($id);
        //$answer = Answer::find($user_id);
        $answer = Answer::all();
        //dd($answer);
        return view('question.detail', compact('question', 'answer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find_by_id($id);
        return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::where('id', $id)
            ->update([
                'title' => $request["title"],
                'question' => $request["question"],
                'user_id' => $request["user_id"],
            ]);
        return redirect('/question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deleted = Question::destroy($id);
        return redirect('/question');
    }
}
