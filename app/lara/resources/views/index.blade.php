@extends('layouts.app')
@section('title','Главная')
@section('content')
{{$url}}
@if(count($bbs)>0)
<table class="table table-striped table-borderless">
    <thead>
    <tr>
        <th>Entrad</th>
        <th>Ntuc, auc.</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bbs as $bb)
    <tr>
        <td><h4>{{$bb->title}}</h4></td>
        <td>{{$bb->price}}</td>
        <td>{{$bb->user->name}}</td>
        <td>
            <a href="/{{route('detail',['bb'=>$bb->id])}}">tUC...</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endif
@endsection('content')
