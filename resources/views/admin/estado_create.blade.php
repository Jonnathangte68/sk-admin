@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Estados</div>
  <div class="panel-body">

{!! Form::open(array('route' => 'admin.estados.store', 'method' => 'POST' , 'class' => 'form-horizontal')) !!}

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- Text input-->
    <!--
    <div class="form-group">
      <label class="col-md-4 control-label" for="code">Pais:</label>  
      <div class="col-md-5">
      <input id="country" name="country" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>
    -->

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Pais:</label>
      <div class="col-md-5">
        <select id="country" name="country" class="form-control">
          <!--
          <option value="1">Option one</option>
          <option value="2">Option two</option>
          -->
          @foreach ($paises as $pais)
              <option value="{{$pais->_id}}">{{$pais->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    {{ Form::submit('Registrar', ['class' => 'btn btn-success']) }}
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
