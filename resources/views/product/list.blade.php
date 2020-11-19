@extends('layout.app')

@section('bread_crumb')
<ul class="breadcrumb-list">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Shop</li>
</ul>
@endsection
@section('content')
<livewire:product-list />
@endsection