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
                                    <h5 class="card-title">{{ $zapato->name }}</h5>
                                    <div class="text-center">
                                        <img src="{{$zapato->image}}" class="rounded" width="350" height="250">
                                    </div>
                                    <p class="card-text"><h3>${{ $zapato->price }}</h3></p>
                                    <p class="card-text"><h3>Quedan en existencia: {{ $zapato->cantidad }}</h3></p>
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                                        @csrf
                                        <input type="hidden" value="{{ $zapato->id }}" name="id">
                                        <input type="hidden" value="{{ $zapato->name }}" name="name">
                                        <input type="hidden" value="{{ $zapato->price }}" name="price">
                                        <input type="hidden" value="{{ $zapato->image }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="px-4 py-1.5 text-black text-sm bg-white-900 rounded">Agregar al Carrito</button>
                                        <button class="px-4 py-1.5 text-black text-sm bg-white-900 rounded"><a href="{{ route('zapatos.show',$zapato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver Producto') }}</a></button>
                                    </form>
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




