<!-- content -->
        <p class="fw-semibold container-text-jabatan text-center pt-2">
          Perpindahan Jabatan
        </p>
        <!-- table -->

        <div style="padding-top: 75px; padding-bottom: 35px">
          <div class="table-dashboard-container">
            <table
              style="width: 100%; border-collapse: collapse"
              class="mx-auto"
            >
              <thead>
                <tr class="fw-semibold" style="font-size: 25px">
                  <th
                    class="px-2 py-3"
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                      text-align: center;
                    "
                  >
                    Nama
                  </th>
                  <th
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                      text-align: center;
                    "
                  >
                    Keterangan
                  </th>
                  <th
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                      text-align: center;
                    "
                  >
                    Catatan
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($notif as $n) {
                  if ($session_user->username == $n->username ) {?>
                    
                  
                  
                    
                
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $n->nama; ?>
                  </td>
                  <td
                    class="px-2 py-3"
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <ol style="list-style-type: inherit">
                       <?php if ($n->surat_pernyataan != null) {?>
                        <li>  
                        <?= $n->surat_pernyataan; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->sk_pangkat != null) {?>
                        <li>  
                        <?= $n->sk_pangkat; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->pas_foto != null) {?>
                        <li>  
                        <?= $n->pas_foto; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->surat_usulan != null) {?>
                        <li>  
                        <?= $n->surat_usulan; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->surat_sehat != null) {?>
                        <li>  
                        <?= $n->surat_sehat; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->ijazah != null) {?>
                        <li>  
                        <?= $n->ijazah; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->portofolio != null) {?>
                        <li>  
                        <?= $n->portofolio; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->sertifikat_diklat != null) {?>
                        <li>  
                        <?= $n->sertifikat_diklat; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->dokumen_penetapan != null) {?>
                        <li>  
                        <?= $n->dokumen_penetapan; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->sk_terakhir != null) {?>
                        <li>  
                        <?= $n->sk_terakhir; ?>  
                        </li>
                      <?php } ?>
                      <?php if ($n->pak != null) {?>
                        <li>  
                        <?= $n->pak; ?>  
                        </li>
                      <?php } ?>
                    </ol>
                  </td>
                  <td
                    class="px-2 py-3"
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $n->catatan; ?>
                  </td>
                </tr> <?php }} ?>
              </tbody>
            </table>
          </div>
        </div>
