@extends('layouts.app')

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

                    {{ __('Se ha registrado correctamente!') }}
                    <div class="d-grid gap-2">
                        <a href="/" class="btn btn-success"  type="button">Inicio</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
