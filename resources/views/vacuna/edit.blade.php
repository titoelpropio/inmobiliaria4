                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        @extends('layouts.admin')
@section('content')
@include('alerts.request')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	{!!Form::model($vacuna,['route'=> ['vacuna.update',$vacuna->id],'method'=>'PUT'])!!}
	@include('vacuna.forms.vac')
        <div class="form-group">
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	</div>        
	{!!Form::close()!!}
{!!Form::open(['route'=>['vacuna.destroy',$vacuna->id],'method'=>'DELETE'])!!}
<div class="form-group">
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}</div>
	{!!Form::close()!!}

	</div>
</div>

@stop