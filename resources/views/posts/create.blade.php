<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Add New post</h1>

            <a class="btn btn-primary px-5" href="{{ route('posts.index') }}">All posts</a>
        </div>

        <form action="{{ route('posts.store') }} " method="POST" enctype="multipart/form-data">
            @csrf

            @include('posts.form')

            <button class="btn btn-success px-4">Add</button>

        </form>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>

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


</body>

</html>
