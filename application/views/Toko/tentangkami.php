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

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><img src="<?= base_url('Assets/'); ?>img/kue/4.jpg"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class=" font-weight-bold text-primary h2 text-dark mb-4">Tentang Kami</h1>
              </div>

              <input type="hidden" name="contact_number">
              <div class="form-group row">
                <code>
                  <h4>Web ini dibuat untuk menyelesaikan tugas dan mendapatkan nilai Ujian Akhir Semester (UAS) pada bidang studi Web Programming.
                  </h4>
                </code>

                <a href="/toko-kue/toko" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left fa-sm fa-fw text-white-50"></i><b> Kembali</b></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

</body>

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