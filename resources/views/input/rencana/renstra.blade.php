@include('header')
@include('sidebar')

        <?php $user=Auth::User();
            $role=$user->role;
            $name=$user->nama;
            $kd_surat=$user->kode_surat;
            $grup=$user->id_group;
            $id_user=$user->id;
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Data Rencana Strategis {!! $name !!}</h1>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                    {!! Form::open(array('route'=>'inprenstra'))!!}
                        <select class="form-control" name="periode" id="periode">
                            <option value="0">-Pilih Tahun-</option>
                            @foreach($periode as $per)
                                <option value="{!! $per->id !!}">{!! $per->awal !!} - {!! $per->akhir !!}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($role != '2' && $role != '6' )
                        <div class="form-group">
                            <select class="form-control">
                                <option value="0">-Pilih Unit Kerja-</option>
                                @foreach($uk1 as $es1)
                                    <option value="{!! $es1->id !!}">{!! $es1->nama !!}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline btn-primary" value="Tampilkan" />
                        {!! Form::close()!!}
                        <a data-toggle="modal" data-target="#inprenstra" class="btn btn-outline btn-success">Tambahkan</a>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        @if (empty($perrens))
                            <?php echo "Rencana Strategis Tahun ..."; ?>
                        @else
                            @foreach($perrens as $period)
                                Rencana Strategis Tahun {!! $period->awal !!} - {!! $period->akhir !!}
                            @endforeach
                        @endif
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    @if (empty($renstra))
                                        <?php echo "Tidak Ada Data atau Tahun Renstra Belum Dipilih"; ?>
                                    @else
                                    <thead>
                                        <style type="text/css">
                                            #table th {text-align: center;}
                                            .tw {float: left;width: 50px;}
                                            .ket_tw {float: left;width: 150px;}
                                        </style>
                                        <tr id="table">
                                            <th>No.</th>
                                            <th>Tujuan</th>
                                            <th>Sasaran Strategis</th>
                                            <th>Indikator Kinerja</th>
                                            <th>Program / Kegiatan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $i=0;
                                            $l=1;
                                            $ri=0;
                                            $row = count($renstra);

                                            //Variabel Awal ID
                                            $idt='0';
                                            $ids='0';
                                            $idik='0';
                                            $idp='0';
                                            //Mencari Nilai Mod
                                            $r_ts = array();
                                            $r_ss = array();
                                            $r_ik = array();
                                            $r_prog = array();

                                            foreach ($renstra as $row):
                                                $l++;
                                                $rw_ts = (int)$row->id_tujuan;
                                                $rw_ss = (int)$row->id_sasaran;
                                                $rw_ik = (int)$row->id_indikator;
                                                $rw_prog = (int)$row->id_program;
                                                
                                                array_push($r_ts, $rw_ts);
                                                array_push($r_ss, $rw_ss);
                                                array_push($r_ik, $rw_ik);
                                                array_push($r_prog, $rw_prog);

                                            endforeach;
                                            
                                            $c_ts = array_count_values($r_ts);
                                            $c_ss = array_count_values($r_ss);
                                            $c_ik = array_count_values($r_ik);
                                            $c_prog = array_count_values($r_prog);

                                            arsort($c_ts);
                                            arsort($c_ss);
                                            arsort($c_ik);
                                            arsort($c_prog);
                                        ?>

                                            @foreach($renstra as $ren)
                                            <tr class="odd gradeX">
                                                @if($idt != $ren->id_tujuan)
                                                    <?php
                                                        $idt = $ren->id_tujuan; 
                                                        $i++;
                                                    ?>
                                                    <td rowspan="{!! $c_ts[$idt] !!}">{!! $i !!}</td>
                                                    <td rowspan="{!! $c_ts[$idt] !!}">{!! $ren->tujuan_strategis !!}<p>
                                                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                    </td>
                                                @endif
                                                   
                                                @if($ids != $ren->id_sasaran)
                                                    <?php
                                                        $ids = $ren->id_sasaran; 
                                                    ?>
                                                    <td rowspan="{!! $c_ss[$ids] !!}">{!! $ren->sasaran_strategis !!}<p>
                                                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                    </td>
                                                @endif

                                                @if($idik != $ren->id_indikator)
                                                    <?php
                                                        $idik = $ren->id_indikator; 
                                                    ?>
                                                    <td rowspan="{!! $c_ik[$idik] !!}">{!! $ren->indikator_kinerja !!}<p>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></td>
                                                @endif

                                                <td>
                                                    {!! $ren->program !!}
                                                </td>
                                            </tr>
                                            <!--<tr class="odd gradeX">
                                                <td rowspan="8">{!! $i !!}</td>
                                                <td rowspan="8">{!! $ren->tujuan_strategis !!}<p>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                </td>
                                                <td rowspan="4">{!! $ren->sasaran_strategis !!}<p>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                </td>
                                                <td rowspan="2">{!! $ren->indikator_kinerja !!}<p>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                                </td>
                                                <td>{!! $ren->program !!}</td>
                                            </tr>
                                            <tr>
                                                <td>{!! $ren->program !!}</td>   
                                            </tr>
                                            <tr>
                                                <td rowspan="2">{!! $ren->indikator_kinerja !!}<p>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></td>
                                                <td>{!! $ren->program !!}</td>
                                            </tr>
                                            <tr>
                                                <td>{!! $ren->program !!}</td>   
                                            </tr>
                                            <tr>
                                                <td rowspan="4">{!! $ren->sasaran_strategis !!}<p>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                </td>
                                                <td rowspan="2">{!! $ren->indikator_kinerja !!}<p>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></td>
                                                <td>{!! $ren->program !!}</td>
                                            </tr>
                                            <tr>
                                                <td>{!! $ren->program !!}</td>   
                                            </tr>
                                            <tr>
                                                <td rowspan="2">{!! $ren->indikator_kinerja !!}<p>
                                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></td>
                                                <td>{!! $ren->program !!}</td>
                                            </tr>
                                            <tr>
                                                <td>{!! $ren->program !!}</td>   
                                            </tr>
                                            -->
                                            @endforeach
                                        @endif
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

    <!-- Modal -->
    <div class="modal fade" id="inprenstra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Input Rencana Strategis</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('route'=>'addrenstra'))!!}
                    {!! Form::hidden('kd_surat', $kd_surat) !!}
                    <div class="form-group">
                        <label>Pilih Tahun</label>
                        <select class="form-control" name="periode">
                            <option value="0">-Pilih Tahun-</option>
                            @foreach($periode as $per)
                                <option name="periode" value="{!! $per->id !!}">{!! $per->awal !!} - {!! $per->akhir !!}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($role == '1')
                        <div class="form-group">
                            <button data-toggle="modal" data-target="#uk" class="btn btn-warning">Pilih Unit Kerja</button>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Tujuan Strategis K/L</label>
                        <select class="form-control" name="ts">
                            <option value="0">-Pilih Tujuan Strategis-</option>
                            @foreach($tujuan_strategis as $ts)
                                <option name="ts" value="{!! $ts->id !!}">{!! $ts->tujuan_strategis !!}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($role == '1')
                        <div class="form-group">
                            <textarea name="tst" class="form-control" rows="3" placeholder="Tujuan Strategis"></textarea>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Sasaran Strategis K/L</label>
                        <select class="form-control" name="ss">
                            <option value="0">-Pilih Sasaran Strategis-</option>
                            @foreach($sasaran_strategis as $ss)
                                <option name="ss" value="{!! $ss->id !!}">{!! $ss->sasaran_strategis !!}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($role == '1')
                        <div class="form-group">
                            <textarea name="sst" class="form-control" rows="3" placeholder="Sasaran Strategis"></textarea>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Indikator Kinerja K/L</label>
                        <select class="form-control" name="ik">
                            <option value="0">-Pilih Indikator Kinerja-</option>
                            @foreach($indikator_kinerja as $ik)
                                <option name="ik" value="{!! $ik->id !!}">{!! $ik->indikator_kinerja !!}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($role == '1')
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Indikator Kinerja"></textarea>
                        </div>
                    @endif
                    <!--<div class="form-group">
                        <div class="form-group form-group-multiple-selects">
                            <div class="input-group input-group-multiple-select">
                                <select class="form-control" name="values[]">
                                    <option value="">Select one</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                </select>
                                <span class="input-group-addon input-group-addon-remove">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label>Program / Kegiatan</label>
                        <select class="form-control" name="prog">
                            <option>-Pilih Program / Kegiatan-</option>
                            @foreach($program as $prog)
                                <option name="prog" value="{!! $prog->id !!}">{!! $prog->program !!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    {!! Form::submit('Simpan',array('class'=>'btn btn-success'))!!}
                    <!-- <button type="button" class="btn btn-success">Simpan</button> -->
                </div>
                {!! Form::close()!!}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal -->
    <div class="modal fade" id="uk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Pilih Unit Kerja</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Unit Kerja</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">Menteri
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">Deputi
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">Biro
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Script Trigger Modal Edit Tanggapan PPK -->
    <!--<script type="text/javascript">
    $(function() {
        $('#inprenstra').on('show.bs.modal', function(e) {
            $(this).find('form').attr('action', $(e.relatedTarget).data('tahun'));
            $(this).find('input').attr('value', $(e.relatedTarget).data('kdSurat'));
            /*$('#editform').html($(e.relatedTarget).data('href'));*/
        });
     });
    </script>-->

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