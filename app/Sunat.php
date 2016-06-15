<?php

namespace Webservice;

use Illuminate\Database\Eloquent\Model;

class Sunat extends Model
{
    //Modelo Sunat
  protected $fillable = ['ddp_numruc','desc_dep','desc_prov','desc_dist',
    'ddp_nombre','desc_estado','desc_identi','desc_flag22','ddp_tipvia',
    'ddp_nomvia','ddp_nomzon','ddp_refer1','desc_ciiu','elimin'];

  protected $table='sunat';
  
}
