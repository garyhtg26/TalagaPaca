<x-main-layout>
    <section id="event">
      <div class="container pt-10">
          <div class="card card-1">
                <div class="px-3">
                    <h1 class="text-center mb-4 text-title w-80 text-uppercase">{{ __('text.menu.event') }}</h1>
                   <div class="container-atraksi row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <img src="img/Event/FestivalMenembak/2.jpg" class="img-atraksi">
                                    <span class="img-atraksi-title">Target Shooting</span>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="text-description text-sm">{{ substr(__('text.event.konten_menembak'), 0, 155) }}...</div>
                                    <button onclick="window.location='{{ url("/event/menembak") }}'" class="btn btn-black-transparent">{{__('text.selengkapnya')}} <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <img src="img/Event/FunMarathon/3.jpg" class="img-atraksi">
                                    <span class="img-atraksi-title">Fun Marathon</span>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="text-description text-sm">{{ substr(__('text.event.konten_maraton'), 0, 155) }}...</div>
                                    <button onclick="window.location='{{ url("/event/maraton") }}'" class="btn btn-black-transparent">{{__('text.selengkapnya')}} <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                   </div>

                </div>

          </div>
      </div>
    </section>
    <div class="my-2 py-5">
    </div>
  </x-main-layout>
