<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" ></head>

<body>
    <div class="container mt-5">
        <h1> Basic Form</h1>
        {{-- @dump($errors) --}}
        {{-- // بظهر انو في خطا --}}
        {{-- @dump($errors->any()) --}}
        {{-- //خاص ب صح او خطا --}}

        {{-- //الطريقة الاولى لاظهار الاخطاء  --}}

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif --}}

        {{-- @dump($errors->all()) --}}

        <form action="{{ route('form5_data') }}" method="post" enctype="multipart/form-data">
            {{-- //enctype="multipart/form-data" حتى يرفع الصورة نفسها وليس اسمها فقط --}}
            @csrf
            <label>Name</label>
            <div class="mb-3">
                <input type="text" placeholder="Name" name="name" class="form-control @error('name') is-invalid  @enderror" />

                {{-- // الطريقة الثانية لاظهار الاخطاء  --}}
            @error('name')
            <small class="invalid-feedback ">{{ $message }}</small>
            @enderror
            </div>
            <label>CV</label>
            {{-- <div class=""> --}}
                <input type="file" placeholder="CV" name="cv" class="form-control mb-3 @error('CV') is-invalid  @enderror" />
            @error('CV')
            <small class="invalid-feedback ">{{ $message }}</small>
            @enderror
            {{-- </div> --}}
            {{-- <label >Password</label>
            <div class="mb-3">
                <input type="Password" placeholder="Password" name="Password" class = "form-control mb-3" autocomplete="new-password"/>
            </div>
            <label >Age</label>
            <div class="mb-3">
                <input type="number" placeholder="Age" name="Age" class = "form-control mb-3"/>
            </div> --}}

                <div class="text-center"><button class="btn btn-success w-25 form-control mb-3 ">Send</button></div>


            {{-- //   بكون  على شكل زر ولكن  بينتقل على صفحة اخرى  a   تاغ --}}
        </form>
        </div>

</body>

</html>
