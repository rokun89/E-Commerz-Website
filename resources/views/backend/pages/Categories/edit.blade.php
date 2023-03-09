@extends('backend.master')

@section('contents')

            <style>
                .sections{
                    background-color: #f8f9fa;
                    margin: 10%;
                    padding: 5%;
                }
            </style>

<section class="sections">
    <form action="{{route('category.update',$edit->id)}}" method="post">

        @csrf
        <div class="form-group">
            <label for="name">Enter Category Name</label>
            <input required name="category_name" type="text" class="form-control" id="name" placeholder="Enter Category Name" value="{{$edit->name}}">
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" id="">{{$edit->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="name">Images</label>
            <input name="image" type="file" class="form-control" id="name" placeholder="Enter Category Name">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>

</section>



@endsection