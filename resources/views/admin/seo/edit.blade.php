@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')

<seo-edit :_project="{{ json_encode($project) }}" />

@stop
