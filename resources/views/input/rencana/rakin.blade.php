@include('header')
@include('sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Data Penetapan Rencana kinerja ...</h1>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <select class="form-control">
                            <option>-Pilih Tahun-</option>
                            <option>2014</option>
                            <option>2015</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>-Unit Kerja-</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline btn-primary">Tampilkan</button>
                        <button type="button" class="btn btn-outline btn-success">Tambahkan</button>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Penetapan Rencana Kinerja Tahun ...
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <style type="text/css">
                                            #table th {text-align: center;}
                                            .tw {float: left;width: 50px;}
                                            .ket_tw {float: left;width: 150px;}
                                        </style>
                                        <tr id="table">
                                            <th rowspan="2">No.</th>
                                            <th rowspan="2">Tujuan</th>
                                            <th rowspan="2">Indikator Kinerja (es-I)</th>
                                            <th rowspan="2">Sasaran Strategis</th>
                                            <th rowspan="2">Indikator Kinerja</th>
                                            <th colspan="4">Target</th>
                                            <th colspan="3">realisasi</th>
                                            <th rowspan="2">Catatan Monitoring</th>
                                        </tr>
                                        <tr id="table">
                                            <th>Waktu</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Uraian</th>
                                            <th>Jumlah</th>
                                            <th>%</th>
                                            <th>Uraian</th>                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td rowspan="3">1</td>
                                            <td rowspan="3">Tercapainya peningkatan kapasitas kelembagaan Kementerian PPN/ Bappenas</td>
                                            <td rowspan="3">% Indeks RB</td>
                                            <td rowspan="3">Tersedianya Sistem Pengelolaan Data dan Informasi Perencanaan Pembangunan Nasional</td>
                                            <td rowspan="3">% tingkat ketersediaan data dan layanan informasi untuk mendukung perencanaan pembangunan<p>
                                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                            </td>

                                            <td>12 Bulan</td>
                                            <td>91</td>
                                            <td>%</td>
                                            <td></td>
                                            <td>91</td>
                                            <td>100</td>
                                            <td>
                                                <div>
                                                    <label class='label label-success'>TERCAPAI</label>
                                                </div>
                                                <div style="width: 200px;">
                                                    <div class="tw">TW_1</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_2</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_3</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_4</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>12 Bulan</td>
                                            <td>91</td>
                                            <td>%</td>
                                            <td></td>
                                            <td>91</td>
                                            <td>100</td>
                                            <td>
                                                <div>
                                                    <label class='label label-warning'>DALAM PROSES</label>
                                                </div>
                                                <div style="width: 200px;">
                                                    <div class="tw">TW_1</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_2</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_3</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_4</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>12 Bulan</td>
                                            <td>91</td>
                                            <td>%</td>
                                            <td></td>
                                            <td>91</td>
                                            <td>100</td>
                                            <td>
                                                <div>
                                                    <label class='label label-danger'>BELUM MULAI</label>
                                                </div>
                                                <div style="width: 200px;">
                                                    <div class="tw">TW_1</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_2</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_3</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_4</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr class="even gradeC">
                                            <td rowspan="3">2</td>
                                            <td rowspan="3">Tercapainya peningkatan kapasitas kelembagaan Kementerian PPN/ Bappenas</td>
                                            <td rowspan="3">% Indeks RB</td>
                                            <td rowspan="3">Tersedianya Sistem Pengelolaan Data dan Informasi Perencanaan Pembangunan Nasional</td>
                                            <td rowspan="3">% tingkat ketersediaan data dan layanan informasi untuk mendukung perencanaan pembangunan<p>
                                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                            </td>

                                            <td>12 Bulan</td>
                                            <td>91</td>
                                            <td>%</td>
                                            <td></td>
                                            <td>91</td>
                                            <td>100</td>
                                            <td>
                                                <div>
                                                    <label class='label label-success'>TERCAPAI</label>
                                                </div>
                                                <div style="width: 200px;">
                                                    <div class="tw">TW_1</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_2</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_3</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_4</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>12 Bulan</td>
                                            <td>91</td>
                                            <td>%</td>
                                            <td></td>
                                            <td>91</td>
                                            <td>100</td>
                                            <td>
                                                <div>
                                                    <label class='label label-warning'>DALAM PROSES</label>
                                                </div>
                                                <div style="width: 200px;">
                                                    <div class="tw">TW_1</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_2</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_3</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_4</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>12 Bulan</td>
                                            <td>91</td>
                                            <td>%</td>
                                            <td></td>
                                            <td>91</td>
                                            <td>100</td>
                                            <td>
                                                <div>
                                                    <label class='label label-danger'>TIDAK TERCAPAI</label>
                                                </div>
                                                <div style="width: 200px;">
                                                    <div class="tw">TW_1</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_2</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_3</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                                <div>
                                                    <div class="tw">TW_4</div>
                                                    <div class="ket_tw">Terselenggaranya layanan pengelolaan data statistik, data spasial, pustaka dan arsip</div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>