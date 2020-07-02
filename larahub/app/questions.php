<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class questions extends Model
{
    public static function get_all() {
    	$data = DB::table('questions')->get();

    	return $data;
    }

    public static function insert($data) {
    	$new_data = DB::table('questions')->insert($data);

    	return $new_data;
    }
}
