@extends('layouts.base')
@section('content') {{-- @yield('content') --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Se actualizo el producto: {{$product->name}}</h1>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <p><strong>Name:</strong> {{$product->name}}</p>
                    <p><strong>Description:</strong> {{$product->description}}</p>
                    <p><strong>Price:</strong> {{$product->price}}</p>
                    <p><strong>Stock:</strong> {{$product->stock}}</p>
                    <p><strong>Category:</strong> {{$product->category->name}}</p>
                    <p><strong>Created at:</strong> {{$product->created_at}}</p>
                    <p><strong>Updated at:</strong> {{$product->updated_at}}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

