<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model {

    protected $table = 'notas';

    protected $primaryKey = 'idnotas';

    protected $fillable = ['idasigfor','idalumfor','periodo1','periodo2','periodo3','periodo4'];

    protected $hidden = ['remember_token'];

    public function scopeIdent($query, $id){
        if(trim($id) != ""){
            $query->where('idasignatura', $id);
        }
    }
    public function scopeEstado($query, $estado){
        if($estado != "") {
            $query->where('estadoasig', $estado);
        }
    }

}
