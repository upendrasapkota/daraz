@extends('layouts.master')

@section('title', 'Order Page')

@section('content')
    <table border="1">
        <thead>

        <tr>
            <th>Address</th>
            <th>Phone</th>
            <th>View</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order as $orders)
            <tr>
                <td>{{$orders->address}}</td>
                <td>{{$orders->phone}}</td>
                <td><a href="{{route('orders.show',$orders->id)}}">view</a></td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection


{{--@extends('layouts.master')--}}

{{--@include('layouts.master')--}}

