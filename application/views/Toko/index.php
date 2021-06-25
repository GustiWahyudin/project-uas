<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="<?= base_url('Assets/'); ?>img/icon/logo.png">
    <meta charset="UTF-8">
    <title>Cake Shop</title>
    <link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/style.css">

    <!-- Custom Icon dari Font Awesome-->
    <link href="<?= base_url('Assets/'); ?>css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles dari Sb-admin-2-->
    <link href="<?= base_url('Assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('Assets/'); ?>js/jquery.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>js/count.js"></script>
    <script src="<?= base_url('Assets/'); ?>js/bootstrap.bundle.min.js"></script>


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            // https://dashboard.emailjs.com/admin/integration
            emailjs.init('YOUR_USER_ID');
        })();
    </script>
    <script type="text/javascript">
        window.onload = function() {
            document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault();
                // generate a five digit number for the contact_number variable
                this.contact_number.value = Math.random() * 100000 | 0;
                // these IDs from the previous steps
                emailjs.sendForm('contact_service', 'contact_form', this)
                    .then(function() {
                        console.log('SUCCESS!');
                    }, function(error) {
                        console.log('FAILED...', error);
                    });
            });
        }
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               <!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow pl-5 pr-5">

    <a class="navbar-brand" href="#">
        <img src="img/logo-kue.png" width="50px;" alt="">
        <!-- <img src="http://placehold.it/150x50?text=Logo" alt=""> -->
        <span class="h4"><b>Toko Kue</b></span>
    </a>
    <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart fa-fw"></i>
                <span>Keranjang</span>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter addToCartBtn" id="BadgeCardJumlah">0</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Message Center
                </h6>
                <div class="cart-items"></div>
                <div class="dropdown-item cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">$0</span>
                </div>
                <!-- Kalau mau aktifin tombol cukup tekan ctrl + / aja di button di bawah ini -->
                <button class="dropdown-item text-center text-primary" type="button"><a href="Toko/formcheckout"><b>Checkout</b></button>
            </div>
		
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="Toko/index" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>Logout</span>
             </a>
        </li>


    </ul>
</nav>
<!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- <div class="content"> -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">


<div class="row mb-4">
	<div class="col-md-3">
		<a href="Toko/kontak" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-phone fa-sm fa-fw text-white-50"></i><b> Hubungi Kami</b></a>
		<a href="Toko/tentangkami" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-user fa-sm fa-fw text-white-50"></i><b> Tentang Kami</b></a>
		
	</div>
	<div class="col-md-9">
		<marquee behavior="slide" direction="left" class="h3 mb-0 text-gray-800" scrollamount="30">❤💕 Selamat Datang Di Toko Kami 🍰🍰🍰</marquee>
	</div>
</div>
</div>
</div>


<!-- Bagian Pembelanjaan -->
<div class="row">

	<!-- Produk 1 -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col">
						<img src="<?= base_url('Assets/'); ?>img/kue/1.jpg" class="pb-4 prodimg rounded" alt="..." style="height: 180px; width: 100%; object-fit: cover; margin-left: auto; margin-right: auto; left: 0; right: 0; background-color: white;">
						<div class="font-weight-bold mb-1 prodnama">Rainbow Cake</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">Rp.300.000</div>

						<button type="button" class="mt-3 btn btn-primary btn-block pesanProd" onClick="onClick()">Beli</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Produk 2 -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col">
						<img src="<?= base_url('Assets/'); ?>img/kue/2.jpg" class="pb-4 prodimg rounded" alt="..." style="height: 180px; width: 100%; object-fit: cover; margin-left: auto; margin-right: auto; left: 0; right: 0; background-color: white;">
						<div class="font-weight-bold mb-1 prodnama">Red Velvet Cake</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800 prodharg">Rp.280.000</div>

						<button type="button" class="mt-3 btn btn-primary btn-block pesanProd" onClick="onClick()">Beli</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Produk 3 -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col">
						<img src="<?= base_url('Assets/'); ?>img/kue/3.jpg" class="pb-4 prodimg rounded" alt="..." style="height: 180px; width: 100%; object-fit: cover; margin-left: auto; margin-right: auto; left: 0; right: 0; background-color: white;">
						<div class="font-weight-bold mb-1 prodnama">Cheese Cake</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800 prodharg">Rp.100.000</div>

						<button type="button" class="mt-3 btn btn-primary btn-block pesanProd" onClick="onClick()">Beli</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Produk 4 -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col">
						<img src="<?= base_url('Assets/'); ?>img/kue/4.jpg" class="pb-4 prodimg rounded" alt="..." style="height: 180px; width: 100%; object-fit: cover; margin-left: auto; margin-right: auto; left: 0; right: 0; background-color: white;">
						<div class="font-weight-bold mb-1 prodnama">Black Forest Cake</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800 prodharg">Rp.300.000</div>

						<button type="button" class="mt-3 btn btn-primary btn-block pesanProd" onClick="onClick()">Beli</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Produk 5 -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col">
						<img src="<?= base_url('Assets/'); ?>img/kue/5.jpg" class="pb-4 prodimg rounded" alt="..." style="height: 180px; width: 100%; object-fit: cover; margin-left: auto; margin-right: auto; left: 0; right: 0; background-color: white;">
						<div class="font-weight-bold mb-1 prodnama">Lego Cake</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800 prodharg">Rp.400.000</div>

						<button type="button" class="mt-3 btn btn-primary btn-block pesanProd" onClick="onClick()">Beli</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Produk 6 -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col">
						<img src="<?= base_url('Assets/'); ?>img/kue/6.jpg" class="pb-4 prodimg rounded" alt="..." style="height: 180px; width: 100%; object-fit: cover; margin-left: auto; margin-right: auto; left: 0; right: 0; background-color: white;">
						<div class="font-weight-bold mb-1 prodnama">Minion Cake</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800 prodharg">Rp.400.000</div>

						<button type="button" class="mt-3 btn btn-primary btn-block pesanProd" onClick="onClick()">Beli</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Produk 7 -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col">
						<img src="<?= base_url('Assets/'); ?>img/kue/7.jpg" class="pb-4 prodimg rounded" alt="..." style="height: 180px; width: 100%; object-fit: cover; margin-left: auto; margin-right: auto; left: 0; right: 0; background-color: white;">
						<div class="font-weight-bold mb-1 prodnama">Unicorn Cake</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800 prodharg">Rp.400.000</div>

						<button type="button" class="mt-3 btn btn-primary btn-block pesanProd" onClick="onClick()">Beli</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Produk 8 -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col">
						<img src="<?= base_url('Assets/'); ?>img/kue/9.jpeg" class="pb-4 prodimg rounded" alt="..." style="height: 180px; width: 100%; object-fit: cover; margin-left: auto; margin-right: auto; left: 0; right: 0; background-color: white;">
						<div class="font-weight-bold mb-1 prodnama">Doraemon Cake</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800 prodharg">Rp.400.000</div>

						<button type="button" class="mt-3 btn btn-primary btn-block pesanProd" onClick="onClick()">Beli</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- Footer -->
</div>
<!-- Page Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Cake Shop 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('Toko/'); ?> index.php">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Custom scripts for all pages-->
<script src="<?= base_url('Assets/'); ?>js/sb-admin-2.min.js"></script>
<!-- <script src="js/script.js"></script> -->

<!-- Core plugin JavaScript-->
<script src="<?= base_url('Assets/'); ?>js/jquery.easing.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('Assets/'); ?>js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('Assets/'); ?>js/chart-area-demo.js"></script>
<script src="<?= base_url('Assets/'); ?>js/chart-pie-demo.js"></script>


</html>