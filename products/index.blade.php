@extends('crud-maker.layouts.index', [
	'title' => __('products.title_index'), 
	'entity' => 'products', 
	'form' => 'product',
])

@section('datatable')
	{{ $dataTable->table(["width" => "100%"]) }}
@endsection