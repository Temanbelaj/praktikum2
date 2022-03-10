<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>toko elektronik delta</title>
    <meta
      name="description"
      content="Source code generated using layoutit.com"
    />
    <meta name="author" content="LayoutIt!" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <h3>
                h3. Lorem ipsum dolor sit amet.
              </h3>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8">
              <form action="praktikum2_formbelanja.php" method="POST">
                <div class="form-group row">
                  <label for="customer" class="col-4 col-form-label">
                    Customer
                  </label>
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-address-card"></i>
                        </div>
                      </div>
                      <input
                        id="customer"
                        name="customer"
                        placeholder="Nama Pelanggan"
                        type="text"
                        class="form-control"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label name = "produk" class="col-4">Pilih Produk</label>
                  <div class="col-8">
                    <div
                      class="custom-control custom-radio custom-control-inline"
                    >
                      <input
                        name="produk"
                        id="radio_0"
                        type="radio"
                        class="custom-control-input"
                        value="tv"
                      />
                      <label for="radio_0" class="custom-control-label">
                        TV
                      </label>
                    </div>
                    <div
                      class="custom-control custom-radio custom-control-inline"
                    >
                      <input
                        name="produk"
                        id="radio_1"
                        type="radio"
                        class="custom-control-input"
                        value="kulkas"
                      />
                      <label for="radio_1" class="custom-control-label">
                        KULKAS
                      </label>
                    </div>
                    <div
                      class="custom-control custom-radio custom-control-inline"
                    >
                      <input
                        name="produk"
                        id="radio_2"
                        type="radio"
                        class="custom-control-input"
                        value="mesin_cuci"
                      />
                      <label for="radio_2" class="custom-control-label">
                        MESIN CUCI
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jumlah_beli" id="jumlah_beli" class="col-4 col-form-label">Jumlah</label>
                  <div class="col-8">
                    <input
                      id="text"
                      name="jumlah"
                      placeholder="Jumlah"
                      type="text"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                   <input type="submit" value="simpan" name="proses">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <div class="list-group">
                <a
                  href="#"
                  class="list-group-item list-group-item-action active"
                >
                  Daftar Harga Produk
                </a>

                <div class="list-group-item">
                  <h4 class="list-group-item-heading">
                    List group item heading
                  </h4>
                  <p class="list-group-item-text">
                    TV : 4.200.000
                    <br>
                    Kulkas = 3.100.000
                    <br>
                    Mesin Cuci = 3.800.000
                  </p>
                </div>

                <a
                  href="#"
                  class="list-group-item list-group-item-action active justify-content-between"
                >
                  Home
                  <span class="badge badge-light badge-pill">14</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <?php
              $proses = $_POST['proses'];
              $nama_customer = $_POST['customer'];
              $produk_pilihan = $_POST['produk'];
              $jumlah_beli = $_POST['jumlah'];

              if ($produk_pilihan == "TV" ) {
                $total_belanja = $jumlah_beli * 4200000;
              }

              elseif ($produk_pilihan == "kulkas" ) {
                $total_belanja = $jumlah_beli * 3100000;
              } 

              elseif ($produk_pilihan == "mesin_cuci" ) {
                $total_belanja = $jumlah_beli * 3800000;
              } 

              else {
                $total_belanja = 'anda ingin memesan barang atau ingin berteman dengan papan';
              }

              echo 'Proses :' . $proses;
              echo '<br/> Nama Customer :' . $nama_customer;
              echo '<br/> Produk Pilihan :' . $produk_pilihan;
              echo '<br/> Jumlah Beli :' . $jumlah_beli;
              echo '<br> Harga Total : Rp.'.number_format ($total_belanja,2,',','.');
              ?>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>