@extends('layouts.app')
@section('content')

<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">
              <div class="col-lg-7">
                <h5 class="mb-3"><a href="/zapatos" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continua Comprando</a></h5>
                </div
                </div>

                <div class="card mb-3">
                  <div class="card-body">
                    @foreach ($cartItems as $item)
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img src="{{$item->attributes->image}}" class="img-fluid rounded-3" alt="{{$item->name}}" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>{{ $item->name }}</h5>
                          <h5 class="mb-0">${{$item->price}}</h5>
                        </div>
                      </div>
                      <div class="h-10 w-28">
                        <div class="relative flex flex-row w-full h-8">
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id}}" class="" >
                                <input type="number" name="quantity" value="{{ $item->quantity }}"
                                class="w-full text-center h-10 text-gray-500 outline-none rounded border border-gray-600 py-2" />
                                <button class="w-full px-4 mt-1 py-1.5 text-sm rounded shadow text-violet-100 bg-gray-800">Actualizar</button>
                            </form>
                        </div>

                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="flex justify-between items-center my-5">
                <div class="font-semibold text-2xl">Total: ${{ Cart::getTotal() }}</div>
                <div>
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <button class="btn btn-info btn-block btn-lg">Limpiar Carrito</button>
                    </form>
                </div>
            </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
