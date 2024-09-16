@extends('layouts.master')
@section('content')
    @section('title','user')
    @foreach($user as $users)
        <div>
            <h3>{{ $users->name }}</h3>
            @foreach($users->order as $orders)
                <div>
                    Order ID: {{ $orders->id }}<br>
                    Phone: {{ $orders->phone }}
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
