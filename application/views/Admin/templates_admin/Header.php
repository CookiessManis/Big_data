
<section class="main">
        <!-- hamburger menu -->
        <div class="menu-container py-2 d-flex justify-content-between">
          <a class="icon-hamburger px-2 py-2" id="menu">
            <img
              src="<?= base_url('assets/images/menu.svg') ?>"
              class="container-ham"
              alt="menu"
            />
          </a>

          <div class="dropdown px-4 container-dropdown">
            <img
              src="<?= base_url('assets/img/dashboard/logo-right.png') ?>"
              alt=""
              data-bs-toggle="dropdown"
              aria-expanded="false"
              class="dropdown-toggle"
            />
            <ul class="dropdown-menu">
                <li>
                <p
                  onclick="location.href='<?php echo base_url('C_login/logout')?>'"
                  class="dropdown-item-text dropdown-start"
                >
                  Logout
                </p>	
                  </li>
              </ul>
          </div>
        </div>
        <!-- end hamburger menu -->
