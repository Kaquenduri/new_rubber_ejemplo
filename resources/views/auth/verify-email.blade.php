<x-guest-layout>
    <section class="min-vh-100 d-flex align-items-center justify-content-center" style="background-color: #0a1f44;">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px; border: none; border-radius: 10px;">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px;">
                <h2 class="fw-bold mt-3" style="color: #0a1f44;">Verifica tu correo</h2>
                <p class="text-muted small">
                    Gracias por registrarte. Antes de empezar, por favor verifica tu dirección de correo haciendo clic en el enlace que te acabamos de enviar. <br>
                    ¿No lo recibiste? Podemos enviarte otro.
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success small text-center">
                    Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
                </div>
            @endif

            <div class="d-flex justify-content-between mt-4">
                <!-- Reenviar correo -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn fw-bold px-3" style="background-color: #d0ba7e; color: #0a1f44;">
                        Reenviar correo
                    </button>
                </form>

                <!-- Cerrar sesión -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link text-decoration-none text-muted small">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>