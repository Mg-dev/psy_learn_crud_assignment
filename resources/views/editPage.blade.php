<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CreatePage</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

    <h1 class="header">Edit Form</h1>
    <form action="{{route('update',$user->id)}}" method="post">
        @csrf
        <div class="mb-10">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$user->name}}">
        </div>
        <div class="mb-10">
            <label for="name">Job</label>
            <input type="text" name="job" value="{{$user->job}}">
        </div>
        <div class="mb-10">
            <label for="name">Phone</label>
            <input type="text" name="phone" value="{{$user->phone}}">
        </div>
        <div class="mb-10">
            <label for="name">Address</label>
            <input type="text" name="address" value="{{$user->address}}">
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>

</body>
</html>
