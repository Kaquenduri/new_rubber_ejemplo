<x-app-layout>
    <section class="bg-dark text-white min-vh-100 d-flex align-items-center py-5">
        <div class="container py-4">
            <div class="row gx-5">
                <!-- Texto centrado vertical y horizontalmente -->
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="text-center text-lg-start">
                        <h2 class="display-1 fw-bold text-warning text-uppercase mb-4" style="font-family: 'Orbitron';letter-spacing: 3px;">
                            ¿Quiénes Somos?
                        </h2>
                        <p class="fs-2 text-light mb-5 lh-base">
                            En <span class="fw-bold text-warning">NEW RUBBER E.I.R.L.</span> brindamos soluciones <span class="text-warning">industriales especializadas</span> en <strong>revestimientos de caucho antiabrasivo</strong>, <strong>poliuretano</strong> y <strong>cerámico</strong>. Somos el aliado clave en el mantenimiento de equipos para el sector minero e industrial.
                        </p>

                        <h3 class="h1 text-warning fw-bold mb-3">Misión</h3>
                        <p class="fs-4 text-light mb-5" style="font-size: 24px">
                            Brindar servicios técnicos de alta calidad, seguros y personalizados que prolonguen la vida útil de los equipos industriales, generando valor y confianza en cada proyecto.
                        </p>

                        <h3 class="h1 text-warning fw-bold mb-3">Visión</h3>
                        <p class="fs-4 text-light" style="font-size: 24px">
                            Ser líderes a nivel nacional en innovación y excelencia dentro del mantenimiento industrial, marcando la diferencia con tecnología, experiencia y compromiso.
                        </p>
                    </div>
                </div>

                <!-- Imagen al lado derecho -->
                <div class="col-lg-6 text-center d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/equipo_new_rubber.jpg') }}"
                         alt="Equipo New Rubber"
                         class="img-fluid rounded-4 shadow-lg border border-4 border-warning"
                         style="max-height: 650px; animation: zoomIn 1s ease-in-out;">
                </div>
            </div>
        </div>
    </section>

</x-app-layout>