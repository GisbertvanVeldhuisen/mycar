<html>
@include('includes/head')
<body id="root">
<div id="wrap_all">
    @include('includes/header')
    <div class="main">
        <div class="section header"
             style="background-image: url(https://picsum.photos/400/400); background-repeat: no-repeat; background-size: cover; height: 400px">
            <div class="container">
                <div class="column full">
                    <div class="heading">
                        <h1>Admin pagina</h1>
                        <span class="intro">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Error ex pariatur praesentium quo tempore temporibus vel vero voluptate.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section admin-navigation" style="">
            <div class="container">
                <div class="heading">
                    <h3>admin navigation</h3>
                </div>
                <div class="button-wrap">
                    <a class="button background-secondary" href="/test">
                        <span class="button-title">Homepage edit</span>
                    </a>
                </div>
                <div class="button-wrap">
                    <a class="button background-secondary" href="#">
                        <span class="button-title">Admin panel</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes/footer')
@include('includes/socket')
</body>
</html>