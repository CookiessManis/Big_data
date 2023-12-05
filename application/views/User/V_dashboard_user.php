
				<div id="container-content">
					
          <!-- card -->
          <div class="text-center" style="padding-left: 3rem;">
            <div class="d-flex justify-content-around py-5 " >
              <!-- Dashboard info widget 1-->
              <div
                class="card card-sizingDas border-start-lg border-start-primary "
              >
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between">
                        <div class="value-dashboard text-start fw-bold">
                          <?= $jumlahNama ?>
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
              <div
                class="card card-sizingDas border-start-lg border-start-primary "
              >
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between">
                        <div class="value-dashboard text-start fw-bold"><?= $jumlah_perpindahan ?></div>
                        <div>
                          <img
                            src="<?= base_url('assets/img/dashboard/icon-user.png') ?>"
                            alt=""
                          />
                        </div>
                      </div>

                      <div class="text-start pegawai-dashboard">
                        Perpindahan Jabatan
                      </div>
                      <div
                        class="text-xs fw-bold keterangan-dashboard text-start"
                      >
                        Jumlah Pegawai Aktif
                      </div>
                    </div>
                    <div class="ms-2">
                      <i class="fas fa-dollar-sign fa-2x text-gray-200"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="card card-sizingDas border-start-lg border-start-primary "
              >
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between">
                        <div class="value-dashboard text-start fw-bold">
                          <?= $jumlah_kenaikan ?>
                        </div>
                        <div>
                          <img
                            src="<?= base_url('assets/img/dashboard/icon-user.png') ?>"
                            alt=""
                          />
                        </div>
                      </div>

                      <div class="text-start pegawai-dashboard">
                        Kenaikan Jabatan
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

          <!-- pengumuman -->
          <div class="pengumuman-container ">
            <div class="card mx-auto pengumuman border border-dark ">
              <div class="card-header">
                <h1 class="pengumuman-text fw-semibold text-center pt-3">
                  Pengumuman
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

        <!-- end table -->

</html>
