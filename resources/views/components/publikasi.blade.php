<x-main-layout>

    <section style="padding-top:8rem;padding-bottom:8rem;" id="facility">
        <div class="text-left sm-px-5">
            <h1 class=" mb-4 text-title w-50" >{{ __('text.publikasi.title') }}</h1>
            <div style="color: #146C94" class="text-justify w-50 m-auto text-description">
                <iframe width="100%" height="350px" src="{{url('https://www.youtube.com/embed/mdozRSkQ_tY?si=FEpnqaC9cHjqyG6d')}}" title="Ekowisata Talaga Paca - Halmahera Utara">
                </iframe>
            </div>
            </br>
            <h3 class=" mb-4 text-subtitle w-50" >  {{ __('text.publikasi.artikel2') }} </h3>
            <p style="color: #146C94" class="text-justify w-50 m-auto text-description">
            {{ __('text.publikasi.konten_artikel2') }}
             </p>
            </br>
            <div class="w-50 m-auto">
                <button onclick="window.location='{{session()->get('locale') == 'id' ? url("https://journal.unilak.ac.id/index.php/dinamisia/article/view/12167/4594") : url("https://iopscience.iop.org/article/10.1088/1755-1315/1192/1/012014/pdf") }}'" class="btn btn-black-transparent">{{__('text.publikasi.baca')}} <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
      </section>
</x-main-layout>
