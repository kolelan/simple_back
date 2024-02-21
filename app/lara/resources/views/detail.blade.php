@extends('layouts.app')
@section('title',$bb->title)
@section('content')
    <h2>{{$bb->title}}</h2>
    <p>{{$bb->content}}</p>
    <p>{{$bb->price}}</p>
    <p>{{$bb->user->name}}</p>
    <p><a href="{{route('index')}}">Все объявления</a></p>
@endsection('content')
