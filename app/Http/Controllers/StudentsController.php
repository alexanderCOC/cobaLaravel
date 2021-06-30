<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        //untuk menampilkan softdeleted
        // $students = Student::withTrashed()->get();

        //untuk menampilkan all
        $students = Student::all();

        // return view('students.index', ['students'=>$students]);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        //insert pertama seperti ci
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        //insert kedua
        // Student::create([
        //     'nama'=>$request->nama,
        //     'nrp'=>$request->nrp,
        //     'email'=>$request->email,
        //     'jurusan'=>$request->jurusan,
        //     ]);

        //insert ke 3

        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:10',
            'email' => 'required'
            ]);

        Student::create( $request->all() );

        return redirect('/students')->with('status', 'Data mahasiswa berhasil ditambahkan');
    }

    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:10',
            'email' => 'required'
            ]);

        Student::where('id', $student->id)
        ->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            ]);
        
        return redirect('/students')->with('status', 'Data mahasiswa berhasil diubah');
    }

    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data mahasiswa berhasil dihapus');
    }
}
