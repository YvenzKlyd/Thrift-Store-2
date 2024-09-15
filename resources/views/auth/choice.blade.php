@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Thrift Store') }}</div>

                <div class="card-body">
                    @guest
                        <p>Please login or register to continue shopping.</p>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                        </div>
                    @else
                        <p>Welcome back, {{ Auth::user()->name }}!</p>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('products.index') }}" class="btn btn-primary">Continue Shopping</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
