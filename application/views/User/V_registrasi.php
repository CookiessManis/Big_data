<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('assets/src/style.css') ?>" />
  </head>
  <body
    style="background-image: url(<?= base_url('assets/img/register/circle-register.jpg') ?>)"
  >
    <div class="logo-container">
      <img src="<?= base_url('assets/img/login/logo.svg') ?>" width="97" alt="" />
    </div>
    <form method="POST" action="<?php echo base_url('C_login/registrasi')?>">
    <div class="d-flex justify-content-between">
      <div class="container-register-form">
        <div class="register-text">
          <h1 class="text-center">Registrasi</h1>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">👤</span>
          <input
            type="text"
            class="form-control input-register"
            placeholder="Username"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="username"
            id="username"
						required

          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">📧</span>
          <input
            type="text"
            class="form-control input-register"
            placeholder="Email"
            aria-label="Email"
            aria-describedby="basic-addon1"
            name="email"
            id="email"
						required
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">🔐</span>
          <input
            type="Password"
            class="form-control input-register"
            placeholder="Password"
            aria-label="Password"
            aria-describedby="basic-addon1"
            name="password"
            id="password"
						required
          />
        </div>
        <div class="input-group mb-3">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">🌆</span>
          <select class="form-select input-register" name="instansi" id="instansi" aria-label="Default select example" style="color: gray;" required>
						<option selected   style="color: black;" >Pilih Kota</option>
						<option value="Kota_Jogja"  style="color: black;">Kota Jogja</option>
						<option value="Kabupaten_Sleman" style="color: black;">Kabupaten Sleman</option>
            <option value="Kabupaten_Kulonprogo" style="color: black;">Kabupaten Kulonprogo</option>
            <option value="Kabupaten_Bantul" style="color: black;">Kabupaten Bantul</option>
						<option value="Kabupaten_Gunungkidul" style="color: black;">Kabupaten Gunungkidul</option>
					</select>
        </div>
         
        </div>
        <div class="btn-container">
          
            <button type="submit" class="btn-register">Daftar</button>
          </a>
        </div>
      </form>
        <a href="<?= base_url('C_login') ?>">
          <p class="text-center text-link-register">Sudah Punya Akun?</p>
        </a>
      </div>
      <div class="container-image">
        <img
          class="img-register"
          src="<?= base_url('assets/img/register/picture-register.png') ?>"
          width="520"
          alt=""
        />
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
