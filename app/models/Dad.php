<?php
class Dad extends Eloquent{

	protected $table ='padres';
    protected $fillable =["email","telefono"];

  /*
  *
  ## A parent belongs to a membership
  */
    public function Membership(){
        return $this->belongsTo('membresia');
    }
  /*
  *
  ## A parent can have many children
  */
    public function Son(){
        return $this->hasMany('Son','padre_id');
    }
  /*
  *
  ## The data of a parent belongs to a person
  */
    public function Person(){
        return $this->belongsTo('Person');
    }
  /*
  *
  ## A parent owns an address
  */
    public function Address(){
        return $this->belongsTo('direccion');
    }
}
