@extends('layouts.master')

@section('content')

<h3>Hello, welcome to permissionsApp {{ Auth::user()['email'] }}</h3>

@endsection