<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Home</title>
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

    {{-- CKEditor CDN --}}
    <script src="{{ asset('assets/js/ckeditor.js')}}"></script>
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header sticky-top d-flex align-items-center" style="border-bottom:1px solid #a5a5a5">
	  <div class="container d-flex align-items-center justify-content-between">
  
		<a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
			<img src="{{asset('assets/img/logo.svg')}}" class="img-fluid rounded" alt="">
		</a>
  
		<!-- Nav Menu -->
		<nav id="navmenu" class="navmenu">
		  <ul>
			<li><a href="{{url('/')}}" class="active">Home</a></li>
			<li><a href="{{route('books')}}">Books</a></li>
		  </ul>
  
		  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
		</nav><!-- End Nav Menu -->
	  </div>
	</header><!-- End Header -->
  
	<main id="main">
		<!-- Contact Section - Home Page -->
		<section id="contact" class="contact">
			<div class="container section-title" data-aos="fade-up">
				<h2>Publish Book</h2>
			</div>

			<div class="container" data-aos="fade-up" data-aos-delay="100">
				<div class="row gy-4">
					<div class="col-lg-12">
						<form method="post" action="{{route('publish_book')}}" enctype="multipart/form-data" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            @csrf
							<div class="row gy-4">
								<div class="col-md-6">
                                    <label for="book_name">Book name</label>
									<input type="text" id="book_name" name="book_name" class="form-control" placeholder="Enter Book Name" required>
								</div>
                                <div class="col-md-6">
                                    <label for="front_cover">Front Cover Image</label>
									<input type="file" id="front_cover" name="front_cover" class="form-control" required>
								</div>
                                <div class="col-md-6">
                                    <label for="back_cover">Back Cover Colour</label>
									<input type="color" id="back_cover" name="back_cover" value="#187700" class="form-control" required>
								</div>
                                <div class="col-md-12">
                                    <label for="book_description">Book Description</label>
									<textarea class="form-control" name="book_description" id="book_description"></textarea>
								</div>

                                <div class="col-md-6">
                                    <label for="author_name">Author name</label>
									<input type="text" id="author_name" name="author_name" class="form-control" placeholder="Author Book Name" required>
								</div>
                                <div class="col-md-6">
                                    <label for="author_photo">Author Photo</label>
									<input type="file" id="author_photo" name="author_photo" class="form-control" required>
								</div>
                                <div class="col-md-12">
                                    <label for="about_author">About Author</label>
									<textarea class="form-control" name="about_author" id="about_author"></textarea>
								</div>

								<div class="col-md-12">
                                    <label for="content">Book Contant</label>
									<textarea class="form-control" name="page_content" id="content" placeholder="Message"></textarea>
								</div>

								<div class="col-md-12 text-center">
									<button type="submit">Publish</button>
								</div>
							</div>
						</form>
					</div><!-- End Contact Form -->
				</div>
			</div>
		</section><!-- End Contact Section -->
	</main>
	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer" style="padding: 30px 0">

		<div class="container copyright text-center">
			<p>&copy; <span>Copyright</span> <strong class="px-1">BriBooks</strong> <span>All Rights Reserved</span></p>
		</div>

	</footer><!-- End Footer -->

	<!-- Scroll Top Button -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

            <script>
                ClassicEditor.create( document.querySelector( '#content' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

	<!-- Vendor JS Files -->
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
	<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>

	<script src="{{ asset('assets/js/main.js')}}"></script>
</body>
</html>