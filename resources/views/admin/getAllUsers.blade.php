@extends('front.inc.master1')
@section('Content')
<div class="container-login"  style="margin:100px">
</tbody>
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<h4>All Users

  <a href="{{route('admin.addUser')}}" >  <button style="margin-left:1200px" class="btn btn-primary">Add </button></a>
</h4>

    <table class="table table-hover" >
        <thead>
        <tr style="color:#ae1c17 ">
          <th scope="col">#</th>
          <th scope="col">Name</th>



         <th scope="col" >email</th>
         <th scope="col" >password</th>
         <th scope="col">Role</th>
          <th scope="col">operation</th>

        </tr>
        </thead>
        <tbody>


          @foreach($users as $c)
          <tr>
              <th scope="row">{{$c -> id}}</th>
              <td>{{$c -> name}}</td>
              <td>{{$c -> email}}</td>
              <td>{{$c -> password}}</td>
              <td>
                @foreach ($c->roles as $role)
                  {{$role->display_name}}
                @endforeach
              </td>
              <td>
              <button class="btn btn-success">Update</button>

              <a href="{{route('admin.deleteUser',$c->id)}}"  >  <button class="btn btn-danger" >Delete</button></a>
              </td>










          </tr>
        @endforeach

        </tbody>


        </table>
        </div>


@endsection
