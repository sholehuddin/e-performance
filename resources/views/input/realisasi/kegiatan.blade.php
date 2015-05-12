@include('header')
@include('sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Data Perencanaan Kegiatan ...</h1>
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
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Perencanaan Kegiatan Tahun ...
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
                                            <th>No.</th>
                                            <th>Sasaran Strategis</th>
                                            <th>Indikator Kinerja</th>
                                            <th colspan="2">Kegiatan</th>
                                            <th colspan="2">Sub Kegiatan</th>
                                            <th>Target</th>
                                            <th>Realisasi</th>
                                            <th>Capaian (%)</th>
                                            <th>Overall (Capaian)</th>
                                            <th>Capaian / Keterangan</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td rowspan="2">1</td>
                                            <td rowspan="2">Tercapainya peningkatan kapasitas kelembagaan Kementerian PPN/ Bappenas</td>
                                            <td rowspan="2">Terlaksananya peningkatan kapasitas kelembagaan Kementerian PPN/ Bappenas</td>
                                            <td>A</td>
                                            <td>Perencanaan Pembangunan terkait lingkup kependudukan, pemberdayaan perempuan, dan perlindungan anak<p>
                                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                            </td>
                                            <td>A</td>
                                                <tr>
                                                    <td rowspan="4">Program Peningkatan Sarana dan Prasarana Aparatur</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td>4</td>
                                                </tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>%</td>
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
                                            <td>B</td>
                                            <td>Perencanaan Pembangunan terkait lingkup kependudukan, pemberdayaan perempuan, dan perlindungan anak<p>
                                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></td>
                                            <td>B</td>
                                            <td>Program Dukungan Manajemen dan Pelaksanaan Tugas Teknis Lainnya</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>%</td>
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

                                        <tr class="even gradeC">
                                            <td rowspan="2">2</td>
                                            <td rowspan="2">Tercapainya peningkatan kapasitas kelembagaan Kementerian PPN/ Bappenas</td>
                                            <td rowspan="2">Terlaksananya peningkatan kapasitas kelembagaan Kementerian PPN/ Bappenas</td>
                                            <td>A</td>
                                            <td>Perencanaan Pembangunan terkait lingkup kependudukan, pemberdayaan perempuan, dan perlindungan anak<p>
                                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                            </td>
                                            <td>A</td>
                                            <td>Program Peningkatan Sarana dan Prasarana Aparatur</td>
                                        </tr>

                                        <tr>
                                            <td>B</td>
                                            <td>Perencanaan Pembangunan terkait lingkup kependudukan, pemberdayaan perempuan, dan perlindungan anak<p>
                                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></td>
                                            <td>B</td>
                                            <td>Program Dukungan Manajemen dan Pelaksanaan Tugas Teknis Lainnya</td>
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