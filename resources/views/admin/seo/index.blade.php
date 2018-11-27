@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')

<seo :projects="{{ json_encode($projects) }}" :total="{{ $total }}"/>

@stop
