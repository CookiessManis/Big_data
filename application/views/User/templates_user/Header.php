<?php
$CI = &get_instance();
$CI->load->database();

$username =  $session_user->username; ; // Ganti dengan nilai yang sesuai


$CI->db->select('count(notif.status) as jumlah_notif, notif.id_notif,  notif.judul, kenaikan_jabatan.username as user');
$CI->db->from('notif');
$CI->db->join('kenaikan_jabatan', 'kenaikan_jabatan.id_kenaikan = notif.id_kenaikan');
$CI->db->where('notif.status', 1);
$CI->db->where('kenaikan_jabatan.username', $username);

$query = $CI->db->get();
$result = $query->result();

?>

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

          <div class="d-flex">
            <div class="pt-3">
              <button
                type="button"
                class="btn btn-primary position-relative rounded-5 dropdown"
                data-bs-toggle="dropdown"
              >
                🔔
                <span
                  class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                >
                <?php foreach ($result as $j) {?>
                  
                  <?= $j->jumlah_notif; ?>
                 <?php } ?>
                  
                  <span class="visually-hidden">unread messages</span>
                </span>

                <div class="dropdown-menu">
                  <div class="card" style="width: 450px">
                    <div class="card-header bg-white">notifikasi</div>
                    <div class="overflow-auto">
                      <div class="card-body">
                        <table class="table">

                          <?php 
                          $no=1;
                          foreach ($notif as $n ) {
                          if ($session_user->username == $n->username AND $n->status == 1) {?>
                          <tr>
                            <td onclick="location.href='<?= base_url('C_notif/sudah_dibaca/'.$n->id_notif) ?>'"><?= $no++; ?>.</td>
                            <td onclick="location.href='<?= base_url('C_notif/sudah_dibaca/'.$n->id_notif) ?>'"><?= $n->judul; ?></td>
                          </tr>
                          <?php }} ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </button>
            </div>
            <div class="dropdown px-4 container-dropdown">
              <img
                src="<?= base_url('assets/img/dashboard/logo-right.png') ?>"
                alt=""
                width="50"
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
        </div>
        
        
        <!-- end hamburger menu -->
