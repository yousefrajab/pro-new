<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student portale </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1> welcome {{ $std->name }}</h1>
        {{-- @dump($std->courses->find(1)) --}}
        <form action="{{ route('many_to_many_data') }}" method="POST">
            @csrf
            <table class="table table-bordered table-hover">
                <tr>
                    <th></th>
                    <th>Course Name</th>
                    <th>Course Hours</th>
                </tr>
                @foreach ($courses as $course)
                    <tr>
                        <td>
                            <input  {{ $std->courses->find($course->id) ? 'checked': ' ' }}  type="checkbox" name="course_id[]" value="{{ $course->id }}">
                        </td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->hours }}</td>
                    </tr>
                @endforeach
            </table>
            <div class="text-center">
                <button class="btn btn-primary  w-25">Register</button>
            </div>
        </form>

    </div>
</body>

</html>
