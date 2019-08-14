@extends('admin.layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Categorias</div>
  <div class="panel-body">


  	{{ Form::open(array('route' => 'admin.store_new_email_config')) }}


  	<table class="table table-hover">
  		<thead>
  			<tr>
  				<th>Event</th>
  				<th>Template</th>
  			</tr>
  		</thead>
  		<tbody>
  			<tr>
  				<td>Login</td>
  				<td><select id="login_emout" name="login_emout" class="form-control">
  					<option value="">--- * Please select template * ---</option>
  					@foreach($fls as $f)
              @if(explode("/",$f)[count(explode("/",$f))-1]=="login_template.html")
                  <option value="{{$f}}" selected="selected">{{explode("/",$f)[count(explode("/",$f))-1]}}</option>
              @else
                  <option value="{{$f}}">{{explode("/",$f)[count(explode("/",$f))-1]}}</option>
              @endif
  					@endforeach
  				</select></td>
  			</tr>
  			<tr>
  				<td>Subscribe</td>
  				<td><select id="subscribe_emout" name="subscribe_emout" class="form-control">
  					<option value="">--- * Please select template * ---</option>
  					@foreach($fls as $f)
  						@if(explode("/",$f)[count(explode("/",$f))-1]=="subscribe_template.html")
                  <option value="{{$f}}" selected="selected">{{explode("/",$f)[count(explode("/",$f))-1]}}</option>
              @else
                  <option value="{{$f}}">{{explode("/",$f)[count(explode("/",$f))-1]}}</option>
              @endif
  					@endforeach
  				</select></td>
  			</tr>
  			<tr>
  				<td>Recovery</td>
  				<td><select id="recovery_emout" name="recovery_emout" class="form-control">
  					<option value="">--- * Please select template * ---</option>
  					@foreach($fls as $f)
  						@if(explode("/",$f)[count(explode("/",$f))-1]=="recovery_template.html")
                  <option value="{{$f}}" selected="selected">{{explode("/",$f)[count(explode("/",$f))-1]}}</option>
              @else
                  <option value="{{$f}}">{{explode("/",$f)[count(explode("/",$f))-1]}}</option>
              @endif
  					@endforeach
  				</select></td>
  			</tr>
  			<tr>
  				<td>Contact</td>
  				<td><select id="contact_emout" name="contact_emout" class="form-control">
  					<option value="">--- * Please select template * ---</option>
  					@foreach($fls as $f)
  						@if(explode("/",$f)[count(explode("/",$f))-1]=="contact_template.html")
                  <option value="{{$f}}" selected="selected">{{explode("/",$f)[count(explode("/",$f))-1]}}</option>
              @else
                  <option value="{{$f}}">{{explode("/",$f)[count(explode("/",$f))-1]}}</option>
              @endif
  					@endforeach
  				</select></td>
  			</tr>
  		</tbody>
  	</table>

  	<div style="width: 100%;text-align: center;">
  		<button class="btn btn-primary">SAVE</button>
  	</div>

  	{{ Form::close() }}


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
