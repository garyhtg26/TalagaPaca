<x-main-layout>
    <section id="event">
      <div class="container pt-10">
          <div class="card card-1">
                <div class="px-3">
                  <div class="container-atraksi row">
                        <div class="col-12 mb-2">
                            <h1 class="text-center mb-4 text-title w-80 text-uppercase">{{ __('text.event.menembak') }}</h1>
                            <img src="img/Event/FestivalMenembak/2.jpg" class="img-event">
                            <p style="color: #19A7CE" class="text-justify w-100 mt-4 text-description">
                                {{ substr(__('text.event.konten_menembak'), 0, 458) }} <br><br>
                                {{ substr(__('text.event.konten_menembak'), 458, 692) }}<br><br>
                                {{ substr(__('text.event.konten_menembak'), 1150, 1300) }}
                             </p>
                        </div>
                        <div class="col-12 mb-2">
                            <h1 class="text-center mb-4 text-title w-80 text-uppercase">{{ __('text.event.maraton') }}</h1>
                            <img src="img/Event/FunMarathon/3.jpg" class="img-event">
                            <p style="color: #19A7CE" class="text-justify w-100 mt-4 text-description">
                                {{ substr(__('text.event.konten_maraton'), 0, 458) }} <br><br>
                                {{ substr(__('text.event.konten_maraton'), 458, 692) }}<br><br>
                                {{ substr(__('text.event.konten_maraton'), 1150, 1300) }}
                             </p>
                        </div>
                        <div class="col-12 mb-2">
                            <h1 class="text-center mb-4 text-title w-80 text-uppercase">{{ __('text.event.festival') }}</h1>
                            <img src="img/segera.png" class="img-event">
                        </div>
                   </div>

                </div>

          </div>
      </div>
    </section>
    <div class="my-2 py-5">
    </div>
  </x-main-layout>
