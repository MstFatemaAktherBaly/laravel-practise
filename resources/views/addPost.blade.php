

@extends('layouts.frontendLayouts')

@section( 'title', 'Add Post')


@section('content')

<section>
    <div class="container">
        <div class="card col-lg-5 mx-auto mt-5">
            <div class="card-header">Add Post</div>
            <div class="card-body">

            <form action="{{route('store')}}" method="POST">
           @csrf
            <input value="{{ old('title')}}" name="title" type="text" class="form-control my-2" placeholder="Title">
            @error('title')
            <span class="text-danger"> {{ $message }} </span> 
            @enderror

            <input value="{{old('detail')}}" name="detail" type="text" class="form-control my-2" placeholder="Details">
            @error('detail')
            <span class="text-danger"> {{ $message }} </span> 
            @enderror

            <input value="{{old('author')}}" name="author" type="text" class="form-control my-2" placeholder="Author">
            @error('author')
            <span class="text-danger"> {{ $message }} </span> 
            @enderror


            <button type="submit" class="btn btn-primary">Submit</button>

            @if (session()->has ('success'))
            <div class="alert alert-success"> {{session('success')}} </div>  
                
            @endif

            </form>
            </div>
        </div>
    </div>
</section>

@endsection 


