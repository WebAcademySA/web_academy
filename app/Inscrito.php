<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model {

    protected $table = 'inscritos';

    protected $primaryKey = 'idinscrito';

    protected $fillable = ['idcurinscritofor','idasiginscritofor','añoinscrito'];

    protected $hidden = ['remember_token'];

}
