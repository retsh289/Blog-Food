<!DOCTYPE html>
<html>
  <head>
    <title>Reset password</title>
    <link rel="stylesheet" href="/stylesheets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <section class="login" style="padding-bottom: 376px">
      <div class="col-sm-6">
        <div class="px-5 ms-xl-4">
            <a href="/" style="text-decoration:none"><h2>Food Blog</h2></a>
        </div>
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5 mt-3 login-form">
          <form action="/password" method="POST" style="width:25rem">
            @csrf
            <h2 class="fw-normal mb-3 pb-3" style="letter-spacing:1px">Reset Password</h2>
            <div class="mb-2">
              <input type="text" placeholder="USERNAME" name="username">
            </div>
            <div class="pt-1 mb-4">
              <button class="btn-block" type="submit">Next</button>
            </div>
            <p class="small mb-2 pb-lg-2" style="color:white">Already have an account?<a class="link-info ml-2" href="/login">Login here</a></p>
            <p class="small mb-2 pb-lg-2" style="color:white">Don&apos;t have an account?<a class="link-info ml-2" href="/register"> Register here</a></p>
            <p class="small mb-2 pb-lg-2"><a href="/">Back to homepage</a></p>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
<!-- Bootstrap core JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
