<?php

namespace Webservice\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Webservice\Http\Requests;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;


class SoapController extends Controller
{
    //Agregando nuevo servicio al wrapper
    public function webservice(Request $request)
    {
      $ruc=$request->documento;
      $tipo=$request->tipo;
      switch($tipo)
      {
        case "ruc":
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

          return View::make('resultados',compact('tipo','ruc2'));

          break;

        case "dni":
          break;
      }

    }

  public function dni(){


    SoapWrapper::add(function ($service)
    {
      $service
        ->name('ticketdni')
        ->wsdl('http://ws2.pide.gob.pe/reniec2/WSAuthentication?wsdl')
        ->trace(true)
        ->options(['location' => 'http://ws2.pide.gob.pe/reniec2/WSAuthentication?wsdl']);
    });
    $ticket='';
    $data = [
    'user'=>'3405897345',
    'password'=>'5784905794'
    ];

    SoapWrapper::service('ticketdni', function ($service) use ($data,&$ticket)
    {
      //var_dump($service->getFunctions());

      $ticket = $service->call('getTicket', [$data]);

    });

    SoapWrapper::add(function ($service2)
    {
      $service2
        ->name('consultadni')
        ->wsdl('http://ws2.pide.gob.pe/reniec/WSDataVerificationBinding?wsdl')
        ->trace(true)
        ->options(['location' => 'http://ws2.pide.gob.pe/reniec/WSDataVerificationBinding?wsdl']);
    });
    $dni='';
    $parametros='dni';


    SoapWrapper::service('consultadni', function ($service2) use ($parametros,&$dni)
    {
      //var_dump($service->getFunctions());

      $dni = $service2->call('getDatavalidate', [$parametros]);

    });
    dd($ticket);
    var_dump($dni);
  }



}
