<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Landing Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<div class="container-fluid pe-5 ps-5">
			<a class="navbar-brand fw-bold" href="index.html">
				<h3>AniNur's Page</h3>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 fontnav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html#contactus">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#section-card">Resume</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-people-fill"></i> Download</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li>
								<a class="dropdown-item" href="signin.html" target="_blank"> <i class="bi bi-file-text"></i> Materi HTML </a>
							</li>
							<li>
								<a class="dropdown-item" href="#"><i class="bi bi-code-square"></i> Materi CSS</a>
							</li>
							<li>
								<hr class="dropdown-divider" />
							</li>
							<li>
								<a class="dropdown-item" href="#"><i class="bi bi-bootstrap-reboot"></i> Materi Bootstrap</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- blog -->
	<section id="blog" class="bg-white">
		<div class="container d-flex flex-column align-items-center p-4">
			<h1 class="text-primary text-opacity-100 pb-3">=== My Blog ===</h1>
			<div class="row mb-4">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<h4>Judul Artikel-1</h4>
					<div class="mb-2">
						<span class="fs-6"><i class="bi bi-calendar"></i> 10/11/2011, Created By : Aninur</span>
						<hr />
					</div>
					<img src="assets/images/gambar1.jpg" width="500" class="img-thumbnail img-fluid mx-auto d-block" />
					<p class="justify-content-evenly">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores fugit quod cumqloremue Lorem, ipsum dolor sit amet consectetur
						adipisicing elit. Perferendis saepe, nobis aspernatur molestiae sequi aperiam neque. Et deleniti nostrum odit impedit ex. Possimus
						doloribus nemo officia aspernatur, nam dolorem vero. provident quasi! Ut minus veritatis sed atque, aut modi fugit? Veniam quos
						voluptatum harum cumque vero, numquam dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime reprehenderit aliquam
						natus non. Laudantium ex quos laboriosam, laborum nemo blanditiis, placeat eligendi sequi eius voluptatibus eum illum amet quisquam
						sit.
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus architecto perspiciatis odio voluptas deserunt enim ullam velit
						itaque
						at, illo iste dolor exercitationem magnam fugit pariatur praesentium facere in. Ullam?Lorem ipsum, dolor sit amet consectetur
						adipisicing elit. Odio cupiditate veniam a hic quia fugiat, modi aspernatur molestias sapiente suscipit expedita ab temporibus ad
						quibusdam asperiores odit unde, dolores id.
					</p>
					<hr />
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer class="bg-info bg-opacity-50">
		<div class="container d-flex justify-content-center text-white p-3">
			<span class="me-5 pe-5 fs-6">
				<address class="fw-bold">Head Office :</address>
				<p>Jalan Medan Merdeka Barat No. 9 Jakarta Pusat 10110 DKI Jakarta, Indonesia</p>
				<p>Telepon : 081-319301-010</p>
				<p>Emai : aninur.h@gmail.com</p>
			</span>
			<span class="ms-5">
				<address class="fw-bold">Social Media</address>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp iconsize"></i></a> Whatsapp
				</p>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram iconsize"></i></a> Instagram
				</p>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook iconsize"></i></a> Facebook
				</p>
			</span>
		</div>
	</footer>
	<!-- include file bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>