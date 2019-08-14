@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Sub - Categorias</div>
  <div class="panel-body">

{!! Form::open(array('route' => 'admin.subcategorias.store', 'method' => 'POST' , 'class' => 'form-horizontal')) !!}

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Descripcion:</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="status">Estado:</label>
      <div class="col-md-5">
        <select id="status" name="status" class="form-control">
          <option value="0">Activo</option>
          <option value="1">Inactivo</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <!--<div class="form-group">
      <label class="col-md-4 control-label" for="category">Categoria:</label>  
      <div class="col-md-5">
      <input id="category" name="category" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>
    -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="status">Categoria:</label>
      <div class="col-md-5">
        <select id="category" name="category" class="form-control">
          @foreach ($categorias as $categoria)
            <option value="{{$categoria->_id}}">{{$categoria->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    {{ Form::submit('Registrar', ['class' => 'btn btn-success']) }}
    <a href="{{route('admin.subcategorias')}}" class="btn btn-primary">Regresar</a>

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
