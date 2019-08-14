@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Paises</div>
  <div class="panel-body">
<!--
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="code">Codigo:</label>  
      <div class="col-md-5">
      <input id="code" name="code" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    {{ Form::submit('Registrar', ['class' => 'btn btn-success']) }}

  </div>
</div>
-->


@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
