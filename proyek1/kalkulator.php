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
                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                  <li class="breadcrumb-item active">Fixed Layout</li>
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
                    <h3 class="card-title">Masukkan Tinggi dan Berat Badan</h3>

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
                    <!doctype html>
                    <html lang="en">
                    <head>    
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                        <!-- Bootstrap CSS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

                        <title>Kalkulator BMI!</title>
                    </head>
                    <body>
                        
                        <div class="container d-flex justify-content-center">
                            <div class="card mt-4" style="width:18rem">
                                <div class="card-header">Hitung disini</div>
                                <div class="card-body">
                                    <form action="" method="get">
                                        <div class="form-group">
                                            <label>Tinggi Badan (cm)</label>
                                            <input type="number" class="form-control form-control-sm" name="tb" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Berat Badan (kg)</label>
                                            <input type="number" class="form-control form-control-sm" name="bb" required>
                                        </div>
                                        <button type="submit" name="proses" class="btn btn-primary btn-sm">Hitung</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        

                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
                    </body>
                    </html>
                    <?php 
                        if(isset($_GET['proses'])){
                            $tbp = $_GET['tb'];
                            $bb = $_GET['bb'];

                            $tb = $tbp/100;
                            $hitung = $bb / ($tb * $tb);
                            if($hitung <= 18.4){
                            echo'
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Tinggi Badan: '.$tbp.' Cm<br>
                                Berat Badan : '.$bb.' Kg<br>
                                BMI         : '.number_format($hitung,1).'<br>
                                Keterangan : Kekurangan berat badan
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            ';
                            }elseif($hitung <= 25){
                            echo'
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Tinggi Badan: '.$tbp.' Cm<br>
                                Berat Badan : '.$bb.' Kg<br>
                                BMI         : '.number_format($hitung,1).'<br>
                                Keterangan : Normal(Ideal)
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            ';
                            }elseif($hitung <= 29){
                                echo'
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan: '.$tbp.' Cm<br>
                                    Berat Badan : '.$bb.' Kg<br>
                                    BMI         : '.number_format($hitung,1).'<br>
                                    Keterangan : Kelebihan berat badan
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                ';
                            }elseif($hitung > 30 ){
                                echo'
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan: '.$tbp.' Cm<br>
                                    Berat Badan : '.$bb.' Kg<br>
                                    BMI         : '.number_format($hitung,1).'<br>
                                    Keterangan : Kegemukan(Obesitas)
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                ';
                            }
                        }?>
                </div>
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