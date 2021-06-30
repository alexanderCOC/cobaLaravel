<?php

namespace App\Http\Controllers;


//bikin namespace
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class MahasiswaController extends Controller
{

    public function index()
    {
        //Menampilkan tanpa modal
        // $mahasiswa = DB::table('students')->get();

        //Menampilkan dengan modal dengan Eloquent ORM
        $mahasiswa = Student::all();
        return view('mahasiswa.index',["mahasiswa" => $mahasiswa]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
