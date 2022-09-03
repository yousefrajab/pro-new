<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        .table th,
        .table td {
            vertical-align: middle
        }
    </style>
</head>


<body>
    <div class="container mt-5">
        {{-- //  table , form  => اكثر تاغين مستخدمين --}}
        {{-- form => بضيف وبعدل بيانات --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>All Posts</h1>

            <a class="btn btn-primary px-5" href="{{ route('posts.create') }}">Create new post</a>
        </div>

        {{-- //عشان اخلي الزر عقبال العنوان بحطهن داخل ديف مع استخدام الخصائص  --}}




        <form action="{{ route('posts.index') }}" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search here..." name="search"
                    value="{{ request()->search }}">
                <button class="btn btn-dark px-5"id="button-addon2">Search </button>
            </div>

        </form>


        <table class="table table-hover table-bordered table-striped  back" style=" background:#eee ">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                {{-- <th>Content</th> --}}
                <th>Image</th>
                <th>created_At</th>
                <th>Updated_At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    {{-- <td>{{ Str::words($post->content, 10 , '...') }}</td> --}}
                    <td><img width="80" src="{{ asset('uploads/posts/'. $post->image) }}" alt=""></td>
                    <td>{{ $post->created_at->format('M d , Y') }}</td>
                    <td>{{ $post->updated_at->diffforhumans() }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-success"><i
                                class="fas  fa-eye"></i></a>
                        <a href="{{ route('posts.edit', $post->id )}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        {{-- //i عشان استغل انو مجاني --}}
                        {{-- //fas => مصمتة
                    //fab => للشركات
                    //far  => مفرغة --}}
                        {{-- <a href="{{ route('posts.destroy' , $post->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> --}}
                        {{-- // <a href=""></a>  تاغ الايه بشغل الرابط الي نوعو جيت فقط --}}

                        <button class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i></button>

                        <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            {{-- // @method('delete') عشان يفعل عملية الحذف --}}
                            {{-- <button onclick="return confirm('Are you sure ? ')" class="btn btn-sm btn-danger"><i
                                    class="fas fa-trash"></i></button> --}}
                            {{-- //باخذ البوتن برى الفورم --}}

                        </form>
                        {{-- //onclick="return confirm('Are you sure ? ')" = الطريقة الاولى للاخطار من عملية الحذف --}}

                        {{-- // sweet alert = الطريقة الثانية من موقع --}}

                        {{-- //class="d-inline" بصف العناصر جنب بعض --}}
                    </td>
                </tr>
            @endforeach


        </table>
        {{-- {{ $posts->appends(['search' => request()->search])->links() }} --}}

        {{ $posts->appends($_GET)->links() }}
        {{-- // {{ $posts->links() }} -> دالة بتعمل الصفحات --}}
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
                '{{ session('msg') }}',
                'success'
            )
        </script>
    @endif


    <script>
        $('.btn-delete').on('click', function() {
            let form = $(this).next('form');

            // alert($)

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
                    //     Swal.fire(
                    //         'Deleted!',
                    //         'Your file has been deleted.',
                    //         'success'
                    //     )
                    // console.log('clicked');
                    form.submit();
                }

            })
        })
        // Swal.fire({
        //     title: 'Are you sure?',
        //     text: "You won't be able to revert this!",
        //     icon: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#d33',
        //     confirmButtonText: 'Yes, delete it!'
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //         //     Swal.fire(
        //         //         'Deleted!',
        //         //         'Your file has been deleted.',
        //         //         'success'
        //         //     )
        //         console.log('clicked');
        //     }

        // })
    </script>


    {{-- //<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> =   https:  بحط دايما قبل الرابط   *     sweet alert رابط موقع    * --}}


</body>

</html>
