<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Java Computer</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Java Computer</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Barang</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Aksi :</h6>
                        <a class="collapse-item" href="tambahbarang.php">Tambah Barang</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="catatan.php" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Catatan</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Catatan</h1> 
                    <br>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <p class="mb-4">Catatan Pemasukan dan Pengeluaran</p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
                            </div>
                            <div class="card-body">
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">Saldo Awal</label>
                                            <input
                                                type="number"
                                                class="form-control col-md-6"
                                                id="saldoawal"
                                                name="saldoawal" />
                                        </div>
                                    </div>
                                </div> -->
                                <div class="table-responsive">
                                    <form action="" method="POST">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tbody>
                                            <?php
                                                include "koneksi.php";

                                                // if($_POST['$total']){
                                                //     $harga_beli = $_POST['harga_beli'];
                                                //     $jumlah_beli = $_POST['jumlah_beli'];
                                                //     $harga_jual = $_POST['harga_jual'];
                                                //     $stock_terjual = $_POST['stock_terjual'];
                                                //     $pengeluaran = $harga_beli['harga_beli']*$jumlah_beli['jumlah_beli'];
                                                //     $pemasukan = $harga_jual['harga_jual']*$stock_terjual['stock_terjual'];

                                                //     echo $pengeluaran;
                                                // }
                                                // pengeluaran = harga beli x jumlah beli
                                                // pemasukan = harga jual x stock terjual
                                                $total_harga_beli = tampilData('SELECT SUM(harga_beli) AS hargaBeli FROM barang')[0];
                                                $total_pembelian = tampilData('SELECT SUM(jumlah_beli) AS jumlahBeli FROM barang')[0];
                                                $pengeluaran = $total_harga_beli['hargaBeli'] * $total_pembelian['jumlahBeli'];
                                                
                                                
                                                $total_harga_jual = tampilData('SELECT SUM(harga_jual) AS hargaJual FROM barang')[0];
                                                $total_stok_terjual = tampilData('SELECT SUM(stock_terjual) AS stockTerjual FROM barang')[0];
                                                $pemasukan = $total_harga_jual['hargaJual'] * $total_stok_terjual['stockTerjual'];
                                                // var_dump($total_pembelian); die;
                                            ?>
                                            <tr>
                                                <div class="form-group">
                                                    <td class="col-3" >Saldo Awal</td>
                                                    <td class="col-9">Rp.
                                                        <input type="number" class="col-9" id="number"></td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td>Pengeluaran</td>
                                                <td colspan="2">Rp. <?php echo number_format($pengeluaran); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pemasukan</td>
                                                <td colspan="2">Rp. <?php echo number_format($pemasukan); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SMK Negeri 1 Banjar</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>