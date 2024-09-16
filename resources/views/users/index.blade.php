@extends('layouts.master')

@section('sectioncontent')
    @section('title', 'user')
    <form action="{{route('user.index')}}" method="GET">
        <input placeholder="search users" name="search" value="{{ request('search') }}" type="text">
        {{--        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search orders">--}}

        <button type="submit">Search</button>
    </form>
    <a href="{{ route('user.create') }}">Create New User</a>
    <table border="1">
        <thead>
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>delete</th>
            <th>Order Address</th>
            <th>Phone</th>

        </tr>
        </thead>
        <tbody>
        @foreach($user as $users)
            <tr>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>

                <form action="{{route('user.edit',$users->id)}}" method="GET">
                    <td>
                        <button>Edit</button>
                    </td>
                </form>

                <form action="{{route('user.delete',$users->id)}}" method="GET">
                    <td>
                        <button>Delete</button>
                    </td>
                </form>
                {{--                @if($users->order->isEmpty())--}}
                {{--                    <td colspan="2">No Orders</td>--}}
                {{--                @else--}}
                <td>
                    @foreach($users->order as $orders)
                        {{ $orders->address }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($users->order as $orders)
                        {{ $orders->phone }}<br>
                    @endforeach
                </td>

                {{--                @endif--}}
            </tr>

        @endforeach
        </tbody>
    </table>
    {{$user->links()}}

@endsection
