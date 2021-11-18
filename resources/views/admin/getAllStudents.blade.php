@extends('front.inc.master1')
@section('Content')
<div class="container-login"  style="margin:150px">
    <h4>All Students</h4>
    <table class="table table-hover" style="margin-bottom:230px;">
        <thead>
        <tr style="color:#ae1c17 ">
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>

          <th scope="col">Spec</th>
          <th scope="col">course_id</th>
          <th scope="col">operation</th>

        </tr>
        </thead>
        <tbody>


          @foreach($students as $student)
          <tr>
              <th scope="row">{{$student -> id}}</th>
              <td>{{$student -> name}}</td>
              <td>{{$student -> email}}</td>
              <td>{{$student -> spec}}</td>









          </tr>
        @endforeach

        </tbody>


        </table>
        </div>

@endsection
