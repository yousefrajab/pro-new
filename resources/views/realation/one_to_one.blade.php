<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1> Users Information</h1>

        <table class=" my-5 table table-bordered table-hover">
            <tr class="table-dark">
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Insurance Serial</td>
                <td>Insurance Expire</td>

            </tr>
            @foreach ($users as $user )
            <tr>
                <td>{{$user->id  }}</td>
                <td>{{$user->name }}</td>
                <td>{{$user->email }}</td>
                {{-- <td>{{ $user->insurance ?  $user->insurance->serial : '' }}</td>
                <td>{{ $user->insurance ?  $user->insurance->expire : '' }}</td> --}}
                <td>{{ $user->insurance->serial }}</td>
                <td>{{ $user->insurance->expire }}</td>

            </tr>
            @endforeach



        </table>

    </div>
</body>

</html>
