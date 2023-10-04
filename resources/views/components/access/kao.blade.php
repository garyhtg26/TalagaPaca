<x-main-layout>

    <section style="padding-top:8rem;padding-bottom:8rem;" id="access">
        <div class="text-center sm-px-5">
            <div class="mb-4">
                <h1 class=" text-title w-80" style="text-transform: uppercase">{{ __('text.access.kao') }}</h1>
                <div class="container mt-4">
                    <img src="/img/route.svg" class="img-route">
                </div>
            </div>
            <div class="container isi">
                <hr class="my-5" style="width:95%;margin:auto;border-top: 2px solid rgba(0,0,0,.1);">
                <div class="d-flex">
                    <span class="circle mr-3">1</span>
                    <p style="color: #146C94" class="text-left text-description">
                        {{ __('text.access.kao1') }}
                    </p>
                </div>
                <div class="d-flex">
                    <span class="circle mr-3">2</span>
                    <p style="color: #146C94" class="text-left text-description">
                        {{ __('text.access.kao2') }}
                    </p>
                </div>
                <div class="d-flex">
                    <span class="circle mr-3">3</span>
                    <p style="color: #146C94" class="text-left text-description">
                        {{ __('text.access.kao3') }}
                    </p>
                </div>
                <div class="d-flex">
                    <span class="circle mr-3">4</span>
                    <p style="color: #146C94" class="text-left text-description">
                        {{ __('text.access.kao4') }}
                    </p>
                </div>
                <div class="d-flex">
                    <span class="circle mr-3">5</span>
                    <p style="color: #146C94" class="text-left text-description">
                        {{ __('text.access.kao5') }}
                    </p>
                </div>
                <div class="d-flex">
                    <span class="circle mr-3">6</span>
                    <p style="color: #146C94" class="text-left text-description">
                        {{ __('text.access.kao6') }}
                    </p>
                </div>
            </div>
            <div class="footer">
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
