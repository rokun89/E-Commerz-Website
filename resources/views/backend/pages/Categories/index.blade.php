@extends('backend.master')

@section('contents')


<a href="{{route('create.category')}}"><span class="btn btn-success">+Createn New Category</span></a>
    <h1>Category Table:</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Images</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($CategoryList as $key=>$list)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$list->image}}</td>
      <td>{{$list->name}}</td>
      <td>{{$list->description}}</td>
      <td>{{$list->status}}</td>
      <td>
        <a href="{{route('category.view',$list->id)}}" class="btn btn-primary">View</a>
        <a href="" class="btn btn-success">edit</a>
        <a href="" class="btn btn-danger">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection