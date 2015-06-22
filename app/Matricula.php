<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model {

    protected $table = 'matriculas';

    protected $primaryKey = 'id_matricula';

    protected $fillable = ['idcursofor','idalumnofor'];

    protected $hidden = ['remember_token'];


}
