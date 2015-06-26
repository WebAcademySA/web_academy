<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

    protected $table = 'asignaturas';

    protected $primaryKey = 'idasignatura';

    protected $fillable = ['idasignatura','nombreasig'];

    protected $hidden = ['remember_token'];

    public function imparte(){
        return $this->hasMany('App\Imparte', 'idasigimpartefor', 'idasignatura');
    }

    public function notas(){
        return $this->hasMany('App\Nota','idasigfor','idasignatura');
    }

    public function inscrito(){
        return $this->hasMany('App\Inscrito','idasiginscritofor','idasignatura');
    }

}
