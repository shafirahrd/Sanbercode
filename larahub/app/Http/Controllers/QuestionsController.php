<?php

namespace App\Http\Controllers;

use DB;
use App\questions;
use App\answers;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = questions::get_all();

        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $insert = questions::insert($data);
        
        if($insert) {
            return redirect('/pertanyaan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jawaban = answers::get_all($id);
        $pertanyaan = questions::get_by_id($id);
        // dd($jawaban,$pertanyaan);

        return view('pertanyaan_jawaban', compact('jawaban','pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = questions::get_by_id($id);

        return view('pertanyaan_edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // unset($data['_token'],$data['method']);
        $insert = questions::diupdate($id, $data);
        
        if($insert) {
            return redirect('/pertanyaan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = questions::hapus($id);

        return redirect()->back();
    }
}
