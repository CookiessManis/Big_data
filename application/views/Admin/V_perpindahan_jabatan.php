
        <!-- content -->

        <div style="padding-top: 75px; padding-bottom: 35px">
          <h2
            class="text-center fw-semibold"
            style="font-size: 40px; padding-bottom: 80px"
          >
            Perpindahan Jabatan
          </h2>

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
						
          <div class="d-flex justify-content-end px-5">
            <!--  -->
            <div
              class="dropdown"
              style="
                border: 1px solid black;
                border-collapse: collapse;
                border-radius: 5px;
                box-shadow: 0px 1px 7px rgba(0, 0, 0, 0.5);
              "
            >
              <select class="btn dropdown-toggle fw-semibold" id="instansi" style="background-color: white">
                    <option selected class="text-center">Kabupaten Kota</option>
                    <option  value="Kota_Jogja">Kota Jogja</option>
                    <option  value="Kabupaten_Sleman">Kabupaten Sleman</option>
                    <option  value="Kabupaten_Kulonprogo">Kabupaten Kulonprogo</option>
                    <option  value="Kabupaten_Bantul">Kabupaten Bantul</option>
                    <option  value="Kabupaten_Gunungkidul">Kabupaten Gunungkidul</option>
                </select>
            </div>
          </div>
					<div style="padding-top: 75px; padding-bottom: 35px; padding-left: 20px">
          <div
            class="container-table"
          >
            <table
              style="width: 100%; border-collapse: collapse"
              class="mx-auto"
              id="jabatan"
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
                    No
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
                    Tanggal Isi
                  </th>
                  <th
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                      text-align: center;
                    "
                  >
                    Kelengkapan Dokumen
                  </th>
                  <th
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                      text-align: center;
                    "
                  >
                    Data Unduh
                  </th>
                  <th
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                      text-align: center;
                    "
                  >
                    Hapus Data
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php  $no =1;
                foreach ($perpindahan_jabatan as $p) {
                  if ($p->status == 'perpindahan jabatan') {
                  ?>
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
                    <?= $p->nip; ?>
                  </td>
                  <td
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $p->nama; ?>
                  </td>
                  <td
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $p->tanggal; ?>
                  </td>
                  <td
                    class="px-2 py-3 text-center"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <button
                      class="btn text-white px-4"
                      style="background-color: #587bfd"
                      data-bs-toggle="modal"
                      data-bs-target="#detail<?= $p->id_kenaikan; ?>"
                    >
                      Detail
                    </button>
                  </td>
                  <td
                    class="px-2 py-3 text-center"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <button
                      class="btn text-white px-4"
                      style="background-color: #fec007"
											onclick="downloadZip<?= $p->id_kenaikan ?>()"
                    >
                      Unduh
                    </button>
                  </td>
                  <td
                    class="px-2 py-3 text-center px-4"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                 <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#HapusModal<?= $p->id_kenaikan ?>">Hapus</button>
                  </td>
                </tr>
                <?php }} ?>
              </tbody>
            </table>
          </div>
        </div>
        </div>

				<!-- Modal -->
<?php  foreach ($perpindahan_jabatan as $p) { ?>

<div class="modal fade" id="HapusModal<?= $p->id_kenaikan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>Apakah Anda Ingin Menghapus Data (<?= $p->nama ?>)</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       	<a href="<?= base_url('Admin/C_perpindahan_jabatan/delete/' . $p->id_kenaikan) ?> " class=" btn btn-danger "> Hapus</a>

      </div>
    </div>
  </div>
</div>
<?php } ?>


				<!-- donwload ZIP -->

				<script>
