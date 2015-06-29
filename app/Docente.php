<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model {

    protected $table = 'docentes';

    protected $primaryKey = 'iddocente';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['iddocente','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','titulo','nivel','sexo','email','telefono','direccion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    protected $hidden = ['remember_token'];

    public function user(){

        return $this->hasOne('App\User', 'id', 'iddocente');
    }

    public function imparte(){
        return $this->hasMany('App\Imparte', 'iddoceimpartefor', 'iddocente');
    }
    public function scopeIdent($query, $iddocente){
        if(trim($iddocente) != ""){
            $query->where('iddocente', $iddocente);
        }
    }
    public function scopeEstado($query, $estado){
        if($estado != "") {
            $query->where('estado', $estado);
        }
    }

}
