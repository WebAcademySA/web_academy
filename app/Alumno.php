<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Alumno extends Model {

    protected $table = 'alumnos';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['id','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','telefono','sexo','direccion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['remember_token'];

    public function matricula(){
        return $this->hasMany('App\Matricula','idalumnofor','id');
    }

    public function notas(){
        return $this->hasMany('App\Nota','idasigfor','id');
    }
    public function scopeIdenti($query, $id){
        if(trim($id) != ""){
            $query->where('id', $id );
        }
    }
    public function scopeEstado($query, $estado){
        if($estado != "") {
            $query->where('estado', $estado);
        }
    }

    public function scopeIdentinota($query, $idn){
        if(trim($idn) != ""){
            $query->where('nombreasig', $idn );
        }
    }
    public function scopeGradonota($query, $grado){
        if($grado != "") {
            $query->where('grado', $grado);
        }
    }
    public function scopeGruponota($query, $grupo){
        if($grupo != "") {
            $query->where('grupo', $grupo);
        }
    }
}