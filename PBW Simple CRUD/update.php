<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zaid Abdillah CRUD </title>

    <!-- Bootstrap Core CSS -->
    <link   href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
      body {
         padding-top: 150px;
         overflow-x: hidden;
      }
      img {
        display: block;
        max-width:80px;
        max-height:80px;
        width: auto;
        height: auto;
      }
    </style>
</head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                     <li>
                       <a class="brand" href="#"><img src="img/zaidabdillah.png" /></a>
                       <a href="#"> === DATA PASIEN RUMAH SAKIT === </a>
                    </li>
                    <li style="margin-top:20px;">
                    </li>
                </ul>
            </div>
    </nav>

    <!-- Page Content -->
<div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update Data Pasien</h3>
                    </div>
<?php
        include ('database.php');
        $no = $_GET['no'];
        $sql = "SELECT * FROM registrasi where no = ?";
    ?>
                    <form class="form-horizontal" action="update-proses.php?no=<?php echo $no?>" method="post">
                      <div class="control-group <?php echo !empty($kode_pasienError)?'error':'';?>">
                        <label class="control-label">Kode Pasien:</label>
                        <div class="controls">
                            <input name="kode_pasien" type="text" value="<?php echo !empty($kode_pasien)?$kode_pasien:'';?>">
                            <?php if (!empty($kode_pasienError)): ?>
                                <span class="help-inline"><?php echo $kode_pasienError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($nama_pasienError)?'error':'';?>">
                        <label class="control-label">Nama Pasien:</label>
                        <div class="controls">
                            <input name="nama_pasien" type="text" value="<?php echo !empty($nama_pasien)?$nama_pasien:'';?>">
                            <?php if (!empty($nama_pasienError)): ?>
                                <span class="help-inline"><?php echo $nama_pasienError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($alamatError)?'error':'';?>">
                        <label class="control-label">Alamat:</label>
                        <div class="controls">
                            <input name="alamat" type="text" value="<?php echo !empty($alamat)?$alamat:'';?>">
                            <?php if (!empty($alamatError)): ?>
                                <span class="help-inline"><?php echo $alamatError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($jkError)?'error':'';?>">
                        <label class="control-label">Jenis Kelamin:</label>
                        <div class="controls">
                            <input name="jk" type="text" value="<?php echo !empty($jk)?$jk:'';?>">
                            <?php if (!empty($jkError)): ?>
                                <span class="help-inline"><?php echo $jkError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($umurError)?'error':'';?>">
                        <label class="control-label">Umur:</label>
                        <div class="controls">
                            <input name="umur" type="text" value="<?php echo !empty($umur)?$umur:'';?>">
                            <?php if (!empty($umurError)): ?>
                                <span class="help-inline"><?php echo $umurError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($telpError)?'error':'';?>">
                        <label class="control-label">No Telepone:</label>
                        <div class="controls">
                            <input name="telp" type="text" value="<?php echo !empty($telp)?$telp:'';?>">
                            <?php if (!empty($telpError)): ?>
                                <span class="help-inline"><?php echo $telpError;?></span>
                            <?php endif;?>
                        </div>
                      </div></br>
                      <div class="form-actions">
                          <button type="submit" name="simpan" class="btn btn-success">UPDATE</button>
                          <a class="btn btn-default" href="index.php">TIDAK</a>
                        </div>
                    </form>
                </div>
    </div> <!-- /container -->
    <hr>
    <!-- Footer -->
    <footer>
       <div class="row">
         <div class="col-lg-12">
          <ul class="nav nav-pills nav-justified">
            <li></li>
            <li><a href="#"><i class="glyphicon glyphicon-copyright-mark"> Zaid_Abdillah // 2015470061</i></a></li> 
            <li></li>
           </ul>
          </div>
        </div> 
    </footer>
    <!-- Footer -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
