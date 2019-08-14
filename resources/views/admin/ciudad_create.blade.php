@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Ciudades</div>
  <div class="panel-body">

{!! Form::open(array('route' => 'admin.ciudades.store', 'method' => 'POST' , 'class' => 'form-horizontal')) !!}

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- Text input-->
    <!--<div class="form-group">
      <label class="col-md-4 control-label" for="code">Estado:</label>  
      <div class="col-md-5">
      <input id="estado" name="estado" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>
    -->

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Estado:</label>
      <div class="col-md-5">
        <select id="state" name="state" class="form-control">
          @foreach ($estados as $estado)
              <option value="{{$estado->_id}}">{{$estado->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    {{ Form::submit('Registrar', ['class' => 'btn btn-success']) }}
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
