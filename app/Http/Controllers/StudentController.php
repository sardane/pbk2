<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Papar semua data
    public function index()
    {
        $students = Student::paginate(25);
        return view('index', compact('students'));
    }

    // Papar borang tambah
    public function create()
    {
        return view('insert');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cgpa' => 'required|numeric'
        ]);

        Student::create([
            'name' => $request->name,
            'cgpa' => $request->cgpa,
        ]);

        return redirect()->route('students.index')
            ->with('success', 'Data berjaya ditambah.');
    }

    // Papar borang kemaskini
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('update', compact('student'));
    }

    // Kemaskini data
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'cgpa' => $request->cgpa,
        ]);

        return redirect()->route('students.index')
            ->with('success', 'Data berjaya dikemaskini.');
    }

    // Padam data
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();

        return redirect()->route('students.index')
            ->with('success', 'Data berjaya dipadam.');
    }
}