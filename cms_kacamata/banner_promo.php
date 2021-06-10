<!DOCTYPE html>
<?php 
include 'controller/conn.php';
session_start();
if($_SESSION['status_ca'] !="login"){
    header("location:login.php");
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Truesight Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Minified Bootstrap CSS -->
        
        <link href="plugins/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!-- icon -->
    <link rel="icon" href="dist/img/logogram.png">

    <style>
        .none {
            display: none;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="modal fade" id="modal-cancel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">PERHATIAN !!!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus banner ini ?<br>
                        Nama Banner : <b id="namaBanner"></b><br>
                </div>
                <form action="controller/conn_delete_bannerPromo.php" method="post">
                <input class="id_banner" type="hidden" name="id_banner">
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-edit-header">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Edit - Banner 1</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="controller/conn_edit_bannerPromo.php" method="post"  enctype="multipart/form-data">
                    <div class="modal-body">                        
                        <div class="form-group row">
                            <label for="inputJudul" class="col-sm-12 col-form-label">Judul</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="judul1" name="judul1"
                                    placeholder="place some text here" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputLampiran">Gambar</label>
                            <input class="form-control" type="file" id="lampiran1" name="lampiran1">
                            <label for="lampiran"><img id="blah1"
                                style="height: 200px; border: 1px solid black; margin-top: 30px; padding: 10px;"
                                src="../img/upload.PNG" alt="your image" /></label>
                        </div>

                        <div class="form-group row">
                            <label for="inputDiscount" class="col-sm-12 col-form-label">Harga</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="harga1" name="harga1"
                                    placeholder="Harga">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="inputDiscount" class="col-sm-12 col-form-label">Tanggal berlaku</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="tanggal_berlaku1" name="tanggal_berlaku1" value=""/>
                            </div>
                        </div> -->

                        <!-- <div class="form-group">
                            <label for="inputTanggal" class="col-sm-12 col-form-label">Tanggal berlaku:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                                </div>
                                <input type="text" class="form-control float-right" name="tanggal_berlaku1" id="tanggal_berlaku1">
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="inputTanggal" class="col-sm-12 col-form-label">Tanggal Berlaku</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="tanggal_berlaku1" name="tanggal_berlaku1"/>
                            </div>
                            <div class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text3" class="col-sm-12 col-form-label">Text 3</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="status_banner1" name="status_banner1" placeholder="place some text here" value="">
                            </div>
                        </div>

                    </div>

                    <input type="hidden" class="form-group" id="id_banner1" name="id_banner1">
                    <input type="hidden" class="form-group" id="nama_gambar" name="nama_gambar">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add - Banner Promo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="controller/conn_add_bannerPromo.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">                        
                        <div class="form-group row">
                            <label for="inputJudul" class="col-sm-12 col-form-label">Judul</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputJudul" name="judul"
                                    placeholder="place some text here" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputLampiran">Gambar</label>
                            <input class="form-control" type="file" id="lampiran" name="lampiran">
                            <label for="lampiran"><img id="blah"
                                style="height: 200px; border: 1px solid black; margin-top: 30px; padding:10px;"
                                src="img/upload.PNG" alt="your image" /></label>
                        </div>

                        <div class="form-group row">
                            <label for="inputHarga" class="col-sm-12 col-form-label">Harga</label>
                            <div class="col-sm-12">
                                <input type="text" class="number-separator form-control" id="inputHarga" name="harga"
                                    placeholder="Input harga promo disini" value=""> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputTanggal" class="col-sm-12 col-form-label">Tanggal Berlaku</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="datetime" name="tanggal_berlaku" value=""/>
                            </div>
                            <div class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputStatus" class="col-sm-12 col-form-label">Status Banner</label>
                            <div class="col-sm-12">
                                <select class="form-control" style="width: 100%;" name="status_banner" id="inputStatus">
                                    <option value="y"> Y </option>
                                    <option value="n"> N </option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="wrapper">
        <?php include "./view/common/navbar.php" ?>

        <?php include "./view/common/aside.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Banner Promo
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div style="text-align: right;">
                                <?php 
                                $bannerPromo = mysqli_query($db2,"select * from `bannerPromo`");
                                if(mysqli_num_rows($bannerPromo) == 1){
                                    echo "";
                                } else { ?>
                                    <button  class="btn btn-success float-sm-right" data-toggle="modal"
                                        data-target="#modal-add" style="right: 0px; width: 200px; margin-top: 10px; margin-right: 20px;">
                                        Tambah Banner Promo
                                    </button>
                                <?php
                                }
                                ?>
                                </div>


                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                <th>Harga</th>
                                                <th>Tanggal Berlaku</th>
                                                <th>Status Banner</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            $result_head = mysqli_query($db2,"select * from `bannerPromo`");
                                            while($d_head = mysqli_fetch_array($result_head)){
                                            ?>
                                            <tr>
                                                <td> <?php echo $d_head['judul']; ?> </td>
                                                <td> <img class="shadow"
                                                    style="width: 200px; border: 1px solid black;"
                                                    src="../img/banner_promo/<?php echo $d_head['gambar']; ?>" alt="your image" /> </td>
                                                <td>Rp <?php echo $d_head['harga']; ?> </td>
                                                <td> <?php echo $d_head['tanggal_berlaku']; ?> </td>
                                                <td> <?php echo $d_head['status_banner']; ?> </td>
                                                <td>
                                                    <button class="btn btn-info" name="id_ev"
                                                            data-c="<?php echo $d_head['judul']; ?>"
                                                            data-e="<?php echo $d_head['harga']; ?>"
                                                            data-v="<?php echo $d_head['tanggal_berlaku']; ?>"
                                                            data-i="<?php echo $d_head['status_banner']; ?>"
                                                            data-j="<?php echo $d_head['id_banner']; ?>"
                                                            data-g="<?php echo $d_head['gambar']; ?>"
                                                            data-toggle="modal" data-target="#modal-edit-header"
                                                        style="width: 100px; margin-top: 10px; margin-right: 20px;">
                                                        <i class="fas fa-pencil-alt"></i> Edit
                                                    </button>
                                                    <button class="btn btn-danger" name="id_ev"
                                                            data-e="<?php echo $d_head['id_banner'] ?>"
                                                            data-v="<?php echo $d_head['judul'] ?>"
                                                            data-toggle="modal" data-target="#modal-cancel"
                                                        style="width: 100px; margin-top: 10px; right: 0px;">
                                                        <i class="fas fa-times"></i> Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            
                                            <?php } ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="#">Truesight</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> Beta
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <script src="plugins/number-thousand-separator/easy-number-separator.js"></script>
    <!-- Minified JS library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Minified Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="plugins/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Page specific script -->
    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
        }

        $("#lampiran").change(function () {
        readURL(this);
        });

        function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
            $('#blah1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
        }

        $("#lampiran1").change(function () {
        readURL1(this);
        });

        // $("#lampiran1").change(function () {
        // readURL(this);
        // });
     
        $(function () {
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes();
            var dateTime = date+' '+time;
            $("#datetime").datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true,
                todayBtn: true,
                startDate: dateTime
            });
        });

        $(function () {
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes();
            var dateTime = date+' '+time;
            $("#tanggal_berlaku1").datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true,
                todayBtn: true,
                startDate: dateTime
            });
        });
        
        $('#modal-cancel').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient_e = button.data('e'); // Extract info from data-* attributes
            var recipient_v = button.data('v'); // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('.id_banner').val(recipient_e);
            document.getElementById("namaBanner").innerHTML = recipient_v;
        })

        $('#modal-edit-header').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient_e = button.data('e'); // Extract info from data-* attributes
            var recipient_v = button.data('v');
            var recipient_c = button.data('c');
            var recipient_i = button.data('i');
            var recipient_j = button.data('j');
            var recipient_g = button.data('g');
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            if (recipient_e!=undefined) {
            modal.find('.judul1').val(recipient_c);
            modal.find('.harga1').val(recipient_e);
            modal.find('.tanggal_berlaku1').val(recipient_v);
            modal.find('.status_banner1').val(recipient_i);
            modal.find('.id_banner1').val(recipient_j);
            modal.find('.nama_gambar').val(recipient_g);

            document.getElementById("judul1").value = recipient_c;
            document.getElementById("harga1").value = recipient_e;
            document.getElementById("tanggal_berlaku1").value = recipient_v;
            document.getElementById("status_banner1").value = recipient_i;
            document.getElementById("id_banner1").value = recipient_j;
            document.getElementById("nama_gambar").value = recipient_g;
            document.getElementById("blah1").src = "../img/banner_promo/"+recipient_g;
            // document.getElementById("lampiran1").value = recipient_g;
            }
        })


        $('#modal-add').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var modal = $(this)
        })

        $("#accountHead").removeClass("none");
        $("#selectid").on("change", function () {
            $("#accountHead").addClass("none");
            if (this.value == "0") {
                $("#accountHead").removeClass("none");
            }
        });

        // $('#tanggal_berlaku1').daterangepicker();

        // $("#datetime").datetimepicker({
        //     format: 'yyyy-mm-dd hh:ii'
        // });

        //Date range as a button
        // $('#daterange-btn').daterangepicker(
        // {
        //     ranges   : {
        //     'Today'       : [moment(), moment()],
        //     'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        //     'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        //     'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        //     'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        //     'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        //     },
        //     startDate: moment().subtract(29, 'days'),
        //     endDate  : moment()
        // },
        // function (start, end) {
        //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        // }
        // )
        
    </script>
</body>

</html>