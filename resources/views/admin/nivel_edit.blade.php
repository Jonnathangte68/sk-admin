@extends('admin.layouts.admin')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Niveles</div>
  <div class="panel-body">

{!! Form::open(array('route' => ['admin.niveles.update', $nivel->_id], 'method' => 'POST' , 'class' => 'form-horizontal')) !!}

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="{{$nivel->name}}">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Description:</label>  
      <div class="col-md-5">
      <textarea id="description" name="description" type="text" placeholder="" class="form-control input-md">{{$nivel->description}}</textarea>
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="status">Estado:</label>  
      <div class="col-md-5">
      <input id="status" name="status" type="text" placeholder="" class="form-control input-md" value="{{$nivel->status}}"></input>
        
      </div>
    </div>

    {{ Form::submit('Editar', ['class' => 'btn btn-success']) }}
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
