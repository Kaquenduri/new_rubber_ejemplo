<x-app-layout>
    <section class="min-vh-100 py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="card shadow border-0 mx-auto" style="max-width: 800px;">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="mb-0">Editar servicio</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nombre del servicio -->
                        <div class="mb-3">
                            <label for="nombre_servicio" class="form-label fw-semibold">Nombre del servicio</label>
                            <input type="text" name="nombre_servicio" id="nombre_servicio" class="form-control" value="{{ old('nombre_servicio', $servicio->nombre_servicio) }}" required>
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-semibold">Descripción del servicio</label>
                            <textarea name="descripcion" id="descripcion" rows="4" class="form-control" required>{{ old('descripcion', $servicio->descripcion) }}</textarea>
                        </div>

                        <!-- Precio -->
                        <div class="mb-3">
                            <label for="precio" class="form-label fw-semibold">Precio (S/.) por m³</label>
                            <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ old('precio', $servicio->precio) }}" required>
                        </div>

                        <!-- Tiempo estimado -->
                        <div class="mb-3">
                            <label for="tiempo_estimado" class="form-label fw-semibold">Tiempo estimado</label>
                            <input type="text" name="tiempo_estimado" id="tiempo_estimado" class="form-control" value="{{ old('tiempo_estimado', $servicio->tiempo_estimado) }}" required>
                        </div>

                        <!-- Imagen -->
                        <div class="mb-4">
                            <label for="imagen" class="form-label fw-semibold">Imagen representativa</label>
                            <input type="file" name="imagen" id="imagen" class="form-control">

                            @if ($servicio->imagen)
                                <div class="mt-2">
                                    <small>Imagen actual:</small><br>
                                    <img src="{{ asset('storage/' . $servicio->imagen) }}" alt="Imagen actual" style="max-width: 200px;" class="rounded shadow-sm mt-1">
                                </div>
                            @endif
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('servicios.index') }}" class="btn btn-outline-secondary me-2">Cancelar</a>
                            <button type="submit" class="btn fw-bold text-white" style="background-color: #d0ba7e;">Actualizar servicio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>