<x-app-layout>
    <section class="position-relative text-white" style="background-image: url('{{ asset('images/img1.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
        <div class="container h-100 d-flex align-items-center">
            <div class="row">
                <div class="col-md-8 col-lg-6 z-1 mt-1">
                    <h1 class="fw-bold text-uppercase mb-4 mt-5" style="font-family: 'Orbitron', sans-serif; font-size: 55px;">
                        ESPECIALISTAS EN<br>
                        REVESTIMIENTO CON CAUCHO,<br>
                        POLIURETANO Y CERÁMICO
                    </h1>
                    <p class="fs-2 mb-4">
                        En <strong>NEW RUBBER</strong> brindamos soluciones en caucho antiabrasivo, 
                        revestimientos en poliuretano y cerámico, soldadura por termofusión y 
                        mantenimiento de plantas mineras e industriales. Calidad, experiencia y 
                        eficiencia para tu operación.
                    </p>
                    <a href="{{ route('servicios.index') }}" class="btn btn-light fw-bold px-5 py-3" style="font-size:20px">
                        Ver servicios
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>