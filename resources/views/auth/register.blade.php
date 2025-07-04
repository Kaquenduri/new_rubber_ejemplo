<x-guest-layout>
    <section class="min-vh-100 d-flex align-items-center justify-content-center" style="background-color: #0a1f44;">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px; border: none; border-radius: 10px;">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px;">
                <h2 class="fw-bold mt-3" style="color: #0a1f44;">Crear cuenta</h2>
                <p class="text-muted small">Regístrate para empezar a cotizar nuestros servicios industriales.</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Campo oculto para el rol -->
                <input type="hidden" name="rol" value="cliente_empresa">

                <!-- Nombre completo -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nombre completo</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror" required autofocus autocomplete="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nombre de la empresa -->
                <div class="mb-3">
                    <label for="empresa" class="form-label fw-semibold">Nombre de la empresa</label>
                    <input type="text" name="empresa" id="empresa" value="{{ old('empresa') }}"
                        class="form-control @error('empresa') is-invalid @enderror" required>
                    @error('empresa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- RUC -->
                <div class="mb-3">
                    <label for="ruc" class="form-label fw-semibold">RUC</label>
                    <input type="text" name="ruc" id="ruc" value="{{ old('ruc') }}"
                        class="form-control @error('ruc') is-invalid @enderror" required>
                    @error('ruc')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Teléfono de contacto -->
                <div class="mb-3">
                    <label for="telefono" class="form-label fw-semibold">Teléfono de contacto</label>
                    <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}"
                        class="form-control @error('telefono') is-invalid @enderror" required>
                    @error('telefono')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Correo -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Correo electrónico</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" required autocomplete="username">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Contraseña</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirmar contraseña -->
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label fw-semibold">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="form-control @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Botón y link -->
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('login') }}" class="text-decoration-none text-muted small">
                        ¿Ya tienes cuenta?
                    </a>
                    <button type="submit" class="btn fw-bold px-4" style="background-color: #d0ba7e; color: #0a1f44;">
                        Registrarse
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>