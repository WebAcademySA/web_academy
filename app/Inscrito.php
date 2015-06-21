<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model {

    protected $table = 'inscritos';

    protected $hidden = ['remember_token'];

}
