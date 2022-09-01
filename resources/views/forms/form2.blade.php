<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" </head>

<body>
    <div class="container mt-5">
       {{-- //  table , form  => اكثر تاغين مستخدمين  --}}
       {{-- form => بضيف وبعدل بيانات  --}}
        <h1> Information Form</h1>
        <form action="{{ route('form2_data') }}" method="post">
            @csrf
            <label >Name</label>
            <div class="mb-3">
                <input type="text" placeholder="Name" name="name" class = "form-control mb-3"/>
            </div>
            <label >Email</label>
            <div class="mb-3">
                <input type="Email" placeholder="Email" name="Email" class = "form-control mb-3"/>
            </div>
            <label >Password</label>
            <div class="mb-3">
                <input type="Password" placeholder="Password" name="Password" class = "form-control mb-3" autocomplete="new-password"/>
            </div>
            <label >Age</label>
            <div class="mb-3">
                <input type="number" placeholder="Age" name="Age" class = "form-control mb-3"/>
            </div>
            <button class = "btn btn-success w-100">Send</button>
            {{-- //   بكون  على شكل زر ولكن  بينتقل على صفحة اخرى  a   تاغ --}}
        </form>
    </div>

</body>

</html>