<?php foreach($perpindahan_jabatan as $value) { ?>
    function downloadZip<?= $value->id_kenaikan ?>() {
        var zip = new JSZip();
				 var baseUrl = 'http://localhost:8080/bigdata/';

        <?php
        $fileFields = [
            'surat_pernyataan',
            'sk_pangkat',
            'pas_foto',
            'surat_usulan',
            'surat_sehat',
            'ijazah',
            'portofolio',
            'sertifikat_diklat',
            'dokumen_penetapan',
            'sk_terakhir',
            'pak'
        ];

        foreach ($fileFields as $field) {
            ?>
           zip.file("Perpindahan_jabatan(<?= $value->nama ?>)/<?= $value->{$field} ?>", fetchContent(baseUrl + '/assets2/files/<?= $value->{$field} ?>'));
            <?php
        }
        ?>

        zip.generateAsync({ type: "blob" })
            .then(function (blob) {
                var link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                link.download = "<?= $value->nama ?>.zip";

                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
    }
<?php } ?>

function fetchContent(url) {
    console.log('Fetching content from:', url); // Debugging statement
    return fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.blob(); // Fetch as blob for binary data
        })
        .catch(error => console.error('Error fetching content:', error));
}
</script>




        <!-- Modal Detail -->
        <?php foreach ($perpindahan_jabatan as $k) {?>
        <div
          class="modal fade"
          id="detail<?= $k->id_kenaikan; ?>"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                  Modal title
                </h1>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <div style="padding-top: 75px; padding-bottom: 35px">
                  <div
                    style="
                      border: 1px solid black;
                      border-radius: 8px;
                      overflow: hidden;
                      width: 900px;
                      margin: 20px auto;
                    "
                  >
                    <table
                      style="width: 100%; border-collapse: collapse"
                      class="mx-auto"
                    >
                      <thead>
                        <tr class="fw-semibold" style="font-size: 25px">
                          <th
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                              text-align: center;
                            "
                          >
                            Keterangan
                          </th>
                          <th
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                              text-align: center;
                            "
                          >
                            Detail
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <form action="<?= base_url('C_notif/tambah_notif_perpindahan_jabatan') ?>" method="post">
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Surat Pernyataan mengikuti Uji Komptensi
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="surat_pernyataan" value="Surat Pernyataan mengikuti Uji Komptensi anda masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            SK Pangkat Terakhir
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="sk_pangkat" value="SK Pangkat Terakhir masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Oas Foto Berwarna 4X6 (2 lembar)
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="pas_foto" value="Pas Foto Berwarna 4X6 (2 lembar) masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Surat Usulan peserta uji kompetensi ditandangani
                            Kepala Daerah / Sekda
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="surat_usulan" value="Surat Usulan peserta uji kompetensi ditandangani
                            Kepala Daerah / Sekda masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Surat Keterangan Sehat dari Dokter
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="surat_sehat" value="Surat Keterangan Sehat dari Dokter masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Fotocopy Ijazah Terakhir
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="ijazah" value="Fotocopy Ijazah Terakhir masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Portofolio
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="portofolio" value="Portofolio masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Sertifikat Diklat Dasar
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="sertifikat_diklat" value=" sertifikat diklat masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Dokumen Penetapan Formasi
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox"  name="dokumen_penetapan" value=" Dokumen Penetapan Formasi masih kosong" style="width: 100%" />
                          </td>
                        </tr>
                       
                        <tr
                          class="text-start fw-semibold"
                          style="font-size: 20px"
                        >
                          <td
                            class="px-2 py-3"
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                          >
                            Penilaian Angka Kredit (PAK) komulatif <br />
                            pada jenjang jabatan telah terpenuhi <br />
                            dan pada pangkat golongan/ruang (II/b) keatas wajib
                            <br />
                            ada unsur nilai pengembangan profesi
                          </td>
                          <td
                            style="
                              border-right: 1px solid black;
                              border-bottom: 1px solid black;
                            "
                            class="px-3"
                          >
                            <input type="checkbox" name="pak" value="Penilaian Angka Kredit (PAK) komulatif 
                            pada jenjang jabatan telah terpenuhi 
                            dan pada pangkat golongan/ruang (II/b) keatas wajib 
                            ada unsur nilai pengembangan profesi masih kosong" style="width: 100%" />
                            <input type="hidden" name="id_kenaikan" value="<?= $k->id_kenaikan; ?>">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <h2 class="px-4">Catatan</h2>
                  <div style="padding-left: 55px">
                    <textarea name="catatan" id="" cols="120" rows="10"></textarea>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <button type="submit" class="btn btn-primary">
                  Save changes
                </button>
              </div>
            </div>
          </div>
        </div>
                  </form>
                  <?php } ?>

                  
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function(){
      $("#instansi").change(function(){
        jabatan();
      });
    });

    function jabatan(){
      var instansi = $("#instansi").val();
      $.ajax({
        <?php foreach ($perpindahan_jabatan as $p) { ?>
          url: "<?= base_url('Admin/C_perpindahan_jabatan/load_user/' . $p->id_kenaikan) ?>",
          <?php } ?>
          data: "instansi=" + instansi,
          success:function(data){
            $("#jabatan tbody").html(data);
          }
      })
    }
   </script>
        <!-- end section -->

        <!-- end content -->
