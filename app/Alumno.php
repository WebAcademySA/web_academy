<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

    protected $table = 'alumnos';

    protected $primaryKey = 'nid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['nid','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','telefono','sexo','direccion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['remember_token'];

    public function matricula(){
        return $this->hasMany('App\Matricula','idalumnofor','nid');
    }

    public function inscrito(){
        return $this->hasMany('App\Inscrito','idestuinscritofor','nid');
    }

}
