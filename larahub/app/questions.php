<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class questions extends Model
{

    public static function get_all() {
    	$data = DB::table('questions')->get();

    	return $data;
    }

    public static function get_by_id($id) {
        $data = DB::table('questions')->where('id',$id)->first();

        return $data;
    }

    public static function insert($data) {
    	$data['created_at'] = Carbon::now();
    	$data['updated_at'] = Carbon::now();

    	$new_data = DB::table('questions')->insert($data);

    	return $new_data;
    }

    public static function diupdate($id, $data) {
    	$data = DB::table('questions')
    				->where('id', $id)
    				->update([
    					'isi' => $data['isi'],
    					'judul' => $data['judul'],	
    					'updated_at' => Carbon::now()
    				]);
    	return $data;
    }

    public static function hapus($id) {
    	DB::table('answers')->where('question_id',$id)->delete();
    	$data = DB::table('questions')->where('id',$id)->delete();
    	return $data;
    }
}
