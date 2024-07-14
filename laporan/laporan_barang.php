<?php
require_once('../config/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/images/favicon.png">
    <title>CV Travel Sokan Bangko</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>
    <link href="../assets/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/js/jquery.gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" href="../assets/fonts/font-awesome-4/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/jquery.nanoscroller/nanoscroller.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/jquery.easypiechart/jquery.easy-pie-chart.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap.switch/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/jquery.select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/bootstrap.slider/css/slider.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/jquery.niftymodals/css/component.css" />
    <link rel="stylesheet" type="text/css" href="../assets/js/jquery.datatables/bootstrap-adapter/css/datatables.css" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/datatables/media/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="../assets/datatables/media/js/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="../assets/datatables/media/js/jquery.dataTables.js"></script>
    
    <!-- Tambahkan CSS untuk menghilangkan pagination saat mencetak -->
    <style type="text/css" media="print">
        .dataTables_length, .dataTables_filter, .dataTables_paginate, .dataTables_info {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container" style="background:#ffffff;">
        <div class="block-flat">
            <div class="header">
                <center>
                    <b>
                        <h2>CV Travel Sokan Bangko </h2>
                    </b><br>
                    <h4 style="position: relative;">Jl. Letnan Sadaini Lorong Bahagia No.7, Pematang Kandis, Bangko, Kabupaten Merangin, Jambi</h4>
                </center>
            </div>
            <div class="content"><br>
                <center>
                    <h3>Laporan Data Barang</h3>
                </center>
                <table class="table table-bordered" id="table_id1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Nama Penerima</th>
                            <th>Telp Penerima</th>
                            <th>Alamat Penerima</th>
                            <th>Tanggal</th>
                            <th>Tarif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $barang = mysql_query("SELECT * FROM barang");
                        while ($row = mysql_fetch_array($barang)) {
                        ?>
                            <tr>
                                <td align="center"><?php echo $no; ?></td>
                                <td><?php echo $row['nama_barang']; ?></td>
                                <td><?php echo $row['nama_penerima']; ?></td>
                                <td><?php echo $row['telp_penerima']; ?></td>
                                <td><?php echo $row['alamat_penerima']; ?></td>
                                <td><?php echo $row['tanggal']; ?></td>
                                <td><?php echo $row['tarif_rute']; ?></td>
                              
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>		        
                    </tbody>
                </table>
            </div>
            <br><br><br>
            <div class="row">
                <table class="no-border">
                    <tbody class="no-border-x no-border-y">
                        <tr>
                            <td style="width:75%;"></td>
                            <td class="text-center">
                                <center>
                                    <?php
                                    echo "Jambi, " . date("d M Y") . "<br>";
                                    ?>
                                    <label>Pimpinan</label><br><br><br><br><br>
                                    (Musferi Heppy)
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button class="btn btn-primary btn-flat md-trigger" data-modal="colored-primary"><span class="fa fa-reply"></span></button>
            <button class="btn btn-warning btn-flat md-trigger" onClick="window.print();return false"><span class="fa fa-print"></span></button>
        </div>
    </div>

    <!-- Nifty Modal -->
    <div class="md-modal colored-header md-effect-10" id="colored-primary">
        <div class="md-content">
            <div class="modal-header">
                <h3><span class="fa fa-reply"></span></h3>
                <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="i-circle primary"><i class="fa fa-reply"></i></div>
                    <h4>Back !</h4>
                    <p>Anda yakin kembali ke halaman sebelumnya ?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat md-close" data-dismiss="modal">Cancel</button>
                <a href="../dashboard.php?keberangkatan=Surat" class="btn btn-primary btn-flat md-close">Kembali</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
    <script type="text/javascript" src="../assets/js/behaviour/general.js"></script>
    <script src="../assets/js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/js/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.nestable/jquery.nestable.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/jquery.select2/select2.min.js" type="text/javascript"></script>
    <script src="../assets/js/skycons/skycons.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/js/jquery.niftymodals/js/jquery.modalEffects.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.summernote/dist/summernote.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.datatables/jquery.datatables.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id1').DataTable();
        });
    </script>
</body>

</html>
