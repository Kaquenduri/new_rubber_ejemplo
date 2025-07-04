<x-guest-layout>
    <section class="min-vh-100 d-flex align-items-center justify-content-center" style="background-color: #0a1f44;">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 450px; border: none; border-radius: 10px;">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px;">
                <h2 class="fw-bold mt-3" style="color: #0a1f44;">Recuperar Contraseña</h2>
                <p class="text-muted small mt-2">
                    ¿Olvidaste tu contraseña? No hay problema. Ingresa tu correo electrónico y te enviaremos un enlace para restablecerla.
                </p>
            </div>

            <!-- Mensaje de estado de sesión -->
            @if (session('status'))
                <div class="alert alert-success text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn fw-bold px-4" style="background-color: #d0ba7e; color: #0a1f44;">
                        Enviar enlace
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>