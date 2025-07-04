<x-app-layout>
    <section class="min-vh-100 py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="card shadow border-0 mx-auto" style="max-width: 1000px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        @if ($servicio->imagen)
                            <img src="{{ asset('storage/' . $servicio->imagen) }}" class="img-fluid h-100 rounded-start" style="object-fit: cover;" alt="Imagen del servicio">
                        @else
                            <img src="{{ asset('images/default-service.jpg') }}" class="img-fluid h-100 rounded-start" style="object-fit: cover;" alt="Imagen no disponible">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h3 class="card-title fw-bold text-dark">{{ $servicio->nombre_servicio }}</h3>
                            <p class="text-muted">{{ $servicio->descripcion }}</p>

                            <p><strong>Precio:</strong> S/ {{ number_format($servicio->precio, 2) }} por m³</p>
                            <p><strong>Tiempo estimado:</strong> {{ $servicio->tiempo_estimado }}</p>

                            <div class="mt-4">
                                <a href="{{ route('servicios.index') }}" class="btn btn-outline-secondary">Volver a la lista</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>