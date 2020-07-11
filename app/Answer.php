<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Answer extends Model
{
    protected $guarded = [];

    public static function get_all($pertanyaan) {
    	$jawaban = DB::table('answers')
		            ->leftJoin('users', 'answers.user_id', '=', 'users.id')
		            ->select('answer', 'name')
		            ->where('question_id', $pertanyaan)
		            ->get();
    	return $jawaban;
    }
}
