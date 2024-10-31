<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>



          <link rel="stylesheet" href="{{asset('assets/slide/slide.css')}}">
          <link rel="preconnect" href="{{asset('assets/https://fonts.googleapis.com')}}">
          <link rel="preconnect" href="{{asset('assets/https://fonts.gstatic.com')}}" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">

          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

          <link
                    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
                    rel="stylesheet" />

          <link rel="stylesheet" href="{{asset('/resources/css/app.css')}}">

          <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">


</head>

<body>
          <!-- my header start -->
          @include('snippets.header')
          <!-- my header end -->

          @yield("content")
          <div class="footer-container">
                    <div class="footer-top">
                              <div>
                                        <p>Get Connected to my social network</p>
                              </div>
                              <div class="media">
                                        <a href="#"><i class="ri-facebook-line"></i></a>
                                        <a href="#"> <i class="ri-twitter-line"></i></a>
                                        <a href="#"> <i class="ri-google-line"></i></a>
                                        <a href="#"> <i class="ri-instagram-line"></i></a>
                                        <a href="#"> <i class="ri-linkedin-line"></i></a>
                              </div>


                    </div>

                    <div class="footer-main">

                              <div class="content1">
                                        <p> By hazza-tech-group</p>
                              </div>


                    </div>
          </div>

          <button id="scrollToTopBtn">↑</button>
          </div>

          <script src="{{asset('assets/js/index.js')}}"></script>
          <script src="{{asset('assets/slide/slide.js')}}"></script>

          <!-- sweet alert -->
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          @if (session('message'))
          <script>
                    swal("Successful!", "{{ session('message') }}!", "success");
          </script>
          @endif
          @if (session('error'))
          <script>
                    swal("Error!", "{{ session('error') }}!", "warning");
          </script>
          @endif
          @if (Session::has('success'))
          <script>
                    swal("Successful!", "{{ Session::get('success') }}!", "success");
          </script>
          @endif

          @if (Session::has('error'))
          <script>
                    swal("Error!", "{{ Session::get('error') }}!", "warning");
          </script>
          @endif
</body>

</html>