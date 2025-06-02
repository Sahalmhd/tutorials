@extends('layouts.master')

@section('content')
<h2>welcome Laravel</h2>


@foreach ($colors as $color)
    <h2 @if ($loop->first) class="first" @endif>{{ $loop->index }} {{ strtoupper($color) }} </h2>
@endforeach

@endsection