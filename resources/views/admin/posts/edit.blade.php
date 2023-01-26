@extends('layouts.dashboard')
@section('content')
<div class="text-center">
    <h1>Modifica il post {{$post->title}}</h1>
</div>

<form action="{{route('admin.posts.update',$post->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label"for="">Titolo</label>
        <input value="{{$post->title}}" type="text" class="form-control" name="title">
        @error('title')
            <div class="alert alert-danger">
                {{ $message }}

            </div>
            
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Body</label>
        <textarea class="form-control" name="body">{{$post->body}}</textarea>
        @error('body')
            <div class="alert alert-danger">
                {{ $message }}

            </div>
            
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifica Post</button>


</form>
    
@endsection