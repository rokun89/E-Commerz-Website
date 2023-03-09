@extends('backend.master')

@section('contents')

            <style>
                .sections{
                    background-color: whitesmoke;
                    margin: 10%;
                    padding: 5%;
                }
            </style>
<section class="sections">
    <form action="{{route('category.store')}}" method="post">

        @csrf
        <div class="form-group">
            <label for="name">Enter Category Name</label>
            <input required name="category_name" type="text" class="form-control" id="name" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" id=""></textarea>
        </div>


        <div class="form-group">
            <label for="image">Upload Image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

</section>


@endsection