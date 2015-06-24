<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

    protected $table = 'cursos';

    protected $primaryKy = 'idcurso';

    protected $fillable = ['grado','grupo','aula'];

    protected $hidden = ['remember_token'];

    public function matricula(){
        return $this->hasMany('App\Matricula','idcursofor','idcurso');
    }

}
