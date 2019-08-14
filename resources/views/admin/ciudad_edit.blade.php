@extends('admin.layouts.admin')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Estados</div>
  <div class="panel-body">

{!! Form::open(array('route' => ['admin.ciudades.update', $ciudad->_id], 'method' => 'POST' , 'class' => 'form-horizontal')) !!}

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="{{$ciudad->name}}">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="state">Estado:</label>  
      <div class="col-md-5">
      <input id="state" name="state" type="text" placeholder="" class="form-control input-md" value="{{ $ciudad->state }}">
        
      </div>
    </div>

    {{ Form::submit('Editar', ['class' => 'btn btn-success']) }}
    <a href="{{route('admin.ciudades')}}" class="btn btn-primary">Regresar</a>

{!! Form::close() !!}

  </div>
</div>


@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
