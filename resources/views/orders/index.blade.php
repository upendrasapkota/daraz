@extends('layouts.master')

@section('sectioncontent')
    @section('title', 'orders')
    <form method="GET" action="{{ route('orders.index') }}">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search orders">
        <button type="submit">Search</button>
    </form>
    <a href="{{route('orders.create')}}">Create Order</a>
    <table border="1">
        <thead>

        <tr>
            <th>Address</th>
            <th>Phone</th>
            <th>View</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->address}}</td>
                <td>{{$order->phone}}</td>
                <td><a href="{{route('orders.show',$order->id)}}">view</a></td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {{$orders->links()}}
@endsection


{{--@extends('layouts.master')--}}

{{--@include('layouts.master')--}}

