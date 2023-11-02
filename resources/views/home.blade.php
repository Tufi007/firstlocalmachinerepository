@extends('layout')
@section('title')
Home
@endsection
@section('body')
    <h1 style="text-align: center">hi {{auth()->user()->username}}</h1>
@endsection
