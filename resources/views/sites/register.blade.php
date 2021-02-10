<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{config('sekolah.logo_url')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('/frontend')}}/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url({{asset('/frontend')}}/images/background/bg2.jpg);">
			<a href="/"><img src="{{config('sekolah.logo_url')}}" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Silahkan Daftarkan Diri Anda<span>  Sekarang</span></h2>
					<p>Login dengan Akun yang sudah ada<a href="/login">  Klik Disini</a></p>
				</div>	
					{!! Form::open(['url' => '/postregister','class' => 'contact-bx']) !!}
					<div class="row placeani">
						
						<div class="col-lg-12">
							<!--
							<div class="form-group">
								<div class="input-group">
									<label>Your Name</label>
									<input name="dzName" type="text" required="" class="form-control">
								</div>
							</div>
							-->
							{!!Form::text('nama_depan','',['class' => 'form-control', 'placeholder' => 'Nama Depan'])!!}
						</div>

						<div class="col-lg-12">
							{!!Form::text('nama_belakang','',['class' => 'form-control', 'placeholder' => 'Nama Belakang'])!!}
						</div>

						<div class="col-lg-12">
							{!!Form::text('agama','',['class' => 'form-control', 'placeholder' => 'Agama'])!!}
						</div>

						<div class="col-lg-12">
							{!!Form::textarea('alamat','',['class' => 'form-control', 'placeholder' => 'Alamat'])!!}
						</div>

						<div class="col-lg-12">
							{!!Form::select('jenis_kelamin', [''=>'Pilih Jenis Kelamin','L' => 'Laki-Laki', 'P' => 'Perempuan'],['class' => 'form-select']);!!}
						</div>

						<div class="col-lg-12">
							{!!Form::email('email','',['class' => 'form-control', 'placeholder' => 'Email'])!!}
						</div>
						<div class="col-lg-12">
							{!!Form::password('password',['class' => 'form-control', 'placeholder' => 'Password'])!!}
						</div>
						<div class="col-lg-12 m-b30">
							<br>
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>

						
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="{{asset('/frontend')}}/js/jquery.min.js"></script>
<script src="{{asset('/frontend')}}/vendors/bootstrap/js/popper.min.js"></script>
<script src="{{asset('/frontend')}}/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('/frontend')}}/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="{{asset('/frontend')}}/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="{{asset('/frontend')}}/vendors/magnific-popup/magnific-popup.js"></script>
<script src="{{asset('/frontend')}}/vendors/counter/waypoints-min.js"></script>
<script src="{{asset('/frontend')}}/vendors/counter/counterup.min.js"></script>
<script src="{{asset('/frontend')}}/vendors/imagesloaded/imagesloaded.js"></script>
<script src="{{asset('/frontend')}}/vendors/masonry/masonry.js"></script>
<script src="{{asset('/frontend')}}/vendors/masonry/filter.js"></script>
<script src="{{asset('/frontend')}}/vendors/owl-carousel/owl.carousel.js"></script>
<script src="{{asset('/frontend')}}/js/functions.js"></script>
<script src="{{asset('/frontend')}}/js/contact.js"></script>
<script src="{{asset('/frontend')}}/vendors/switcher/switcher.js"></script>
</body>

</html>
