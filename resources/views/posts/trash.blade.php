<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        {{-- //  table , form  => اكثر تاغين مستخدمين --}}
        {{-- form => بضيف وبعدل بيانات --}}
        <h1>All Posts</h1>
        <table class="table table-hover table-bordered table-striped  back" style=" background:#eee ">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>

                    <td>
                        <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-sm btn-success"><i
                                class="fas fa-undo"></i></a>
                        <a onclick="return confirm('Are You sure ?') "  href="{{ route('posts.forcedelete' , $post->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>

                    </td>
                </tr>
            @endforeach


        </table>
        <a  onclick="return confirm('Are You sure ?') " href="{{ route('posts.restore_all') }}" class="btn btn-success"> <i class="fas fa-undo"> </i>     Restore All</a>
        <a  onclick="return confirm('Are You sure ?') " href="{{ route('posts.delete_all') }}" class="btn btn-danger "><i class="fas fa-times"> </i>Delete All</a>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- * لازم اي شي باخذو من الموقع بتعلق بالمكتبة احطها تحت الرابط وليس فوق  * --}}


    {{-- // بنزل مكتبة من موقع = jQuery
         // اخذت رابط من = Download the compressed, production jQuery 3.6.1 --}}

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    @if (session('msg'))
        <script>
            Swal.fire(
                'Good job!',
                '{{ session("msg") }}',
                'success'
            )
        </script>
    @endif


    <script>
        $('.btn-delete').on('click', function() {
            let form = $(this).next('form');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }

            })
        })

    </script>
    {{-- <script>
        $('.btn-deleted-all').on('click', function() {
            let formv = $(this).next('formv');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    form.submit();
                }

            })
        })

    </script> --}}


</body>

</html>
