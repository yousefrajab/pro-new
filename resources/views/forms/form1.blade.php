<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" </head>

<body>
    <div class="container mt-5">
        <h1> Basic Form</h1>
        <form method="post" action={{ route('form1_data') }}>
            @csrf
         {{-- //   الطريقة الامثل  --}}

       {{-- //{{ csrf_field() }} الطريقة الثانية --}}
       {{-- // <input type="hidden" name="_token" value="{{ csrf_token() }}"> الطريقة الاولى لارسال البيانات
                              --}}


            {{-- //form  بياجي معو 2 اتربيوت
             //1-method طريقة ارسال البيانات الها قيمتين جيت و بوست الافضل بوست
            //2-action وين يرسل البيانات --}}
            {{-- // class="container حطيتهن داخل حتى اخليهن بالوسط
                //mt-5 معناها خذ محاذاه من الاعلى
                // المقاسات من 0-5 اعلى اشي 48 بكسل هو 5 --}}
            <div class="mb-3">
                {{-- //class = "mb-3" محاذاة الزر --}}
                <label>Name</label>
                <input type="text" placeholder="Name" class="form-control" name="name">
                {{-- //  class = "form-control بتخلي الكلام بالوسط --}}
                {{-- // placeholder  بكون داخل النص قيمة بس تاجي تكتب بتروح --}}
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="number" placeholder="Age" class="form-control" name="age" >
            </div>
            <div class="text-center">
                <button class="btn btn-outline-warning w-25">Send</button>
            </div>
            {{-- //class="text-center  وضعت الزر كلو داخل البلوك حتى ياجي بالنص --}}

            {{-- // w-25 بوسع الزر
           //المقاسات للزر هي 25 * 50 *75 * 100 --}}
            {{-- //outline بخلي الزر شفاف لمن ياجي الماوس على الزر بلون --}}
            {{-- //btn-dark  نوع من انواع الازرار
            //الانواع هن *success * danger * info * primary * dark * warning *  defulat --}}
    </div>


    </form>

</body>

</html>
