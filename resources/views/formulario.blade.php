@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="col-md-10">
        {!! Form::open(array('action' => 'SoapController@webservice','class'=>'form-inline')) !!}
        <div class="form-group">
            {{Form::label('Ingrese Nro de Documento', 'Nro Documento')}}
            {{Form::text('documento',null,['class'=>'form-control'])}}
            {{ Form::select('tipo', array(
             'DNI' => array('dni'=>'Consulta DNI'),
             'RUC' => array('ruc'=>'Consulta RUC'),
             'MTC' => array('papeletas'=>'Consulta Papeletas',
                            'licencia'=>'Ultima Licencia',
                            'sanciones'=>'Ultimas Sanciones'),
             ),null,['class'=>'form-control'])}}
            {{Form::submit('Consultar')}}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection('content')