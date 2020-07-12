<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Overtrue\LaravelLike\Traits\Likeable;


class Answer extends Model
{
    use Likeable;
    protected $guarded = [];

    public static function get_all($pertanyaan) {
    	$jawaban = DB::table('answers')
		            ->leftJoin('users', 'answers.user_id', '=', 'users.id')
		            ->select('answer', 'name', 'answers.id as id')
		            ->where('question_id', $pertanyaan)
		            ->get();
    	return $jawaban;
    }
}
