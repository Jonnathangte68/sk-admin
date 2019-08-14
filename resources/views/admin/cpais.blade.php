@extends('admin.layouts.admin')

@section('content')



<div class="panel panel-default">
  <div class="panel-heading">Paises</div>
  <div class="panel-body">
      <div class="row">
          <div class="col-md-2">
                <a href="{{ route('admin.countries.create') }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  Nuevo Pais
                </a>
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-4">
                <div class="btn-group" style="float: right;clear: both;">
                <button type="button" class="btn btn-default" aria-label="Right Align">
                  <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                  Exportar
                </button>
                <button type="button" class="btn btn-default" aria-label="Right Align">
                  <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                  Imprimir
                </button>
                <button type="button" class="btn btn-primary" aria-label="Right Align">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
                </div>
          </div>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Acciones</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Fecha de Creacion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                <input type="checkbox" name="all">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-default" aria-label="Right Align">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                </button>
            </td>
            <td>
                <input type="text" name="id" class="form-control">
            </td>
            <td>
                <input type="text" name="codigo" class="form-control">
            </td>
            <td>
                <input type="text" name="nombre" class="form-control">
            </td>
            <td>
                <input type="text" name="created" class="form-control">
            </td>
          </tr>


          <!--  Cargar informacion  -->


<!-- ej -->

@foreach ($paises as $pais)

  <tr>
    <td style="width:22%">
        <input type="checkbox" name="all">
        <a href="/admin/countries/edit/{{$pais->_id}}" class="btn btn-default">
          <span class=" glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar
        </a>
        <a href="/admin/countries/delete/{{$pais->_id}}" class="btn btn-default">
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar
        </a>
    </td>
    <td>
        {{ (!empty($pais->_id) ? $pais->_id : '')}}
    </td>
    <td>
         {{ (!empty($pais->name) ? $pais->name : '')}}
    </td>
    <td>
         {{ (!empty($pais->code) ? $pais->code: '') }}
    </td>
    <td>
         {{ (!empty($pais->Created_date) ? $pais->Created_date : '')}}
    </td>
  </tr>

@endforeach





</tbody>
</table>

<table id="pag_footer_num_pages" style="float: right;clear: both;">
    <tbody>
        <tr id="pagination_content">
          <td class="navigation_item navigation_left">&lt;</td>
            <td class="navigation_item navigation_right">&gt;</td>
        </tr>
    </tbody>
</table>
</div>
</div>


@endsection

@section('scripts')
@parent
{{ Html::script(mix('assets/admin/js/dashboard.js')) }}
<script type="text/javascript">
    var p = {!! json_encode($paises); !!};
</script>
<script type="text/javascript" src="{{asset("assets/admin/js/paginate_cruds.min.js")}}"></script>
@endsection

@section('styles')
@parent
{{ Html::style(mix('assets/admin/css/dashboard.css')) }}
<style>.navigation_left{border:1px solid #ddd;padding:12px;background-color:#000;color:#fff!important;font-weight:700!important}.navigation_right{border:1px solid #ddd;padding:12px;background-color:#000;color:#fff!important;font-weight:700!important}.navigation_active_item{background:#ddd}.navigation_item{border:1px solid #ddd;padding:12px;color:#5f9ea0;cursor:pointer!important}</style>
@endsection
