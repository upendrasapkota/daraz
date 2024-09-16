<form action="{{route('user.update',$user->id)}}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}">
    </div>

    <button type="submit">Update</button>
</form>
