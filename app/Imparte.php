<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Imparte extends Model {

    protected $table = 'impartes';

    protected $primaryKey = 'idimparte';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['idasigimpartefor','iddoceimpartefor','año'];



    protected $hidden = ['remember_token'];

}
