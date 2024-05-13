@extends('layouts.main')
@section('container')
    <h1>Devices</h1>
    <h2>Device Name: {{ $name }}</h2>
    <h3>Current Value: {{ $current_value }} (Rang: {{ $min_value }} - {{ $max_value }})</h3>
@endsection