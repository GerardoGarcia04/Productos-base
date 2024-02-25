@extends('layouts.app', [
	'title' => __('products.title_show'), 
])

@section('content')
<div class="report-container p-3">
	<div class="row">
		<div class="col-sm-12 col-md-6 offset-md-3">
			<br>
			<div class="card card-info">
				<div class="card-header">
					<div class="row">
						<div class="col-sm-12 col-md-6 card-title">@lang('products.title_show')</div>
						<div class="col-sm-12 col-md-6 text-right">
							<a href="{{ route('products.index') }}">
								<i class="fas fa-long-arrow-alt-left"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					
					<div class="row">
						<div class="col-sm-4 offset-sm-1 text-end">@lang('products.id')</div>
						<div class="col-sm-6">{{ $product->id }}</div>
					</div>
					<div class="row">
						<div class="col-sm-4 offset-sm-1 text-end">@lang('products.name')</div>
						<div class="col-sm-6">{{ $product->name }}</div>
					</div>
					<div class="row">
						<div class="col-sm-4 offset-sm-1 text-end">@lang('products.category')</div>
						<div class="col-sm-6">{{ $product->category }}</div>
					</div>
					<div class="row">
						<div class="col-sm-4 offset-sm-1 text-end">@lang('products.picture')</div>
						<div class="col-sm-6">{{ $product->picture }}</div>
					</div>
					<div class="row">
						<div class="col-sm-4 offset-sm-1 text-end">@lang('products.created_at')</div>
						<div class="col-sm-6">{{ $product->created_at }}</div>
					</div>
					<div class="row">
						<div class="col-sm-4 offset-sm-1 text-end">@lang('products.updated_at')</div>
						<div class="col-sm-6">{{ $product->updated_at }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection