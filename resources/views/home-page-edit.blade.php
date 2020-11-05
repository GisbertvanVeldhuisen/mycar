@extends ('layouts/app')

@section ("content")
    <div class="section header"
         style="background-image: url(https://picsum.photos/400/400); background-repeat: no-repeat; background-size: cover; height: 400px">
        <div class="container">
            <div class="column full">
                <div class="heading">
                    <h1>home page edit</h1>
                    <span class="intro">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Error ex pariatur praesentium quo tempore temporibus vel vero voluptate.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="section form">
        <div class="container">
            <form class="home-edit" method="POST" action="">
                @csrf
                <div class="heading">
                    <h3>homepage edit</h3>
                </div>
                <span class="title">Title</span>
                <span class="title">Intro tekst</span>
                <input class="field one-half"
                       value="@isset($forminfo->title){{ (old("title")) ?: $forminfo->title }}@endisset" name="title"
                       type="text">

                <textarea class="field one-half"
                          name="intro">@isset($forminfo->intro_text){{ (old("intro_text")) ?: $forminfo->intro_text }}@endisset</textarea>
                <span class="title">Afbeelding naast tekst</span>
                <span class="title">Tekst naast afbeelding</span>
                <input class="field one-half" type="file">
                <textarea class="field one-half"
                          name="text">@isset($forminfo->text_image){{ (old("text_image")) ?: $forminfo->text_image }}@endisset</textarea>
                <input value="Bijwerken" type="submit">
            </form>
        </div>
    </div>
@endsection