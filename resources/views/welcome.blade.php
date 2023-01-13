<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>crud</title>
</head>
<body>
    <a href="{{route('create-page')}}">
        <button class="create-btn">Create</button>
    </a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Job</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $id=1 ?>

            @foreach ($users as $d)

            <tr>
                <td>{{$id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->job}}</td>
                <td>{{$d->phone}}</td>
                <td>{{$d->address}}</td>
                <td style="display: flex;justify-content: center">
                    <a href="{{route('edit-page',$d->id)}}" style="margin-right: 20px;">
                        <button>Edit</button>
                    </a>
                    <a href="{{route('delete',$d->id)}}">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php $id++ ?>
            @endforeach

        </tbody>
    </table>
</body>
</html>
