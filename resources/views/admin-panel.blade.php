<div class="section users" style="">
    <div class="container">
        <div class="heading">
            <h3>
                users

                <span>
                    @if($amount >= 1)
                        [{{$amount}}]
                    @endif
                </span>
            </h3>
        </div>

        @if($amount >= 1)

            @foreach($users as $user)

                <div class="column full">
                    <div class="user">
                        <p class="username">[{{ $user->id }}] {{ $user->username }}</p>

                        <div class="button-row">
                            <div class="button-wrap">
                                <a class="button ghost" href="#">
                                    <span class="button-title">ban</span>
                                </a>
                            </div>

                            <form action="" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="button-wrap">
                                    <button class="button background-red" type="submit">Delete</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            @endforeach

        @elseif($amount == 0)

            <div class="column full">
                <div class="user">
                    {{ 'no users found' }}
                </div>
            </div>

        @endif
    </div>
</div>