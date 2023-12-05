<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Login</title>

    <!-- cdn bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- css -->
    <link rel="stylesheet"  href="<?= base_url('assets/src/style.css') ?>" />
  </head>
  <body
    class="w-100 h-100"
    style="background-image: url('<?= base_url('assets/img/login/background-login.jpg') ?>')"
  >

	

    <section>
      <div class="d-flex justify-content-lg-between">
        <div class="logo-container">
          <img src="<?= base_url('assets/img/login/logo.svg') ?>" width="97" alt="" />
        </div>
        <div class="logo-text">
          <h1 class="text-white text-center fw-semibold logo-text-name">
            Data Center <br />
            Satuan Polisi Pamong Praja
          </h1>
        </div>
      </div>

      <div class="container-login pb-5">
        <div class="d-flex justify-content-lg-between">
          <div class="login">
						 <?php
		if($this->session->flashdata('pesan')){
echo '<div class="w-100 mx-auto py-3">
	<div class="bg-warning rounded alert alert-warning alert-dismissible fade show">
		<span class="text-center text-gray fw-semibold ">⚠';
		echo $this->session->flashdata('pesan');
echo '</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
</div>';
}
	?>
            <div class="d-flex">
              <img src="<?= base_url('assets/img/login/login.svg') ?>" width="40" alt="" />

							
              <span class="">
                <h2 class="pt-1 ps-1 fw-normal font-logo">Selamat Datang</h2>
              </span>
            </div>
            <form method="POST" action="<?php echo base_url('index.php/C_login')?>">
            <div class="container-form-login">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">👤</span>
                <input
                  type="text"
                  class="form-control input-login"
                  placeholder="Username"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                  name="username"
                  id="username"
                />
              </div>
              <div class="input-group pt-3">
                <span class="input-group-text" id="basic-addon1">🔐</span>
                <input
                  type="password"
                  class="form-control input-login"
                  placeholder="Password"
                  aria-label="Password"
                  aria-describedby="basic-addon1"
                  name="password"
                  id="password"
                />
              </div>
            </div>
            <div class="btn-container">
              <a href="<?= base_url('C_login/view_registrasi'); ?>">
                <button type="submit" class="btn-login">Masuk</button>
              </a>
            </div>
            <a href="<?= base_url('C_login/view_registrasi'); ?>">
              <p class="text-center text-link-register">Registrasi Akun</p>
            </a>
          </div>
        </form>
          <div class="img-section">
            <img
              class="img-login"
              src="<?= base_url('assets/img/login/login-section-1.png') ?>"
              width="520"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- script bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
