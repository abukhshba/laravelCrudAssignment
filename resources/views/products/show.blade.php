@extends('products.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">products Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $products->name }}</h5>
        <p class="card-text">Price : {{ $products->price }}</p>
  </div>
    </hr>
  </div>
</div>
