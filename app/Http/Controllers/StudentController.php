<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    public function index()  {

        $students = Student::all();
        return view('student.index',compact('students'));
    }

    public function create(){
        return view('student.create');
    }

    // public function store(Request $request){
    //     return $request; //go data controller (check)
    // }

    // <----- ᐯᗩᒪIᗪᗩTIOᑎ ------>

    public function store(Request $request)
    {
        $rules = [
            'fname' => 'required|string',
            'address' => 'required|string',
            'dob' => 'required|date',
        ];

        $validator = Validator::make($request->all(), $rules,$messages = [
            'fname.required'=>'need a First name',
            'address.required'=>'need a Address',
            'dob.required'=>'need a Date of Birth Day',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // <-----ᗪᗩTᗩ ᖴETᑕᕼ----->

        $student =new Student;
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->cnumber = $request->cnumber;
        $student->address = $request->address;
        $student->grade = $request->grade;
        $student->dob = $request->dob;
        $student->save();

        // $student=Student::create ($request->all());// full
        return "success"; //check data sent to DB

    }

       //<----- ᑌᑭᗪᗩTE---->

       public function edit(Student $student) {
        return view('student.edit', compact('student'));
    }


        public function update(Request $request , $student_id){

            $rules = [
                'fname' => 'required|string',
                'address' => 'required|string',
                'dob' => 'required|date',
            ];

            $validator = Validator::make($request->all(), $rules,$messages = [
                'fname.required'=>'need a First name',
                'address.required'=>'need a Address',
                'dob.required'=>'need a Date of Birth Day',
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $student= Student::where('id',$student_id)->first();

            $student ->fname =$request->fname;
            $student ->lname =$request->lname;
            $student ->cnumber = $request->cnumber;
            $student ->address = $request->address;
            $student ->grade = $request->grade;
            $student ->dob = $request->dob;

            $student->save();

            return redirect()->route('student.index');
        }
         // <----- ᗪEᒪETE ------>

         public function delete($student_id)
         {
             $student = Student::find($student_id);

             if ($student) {
                 $student->delete();
                 return redirect()->route('student.index')->with('success', 'Student deleted successfully');
             }

             return redirect()->route('student.index')->with('error', 'Student not found');
         }

}
