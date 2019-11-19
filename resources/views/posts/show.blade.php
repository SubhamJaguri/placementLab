@extends('layouts.app')

@section('content')
    


<div class="row">
        <div class="col-md-8">
                <a href="/posts" class="btn btn-default">Go back</a>
                <h1>{{$post->title}}</h1>
                
                <br>
                <img style="" src="/storage/cover_images/{{$post->cover_image}}" alt=""> 
                <br><br>
            
                <div>
                    {!!$post->body!!}
                </div>
                <hr>
            <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>
            
            @if(!Auth::guest())
            
                @if(auth()->user()->id == $post->user_id) 
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            
                    {!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                    {!!Form::close()!!}
                @endif
             
            @endif
        </div>
        <div class="col-md-4">
            @include('inc.sidebar')
        </div>
    </div>

@endsection