@extends('backend.master')

@section('contents')

<style>
          .product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-4">
              <div class="thumbnail" style="background-color: aliceblue";>
              <div class="caption">
                  
                  <h4 style="color: black;"><u>Category Details:</u></h4>

                  <p> <label for="Name" style="color:blue">Name:</label>
                  {{$view->name}}</p>

                  <p> <label for="Name" style="color:blue">Description:</label>
                  {{$view->description}}</p>

                  <p> <label for="Name" style="color:blue">Status:</label>
                  {{$view->status}}</p>


                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                <a href="{{route('category.url')}}">
                        <span class="btn btn-primary"> Go to Back</span>
                    </a>
                    
                </div>
                <div class="space-ten"></div>
                  
                </div>
                
              </div>
            </div>
            


@endsection