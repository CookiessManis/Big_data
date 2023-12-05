<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      href="https://www.cssscript.com/demo/sticky.css"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url('assets/src/style.css') ?>" />
    <title>Halaman Utama</title>
  </head>
  <body>
    <!-- sidebar -->
    <div class="container-sidebar">
      <aside class="sidebar">
        <ul class="menu-list">
          <li>
            <div id="logo-satpolpp">
              <img src="<?= base_url('assets/img/login/logo.svg') ?>" width="50" alt="" />
            </div>
          </li>
          <li>
            <a href="<?= base_url('C_dashboard/dashboard_user') ?>">
              <button class="icon" id="search">
                <div class="">
                  <img src="<?= base_url('assets/images/home.png') ?>" width="35" alt="search" />
                  <span class="text1">Home</span>
                </div>
              </button>
            </a>
          </li>
          <li>
            <a href="<?= base_url('User/C_uji_kompetensi/') ?>">
              <button class="icon" id="kompe_user">
                <div class="d-flex flex-column">
                  <img
                    src="<?= base_url('assets/img/dashboard/ujian_kompetensi.png') ?>"
                    class="mx-auto"
                    width="35"
                    alt="search"
                  />
                  <span class="text2">Ujian Kompetensi </span>
                </div>
              </button>
            </a>
          </li>
					<li>
						<a href="<?= base_url('C_notif') ?>">
              <button class="icon" id="notifikasi">
                <div class="d-flex flex-column">
                  <img
                    src="<?= base_url('assets/img/dashboard/notification.png') ?>"
                    class="mx-auto"
                    width="35"
                    alt="search"
                  />
                  <span class="text3">notifikasi </span>
                </div>
              </button>
            </a>
					</li>
        </ul>
      </aside>
