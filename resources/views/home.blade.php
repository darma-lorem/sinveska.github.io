@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }}
                     --> 
                     <div class="row justify-content-center py-4">
                        <div class="col-md-3">
                            <div class="card bg-primary text-center">
                              <div class="card-body">
                                <a href="{{ route('users.index') }}" class="btn btn-primary">User Management</a>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-success text-center">
                              <div class="card-body">
                                <a href="{{ route('products.index') }}" class="btn btn-success">Barang Masuk</a>
                              </div>
                            </div>
                        </div>
                          <div class="col-md-3">
                            <div class="card bg-success text-center">
                              <div class="card-body">
                                <a href="{{ route('inventaris.index') }}" class="btn btn-success">Pinjam Barang</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
