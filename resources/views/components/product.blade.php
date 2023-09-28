<x-main-layout>

    <section style="padding-top:8rem;padding-bottom:8rem;" id="product">
        <div class="text-center sm-px-5">
            <h1 class=" mb-4 text-title w-50" style="text-transform: uppercase">{{ __('text.produk.title') }}</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="text-left card-product w-80">
                            <div class="card-body">
                                <img src="img/Produk/OlahanPala.jpeg" class="img-produk">
                                <h3 class="text-uppercase mt-4 text-title"> {{ __('text.produk.pala') }}</h3>
                            </div>
                            <div class="card-footer">
                                <button onclick="window.location='{{ url("/product/pala") }}'" class="btn btn-black-transparent">{{__('text.selengkapnya')}} <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="text-left card-product w-80">
                            <div class="card-body">
                                <img src="img/Produk/Kerajinan.jpeg" class="img-produk">
                                <h3 class="text-uppercase mt-4 text-title"> {{ __('text.produk.kerajinan') }}</h3>
                            </div>
                            <div class="card-footer">
                                <button onclick="window.location='{{ url("/product/kerajinan") }}'" class="btn btn-black-transparent">{{__('text.selengkapnya')}} <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
      </section>
</x-main-layout>
