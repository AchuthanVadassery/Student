<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Helpers\ApiHelper;
// use softDeletes;


class StudentapiController extends Controller
{  
    use ApiHelper;
    public function __construct(){
        $this->middleware('auth:api');
    }
    
    public function registerStudentExample(Request $request){
        //  return $request;
        // $this->validate($request,[
        //     'name'=>'required',
        //     'email'=>'required|email|unique:users',
        //     'password'=>'required|min:8',
        // ]);
         $student= Student::create([
            'student_name' => $request->student_name,
            'student_email' => $request->student_email,
            'mobile_number' => $request->mobile_number,
            'date_of_birth' => $request->date_of_birth,
            'state' => $request->state,
            'district' => $request->district,
            'pin_code' => $request->pin_code,
            'course_name' => $request->course_name,
         ]);
        // return $request;
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->save();

        //  $access_token_example= $student->createToken('Auth Token')->accessToken;
        //  return response()->json(['token' => $access_token_example],200);
         return $this->sendResponse(true,['student_id'=> $student->id ],'registration successful',200);

        // $access_token_example = $user->createToken('PassportExample@Section.io')->access_token;
        // //return the access token we generated in the above step
        // return response()->json(['token' => $user_login_token],200);
    }
    public function update(Request $request,$id){
        $student=Student::find($id)->update([
            'student_name'=>$request->student_name,
            'student_email'=>$request->student_email,
            'mobile_number'=>$request->mobile_number,
            'date_of_birth'=>$request->date_of_birth,
            'state'=>$request->state,
            'district'=>$request->district,
            'pin_code'=>$request->pin_code,
            'course_name'=>$request->course_name,
        ]);
        return $this->sendResponse(true,[],'updation successful',200);

    }
    public function delete(Request $request,$id){
        $student=Student::find($id);
        $student->delete();
        return $this->sendResponse(true,['student_id'=> $student->id ],'Deletion successful',200);

    }
}

