<x-app-layout>
    <section class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="color: #0a1f44; font-family: 'Orbitron'">REALIZAR COTIZACIONES</h1>
            <p class="text-muted mx-auto prologo" style="max-width: 700px;">
                Esta herramienta de simulación de cotizaciones permite a nuestros clientes tener una idea referencial de los precios por servicio que manejamos, según la cantidad de metros cúbicos estimados. 
                <br><br>
                Para utilizar esta funcionalidad es necesario contar con una cuenta empresarial registrada.
            </p>
        </div>

        <div class="text-center">
            <a href="{{ route('register') }}" class="btn btn-warning fw-bold px-4 py-2" style="background-color: #d0ba7e;">
                <i class="bi bi-person-plus-fill me-2" ></i> Registrar cuenta empresarial
            </a>

            <div class="mt-4">
                <a href="{{ route('pagina.inicio') }}" class="text-decoration-none text-secondary">
                    <i class="bi bi-arrow-left-circle"></i> Volver al inicio
                </a>
            </div>
        </div>
    </section>
</x-app-layout>