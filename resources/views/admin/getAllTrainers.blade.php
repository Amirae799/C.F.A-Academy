@extends('front.inc.master1')
@section('Content')
<div class="container-login"  style="margin:150px">
    <h4>All Trainers
      <a href="{{route('admin.addTrainer')}}"  >
    <button style="margin-left:1200px" class="btn btn-primary">Add </button></a>

    </h4>
    <table class="table table-hover" style="margin-bottom:230px;">
        <thead>
        <tr style="color:#ae1c17 ">
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">phone</th>
          <th scope="col">deprt</th>
          <th scope="col">photo</th>
          <th scope="col">role</th>
          <th scope="col">operation</th>
        </tr>
        </thead>
        <tbody>
          @foreach($trainers as $trainer)
          <tr>
              <th scope="row">{{$trainer -> id}}</th>
              <td>{{$trainer -> name}}</td>
              <td>{{$trainer -> phone}}</td>
                <td>{{$trainer -> deprt}}</td>
                <td>{{$trainer -> photo}}</td>
                <td>{{$trainer -> role}}</td>
              <td>
               
                <button class="btn btn-success">Edit</button></a>
                <a href="{{route('admin.delete',$trainer->id)}}">
                <button class="btn btn-danger">Delete</button></a>
              </td>










          </tr>
        @endforeach

        </tbody>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

        </table>
        </div>


@endsection
