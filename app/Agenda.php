<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model
{
    //use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agenda_m';


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
    protected $fillable = ['nama_surat', 'no_surat', 'alamat_surat', 'perihal_surat', 'tujuan', 'masuk', 'keluar'];

    public function surat ()
    {
        return $this->belongsTo('App\Surat');
    }

    public function user ()
    {
        return $this->belongsTo('App\User');
    }
}
