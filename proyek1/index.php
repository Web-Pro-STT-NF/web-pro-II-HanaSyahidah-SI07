<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Menghitung BMI</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Option</a></li>
                  <li class="breadcrumb-item active">Menghitung BMI</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Masukkan data diri anda</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                  <form>
                      <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                          <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                        <div class="col-8">
                          <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                        <div class="col-8">
                          <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label> 
                        <div class="col-8">
                          <input id="email" name="email" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-4">Gender</label> 
                        <div class="col-8">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                            <label for="gender_0" class="custom-control-label">Laki-laki</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                            <label for="gender_1" class="custom-control-label">Perempuan</label>
                          </div>
                        </div>
                      </div>
                      <a href="kalkulator.php">Selanjutnya</a>
                      <!-- <div class="form-group row">
                        <div class="offset-4 col-8">
                          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div> -->
                    </form>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">Footer</div>
                  <!-- /.card-footer-->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
<?php
 include_once 'footer.php';
?>