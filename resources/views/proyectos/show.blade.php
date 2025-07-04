<x-app-layout>
    <section class="min-vh-100 py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="card shadow border-0 mx-auto" style="max-width: 1000px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        @if ($proyecto->imagen_1)
                            <img src="{{ asset('storage/' . $proyecto->imagen_1) }}" class="img-fluid h-100 rounded-start" style="object-fit: cover;" alt="Imagen principal del proyecto">
                        @else
                            <img src="{{ asset('images/default-project.jpg') }}" class="img-fluid h-100 rounded-start" style="object-fit: cover;" alt="Imagen no disponible">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h3 class="card-title fw-bold text-dark">{{ $proyecto->titulo }}</h3>
                            <p class="text-muted">{{ $proyecto->descripcion }}</p>

                            <p><strong>Empresa contratante:</strong> {{ $proyecto->empresa_contratante }}</p>
                            <p><strong>Servicios empleados:</strong> {{ $proyecto->servicios_empleados }}</p>

                            <div class="d-flex gap-2 mt-4">
                                @if ($proyecto->imagen_2)
                                    <img src="{{ asset('storage/' . $proyecto->imagen_2) }}" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;" alt="Imagen secundaria">
                                @endif
                                @if ($proyecto->imagen_3)
                                    <img src="{{ asset('storage/' . $proyecto->imagen_3) }}" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;" alt="Imagen adicional">
                                @endif
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('proyectos.index') }}" class="btn btn-outline-secondary">Volver a la lista</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>