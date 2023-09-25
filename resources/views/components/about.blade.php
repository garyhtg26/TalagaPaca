<x-main-layout>

    <section style="padding-top:8rem;padding-bottom:8rem;" id="about-expand">
        <div class="text-center sm-px-5">
            <h1 class=" mb-4 text-title w-30" style="text-transform: uppercase">{{ __('text.about') }}</h1>
            <p style="color: #146C94" class="text-justify w-50 m-auto text-description">
                {{ substr(__('text.konten_about'), 0, 458) }} <br><br>
                {{ substr(__('text.konten_about'), 458, 692) }}<br><br>
                {{ substr(__('text.konten_about'), 1150, 1300) }}
             </p>

        </div>
      </section>
</x-main-layout>
