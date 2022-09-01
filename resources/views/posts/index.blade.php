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
        <form action="{{ route('posts.index') }}" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search here..." name="search" value="{{ request()->search }}">
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
            @foreach ( $posts as  $post )
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                {{-- <td>{{ Str::words($post->content, 10 , '...') }}</td> --}}
                <td><img width="80" src="{{ $post->image }}" alt=""></td>
                <td>{{ $post->created_at->format('M d , Y') }}</td>
                <td>{{ $post->updated_at->diffforhumans() }}</td>
                <td>
                    <a href="{{ route('posts.show' , $post->id) }}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit" ></i></a>
                    {{-- //i عشان استغل انو مجاني  --}}
                    {{-- //fas => مصمتة
                    //fab => للشركات
                    //far  => مفرغة  --}}
                    <a href=" #" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>

            @endforeach


        </table>
        {{-- {{ $posts->appends(['search' => request()->search])->links() }} --}}

        {{ $posts->appends($_GET)->links() }}
       {{-- // {{ $posts->links() }} -> دالة بتعمل الصفحات  --}}
    </div>
</body>

</html>
