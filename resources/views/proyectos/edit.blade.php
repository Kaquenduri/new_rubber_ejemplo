<x-app-layout>
    <section class="min-vh-100 py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="card shadow border-0 mx-auto" style="max-width: 800px;">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="mb-0">Editar proyecto</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Título -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label fw-semibold">Título del proyecto</label>
                            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $proyecto->titulo) }}" required>
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="4" class="form-control" required>{{ old('descripcion', $proyecto->descripcion) }}</textarea>
                        </div>

                        <!-- Empresa contratante -->
                        <div class="mb-3">
                            <label for="empresa_contratante" class="form-label fw-semibold">Empresa contratante</label>
                            <input type="text" name="empresa_contratante" id="empresa_contratante" class="form-control" value="{{ old('empresa_contratante', $proyecto->empresa_contratante) }}" required>
                        </div>

                        <!-- Servicios empleados -->
                        <div class="mb-3">
                            <label for="servicios_empleados" class="form-label fw-semibold">Servicios empleados</label>
                            <textarea name="servicios_empleados" id="servicios_empleados" rows="3" class="form-control" required>{{ old('servicios_empleados', $proyecto->servicios_empleados) }}</textarea>
                        </div>

                        <!-- Imagen 1 -->
                        <div class="mb-3">
                            <label for="imagen_1" class="form-label fw-semibold">Imagen principal</label>
                            <input type="file" name="imagen_1" id="imagen_1" class="form-control">
                            @if ($proyecto->imagen_1)
                                <div class="mt-2">
                                    <small>Imagen actual:</small><br>
                                    <img src="{{ asset('storage/' . $proyecto->imagen_1) }}" alt="Imagen actual" style="max-width: 200px;" class="rounded shadow-sm mt-1">
                                </div>
                            @endif
                        </div>

                        <!-- Imagen 2 -->
                        <div class="mb-3">
                            <label for="imagen_2" class="form-label fw-semibold">Imagen secundaria (opcional)</label>
                            <input type="file" name="imagen_2" id="imagen_2" class="form-control">
                            @if ($proyecto->imagen_2)
                                <div class="mt-2">
                                    <small>Imagen actual:</small><br>
                                    <img src="{{ asset('storage/' . $proyecto->imagen_2) }}" alt="Imagen actual" style="max-width: 200px;" class="rounded shadow-sm mt-1">
                                </div>
                            @endif
                        </div>

                        <!-- Imagen 3 -->
                        <div class="mb-4">
                            <label for="imagen_3" class="form-label fw-semibold">Imagen adicional (opcional)</label>
                            <input type="file" name="imagen_3" id="imagen_3" class="form-control">
                            @if ($proyecto->imagen_3)
                                <div class="mt-2">
                                    <small>Imagen actual:</small><br>
                                    <img src="{{ asset('storage/' . $proyecto->imagen_3) }}" alt="Imagen actual" style="max-width: 200px;" class="rounded shadow-sm mt-1">
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('proyectos.index') }}" class="btn btn-outline-secondary me-2">Cancelar</a>
                            <button type="submit" class="btn fw-bold text-white" style="background-color: #d0ba7e;">Actualizar proyecto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>