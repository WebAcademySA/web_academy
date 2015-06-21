<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model {

    protected $table = 'notas';

    protected $hidden = ['remember_token'];

}
