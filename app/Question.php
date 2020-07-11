<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    protected $guarded = [];

    public function answer() {
        return $this->belongsTo('App\Answer'); // question->answer (one to many)
    }

    public static function find_by_id($id){
        $question = DB::table('questions')->where('id', $id)->first();
        return $question;
    }

    public static function get_all() {
        $items = DB::table('questions')
		            ->leftJoin('users', 'questions.user_id', '=', 'users.id')
		            ->select('questions.id as id', 'title', 'name', 'users.id as user_id')
		            ->orderBy('id', 'desc')
		            ->get();
		return $items;
    }
}
