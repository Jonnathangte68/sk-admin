@extends('admin.layouts.admin')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Estados</div>
  <div class="panel-body">

{!! Form::open(array('route' => ['admin.estados.update', $estado->_id], 'method' => 'POST' , 'class' => 'form-horizontal')) !!}

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="{{$estado->name}}">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="code">Pais:</label>  
      <div class="col-md-5">
      <input id="country" name="country" type="text" placeholder="" class="form-control input-md" value="{{ ( ! empty($estado->country) ? $estado->country : '') }}">
        
      </div>
    </div>

    {{ Form::submit('Editar', ['class' => 'btn btn-success']) }}
    <a href="{{route('admin.estados')}}" class="btn btn-primary">Regresar</a>

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
