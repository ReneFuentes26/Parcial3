@extends('layouts.app')

@section('template_title')
    Zapato
@endsection

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
              CrunchyShoes
            </div>
        <div class="card-body">
            <h5 class="card-title">Nuestros Catalogo de Zapatos </h5>
                <h4><p class="card-text">Los mejores zapatos que puedas comprar en toda la zona.</p></h4>
        </div>
    </div>
    <br />

    <div class="card-body">
        <div class="table-responsive">
            <div class="card">
                <body>
                    @foreach ($zapatos as $zapato)
                        <tr>
                            <div class="card-group">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $zapato->model }}</h5>
                                    <div class="text-center">
                                        <img src="{{$zapato->image}}" class="rounded" width="350" height="250">
                                    </div>
                                    <p class="card-text"><h3>${{ $zapato->price }}</h3></p>
                                    <p class="card-text"><h3>Quedan en existencia: {{ $zapato->cantidad }}</h3></p>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <a class="btn btn-sm btn-primary" href="{{ route('zapatos.show',$zapato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                    </div>
                                </div>
                                </div>
                              </div>
                            </td>
                        </tr>
                    @endforeach
                </body>
            </div>
        </div>
@endsection




