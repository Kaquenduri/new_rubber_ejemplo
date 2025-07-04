<x-app-layout>
    @error('servicio')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
    @if (session('success'))
        <section class="flex-colum align-items-center" style="background-color: #1e3a8a;">
            
                <div class="alert alert-success mb-0 border-0 rounded-0 text-center" id="mensaje-exito">
                    {{ session('success') }}
                </div>

                <script>
                    // Espera 3 segundos y desaparece el mensaje
                    setTimeout(() => {
                        const mensaje = document.getElementById('mensaje-exito');
                        if (mensaje) {
                            mensaje.style.transition = 'opacity 0.5s ease';
                            mensaje.style.opacity = '0';

                            // Después de que desaparezca visualmente, lo eliminamos
                            setTimeout(() => mensaje.remove(), 500);
                        }
                    }, 3000);
                </script>
            
        </section>
    @endif
    <section class="min-vh-100 d-flex align-items-center" style="background-color: #1e3a8a;">
        
        <div class="container py-5">
            <div class="text-center text-white mb-5">
                <h2 class="fw-bold fs-1">Contáctanos</h2>
                <p class="fs-5">
                    Estamos aquí para ayudarte con tus proyectos de mantenimiento industrial<br>
                    y revestimientos especializados
                </p>
            </div>

            <div class="row g-4">
                <!-- Información de contacto -->
                <div class="col-lg-6">
                    <div class="bg-light rounded-4 p-4 shadow-sm" style="font-size: 18px">
                        <h4 class="fw-bold text-center mb-4">Información de Contacto</h4>

                        <div class="mb-4 p-3 bg-body-secondary rounded d-flex">
                            <div class="me-3 text-warning fs-4">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Dirección</h6>
                                <p class="mb-0 small">Asoc. Urb. PeruArbo Mz E, Sublote 4B<br>Cerro Colorado - Arequipa, Perú</p>
                            </div>
                        </div>

                        <div class="mb-4 p-3 bg-body-secondary rounded d-flex">
                            <div class="me-3 text-warning fs-4">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Teléfonos</h6>
                                <p class="mb-0 small">
                                    René Nuñonca (Gerente General): 949 155 648<br>
                                    Erick Aragón (Jefe de Planta): 991 378 033
                                </p>
                            </div>
                        </div>

                        <div class="mb-4 p-3 bg-body-secondary rounded d-flex">
                            <div class="me-3 text-warning fs-4">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Correos Electrónicos</h6>
                                <p class="mb-0 small">
                                    gerentegeneral@newrubber.com.pe<br>
                                    jefedeplanta@newrubber.com.pe
                                </p>
                            </div>
                        </div>

                        <div class="p-3 bg-body-secondary rounded d-flex">
                            <div class="me-3 text-warning fs-4">
                                <i class="bi bi-folder-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Datos de la Empresa</h6>
                                <p class="mb-0 small">
                                    Razón Social: NEW RUBBER E.I.R.L<br>
                                    RUC: 20605638041
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulario de contacto -->
                <div class="col-lg-6">
                    <div class="bg-light rounded-4 p-4 shadow-sm" style="font-size: 18px">
                        <h4 class="fw-bold text-center mb-4">Envíanos un Mensaje</h4>

                        <form acction="{{ route('contacto.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Nombre Completo <span class="text-danger">*</span></label>
                                <input type="text" name="nombre" class="form-control rounded-3" value="{{ auth()->user()->name ?? '' }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Empresa <span class="text-danger">*</span></label>
                                <input type="text" name="empresa" class="form-control rounded-3" value="{{ auth()->user()->empresa ?? '' }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Correo Electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="correo" class="form-control rounded-3" value="{{ auth()->user()->email ?? '' }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Teléfono <span class="text-danger">*</span></label>
                                <input type="text" name="telefono" class="form-control rounded-3" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Servicio de Interés <span class="text-danger">*</span></label>
                                <select name="servicio" class="form-select rounded-3" required>
                                    <option selected disabled>Selecciona un servicio</option>
                                    @foreach ($servicios as $servicio)
                                        <option value="{{ $servicio->nombre_servicio }}">{{ $servicio->nombre_servicio }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label small fw-bold">Mensaje <span class="text-danger">*</span></label>
                                <textarea name="mensaje" class="form-control rounded-3" rows="4" required></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn fw-bold px-5 py-2 rounded-3 text-black"
                                        style="background-color: #d0ba7e;">
                                    Enviar Mensaje
                                </button>
                            </div>
                        </form>

                        @if (session('confirmacion'))
                            <script>
                                alert("{{session('confirmacion')}}")
                            </script>
                        @endif 

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>