
        <!-- content -->

        <div id="container-content">
					
          <!-- card -->
          <div class="container text-center">
            <h1 style="padding-top: 15px; font-size: 50px" class="fw-semibold">
              Pendaftaran Uji Kompetensi <br />SATUAN POLISI PAMONG PRAJA
            </h1>
            <div class="d-flex justify-content-around py-5">
              <div
                class="card card-sizing border-start-lg border-start-primary h-100"
                style="background-color: #a1c6f2; cursor: pointer"
                onclick="location.href='<?= base_url('User/C_perpindahan_jabatan') ?>'"
              >
                <div class="card-body">
                  <div class="d-flex">
                    <h1
                      style="padding-top: 28px; font-size: 35px"
                      class="fw-semibold text-dark"
                    >
                      Perpindahan Jabatan
                    </h1>
                    <div style="padding-top: 45px; padding-left: 45px">
                      <img
                        class="px-2 py-2"
                        src="<?= base_url('assets/img/dashboard/arrow.png') ?>"
                        style="background-color: #bdd7f6; border-radius: 20px"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>

							
              <div
                class="card card-sizing border-start-lg border-start-primary h-100"
                style="background-color: #a1c6f2; cursor: pointer"
                onclick="location.href='<?= base_url('User/C_kenaikan_jabatan') ?>'"
              >
                <div class="card-body">
                  <div class="d-flex">
                    <h1
                      style="padding-top: 28px; font-size: 35px"
                      class="fw-semibold text-dark"
                    >
                      Kenaikan Jabatan
                    </h1>
                    <div style="padding-top: 45px; padding-left: 45px">
                      <img
                        class="px-2 py-2"
                       src="<?= base_url('assets/img/dashboard/arrow.png') ?>"
                        style="background-color: #bdd7f6; border-radius: 20px"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end card -->

          <!-- content -->

	<div style="width:77rem;padding-left:120px;">
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
						</div>
					
          <div style="padding-top: 75px; padding-bottom: 35px">
					
            <div
              class="container-table"
            >
              <table
                style="width: 100%; border-collapse: collapse"
                class="mx-auto"
              >
                <thead>
                  <tr
                    class="fw-semibold"
                    style="font-size: 25px; background-color: #a1c6f2"
                  >
                    <th
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                        text-align: center;
                      "
                    >
                      #
                    </th>
                    <th
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                        text-align: center;
                      "
                    >
                      NIP
                    </th>
                    <th
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                        text-align: center;
                      "
                    >
                      Nama
                    </th>
                    <th
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                        text-align: center;
                      "
                    >
                      Status
                    </th>
                    <th
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                        text-align: center;
                      "
                    >
                      Detail
                    </th>
                    <th
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                        text-align: center;
                      "
                    >
                      Hapus
                    </th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php  
                  
                  $no = 1;
                  foreach ($uji_kompetensi as $u) {
										
                 if ($u->username == $session_user->username) { ?>


                  <tr class="text-start fw-semibold" style="font-size: 20px">
                    <td
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                      "
                    >
                      <?= $no++; ?>
                    </td>

                    <td
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                      "
                    >
                      <?= $u->nip; ?>
                    </td>
                    <td
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                      "
                    >
                      <?= $u->nama; ?>
                    </td>
                    <td
                      class="px-2 py-3"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                      "
                    >
                      <?= $u->status; ?>
                    </td>



                    <?php if ($u->status == 'kenaikan jabatan') {?>
                    <td
                      class="px-2 py-3 text-center"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                      "
                    >
                      <a href="<?= base_url('User/C_kenaikan_jabatan/view_edit/'.$u->id_kenaikan) ?>">
                      <button
                        class="btn text-white"
                        style="background-color: #fec007"
                      >
                        Detail
                      </button>
									</a>
                    </td><?php }else{ ?>
                    <td
                      class="px-2 py-3 text-center"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                      "
                    >
                      <a href="<?= base_url('User/C_perpindahan_jabatan/view_edit/'.$u->id_kenaikan) ?>">
                      <button
                        class="btn text-white"
                        style="background-color: #fec007"
                      >
                        Detail
                      </button>
									</a>
                    </td><?php } ?>
										
                    <td
                      class="px-2 py-3 text-center"
                      style="
                        border-right: 1px solid black;
                        border-bottom: 1px solid black;
                      "
                    >
                      <button class="btn btn-danger text-white"  data-bs-toggle="modal" data-bs-target="#ModalHapus<?= $u->id_kenaikan ?>">Hapus</button>
                    </td>
                  </tr>
                </tbody>
<?php }} ?>

              </table>
            </div>
          </div>

          
        <!-- end table -->

        <!-- end content -->


				<!-- Modal -->
<?php foreach($uji_kompetensi as $u){ ?>
<?php if($u->id_kenaikan !== null){ ?>


<div class="modal fade" id="ModalHapus<?= $u->id_kenaikan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>Apakah Anda Yakin Ingin Menghapus Data (<?= $u->nama?>)</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="<?= base_url('User/C_uji_kompetensi/delete/' . $u->id_kenaikan) ?> " class="btn btn-danger px-1"> Hapus</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<?php } ?>


