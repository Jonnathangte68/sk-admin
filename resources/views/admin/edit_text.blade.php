@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Categorias</div>
  <div class="panel-body">







<form method="post">
    <textarea id="mytextarea">Welcome to the Sk App and please Enjoy!</textarea>
  </form>












  </div>
</div>

<script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
