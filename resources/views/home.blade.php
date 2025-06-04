@extends('layouts.master')

@section('content')

<h1 class="">Users</h1>
<a href="{{ route('create') }}" class="btn btn-primary "style="float: right;">Create User</a>

<p>{{session()->get('message')}}</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th>Status</th> 
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <th scope="row">
                        {{ $loop->iteration }}
                    </th>
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->email }} </td>
                    <td>@if ($user->trashed())Trashed @else Active 
                        
                    @endif</td>
                    <td>
                        <a href="{{ route('activate',encrypt($user->id))}}" class="btn btn-success">Activate</a>
                        <a href="{{ route('delete',encrypt($user->id)) }}"  class="btn btn-danger">delete</a>
                        <a href="{{ route('edit',encrypt($user->id))}}" class="btn btn-primary">edit</a>
                    </td>
                </tr>
            @endforeach
 


        </tbody>
    </table>
@endsection
