@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Bulk Email</div>
  <div class="panel-body">


  	<p>Empty</p>


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
