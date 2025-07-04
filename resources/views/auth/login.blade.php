<x-guest-layout>
    <section class="min-vh-100 d-flex align-items-center justify-content-center" style="background-color: #0a1f44;">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 450px; border: none; border-radius: 10px;">
            <div class="text-center mb-4">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px;">
                </a>
                <h2 class="fw-bold mt-3" style="color: #0a1f44;">Iniciar Sesión</h2>
            </div>

            <!-- Mensaje de estado de sesión -->
            @if (session('status'))
                <div class="alert alert-success text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Recordarme -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Recordarme
                    </label>
                </div>

                <!-- Enviar -->
                <div class="d-flex flex-column justify-content-between align-items-start">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none small text-muted" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif

                    <button type="submit" class="btn fw-bold px-4" style="background-color: #d0ba7e; color: #0a1f44;">
                        Ingresar
                    </button>

                    @if (Route::has('register'))
                        <a class="text-decoration-none small text-muted" href="{{ route('register') }}">
                            ¿Primera vez? Crea una cuenta
                        </a>
                    @endif

                    
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>