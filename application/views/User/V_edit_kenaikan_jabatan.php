
        <!-- content -->
        
        <!-- section satpolpp -->
        <div class="text-center fw-semibold text-1" style="padding-left: 20px">
          <p class="fw-semibold" style="font-size: 50px; color: black">
            Kenaikan Jabatan
          </p>
					<form action="<?= base_url('User/C_kenaikan_jabatan/edit') ; ?>" enctype="multipart/form-data" method="post">
          <div class="container">
            <div class="row">
              <div class="col-6 d-flex flex-column">
                <label for="" class="text-start">NIP</label>
                <input type="text" class="form-control" value="<?= $k->nip; ?>" name="nip" />
              </div>
              <div class="col-6">
                <label
                  for="Tanggal"
                  class="d-flex flex-column text-start"
                  style="padding-left: 110px"
                  >Tanggal Isi</label
                >
                <div style="padding-left: 110px">
                  <input type="date" class="form-control" value="<?= $k->tanggal; ?>" name="tanggal" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="" class="d-flex flex-column text-start"
                    >Nama</label
                  >
                  <input type="text" class="form-control" value="<?= $k->nama; ?>" name="nama" />
                  <input type="hidden" class="form-control" value="<?= $k->id_kenaikan; ?>" name="id_kenaikan" />
                  <!-- catatan cek untuk yg status dan pegawai apakah perlu di ubah atau tdak -->
                   <!-- <input type="hidden"  name="status" id="status" value="kenaikan jabatan">  -->
                  <!-- <input type="hidden"  name="id_pegawai" > -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- table -->

        <div style="padding-top: 75px; padding-bottom: 35px">
          <div
           class="container-table"
          >
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
                    Keterangan
                  </th>
                  <th
                    colspan="3"
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
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Surat Pernyataan mengikuti Uji Komptensi
                  </td>
                  <td
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <div class="d-flex">
											<input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="surat_pernyataan"
                      value="<?= $k->surat_pernyataan; ?>"
                    />
											<input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="surat_pernyataan"
                      value="<?= $k->surat_pernyataan; ?>"
                    />
										<input type="text" class="form-control" value=<?= $k->surat_pernyataan ?>>
										</div>
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    SK Pangkat Terakhir
                  </td>
                  <td
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <div class="d-flex">
											<input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="sk_pangkat"
                      value="<?= $k->sk_pangkat; ?>"
                    />
											<input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="sk_pangkat"
                      value="<?= $k->sk_pangkat; ?>"
                    />
										<input type="text" class="form-control" value=<?= $k->sk_pangkat ?>>
										</div>
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Oas Foto Berwarna 4X6 (2 lembar)
                  </td>
                  <td
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="pas_foto"
                      value="<?= $k->pas_foto; ?>"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="pas_foto"
                      value="<?= $k->pas_foto; ?>"
                    />
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Surat Usulan peserta uji kompetensi ditandangani Kepala
                    Daerah / Sekda
                  </td>
                  <td
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="surat_usulan"
                      value="<?= $k->surat_usulan; ?>"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="surat_usulan"
                      value="<?= $k->surat_usulan; ?>"
                    />
										<span><?= $k->surat_usulan; ?></span>
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Surat Keterangan Sehat dari Dokter
                  </td>
                  <td
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="surat_sehat"
                      value="<?= $k->surat_sehat; ?>"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="surat_sehat"
                      value="<?= $k->surat_sehat; ?>"
                    />
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Fotocopy Ijazah Terakhir
                  </td>
                  <td
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="ijazah"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="ijazah"
                    />
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Portofolio
                  </td>
                  <td
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="portofolio"
                      value="<?= $k->portofolio; ?>"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="portofolio"
                      value="<?= $k->portofolio; ?>"
                    />
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Sertifikat Diklat Dasar
                  </td>
                  <td
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="sertifikat_diklat"
                      value="<?= $k->sertifikat_diklat; ?>"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="sertifikat_diklat"
                      value="<?= $k->sertifikat_diklat; ?>"
                    />
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Dokumen Penetapan Formasi
                  </td>
                  <td
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="dokumen_penetapan"
                      value="<?= $k->dokumen_penetapan; ?>"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="dokumen_penetapan"
                      value="<?= $k->dokumen_penetapan; ?>"
                    />
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    SK Pangkat Terakhir Pengangkatan dalam Jabatan Fungsional
                  </td>
                  <td
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="sk_terakhir"
                      value="<?= $k->sk_terakhir; ?>"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="sk_terakhir"
                      value="<?= $k->sk_terakhir; ?>"
                    />
                  </td>
                </tr>
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    colspan="3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    Penilaian Angka Kredit (PAK) komulatif <br />
                    pada jenjang jabatan telah terpenuhi <br />
                    dan pada pangkat golongan/ruang (II/b) keatas wajib <br />
                    ada unsur nilai pengembangan profesi
                  </td>
                  <td
                    colspan="2"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                    class="px-3"
                  >
                    <input
                      type="text"
											hidden
                      style="width: 100%"
                      class="form-control"
                      name="pak"
                      value="<?= $k->pak; ?>"
                    />
                    <input
                      type="file"
                      style="width: 100%"
                      class="form-control"
                      name="pak"
                      value="<?= $k->pak; ?>"
                    />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div
          class="d-flex justify-content-end pb-5"
          style="padding-right: 120px"
        >
          <button
            class="btn btn-warning text-white fw-semibold shadow-lg"
            style="font-size: 36px"
          >
            SIMPAN
          </button>
        </div>
        </form>

        <!-- end section -->

        <!-- end content -->
