@extends('main')
@section('admin')
<div class="py-12">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">All Students</div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">SL NO</th>
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">State</th>
      <th scope="col">District</th>
      <th scope="col">PinCode</th>
      <th scope="col">Course</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

     
    <tr>
      @php($i=1)
      @foreach($students as $student)
      <th scope="row">{{$i++}}</th>
      <td>{{$student->student_name}}</td>
      <td>{{$student->student_email}}</td>
      <td>{{$student->mobile_number}}</td> 
      <td>{{$student->date_of_birth}}</td>
      <td>{{$student->state}}</td> 
      <td>{{$student->district}}</td>
      <td>{{$student->pin_code}}</td>
      <td>{{$student->course_name}}</td> 
      <td>
        <div>
        <a href="{{'/studentedit/'.$student->id}}" class="btn btn-info">Edit</a>
        <a href="{{'/studentdelete/'.$student->id}}" class="btn btn-danger">Delete</a>
</div>
      </td> 
    </tr>
    @endforeach
</tbody>
</table>

<!-- </div> -->
</div>
<div class="row">
              <div class="col-md-8">
                <div class="card">
                   <div class="card-header">Add Student Details</div>

<form action="{{route ('student.store')}}" method="POST">
                     @csrf
  <div class="mb-3">
    <label for="student_name" > Student Name</label>
    <input type="text" name="student_name"   class="form-control" id="exampleInputEmail">
    <div class="alert-danger">{{$errors->first('student_name')}}</div>
    <label for="student_email" > Email Id</label>
    <input type="text" name="student_email" class="form-control" id="exampleInputEmail">
    <div class="alert-danger">{{$errors->first('student_email')}}</div>


    <label for="mobile_number" > Mobile Number</label>
    <input type="text" name="mobile_number" class="form-control" id="exampleInputEmail">
    <div class="alert-danger">{{$errors->first('mobile_number')}}</div>

    <label for="date_of_birth" > Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-control" id="exampleInputEmail">
    <div class="alert-danger">{{$errors->first('date_of_birth')}}</div>

    <label for="state" > State</label>
    <input type="text" name="state" class="form-control" id="exampleInputEmail">
    <label for="district" > District</label>
    <input type="text" name="district" class="form-control" id="exampleInputEmail">
    <label for="pin_code" > Pincode</label>
    <input type="text" name="pin_code" class="form-control" id="exampleInputEmail">
    <label for="course_name" > Course Name</label>
    <input type="text" name="course_name" class="form-control" id="exampleInputEmail">


    <div id="emailHelp" class="form-text">Student addition</div>
    <!-- @error('category_name')
  <span>{{$message}}</span>
  @enderror -->
  </div>


  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
</div>
</div>
</div>

</div>




@endsection('admin')

..................................<!-- student main 2 -->...................................
@extends('main')
@section('admin')
<script>
var stateObject = {
"Kerala": { "Kannur": ["new Delhi", "North Delhi"],
"Ernakulam": ["Thiruvananthapuram", "Palakkad"],
"Kozhikode": ["North Goa", "South Goa"],
},
"TamilNadu": {
"Bodynaykannoor": ["Dunstan", "Mitchell"],
"Coimbathore": ["Altona", "Euroa"]
}, "WestBengal": {
"Nandigram": ["Acadia", "Bighorn"],
"BhavaniPur": ["Washington", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
// remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}

}
</script>

<div class="py-12">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">All Students</div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">SL NO</th>
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">State</th>
      <th scope="col">District</th>
      <th scope="col">PinCode</th>
      <th scope="col">Course</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

     
    <tr>
      @php($i=1)
      @foreach($students as $student)
      <th scope="row">{{$i++}}</th>
      <td>{{$student->student_name}}</td>
      <td>{{$student->student_email}}</td>
      <td>{{$student->mobile_number}}</td> 
      <td>{{$student->date_of_birth}}</td>
      <td>{{$student->state}}</td> 
      <td>{{$student->district}}</td>
      <td>{{$student->pin_code}}</td>
      <td>{{$student->course_name}}</td> 
      <td>
        <div>
        <a href="{{'/studentedit/'.$student->id}}" class="btn btn-info">Edit</a>
        <a href="{{'/studentdelete/'.$student->id}}" class="btn btn-danger">Delete</a>
</div>
      </td> 
    </tr>
    @endforeach
</tbody>
</table>

<!-- </div> -->
</div>
<div class="row">
              <div class="col-md-8">
                <div class="card">
                   <div class="card-header">Add Student Details</div>

<form action="{{route ('student.store')}}" method="POST">
                     @csrf
  <div class="mb-3">
    <label for="student_name" > Student Name</label>
    <input type="text" name="student_name"   class="form-control" id="exampleInputEmail">
    <div class="alert-danger">{{$errors->first('student_name')}}</div>
    <label for="student_email" > Email Id</label>
    <input type="text" name="student_email" class="form-control" id="exampleInputEmail">
    <div class="alert-danger">{{$errors->first('student_email')}}</div>


    <label for="mobile_number" > Mobile Number</label>
    <input type="text" name="mobile_number" class="form-control" id="exampleInputEmail">
    <div class="alert-danger">{{$errors->first('mobile_number')}}</div>

    <label for="date_of_birth" > Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-control" id="exampleInputEmail">
    <div class="alert-danger">{{$errors->first('date_of_birth')}}</div>
    <div>
    <label for="state" > State selection</label>

    Select state: <select name="state" id="countySel" size="1">
<option value="" selected="selected">Select state</option>
</select>
<br>
<br>
</div>
<div>
<label for="district" > District Selection</label>

Select District: <select name="district" id="stateSel" size="1">
<option value="" selected="selected">Please select state first</option>
</select>
<br>
<br>
</div>

    <label for="pin_code" > Pincode</label>
    <input type="text" name="pin_code" class="form-control" id="exampleInputEmail">
    <label for="course_name" > Course Name</label>
    <input type="text" name="course_name" class="form-control" id="exampleInputEmail">


    <div id="emailHelp" class="form-text">Student addition</div>
    <!-- @error('category_name')
  <span>{{$message}}</span>
  @enderror -->
  </div>


  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
</div>
</div>
</div>

</div>




@endsection('admin')
