<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;
use App\Models\State;
use App\Models\District;
// use App\Http\Controllers\user;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $students=Student::with('StateFind','DistrictFind')->get();
        $states=State::pluck('name','id');
        // return $students;
          //$states = DB::table('states')->pluck("name","id");
        // $districts = DB::table("districts")->where("state_id",$id)->pluck("name","id");
        // return json_encode($districts);
        // $states =State::with('user')->get();

        return view('student_main',compact('students','states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $request->validate([
            'student_name' => 'required|unique:students,student_name',
            'mobile_number'=>'required|digits:10',
            'date_of_birth' => 'required|date|before_or_equal:2004-06-08',
            'student_email'=>'required|email',
            // 'date_of_birth' => 'date_format:d/m/Y'
        ],
        [
            'mobile_number.required'=>'please enter a valid number',
            'date_of_birth.required'=>'Age should be greater than 18 years',
            'student_email.required'=>'please enter email'
        ]
         );
        //  $state = DB::table('states')->where('id', $request->state)->pluck('name');
        // $state=State::create([
        //     'name'=>$request->name,

        // ]);
        // $district=District::create([
        //     'name'=>$request->name,
        //     'states_id'=>$request->states_id
        // ]);

        $student = Student::create([
            'student_name' => $request->student_name,
            'student_email' => $request->student_email,
            'mobile_number' => $request->mobile_number,
            'date_of_birth' => $request->date_of_birth,
            'state' => $request->state,
            'district' => $request->district,
            'pin_code' => $request->pin_code,
            'course_name' => $request->course_name,
            
        ]);
        return redirect()->route('student.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
       $students=Student::find($id);
       return view('student_edit',compact('students'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $update=Student::find($id)->update([
    //         'student_name'=>$request->student_name,
    //         'student_email'=>$request->student_email,
    //         'mobile_number'=>$request->mobile_number,
    //         'date_of_birth'=>$request->date_of_birth,
    //         'state'=>$request->state,
    //         'district'=>$request->district,
    //         'pin_code'=>$request->pin_code,
    //         'course_name'=>$request->course_name,
    //     ]);
    //     return redirect()->route('student.create');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $delete=Student::find($id)->forceDelete();
      return redirect()->route('student.create');
    }
    public function update(Request $request, $id)
    {
        $update=Student::find($id)->update([
            'student_name'=>$request->student_name,
            'student_email'=>$request->student_email,
            'mobile_number'=>$request->mobile_number,
            'date_of_birth'=>$request->date_of_birth,
            'state'=>$request->state,
            'district'=>$request->district,
            'pin_code'=>$request->pin_code,
            'course_name'=>$request->course_name,
        ]);
        return redirect()->route('student.create');
    }
     public function getDistrict($id) 
     {
         //$districts = DB::table("districts")->where("states_id", $id)->pluck("name","id");
        $districts=District::where("states_id", $id)->pluck("name","id");

        return json_encode($districts);
     } 


}
