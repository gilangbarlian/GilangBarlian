@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tugaswp1s') }}">Tugaswp1</a> :
@endsection
@section("contentheader_description", $tugaswp1->$view_col)
@section("section", "Tugaswp1s")
@section("section_url", url(config('laraadmin.adminRoute') . '/tugaswp1s'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tugaswp1s Edit : ".$tugaswp1->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($tugaswp1, ['route' => [config('laraadmin.adminRoute') . '.tugaswp1s.update', $tugaswp1->id ], 'method'=>'PUT', 'id' => 'tugaswp1-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama')
					@la_input($module, 'email')
					@la_input($module, 'pesan')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/tugaswp1s') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#tugaswp1-edit-form").validate({
		
	});
});
</script>
@endpush
