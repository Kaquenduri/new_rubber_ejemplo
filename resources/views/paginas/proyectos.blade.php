<x-app-layout>
    @if (session('success'))
        <section style="background-color: #ffffff;">
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
                    <a href="{{ route('proyectos.create') }}" class="btn fw-bold text-black" style="background-color: #d0ba7e;">
                        + Agregar Proyecto
                    </a>
                </div>
            @endif
        @endauth

        <div class="container">
            <h1 class="text-center fw-bold mb-4" style="color: #0a1f44; font-family: 'Orbitron';">Proyectos Realizados</h1>
            <p class="text-muted mx-auto prologo" >
                Aquí puedes ver algunos de los proyectos que hemos desarrollado para distintas empresas del sector industrial y minero. Cada proyecto refleja nuestra experiencia, compromiso y la calidad de nuestros servicios. Es una muestra de lo que somos capaces de hacer por nuestros clientes.
            </p>

            <div class="row g-4">
                @foreach ($proyectos as $proyecto)
             
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            @if ($proyecto->imagen_1)
                                <img src="{{ asset('storage/' . $proyecto->imagen_1) }}" class="card-img-top" alt="{{ $proyecto->titulo }}">
                            @else
                                <img src="{{ asset('images/default-project.jpg') }}" class="card-img-top" alt="Imagen no disponible">
                            @endif

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-dark fw-bold">{{ $proyecto->titulo }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($proyecto->descripcion, 100) }}</p>
                                <p class="mb-1"><strong>Empresa:</strong> {{ $proyecto->empresa_contratante }}</p>
                                <p class="mb-1"><strong>Servicios:</strong> {{ $proyecto->servicios_empleados }}</p>
                                <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-eye"></i> Ver
                                </a>
                                @auth
                                    @if (auth()->user()->esAdmin())
                                        <div class="mt-3 d-flex justify-content-between flex-wrap gap-2">
                                            

                                            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil-square"></i> Editar
                                            </a>

                                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este proyecto?');">
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

            @if($proyectos->isEmpty())
                <div class="alert alert-info text-center mt-4">
                    No hay proyectos registrados aún.
                </div>
            @endif
        </div>
    </section>
</x-app-layout>