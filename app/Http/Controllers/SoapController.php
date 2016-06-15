<?php

namespace Webservice\Http\Controllers;

use Illuminate\Http\Request;

use Webservice\Http\Requests;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;

class SoapController extends Controller
{
    //Agregando nuevo servicio al wrapper
    public function ruc()
    {
      SoapWrapper::add(function ($service)
      {
        $service
          ->name('consultaruc')
          ->wsdl('http://ws.pide.gob.pe/ConsultaRuc?wsdl')
          ->trace(true)
          ->options(['location' => 'http://ws.pide.gob.pe/ConsultaRuc?wsdl']);
      });

      $data = [
        'numruc' =>'10447271431',
      ];

      SoapWrapper::service('consultaruc', function ($service) use ($data)
      {
        //var_dump($service->getFunctions());
        dd($service->call('getDatosPrincipales', $data));
      });
    }
}
