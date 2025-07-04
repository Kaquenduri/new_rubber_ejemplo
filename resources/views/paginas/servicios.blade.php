<x-app-layout>
    @if (session('success'))
        <section style="background-color: #ffffff;" >
            <div class="alert alert-success mb-0 border-0 rounded-0 text-center" id="mensaje-exito">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(() => {
                    const mensaje = document.getElementById('mensaje-exito');
                    if (mensaje) {
                        mensaje.style.transition = 'opacity 0.5s ease';
                        mensaje.style.opacity = '0';
                        setTimeout(() => mensaje.remove(), 500);
                    }
                }, 3000);
            </script>
        </section>
    @endif

    <section class="py-5" style="background-color: #ffffff; min-height: 100vh;">
        @auth
            @if (auth()->user()->esAdmin())
                <div class="container mt-4 bg-white">
                    <a href="{{ route('servicios.create') }}" class="btn fw-bold text-black" style="background-color: #d0ba7e;">
                        + Agregar Servicio
                    </a>
                </div>
            @endif
        @endauth

        <div class="container">
            <h1 class="text-center fw-bold mb-4" style="color: #0a1f44; font-family: 'Orbitron';">Servicios Ofrecidos</h1>
            <p class="text-muted mx-auto prologo">
                En esta sección encontrarás todos los servicios que ofrecemos en NEW RUBBER. Cada uno está diseñado para adaptarse a las necesidades del sector industrial y minero. Puedes revisar la descripción, el precio estimado y el tiempo aproximado de ejecución para tener una idea clara antes de solicitar atención personalizada.
            </p>

            <div class="row g-4">
                @foreach ($servicios as $servicio)
    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            @if ($servicio->imagen)
                                <img src="{{ asset('storage/' . $servicio->imagen) }}" class="card-img-top" alt="{{ $servicio->nombre_servicio }}">
                            @else
                                <img src="{{ asset('images/default-service.jpg') }}" class="card-img-top" alt="Imagen no disponible">
                            @endif

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-dark fw-bold">{{ $servicio->nombre_servicio }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($servicio->descripcion, 100) }}</p>
                                <p class="mb-1"><strong>Precio:</strong> S/ {{ number_format($servicio->precio, 2) }}</p>
                                <p class="mb-1"><strong>Tiempo estimado:</strong> {{ $servicio->tiempo_estimado }}</p>
                                <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-eye"></i> Ver
                                </a>
                                @auth
                                    @if (auth()->user()->esAdmin())
                                        <div class="mt-3 d-flex justify-content-between flex-wrap gap-2">
                                    

                                            <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil-square"></i> Editar
                                            </a>

                                            <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este servicio?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i> Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            @if($servicios->isEmpty())
                <div class="alert alert-info text-center mt-4">
                    No hay servicios registrados aún.
                </div>
            @endif
        </div>
    </section>
</x-app-layout>