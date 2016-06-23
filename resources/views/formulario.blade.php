@extends('layouts.app')
@section('content')

<div class="jumbotron">
   <div class="col-md-10">
       {!! Form::open(array('url' => 'foo/bar','class'=>'form-inline')) !!}

       <div class="form-group">
           {{Form::label('email', 'E-Mail Address')}}
           {{ Form::select('list', array(
            'Fruits' => array('Orange', 'Apple'),
            'Food' => array('Chicken', 'Beef'),
            ),null,['class'=>'form-control'])}}
           {{Form::submit('Consultar')}}
        </div>
       {!! Form::close() !!}
   </div>
</div>

<div class="row marketing">
    <div class="col-lg-6">
        <h4>Subheading</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Subheading</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        <h4>Subheading</h4>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    </div>

    <div class="col-lg-6">
        <h4>Subheading</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Subheading</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        <h4>Subheading</h4>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    </div>
</div>
@endsection('content')