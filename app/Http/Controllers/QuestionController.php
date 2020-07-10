<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('question.index', compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.form');
    }

    /**
     * Store a newly created resource in storage.s
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_question = Question::create([
            'title' => $request['title'],
            'question' => $request['question']

            ]);
            
            $request['question'] = str_replace("<p>","",$request['question']);
            $request['question'] = str_replace("</p>","",$request['question']);

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
        return view('question.detail', compact('question'));
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
