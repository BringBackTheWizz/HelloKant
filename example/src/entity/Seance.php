<?php

namespace Entity\Seance;
use HelloKant\Model;


class Seance extends Model  {
  public $timestamps = false;
  protected $fillable = ["showtime"];
  
  public function film(){
  }
}