<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class answers extends Model
{

    public static function get_all($id) {
    	$data = DB::table('answers')->where('question_id',$id)->get();
    	
    	return $data;
    }

    public static function insert($data, $id) {
    	$data["question_id"] = $id;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
    	$new_data = DB::table('answers')->insert($data);

    	return $new_data;
    }
}
