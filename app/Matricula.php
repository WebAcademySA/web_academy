<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model {

    protected $table = 'matriculas';

    protected $hidden = ['remember_token'];

}
