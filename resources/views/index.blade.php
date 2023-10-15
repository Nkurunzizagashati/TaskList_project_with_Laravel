@extends('layouts.app')


@section('title', "A list of Tasks")

@section('content')
@if(count($tasks))
@foreach($tasks as $task)
<div>
    <a href="{{route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a>
</div>
@endforeach
@else
<div>There are no tasks!</div>
@endif

@endsection