@extends('layouts.app')

@section('template_title')
    {{ $zapato->name ?? "{{ __('Show') Zapato" }}
@endsection

@section('content')
    <div class="custom-background-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                        <span class="card-title">{{ __('Show') }} {{ $zapato->model }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('zapatos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $zapato->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $zapato->price }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $zapato->cantidad }}
                        </div>
                        <div class="form-group custom-image-container">
                            <img src="{{ $zapato->image }}" alt="{{ $zapato->model }}" style="max-width: 400px">
                        </div>
                        <div class="card-footer">
                        <div class="float-right">
                            <img src="{{ asset('images/crunchylogo.png') }}" alt="Logo" style="max-width: 100px;">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .custom-image {
            max-width: 100%;
            max-height: 100%;
        }

        .custom-background-container {
            background-image: url('/images/fondo1.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endsection
