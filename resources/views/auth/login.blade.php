<style>
body{
    background:
    linear-gradient(rgba(15,23,42,.75),
    rgba(15,23,42,.75)),
    url('https://images.unsplash.com/photo-1546519638-68e109498ffc');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.login-title{
    text-align:center;
    font-size:32px;
    font-weight:bold;
    color:#0f172a;
    margin-bottom:10px;
}

.login-subtitle{
    text-align:center;
    color:#64748b;
    margin-bottom:25px;
}

.login-logo{
    text-align:center;
    font-size:55px;
    margin-bottom:10px;
}

.login-btn{
    background:#f97316 !important;
    color:white !important;
    border:none;
    padding:12px 28px;
    border-radius:12px;
    font-weight:bold;
    transition:.3s;
}

.login-btn:hover{
    background:#ea580c !important;
    transform:translateY(-2px);
}

.register-link{
    text-align:center;
    margin-top:25px;
}

.register-link a{
    color:#f97316;
    font-weight:bold;
    text-decoration:none;
}

.register-link a:hover{
    text-decoration:underline;
}
</style>

<x-guest-layout>

    <div class="login-logo">
        🏀
    </div>

    <h2 class="login-title">
        Liga de Básquetbol
    </h2>

    <p class="login-subtitle">
        Inicia sesión para continuar
    </p>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" value="Correo electrónico" />

            <x-text-input
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username" />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" value="Contraseña" />

            <x-text-input
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required
                autocomplete="current-password" />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember">

                <span class="ml-2 text-sm text-gray-600">
                    Recordarme
                </span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-6">

            @if (Route::has('password.request'))
                <a
                    class="text-sm text-gray-600 hover:text-orange-500"
                    href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif

            <button type="submit" class="login-btn">
                Ingresar
            </button>

        </div>

        <div class="register-link">
            <span>¿No tienes cuenta?</span>

            <a href="{{ route('register') }}">
                Regístrate aquí
            </a>
        </div>

    </form>

</x-guest-layout>
