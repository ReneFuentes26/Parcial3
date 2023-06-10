@extends('layouts.app')

@section('template_title')
    {{ $zapato->name ?? "{{ __('Show') Zapato" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Zapato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('zapatos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>


                        <div class="form-group">
                            <strong>Model:</strong>
                            {{ $zapato->model }}
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

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
