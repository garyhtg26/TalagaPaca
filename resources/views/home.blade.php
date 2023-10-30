<x-main-layout>
      <section id="jumbotron" class="section full-height">
        <div class="absolute-center">
          <div class="section">
            <div class="container">
              <div class="row" data-aos="fade-down" data-aos-duration="2000">
                <div class="col-12" >
                  <h1 class="jumbotron-title">Explore <br>Talaga Paca</h1>
                  <p style="margin:auto;color:white; max-width:800px">{{ __('text.konten_jumbotron') }}</p>
                </div>
              </div>
              <div class="col-12 text-center mt-4">
                <button  onclick="window.location='{{ url("/about") }}'" class="learn-more">
                  <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">{{ __('text.pelajari') }}</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="slider">
        <div class="slide-track">
          <div class="slide">
            <img src="img/partners/Logo-01.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-02.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-03.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-04.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-05.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-06.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-07.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-01.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-02.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-03.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-04.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-05.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-06.png" class="py-2" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="img/partners/Logo-07.png" class="py-2" height="100" width="250" alt="" />
          </div>
        </div>
      </div>
      <section id="popular" >
        <div data-aos="fade-up" data-aos-duration="2000">
            <h3 class="text-center mb-4 text-title">{{ __('text.populer') }}</h3>
            <div class="container carousel">
                <div class="carousel-card">
                    <img src="img/jungle.jpg">
                </div>
                <div class="carousel-card">
                    <img src="img/gua.jpg">
                </div>
                <div class="carousel-card">
                    <img src="img/perahu.jpg">
                </div>
                <div class="carousel-card">
                    <img src="img/jungle2.jpg">
                </div>
            </div>
        </div>
      </section>
      <section id="about">
        <div class="text-center">
          <h1 class=" mb-4 text-title" style="text-transform: uppercase">{{ __('text.about') }}</h1>
          <p class="w-80 m-auto text-description">{{ substr(__('text.konten_about'), 0, 458) }}</p>
          <button onclick="window.location='{{ url("/about") }}'" class="btn btn-about mt-5">{{ __('text.selengkapnya') }}</button>
        </div>
      </section>
      <section id="mapSection">
        <div class="mt-5" id="map"></div>
      </section>
      <div class="py-5">
    </div>
</x-main-layout>
