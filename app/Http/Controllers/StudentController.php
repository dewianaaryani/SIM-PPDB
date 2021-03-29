<?php

namespace App\Http\Controllers;
use App\Models\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::latest()->simplePaginate(5);
        return view('Student.index',compact('students'))
            ->with('i',(request()->input('page',1)-1)*5);
    }
    public function create(){
        return view('Student.create');
    }
    public function store(Request $request){
        $request->validate([
            'nis'=>'required',
            'name'=>'required',
            'gender'=>'required',                        
        ]);
        $dataRequest = $request->all();
        $data =[
            'nis' => $dataRequest['nis'],
            'name' => $dataRequest['name'],
            'gender' => $dataRequest['gender'],
            'birth_place' => $dataRequest['birth_place'],
            'birth_date' => $dataRequest['birth_date'],
            'address' => $dataRequest['address'],
            'school' => $dataRequest['school'],
            'grade' => $dataRequest['grade'],
            'major' => $dataRequest['major'],
        ];
        Student::create($data);
        return redirect()->route('siswa.index')
            ->with('success','Berhasil menambah data');
    }
    public function edit($id){
        $students = Student::find($id); 
        return view('student.update',compact('students'));
    }
    public function update(Request $request,$id){
        $request -> validate([
            'nis'=>'required',
            'name'=>'required',
            'gender'=>'required',
        ]);
        $dataRequest = $request->all();
        $data = [
            'nis' => $dataRequest['nis'],
            'name' => $dataRequest['name'],
            'gender' => $dataRequest['gender'],
            'birth_place' => $dataRequest['birth_place'],
            'birth_date' => $dataRequest['birth_date'],
            'address' => $dataRequest['address'],
            'school' => $dataRequest['school'],
            'grade' => $dataRequest['grade'],
            'major' => $dataRequest['major'],
        ];
        Student::find($id)->update($data);
        return redirect()->route('siswa.index',)
            ->with('success', 'Data berhasil diubah');
    }
    public function print(){
        return view('Student.create');
    }
    public function delete(){
        return view('Student.create');
    }
}
