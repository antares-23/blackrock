<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use SoftDeletes;

    protected $date=['deleted_at'];

    //si s ecambia el nombre de la clase, se tiene que usrar protected $table ='nombretablaantesdelcambio'
    protected $fillable=[
        'title',
        'publication',
        'is_admin'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

}
