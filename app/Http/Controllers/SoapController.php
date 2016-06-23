<?php

namespace Webservice\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Webservice\Http\Requests;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;


class SoapController extends Controller
{
    //Agregando nuevo servicio al wrapper
    public function ruc()
    {
      $ruc='10447271431';
      SoapWrapper::add(function ($service)
      {
        $service
          ->name('consultaruc')
          ->wsdl('http://ws.pide.gob.pe/ConsultaRuc?wsdl')
          ->trace(true)
          ->options(['location' => 'http://ws.pide.gob.pe/ConsultaRuc?wsdl']);
      });
      $ruc2 = '';
      $data = [
        'numruc' =>$ruc,
      ];

      SoapWrapper::service('consultaruc', function ($service) use ($data,&$ruc2)
      {
        //var_dump($service->getFunctions());
        $ruc2 = $service->call('getDatosPrincipales', $data);
      });

      var_dump($ruc2);
    }

  public function papeleta()
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
      $ruc2=$service->call('getDatosPrincipales', $data);
    });

  }



}
