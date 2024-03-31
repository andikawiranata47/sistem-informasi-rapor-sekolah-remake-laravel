<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul ?></title>
    <!-- plugins:css -->
    <!-- <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css"> -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <!-- <link rel="stylesheet" href="../../assets/css/style.css"> -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <!-- <link rel="shortcut icon" href="../../assets/images/favicon.png" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth"
                style="background: #97E7E1; background-size: cover;">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo d-flex justify-content-center">
                                <img class="mb-2 mr-2" style="width: 30px" src="../../assets/images/logo1.svg">
                                <h1 class="d-inline" style="color: #001737;">Registration</h1>
                            </div>


                            <form class="" action="/registration" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror" id=""
                                        placeholder="Nama" style="font-size: 14px" required value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" name="nip"
                                        class="form-control @error('nip') is-invalid @enderror" id=""
                                        placeholder="NIP/NIK" style="font-size: 14px" required
                                        value="{{ old('nip') }}">
                                    @error('nip')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id=""
                                        placeholder="Email" style="font-size: 14px" required
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id=""
                                        placeholder="Password" style="font-size: 14px" required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-4 mb-2 d-flex justify-content-center">
                                    <button type="submit" class="w-100 btn btn-primary btn-lg">Registration</button>
                                    </a>

                                </div>
                                <small class="text-center">Sudah punya akun?
                                    <a href="/login">Login</a>
                                </small>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="../../assets/vendors/js/vendor.bundle.base.js"></script> -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script> -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>
