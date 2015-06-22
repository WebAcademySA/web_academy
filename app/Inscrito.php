<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model {

    protected $table = 'inscritos';

    protected $primaryKey = 'idinscrito';

    protected $fillable = ['idinscrito','idestuinscritofor','idasiginscritofor','horainicio','horafin','diasemana'];

    protected $hidden = ['remember_token'];

    public function nota(){
        return $this->hasMany('App\Nota','idinsnotasfor','idinscrito');
    }

}
