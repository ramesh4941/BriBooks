<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Books</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Favicons -->
	<link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
	<link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
	<!-- Main CSS File -->
	<link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header sticky-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="{{asset('assets/img/logo.svg')}}" class="img-fluid rounded" alt="">
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
			<li><a href="{{route('books')}}" class="active">Books</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Blog Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Books</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Books</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section class="container">
        @if(Session::has('saved'))
            <div class="alert alert-success">
                {{Session::get('saved')}}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Book Name</th>
                <th scope="col">Author</th>
                <th scope="col">Publish Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @if(!empty($books))
                    @foreach ($books as $book)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{$book->book_name}}</td>
                            <td>{{$book->author_name}}</td>
                            <td>{{ date("d M, Y", strtotime($book->created_at))}}</td>
                            <td>
                                <a href="{{route('ebook', $book->id)}}" class="btn-getstarted">Download</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No books published yet</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="padding: 30px 0">

    <div class="container copyright text-center">
        <p>&copy; <span>Copyright</span> <strong class="px-1">BriBooks</strong> <span>All Rights Reserved</span></p>
    </div>
</footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
	<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>

	<script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>