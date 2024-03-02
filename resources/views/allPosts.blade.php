@extends('layouts.frontendLayouts')

@section( 'title' , 'All Post')


@section('content')
<section>
    
    <div class="container">
        <div class="table-responsive mt-5  text-center">
           <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Details</th>
                <th>Author</th>
                <th></th>
            </tr>
            @foreach ($posts as $key=>$post)
            <tr>
                <td> {{$posts->firstItem( ) + $key}} </td>
                <td> {{$post->title}} </td>
                <td> {{ str($post->detail)->substr(0,10) . '...'}} </td>
                <td> {{$post->author}} </td>
                <td>
                <div class="btn-group">
                        <a href=" {{route('edit', $post->id)}} " class="btn btn-sm btn-warning">Edit</a>
                        <a href=" {{route('delete' , $post->id)}} " class="btn btn-sm btn-danger">Delete</a>
                </div></td>
            </tr>
            @endforeach
           </table>

           {{ $posts->links() }}
        </div>
    </div>
</section>

@endsection

