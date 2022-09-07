<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navigation{
            position: fixed ;
            top:40%;
            width:40px;
            height:40px;
            background: #f00;
            border-radius: 50%;
            transition: all .3s ease;
        }
        .navigation:hover{
          transform: scale(1.8)
        }
        .navigation img {
            width:100%;
            height:100%;
            border-radius: 50%
        }

        .navigation.prev{
            left: 40px
        }

        .navigation.next{
            right: 40px
        }

        .navigation .arrow{
           position:absolute;
           top: 0;
           left: 0;
           width:40px;
            height:40px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.386);
            font-size:20px;
            display:flex;
            justify-content: center;
            align-items:center;
            color: #fff

        }


    </style>
</head>

<body>
@if ($next)
<a href="{{ route('my-posts' , $next->id) }}" class="navigation next">
    <img src="{{ asset('uploads/posts/'.$post->image) }}" alt="">
   <div class="arrow">></div>
   </a>
@endif
  @if ($prev)
  <a href="{{ route('my-posts' , $prev->id) }}" class="navigation prev">
    <img src="{{ asset('uploads/posts/'.$post->image) }}" alt="">
    <div class="arrow"><</div>
   </a>
  @endif


    <div class="container text-center my-5">
        <h1 class="mb-4">{{ $post->title }}</h1>
        <img class="w-25 mb-3" src="{{ asset('uploads/posts/'.$post->image) }}" alt="">
        <div>
            {!! $post->content !!}
            {{-- {!! $post->content !!} => html بعرض الناتج الخاص ب   --}}
        </div>
        <h4 class="mb-4">All comments ({{ $post->comments->count() }})</h4>

       <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($post->comments as $comment )
            <div class="text-start">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>{{ $comment->user->name }}</h6>
                <small>{{ $comment->created_at->diffforhumans() }}</small>
                </div>
                <p>{{ $comment->comment }} </p>
               </div>
                @if (!$loop->last)
                <hr>
                @endif
            @endforeach
            <h5 class="mt-4">Add New Comment </h5>
            <form action="{{ route('one_to_many_data') }}" method="POST">
                @csrf
                <input type="hidden" name="post_id" id="" value="{{ $post->id }}">
                 <textarea class="form-control mb-3" rows="5" placeholder="Type Your comment Here.."    name="comment"></textarea>
                <button  class="btn btn-success
                ">Submit</button>

            </form>
        </div>
       </div>


    </div>
</body>

</html>
