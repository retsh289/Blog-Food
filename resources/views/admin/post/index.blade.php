<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Post </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/adminlte.css">
    <!-- CKEditor 5 – Classic editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
</head>
<script type="text/javascript">
    function confirmDelete() {
        if (window.confirm('Are you sure you want to delete ?') == true) {
            return true;
        }
        return false;
    }
</script>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pl-3 pr-3 pt-1">
                    <a href="/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
                <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image mr-3 ml-2">
                    @if (isset(Auth::user()->image))
                        <img src="/img/user/{{ Auth::user()->image }}" class="img-circle elevation-2"
                            alt="User Image">
                    @else
                        <img src="/img/no-image.jpg" class="img-circle elevation-2" alt="User Image">
                    @endif
                </div>
                <div class="info">
                    <!-- Button trigger modal -->
                    <a style="font-weight:bold;" type="button" class="" data-toggle="modal"
                        data-target="#profileModal">
                        {{ Auth::user()->username }}
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="profileModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit your profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="">
                                    @include('admin.profile')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">USER</li>
                        <li class="nav-item">
                            <a href="/admin/admin" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-user-lock"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/member" class="nav-link">
                                <i class="nav-icon fas fa-regular fa-user"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/subscribe" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-check"></i>
                                <p>Subsciber</p>
                            </a>
                        </li>
                        <li class="nav-header">BLOG</li>
                        <li class="nav-item">
                            <a href="/admin/category" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-bars"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/tag" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-tag"></i>
                                <p>Tag</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/post" class="nav-link active " style="background-color:#f48840">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Post</p>
                            </a>
                        </li>
                        <li class="nav-header">FEEDBACK</li>
                        <li class="nav-item">
                            <a href="/admin/comment" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-comments"></i>
                                <p>Comment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/contact" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-address-book"></i>
                                <p>Contact</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/news" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-newspaper"></i>
                                <p>News</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Post</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active">Post</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-0 mt-2">
                                    <!-- Button trigger modal -->
                                    @if ($errors->any())
                                        <div class="mt-2 mb-2">
                                            @foreach ($errors->all() as $error)
                                                <p class="alert alert-danger " style="width: 280px">
                                                    {{ $error }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#createModal">
                                        Add a new Post
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" style="max-width: 1600px">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Create a new post
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="">
                                                    @include('admin.post.create')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (session('success'))
                                    <p class="alert alert-success ml-4 mt-2" style="width:180px" w role="alert">
                                        {{ session('success') }}
                                    </p>
                                @endif
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Post List</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">#</th>
                                                        <th>Title</th>
                                                        <th style="width: 130px;">Category</th>
                                                        <th style="width: 130px;">Tag</th>
                                                        <th>Image</th>
                                                        <th style="width: 130px;">Detail</th>
                                                        <th style="width: 70px;">Subscribe</th>
                                                        <th style="width: 130px;">Created At</th>
                                                        <th style="width: 130px;">Updated At</th>
                                                        <th style="width: 70px;">Edit</th>
                                                        <th style="width: 70px">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($post as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->title }}</td>
                                                            @if ($item->categoryId)
                                                                <td>{{ $item->cate->name }}</td>
                                                            @else
                                                                <td>Null</td>
                                                            @endif
                                                            @php
                                                                $id = str_replace(' ', '-', $item->title);
                                                            @endphp
                                                            <td style="text-transform: capitalize;">
                                                                {{ $item->tag->name }}</td>
                                                            <td>
                                                                <img src="/img/post/{{ $item->image }}"
                                                                    style='width:250px' alt="">
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-small-success"
                                                                    data-toggle="modal"
                                                                    data-target="#detail{{ $id }}">
                                                                    <span class="badge badge-success">More
                                                                        detail</span>
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade"
                                                                    id="detail{{ $id }}" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered"
                                                                        style="max-width: 1600px">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">More detail
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div>
                                                                                    <h5 style="font-weight:bold">
                                                                                        Description</h5>
                                                                                    <p> {{ $item->description }}</p>
                                                                                </div>
                                                                                <div>
                                                                                    <h5 style="font-weight:bold">
                                                                                        Content</h5>
                                                                                    <p> {!! $item->content !!}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        </div>
                                        </td>
                                        @if ($item->subscribe == false)
                                            <td><button class='btn btn-small-info'><span class="badge badge-info">
                                                        None</span></button></td>
                                        @else
                                            <td style="text-align:center"><button class='btn btn-small-warning'><span
                                                        class="badge badge-warning d-block"> Subscribe</span></button>
                                            </td>
                                        @endif
                                        <td>{{ $item->createdAt }}</td>
                                        <td>{{ $item->updatedAt }}</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-small-success" data-toggle="modal"
                                                data-target="#{{ $id }}">
                                                <span class="badge badge-success">Edit</span>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="{{ $id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered "
                                                    style="max-width: 1600px">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit post
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="">
                                                            @include('admin.post.edit')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a onclick="return confirmDelete()"
                                                href="/admin/post/delete/{{ $item->id }}"
                                                class="btn btn-small-danger"><span
                                                    class="badge bg-danger">Delete</span></a>
                                        </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <div class="d-flex justify-content-end">
                                            {{ $post->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/js/pages/dashboard3.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
        const array = document.querySelectorAll("#edit")
        array.forEach(element => {
            ClassicEditor
                .create(element)
                .catch(error => {
                    console.error(error);
                });
        });
        const pics = document.querySelectorAll("picture > img");
        pics.forEach(img => {
            img.style.height = '400px';
            img.style.width = '600px';
        });
    </script>
    <script>
        const images = document.querySelectorAll("figure > img");
        images.forEach(img => {
            img.style.height = '400px';
        });
        const x = document.querySelectorAll(".card-footer svg");
        x.forEach(item => {
            item.style.height = '25px';
        });
        const y = document.querySelector(".card-footer .flex span");
        y.style.display = 'none';
        const z = document.querySelector(".card-footer .flex a");
        z.style.display = 'none';
    </script>
</body>

</html>
