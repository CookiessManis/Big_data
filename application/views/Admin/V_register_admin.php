
        <!-- content -->

        <div style="padding-top: 75px; padding-bottom: 35px; padding-left: 20px">
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
                    Username
                  </th>
                  <th
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                      text-align: center;
                    "
                  >
                    Email
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
              </thead><?php
              $no =1;
               foreach ($user as $u ) { 
                
                ?>
              <tbody>
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
                    <?= $u->username; ?>
                  </td>
                  <td
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $u->email; ?>
                  </td>
                  <td
                    class="px-2 py-3 text-center"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <button
                      class="btn text-white"
                      style="background-color: #fec007"
                      data-bs-toggle="modal"
                      data-bs-target="#detail<?= $u->username; ?>"
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
                    <button class="btn btn-danger text-white">Hapus</button>
                  </td>
                </tr>
              </tbody>
                <?php } ?>
            </table>
          </div>
        </div>

        <!-- Modal Detail -->
        <?php foreach ($user as $u ) {?> 
        <div
          class="modal fade"
          id="detail<?= $u->username; ?>"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
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
              <form action="<?= base_url('C_login/verifikasi') ; ?>" method="post">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="">Username</label>
                  <input type="text" class="form-control" name="username" value="<?= $u->username; ?>" />
                </div>
                <div class="mb-3">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email"  value="<?= $u->email; ?>"/>
                </div>
                <div class="mb-3">
                  <label for="">Password</label>
                  <input type="text" class="form-control" name="password" value="<?= $u->password; ?>" />
                </div>
                <div class="mb-3">
                  <label for="">Apakah Diizinkan Login ?</label>
                  <div class="d-flex justify-content-around">
                    <div>
                      <input
                        type="radio"
                        id="status1"
                        name="status"
                        class="radio"
                        value="1"
                      />
                      <label for="">Ya</label>
                    </div>
                    <div>
                      <input
                        type="radio"
                        id="status0"
                        name="status"
                        class="radio"
                        value="0"
                      />
                      <label for="">Tidak</label>
                    </div>
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
          
        </div></form><?php } ?>
        <!-- end section -->

        <!-- end content -->

