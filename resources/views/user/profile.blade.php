<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>Food Blog - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="/css/owl.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <div style="background: #1e1e1e">
        <div class="d-flex justify-content-end">
            @if (Auth::user())
                <div class="user-panel pt-2 pb-2 d-flex ">
                    @if (Auth::user()->image)
                        <div class="image">
                            <img src="/img/user/{{ Auth::user()->image }}" class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                    @else
                        <div class="image">
                            <img src="/img/no-image.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                    @endif
                    <div class="info d-flex">
                        <a href="/profile/{{ Auth::user()->id }}" style="font-weight:bold;color:#f48840"
                            class="mr-3">{{ Auth::user()->username }}</a>
                        <span style="color:#fff;">|</span>
                        <a style="color:#fff;font-weight:500" class="mr-5 ml-3" href="/logout">Logout</a>
                    </div>
                </div>
            @else
                <div class="info  pt-2 pb-2 d-flex">
                    <a href="/login" style="font-weight:500;color:#fff" class="mr-3">Login</a>
                    <span style="color:#fff;">|</span>
                    <a style="color:#fff;font-weight:500" class="mr-5 ml-3" href="/register">Register</a>
                </div>
            @endif
        </div>
    </div>
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>Food Blog<em>.</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog Entries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post-details.html">Post Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>profile</h4>
                            <h2>Edit your profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->


    <section class="">
        <div class="container">
            <div class="down-contact">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sidebar-item ">
                            <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                                <li class="sidebar-heading nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-toggle="tab"
                                        data-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Your
                                        information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-toggle="tab"
                                        data-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Bookmark</button>
                                </li>
                            </ul>
                            <div class="tab-content mt-5" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="contact-us">
                                        <div class="contact-form">
                                            <div class="content">
                                                <form id="contact" action="/contact" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <label for="email">Name</label>
                                                            <input name="name" type="text" id="name"
                                                                placeholder="Your name"
                                                                value="{{ Auth::user()->name }}" required="">
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <label for="username">Username</label>
                                                            <input type="text" id="username" required=""
                                                                value="{{ Auth::user()->username }}" name="username"
                                                                disabled>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <label for="email">Email</label>
                                                            <input type="text" id="email" name="email"
                                                                value="{{ Auth::user()->email }}">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="password">Password</label>
                                                            <input type="password" name="password" id="password">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label class="d-block" for="password">Current
                                                                Image</label>
                                                            @if (Auth::user()->image)
                                                                <div class="image">
                                                                    <img src="/img/user/{{ Auth::user()->image }}"
                                                                        class="img-circle elevation-2"
                                                                        alt="User Image" height="250px">
                                                                </div>
                                                            @else
                                                                <div class="image">
                                                                    <img src="/img/no-image.jpg"
                                                                        class="img-circle elevation-2"
                                                                        alt="User Image" height="250px">
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 mt-4">
                                                            <label for="image">Image</label>
                                                            <div class="input-group mb-3">
                                                                <div class="custom-file">
                                                                    <input type="file" name="image"
                                                                        class="custom-file-input"
                                                                        id="inputGroupFile03">
                                                                    <label class="custom-file-label"
                                                                        for="inputGroupFile03">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mt-4">
                                                            <fieldset>
                                                                <button type="submit" id="form-submit"
                                                                    class="main-button">Save Change</button>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="row">
                                        @foreach ($save as $item)
                                            <div class="col-4 mt-3">
                                                <div class="card m-1">
                                                    <img src="../img/post/{{ $item->post->image }}"
                                                        class="card-img-top " alt="...">
                                                    <div class="card-body" style="height:250px">
                                                        <h5 class="card-title" style="font-weight: 500">
                                                            {{ $item->post->title }}</h5>
                                                        <p class="card-text mt-5"
                                                            style="font-size: 14px; line-height: 20px">
                                                            {{ $item->post->description }}</p>
                                                        <a href="/detail/{{ $item->postId }}"
                                                            class="btn btn-primary">More detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="social-icons">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Behance</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Dribbble</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright 2020 Stand Blog Co.

                            | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="/js/custom.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/isotope.js"></script>
    <script src="/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>
