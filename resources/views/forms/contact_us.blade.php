<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact_us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> </head>

<body>
    <div class="container mt-5">
        {{-- <div class="card-body">
            @if (Session::has('message_sent'))
            <div class="alert alert-success">
                {{ Session::get('message_sent') }}

            </div>

            @endif --}}
            <h1> Basic Form</h1>
            <form method="post" action={{ route('contact_us') }} enctype="multipart/form-data">
                @csrf
                <div class = "row">
                    {{-- //class = "row" بخلي التكست جنب بعض  --}}
                    <div class = "col-md-6">
                      {{-- //<div class = "col-md-6">  بقسم بدل 12 بحط 6 --}}
                        <div class="mb-3">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your First Name"  name="fname" class="form-control @error('fname') is-invalid  @enderror"  >

                            @error('fname')
                        <small class="invalid-feedback ">{{ $message }}</small>
                        @enderror

                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class="mb-3">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your Last Name" class="form-control @error('lname') is-invalid  @enderror" name="lname"  >

                            @error('lname')
                        <small class="invalid-feedback ">{{ $message }}</small>
                        @enderror

                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your Email" class="form-control @error('email') is-invalid  @enderror" name="email" >

                    @error('email')
                <small class="invalid-feedback ">{{ $message }}</small>
                @enderror

                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" placeholder="Enter your Phone" class="form-control @error('phone') is-invalid  @enderror" name="phone" >

                    @error('phone')
                <small class="invalid-feedback ">{{ $message }}</small>
                @enderror

                </div>

                <div class="form-group my-2">
                    <label>message</label>
                    <textarea  rows="5" placeholder="Enter your Message" class="form-control @error('message') is-invalid  @enderror" name="message" ></textarea>

                @error('message')
                <small class="invalid-feedback ">{{ $message }}</small>
                @enderror

                </div>

                <div class="mb-3">
                    <label>CV</label>
                    <input type="file" class="form-control @error('cv') is-invalid  @enderror" name="cv" >

                    @error('cv')
                <small class="invalid-feedback ">{{ $message }}</small>
                @enderror


                <div class="text-center mt-3">
                    <button class="btn btn-outline-warning w-25 ">Send</button>
                </div>
                {{-- //class="text-center  وضعت الزر كلو داخل البلوك حتى ياجي بالنص --}}

                {{-- // w-25 بوسع الزر
               //المقاسات للزر هي 25 * 50 *75 * 100 --}}
                {{-- //outline بخلي الزر شفاف لمن ياجي الماوس على الزر بلون --}}
                {{-- //btn-dark  نوع من انواع الازرار
                //الانواع هن *success * danger * info * primary * dark * warning *  defulat --}}
        {{-- </div> --}}

        </div>



    </form>

</body>

</html>
