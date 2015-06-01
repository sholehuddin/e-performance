<?php
header("Content-type: application/octet-stream");
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=test.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
?>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Unit Kerja</th>
                                    <th>Kinerja</th>
                                    <th>Kegiatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label class='label label-success'><i class="fa fa-thumbs-up"></i> Pusdatin</label></td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class='label label-success'><i class="fa fa-thumbs-up"></i> Pusdatin</label></td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                    <td>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan I</label>
                                        <label class='label label-info'><i class="fa fa-check-circle"></i> Triwulan II</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan III</label>
                                        <label class='label label-default'><i class="fa fa-exclamation-circle"></i> Triwulan IV</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
