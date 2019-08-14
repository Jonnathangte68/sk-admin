@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Categorias</div>
  <div class="panel-body">

{!! Form::open(array('route' => ['admin.categorias.update',$categoria->_id], 'method' => 'POST' , 'class' => 'form-horizontal')) !!}

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="{{$categoria->name}}">
        
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Descripcion</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="description" name="description">{{$categoria->description}}</textarea>
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

    {{ Form::submit('Editar', ['class' => 'btn btn-success']) }}
    <a href="{{route('admin.categorias')}}" class="btn btn-primary">Regresar</a>

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
