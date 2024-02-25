@include("crud-maker.components.form-row", ["params" => [
	[
		"name" => "name",
		"id" => "name",
		"class" => "form-control",
		"entity" => "products",
		"type" => "text",
		"defaultValue" => old("name") ?? ($product->name ?? ""),
		"required" => "true",
	]
]])
@include("crud-maker.components.form-row", ["params" => [
	[
		"name" => "category",
		"id" => "category",
		"class" => "form-control",
		"entity" => "products",
		"type" => "text",
		"defaultValue" => old("category") ?? ($product->category ?? ""),
		"required" => "true",
	]
]])
@include("crud-maker.components.form-row", ["params" => [
	[
		"name" => "picture",
		"id" => "picture",
		"class" => "form-control",
		"entity" => "products",
		"type" => "text",
		"defaultValue" => old("picture") ?? ($product->picture ?? ""),
	]
]])
