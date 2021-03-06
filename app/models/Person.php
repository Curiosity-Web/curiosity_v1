<?php
/**
 *
 *All imports here
 */
class Person extends Eloquent{

    protected $table = 'personas';
    protected $fillable = ['nombre','apellidos','sexo'];
    /*
     *
     ## One person has child data
    */
    public function User(){
        return $this->belongsTo('User');
    }
    /*
     *
     ## One person has child data
    */
    public function Son(){
        return $this->hasOne('Son','persona_id');
    }
    /*
     *
     ## A person belongs to an administrative
    */
    public function Administrative(){
        return $this->hasOne('administrativo','persona_id');
    }
    public function Dad(){
      return $this->hasOne('Dad','persona_id');
    }
}
