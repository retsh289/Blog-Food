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

    <title>Food Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="../css/owl.css">
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
                <a class="navbar-brand" href="index.html">
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
                            <a class="nav-link" href="/recipes">Recipes</a>
                        </li>
                        @if (isset($blog))
                            <li class="nav-item">
                                <a class="nav-link" href="/subscribe">Subscribe</a>
                            </li>
                        @else
                            <li class="nav-item active">
                                <a class="nav-link" href="/subscribe">Subscribe</a>
                            </li>
                        @endif
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
                            @if (isset($blog) && $blog == 'search')
                                <h2>Search</h2>
                                <h4 class='mt-4'>Keyword: '{{$term}}'</h4>
                            @elseif (isset($blog))
                                <h2>{{ $blog->name }}</h2>
                                <h4 class='mt-4'>{{ $blog->intro }}</h4>
                            @else
                                <h2>Subscribe</h2>
                                <h4 class='mt-4'>You can access all of our exclusive recipes right here.
                                </h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <span>Food Blog</span>
                                <h4>Subscribe for more delicious recipes!</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-button">
                                    <a rel="nofollow" href="/subscribe" target="_parent">Subscribe Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @foreach ($post as $item)
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="../img/post/{{ $item->image }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <span>Lifestyle</span>
                                            <a href="/detail/{{ $item->id }}">
                                                <h4>{{ $item->title }}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#">Admin</a></li>
                                                <li><a href="#">{{ $item->createdAt }}</a></li>
                                                <li><a href="#">12 Comments</a></li>
                                            </ul>
                                            <p>{{ $item->description }}</p>
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            @php
                                                                $cateName = $item->categoryId == null ? '' : $item->cate->name;
                                                            @endphp
                                                            @if ($cateName != '')
                                                                <li><a
                                                                        href="/category/{{ $item->id }}">{{ $cateName }}</a>,
                                                                </li>
                                                            @endif
                                                            <li><a
                                                                    href="/tag/{{ $item->id }}">{{ $item->tag->name }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-12">
                                <ul class="page-numbers">
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" method="POST" action="/search">
                                        @csrf
                                      <input type="text" name="search" class="searchText" placeholder="type to search..." >
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($postTop as $item)
                                                <li><a href="/detail/{{ $item->id }}">
                                                        <h5>{{ $item->title }}</h5>
                                                        <span>{{ $item->createdAt }}</span>
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($cate as $item)
                                                <li><a href="/category/{{ $item->id }}">{{ $item->name }} </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Tag Clouds</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($cate as $item)
                                                <li><a href="/category/{{ $item->id }}">{{ $item->name }} </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 p-3" style="text-align: left">
                    <h3 class="mb-3" style="color:#f48840; font-weight:700">About Us</h3>
                    <p>We are a food blog that provides delicious recipes and helpful cooking tips to food enthusiasts
                        around the world.</p>
                </div>
                <div class="col-md-2 col-sm-6 p-3" style="text-align: left">
                    <h3 class="mb-3" style="color:#f48840; font-weight:700">Quick Links</h3>
                    <ul class="list-unstyled" style="font-size: 14px; color:white">
                        <li><a href="/" style="color:white">Home</a></li>
                        <li><a href="/recipes" style="color:white">Recipes</a></li>
                        <li><a href="/about" style="color:white">About us</a></li>
                        <li><a href="/contact" style="color:white">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 p-3" style="text-align: left">
                    <h3 class="mb-3" style="color:#f48840; font-weight:700">Follow Us</h3>
                    <p>Subscribe for newsletter</p>
                    <div class="contact-us">
                        <div class="contact-form">
                            <form class=" row" action="/news" method="POST">
                                @csrf
                                <div class="col-10">
                                    <input type="email" name="email" placeholder="Enter your email ">
                                </div>
                                <div class="col-2">
                                    <button style="height:46px" type="submit" id="form-submit"
                                        class="main-button"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-send-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                        </svg></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="list-unstyled social-links d-flex">
                        <li class="mr-2 "><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="mr-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="mr-2"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="mr-2"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../js/custom.js"></script>
    <script src="../js/owl.js"></script>
    <script src="../js/slick.js"></script>
    <script src="../js/isotope.js"></script>
    <script src="../js/accordions.js"></script>

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
