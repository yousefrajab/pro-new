<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1> Register Form</h1>
        <form action="{{ route('form4_data') }}" method="post">
            @csrf
            <label>Name</label>
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"
                class="form-control mb-3  @error('name') is-invalid @enderror " />
            @error('name')
                <small class="invalid-feedback ">{{ $message }}</small>
            @enderror

            <label>Email</label>
            <input type="Email" placeholder="Email" name="Email" value="{{ old('Email') }}"
                class="form-control mb-3 @error('Email') is-invalid @enderror" />
            @error('Email')
                <small class="invalid-feedback ">{{ $message }}</small>
            @enderror

            <label>Password</label>
            <input type="Password" placeholder="Password" name="Password"
                class="form-control mb-3 @error('Password') is-invalid @enderror" autocomplete="new-password" />
            @error('Password')
                <small class="invalid-feedback ">{{ $message }}</small>
            @enderror

            <label>Confirm Password</label>
            <input type="Password" placeholder="Password" name="Password_confirmation"
                class="form-control mb-3 " autocomplete="new-password" />

            <label>Bio</label>
            <textarea name="bio" placeholder="Bio" rows="5" class="form-control mb-3 @error('bio') is-invalid @enderror">{{ old('bio') }}</textarea>
            @error('bio')
                <small class="invalid-feedback ">{{ $message }}</small>
            @enderror

            {{-- <label >Age</label>

                <input type="number" placeholder="Age" name="Age" class = "form-control mb-3"/> --}}
            <div class="text-center"><button class="btn btn-success w-25 form-control mb-3 ">Send</button></div>

            {{-- //   بكون  على شكل زر ولكن  بينتقل على صفحة اخرى  a   تاغ --}}
        </form>
    </div>

</body>

</html>
