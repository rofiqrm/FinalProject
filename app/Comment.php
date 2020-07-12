<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    protected $guarded = [];

    public static function get_all($pertanyaan) {
    	$komen = DB::table('comments')
		            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
		            ->select('comment', 'name', 'comments.id as id')
		            ->where('question_id', $pertanyaan)
		            ->get();
    	return $komen;
    }
}
