@extends('layouts.master')

@section('content')

<div class="container"></div>
    <ul>
        <li>Name: {{$user->name}}</li>
        

    </ul>
<ul>

    <hr>

    <h5>orders</h5>
    <table class="table">
        <thead>
            <tr>
            <td>id</td>
            <td>price</td>
            <td>Status</td>
            <td>PlacedAt</td></tr>
        </thead>

        <tbody>
            <tr>
                @foreach ($user->orders as $order )
                <td>{{$order->id}}</td>

                <td>{{$order->user_id}}</td>
                <td>{{$order->status_text}}</td>
                <td>{{$order->created_at}}</td>



                @endforeach
            </tr>
        </tbody>
    </table>
        <h5>Adresss</h5>

        <ul>
            <li>{{$user->address->address_line_1}}</li>
        </ul>



    
</ul>

@endsection