@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Niveles</div>
  <div class="panel-body">

{!! Form::open(array('route' => 'admin.niveles.store', 'method' => 'POST' , 'class' => 'form-horizontal')) !!}

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Descripci&oacute;n:</label>  
      <div class="col-md-5">
      <textarea id="description" name="description" class="form-control"></textarea>
        
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="status">Estado</label>
      <div class="col-md-5">
        <select id="status" name="status" class="form-control">
          <option value="0">Activo</option>
          <option value="1">Inactivo</option>
        </select>
      </div>
    </div>

    {{ Form::submit('Registrar', ['class' => 'btn btn-success']) }}
    <a href="{{route('admin.niveles')}}" class="btn btn-primary">Regresar</a>

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
