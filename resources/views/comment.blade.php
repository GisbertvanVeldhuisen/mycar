@extends ('layouts/app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

@section ("content")
    <div class="section form">
        <div class="container">
            @guest
                @if(Auth::guest())<h1>U moet een account aanmaken om een comment te kunnen maken</h1>
                @endif
            @else
                <h1>Comment aanmaken</h1>
                <form action="{{url('/comment')}}" method="post">
                @csrf



                    <!-- Post content -->
                    <h2 class="title">Comment content</h2>

                    <span class="title"></span>
                    <textarea class="field one-half" name="comment_content"></textarea>


                    <input type="submit">

                </form>
        </div>
    </div>
    </div>

{{--    @foreach($users as $user)--}}
{{--        <p>{{$user->name}}</p>--}}
{{--    @endforeach--}}

    @foreach($comments as $comment)

        <div class="comment">
            <div class="head">
                <p></p><b>Naam</b></p>
            <span>{{$comment->created_at->diffForHumans()}}</span>

                {{--                Delete--}}
                <form action="" method="post" class="delete">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="comment_id" value="{{ $comment->comment_id }}">
                    <div class="button background-red">
                        <button class="button background-red" type="submit">Delete</button>
                    </div>
                    <br>
                </form>

                <div class="lijn"></div>

            </div>
            <div class="content">
            <p>{{$comment->comment_content}}</p>
            </div>
        </div>
        <br>

    @endforeach


{{--    @foreach($comment->children as $child_comment)--}}
{{--        // display child comment--}}
{{--    @endforeach--}}

    @endguest
@endsection


<style>

    .delete{
        display: inline-block;
        position: absolute ;
        right: 1180px;

    }

    .comment{
        padding: 2px 5px 2px 5px;
        border: 1px solid black;
        max-width: 350px !important;
        margin-left: 20%;
    }

    .head{
        padding: 10px;
    }

    .lijn{
        border: 1px solid black;

        width: 100%;
    }

    .head p{
        display: inline-block;
        padding-right: 10px
    }

    .content{
        padding: 20px;
    }

</style>
