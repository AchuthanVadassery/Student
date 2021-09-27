@extends('main')
@section('admin')

<form action="{{route('student.update',$students->id)}}" method="POST">
                     @csrf
  <div class="mb-3">
    <label for="student_name" > Student Name</label>
    <input type="text" name="student_name" class="form-control" id="exampleInputEmail" value="{{$students->student_name}}">
    <label for="student_email" > Email Id</label>
    <input type="text" name="student_email" class="form-control" id="exampleInputEmail"value="{{$students->student_email}}">
    <label for="mobile_number" > Mobile Number</label>
    <input type="text" name="mobile_number" class="form-control" id="exampleInputEmail"value="{{$students->mobile_number}}">
    <label for="date_of_birth" > Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-control" id="exampleInputEmail"value="{{$students->date_of_birth}}">
    <label for="state" > State</label>
    <input type="text" name="state" class="form-control" id="exampleInputEmail"value="{{$students->state}}">
    <label for="district" > District</label>
    <input type="text" name="district" class="form-control" id="exampleInputEmail"value="{{$students->district}}">
    <label for="pin_code" > Pincode</label>
    <input type="text" name="pin_code" class="form-control" id="exampleInputEmail"value="{{$students->pin_code}}">
    <label for="course_name" > Course Name</label>
    <input type="text" name="course_name" class="form-control" id="exampleInputEmail"value="{{$students->course_name}}">


    <div id="emailHelp" class="form-text">Student updation</div>
    <!-- @error('category_name')
  <span>{{$message}}</span>
  @enderror -->
  </div>


  <button type="submit" class="btn btn-primary">Add</button>
</form>



@endsection('admin')