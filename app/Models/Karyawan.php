<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'karyawans';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_karyawan', 'nid', 'jabatan','jenjang_jabatan', 'alamat', 'tanggal_lahir', 'istri', 'anak_1', 'anak_2','status_karyawan','id_kelas_rawat_inap','tgl_lahir_istri','tgl_lahir_anak_1','tgl_lahir_anak_2','email'];

    

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
    public function formJaminan()
    {
        return $this->hasMany('App\Models\FormJaminan');
    }
    public function kelasRawatInap()
    {
        return $this->belongsTo('App\Models\KelasRawatInap','id_kelas_rawat_inap','id');
    }
}
