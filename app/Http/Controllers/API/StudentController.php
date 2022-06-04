<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return ResponseFormatter::success($student, 'Data Siswa');
    }

    public function store(Request $request)
    {
        try {
            $student = Student::create([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
            ]);

            return ResponseFormatter::success(Student::all(), 'Data berhasil disimpan', 201);
        } catch (\Exception $e) {
            return ResponseFormatter::error(null, $e->getMessage(), 500);
        }
    }

    public function delete($id)
    {
        $student = Student::destroy($id);
        if ($student) {
            return ResponseFormatter::success(Student::all(), 'Data berhasil dihapus', 201);
        } else {
            return ResponseFormatter::error(null, 'Data gagal dihapus', 500);
        }
    }
}
