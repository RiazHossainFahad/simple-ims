@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard for
                    @if($products[0]->need_supply == 0)
                        User
                    @else
                        Supplier
                    @endif
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Details</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $indexKey => $product)
                                <tr>
                                    <th scope="row">{{$indexKey + 1}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->details}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{number_format((float)$product->price, 2, '.', '')}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
