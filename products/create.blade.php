@extends('layouts.app', [
	'title' => __('products.title_add'), 
])

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<input type="hidden" id="route" value="products" />
			<div class="card card-info">
				<div class="card-header">
					<div class="row">
						<div class="col-12 card-title">@lang('products.title_add')</div>
					</div>
				</div>

				{{ Form::open(['id' => 'product-create', 'route' => "products.store", 'method' => 'POST']) }}
					@include('crud-maker.components.session-alerts')
					<div class="message-container"></div>
					
					<div class="card-body">
						@include("products.fields")
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-sm-10 col-lg-4 offset-lg-8 text-end">
								<button type="submit" class="btn btn-primary">@lang('Save')</button>
								<a href="{{ route('products.index') }}">
									<button type="button" class="btn btn-secondary">@lang('Cancel')</button>
								</a>
							</div>
						</div>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection