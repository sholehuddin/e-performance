<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class renstra extends Model {
	protected $table='tbl_renstra';
	protected $fillable = ['kode_surat','id_periode','id_tujuan','id_sasaran','id_indikator','id_program'];
}
