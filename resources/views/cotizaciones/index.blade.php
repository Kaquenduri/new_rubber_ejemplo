<x-app-layout>
    <section class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="color: #0a1f44; font-family: 'Orbitron'">Generar Cotización</h1>
            
            <p class="text-muted mx-auto prologo" >
                Esta es una simulación de cotización que te permite tener una idea referencial de los precios que manejamos. Solo debes seleccionar un servicio, ingresar la cantidad en metros cúbicos (m³) y obtendrás un costo estimado. Ten en cuenta que el proceso real de cotización es más detallado y personalizado.
            </p>
        </div>
    
        <!-- Formulario para añadir servicio -->
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body row g-3 align-items-end">
                <div class="col-md-5">
                    <label for="servicio" class="form-label fw-bold text-dark">Servicio</label>
                    <select id="servicio" class="form-select">
                        <option value="">-- Seleccionar --</option>
                        @foreach ($servicios as $servicio)
                            <option value="{{ $servicio->id }}"
                                data-nombre="{{ $servicio->nombre_servicio }}"
                                data-precio="{{ $servicio->precio }}">
                                {{ $servicio->nombre_servicio }} - S/ {{ number_format($servicio->precio, 2) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="cantidad" class="form-label fw-bold text-dark">Cantidad (m³)</label>
                    <input type="number" min="0.1" step="0.1" id="cantidad" class="form-control" placeholder="Ej: 5.0">
                </div>

                <div class="col-md-3">
                    <button class="btn btn-warning w-100 fw-bold" onclick="agregarServicio()">
                        <i class="bi bi-plus-circle"></i> Agregar
                    </button>
                </div>
            </div>
        </div>

        <!-- Tabla de servicios añadidos -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title mb-3 fw-bold text-dark">Servicios seleccionados</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Servicio</th>
                                <th>Precio x m³ (S/)</th>
                                <th>Cantidad</th>
                                <th>Subtotal (S/)</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody id="tabla-servicios"></tbody>
                        <tfoot>
                            <tr class="table-secondary">
                                <td colspan="4" class="text-end fw-bold">Total:</td>
                                <td colspan="1" class="fw-bold">
                                    <div id="total-general" class="alert alert-success border-0 rounded-2">
                                        S/ 0.00
                                    </div>
                                    
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                
            </div>
        </div>
    
    </section>
    
    <!-- css -->
     <style>
        .dato_cotizacion{
            text-align: center; 
        }
     </style>
    
    <!-- Script -->
    <script>
        let serviciosAgregados = [];

        function agregarServicio() {
            const select = document.getElementById('servicio');
            const cantidadInput = document.getElementById('cantidad');
            const servicioId = select.value;
            const nombre = select.selectedOptions[0]?.dataset.nombre;
            const precio = parseFloat(select.selectedOptions[0]?.dataset.precio);
            const cantidad = parseFloat(cantidadInput.value);

            if (!servicioId || !cantidad || cantidad <= 0) {
                alert("Selecciona un servicio válido y una cantidad mayor a 0.");
                return;
            }

            if (serviciosAgregados.includes(servicioId)) {
                alert("Este servicio ya fue agregado.");
                return;
            }

            const subtotal = (precio * cantidad).toFixed(2);
            const fila = `
                <tr data-id="${servicioId}">
                    <td class="dato_cotizacion">${nombre}</td>
                    <td class="dato_cotizacion">S/ ${precio.toFixed(2)}</td>
                    <td class="dato_cotizacion">${cantidad}</td>
                    <td class="dato_cotizacion">S/ ${subtotal}</td>
                    <td class="dato_cotizacion">
                        <button class="btn btn-sm btn-outline-danger" onclick="eliminarServicio(${servicioId})">
                            <i class="bi bi-trash"></i> Quitar
                        </button>
                    </td>
                </tr>
            `;

            document.getElementById('tabla-servicios').insertAdjacentHTML('beforeend', fila);
            serviciosAgregados.push(servicioId);

            calcularTotal();

            // Reset
            select.value = '';
            cantidadInput.value = '';
        }

        function eliminarServicio(id) {
            document.querySelector(`tr[data-id="${id}"]`).remove();
            serviciosAgregados = serviciosAgregados.filter(sid => sid != id);
            calcularTotal();
        }

        function calcularTotal() {
            let total = 0;
            document.querySelectorAll('#tabla-servicios tr').forEach(fila => {
                const subtotal = parseFloat(fila.children[3].textContent.replace('S/', '').trim());
                total += subtotal;
            });
            document.getElementById('total-general').textContent = 'S/ ' + total.toFixed(2);
        }
    </script>
</x-app-layout>