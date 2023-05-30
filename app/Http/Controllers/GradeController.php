<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        return view('grades.create');
    }

    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->course_id = $request->input('course_id');
        $grade->student_id = $request->input('student_id');
        $grade->grade = $request->input('grade');
        // Set other grade properties as needed
        $grade->save();

        return redirect()->route('grades.index');
    }

    public function show($id)
    {
        $grade = Grade::findOrFail($id);
        return view('grades.show', compact('grade'));
    }

    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        return view('grades.edit', compact('grade'));
    }

    public function update(Request $request, $id)
    {
        $grade = Grade::findOrFail($id);
        $grade->course_id = $request->input('course_id');
        $grade->student_id = $request->input('student_id');
        $grade->grade = $request->input('grade');
        // Update other grade properties as needed
        $grade->save();

        return redirect()->route('grades.index');
    }

    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();

        return redirect()->route('grades.index');
    }
}
