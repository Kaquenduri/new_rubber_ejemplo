<x-guest-layout>
    <section class="min-vh-100 d-flex align-items-center justify-content-center" style="background-color: #0a1f44;">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 450px; border: none; border-radius: 10px;">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px;">
                <h2 class="fw-bold mt-3" style="color: #0a1f44;">Confirmar Contraseña</h2>
                <p class="text-muted small mt-2">
                    Esta es una zona segura de la aplicación. Por favor, confirma tu contraseña antes de continuar.
                </p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Contraseña</label>
                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        required autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn fw-bold px-4" style="background-color: #d0ba7e; color: #0a1f44;">
                        Confirmar
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>