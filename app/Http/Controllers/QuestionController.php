<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\User;
use App\Question;
use Illuminate\Support\Facades\Auth;

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
        $question = Question::get_all();
        $userLogin = Auth::user();
        return view('question.index', compact('question', 'userLogin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $userLogin = Auth::user();
        return view('question.form', compact('user', 'userLogin'));
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
            'tags' => $request['tag'],
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
        $answer = Answer::get_all($id);
        $tag = explode(",", $question->tags);
        return view('question.detail', compact('question', 'answer', 'tag'));
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
        $userLogin = Auth::user();

        return view('question.edit', compact('question', 'userLogin'));
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
                'user_id' => $request['user_id'],
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
