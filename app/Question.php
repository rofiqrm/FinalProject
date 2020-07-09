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
}
