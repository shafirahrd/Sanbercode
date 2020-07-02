<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class answers extends Model
{
    public static function get_all($id) {
    	$data = DB::table('answers')->where('question_id',$id)->get();
    	
    	return $data;
    }

    public static function insert($data, $id) {
    	// $new_data = DB::select(DB::raw("INSERT INTO answers (isi, question_id) values "$data['isi'], $id));
    	$data["question_id"] = $id;

    	$new_data = DB::table('answers')->insert($data);

    	return $new_data;
    }
}
