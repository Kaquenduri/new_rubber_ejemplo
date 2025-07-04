<x-app-layout>
    <section class="min-vh-100 py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="card shadow border-0 mx-auto" style="max-width: 800px;">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="mb-0">Registrar nuevo servicio</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('servicios.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nombre del servicio -->
                        <div class="mb-3">
                            <label for="nombre_servicio" class="form-label fw-semibold">Nombre del servicio</label>
                            <input type="text" name="nombre_servicio" id="nombre_servicio" class="form-control" required>
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-semibold">Descripción del servicio</label>
                            <textarea name="descripcion" id="descripcion" rows="4" class="form-control" required></textarea>
                        </div>

                        <!-- Precio -->
                        <div class="mb-3">
                            <label for="precio" class="form-label fw-semibold">Precio (S/.) por m³</label>
                            <input type="number" step="0.01" name="precio" id="precio" class="form-control" required>
                        </div>

                        <!-- Tiempo estimado -->
                        <div class="mb-3">
                            <label for="tiempo_estimado" class="form-label fw-semibold">Tiempo estimado</label>
                            <input type="text" name="tiempo_estimado" id="tiempo_estimado" class="form-control" required>
                        </div>

                        <!-- Imagen -->
                        <div class="mb-4">
                            <label for="imagen" class="form-label fw-semibold">Imagen representativa</label>
                            <input type="file" name="imagen" id="imagen" class="form-control" required>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('servicios.index') }}" class="btn btn-outline-secondary me-2">Cancelar</a>
                            <button type="submit" class="btn fw-bold text-white" style="background-color: #d0ba7e;">Guardar servicio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>