<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $student = Student::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        if ($student) {
            return redirect()->route('student.index');
        } else {
            abort(500);
        }
    }

    public function delete($id)
    {
        $student = Student::destroy($id);
        if ($student) {
            return redirect()->route('student.index');
        } else {
            abort(500);
        }
    }
}
