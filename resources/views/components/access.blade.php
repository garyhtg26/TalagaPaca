<x-main-layout>

    <section style="padding-top:8rem;padding-bottom:8rem;" id="product">
        <div class="text-center sm-px-5">
            <div class="mb-4">
                <h1 class=" text-title w-80" style="text-transform: uppercase">{{ __('text.access.title') }}</h1>
                <p style="color: #146C94" class="text-justify w-50 m-auto text-description">
                    {{ __('text.access.deskripsi') }}
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="text-left card-product w-80">
                            <div class="card-body">
                                <img src="img/ternate.png" class="img-produk">
                                <h3 class="text-uppercase mt-4 text-title"> {{ __('text.access.ternate') }}</h3>
                                <p style="color: #146C94" class="text-left text-description">
                                    {{ __('text.access.konten_ternate') }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <button onclick="window.location='{{ url("/access/ternate") }}'" class="btn btn-black-transparent">{{__('text.selengkapnya')}} <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="text-left card-product w-80">
                            <div class="card-body">
                                <img src="img/kao.png" class="img-produk">
                                <h3 class="text-uppercase mt-4 text-title"> {{ __('text.access.kao') }}</h3>
                                <p style="color: #146C94" class="text-left text-description">
                                    {{ __('text.access.konten_kao') }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <button onclick="window.location='{{ url("/access/kao") }}'" class="btn btn-black-transparent">{{__('text.selengkapnya')}} <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <hr class="my-5" style="width:95%;margin:auto;border-top: 2px solid rgba(0,0,0,.1);">
                <p style="color: #146C94" class="text-center text-description">
                    {{ substr(__('text.access.information'), 0, 75) }}
                    <br>
                    <b>{{ substr(__('text.access.information'), 67,40) }}</b>
                    <br>
                    {{ substr(__('text.access.information'), 99,70) }}
                    <br>
                    <b>{{ substr(__('text.access.information'), 170,50) }}</b>
                </p>
            </div>
        </div>
      </section>
</x-main-layout>
