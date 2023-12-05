

        <!-- content -->

        <div id="container-content">
					
          <!-- card -->
          <div class="text-center" style="padding-left: 3rem;">
						
            <div class="d-flex justify-content-center py-5">
              <!-- Dashboard info widget 1-->
              <div class="px-3">
								
                <div
                  class="card card-sizing border-start-lg border-start-primary h-100"
                >
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1">
                        <div class="d-flex justify-content-between">
                          <div class="value-dashboard text-start fw-bold">
                            <?= $get_admin ?>
                          </div>
                          <div>
                            <img
                              src="<?= base_url('assets/img/dashboard/icon-user.png') ?>"
                              alt=""
                            />
                          </div>
                        </div>

                        <div class="text-start pegawai-dashboard">
                          Jumlah Pegawai
                        </div>
                        <div
                          class="text-xs fw-bold keterangan-dashboard text-start"
                        >
                          Jumlah keseluruhan pegawai satpol pp diy
                        </div>
                      </div>
                      <div class="ms-2">
                        <i class="fas fa-dollar-sign fa-2x text-gray-200"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="card card-sizing border-start-lg border-start-primary h-100"
              >
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between">
                        <div class="value-dashboard text-start fw-bold">
                          <?= $total_kenaikan ?>
                        </div>
                        <div>
                          <img
                            src="<?= base_url('assets/img/dashboard/icon-user.png') ?>"
                            alt=""
                          />
                        </div>
                      </div>

                      <div class="text-start pegawai-dashboard">
                        Jumlah Pegawai
                      </div>
                      <div
                        class="text-xs fw-bold keterangan-dashboard text-start"
                      >
                        Jumlah keseluruhan pegawai satpol pp diy
                      </div>
                    </div>
                    <div class="ms-2">
                      <i class="fas fa-dollar-sign fa-2x text-gray-200"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end card -->

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
          <!-- pengumuman -->
          <div class="pengumuman-container">
						<!-- alert -->
						
						<!-- alert -->
           <div class="card mx-auto pengumuman border border-dark ">
              <div class="card-header">
                <h1 class="pengumuman-text fw-semibold text-center pt-3">
                  Pengumuman

                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#pengumuman<?= $pengumuman->id_pengumuman; ?>"
                  >
                    <img
                      src="<?= base_url('assets/img/dashboard/settings.png') ?>"
                      class="end-0 position-absolute pe-3"
                      alt=""
                    />
                  </a>
                </h1>
              </div>
              <div class="card-body">
                <p>
                 <?= $pengumuman->pengumuman; ?>
                </p>
              </div>
            </div>
          </div>
        </div>

       <!-- Modal -->
        <div
          class="modal fade"
          id="pengumuman<?= $pengumuman->id_pengumuman; ?>"
          data-bs-backdrop="static"
          data-bs-keyboard="false"
          tabindex="-1"
          aria-labelledby="staticBackdropLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('C_dashboard/edit_pengumuman') ; ?>" method="post">
              <div class="modal-body">
                <div class="py-3">
                  <h1 class="text-center">Pengumuman</h1>
                  <textarea name="pengumuman" cols="55" rows="10"><?php echo"$pengumuman->pengumuman" ?></textarea>
                </div>
                <input type="hidden"
                name="id_pengumuman"
                value="<?= $pengumuman->id_pengumuman; ?>">
              </div>
              <div class="modal-footer d-flex justify-content-between">
                <button
                  type="button"
                  class="btn btn-danger"
                  data-bs-dismiss="modal"
                >
                  Kembali
                </button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              
            </div>
					</form>
          </div>
        </div>
        <!-- end table -->

        <!-- end content -->
