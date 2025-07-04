<x-guest-layout>
    <section class="min-vh-100 d-flex align-items-center justify-content-center" style="background-color: #0a1f44;">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px; border: none; border-radius: 10px;">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px;">
                <h2 class="fw-bold mt-3" style="color: #0a1f44;">Restablecer contraseña</h2>
                <p class="text-muted small">Ingresa tu nueva contraseña para recuperar el acceso a tu cuenta.</p>
            </div>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Token oculto -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Correo electrónico</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $request->email) }}"
                        class="form-control @error('email') is-invalid @enderror" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Contraseña nueva -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Nueva contraseña</label>
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirmar contraseña -->
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label fw-semibold">Confirmar nueva contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="form-control @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn fw-bold px-4" style="background-color: #d0ba7e; color: #0a1f44;">
                        Restablecer
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>