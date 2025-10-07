<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Nova Salud') }} - Gestión farmacéutica</title>

    <!-- Tailwind CDN for quick preview (remove for production if using Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'nova-green': '#0e6a53',
                        'nova-mint': '#f3fff9'
                    }
                }
            }
        }
    </script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        /* Small fallback for browsers without JS (very minor) */
        body {
            font-family: 'Instrument Sans', system-ui, -apple-system, 'Segoe UI', Roboto, 'Noto Sans', Arial;
        }
    </style>
</head>

<body
    class="bg-gradient-to-b from-white to-[#f7fcfb] text-[#073b2e] flex p-6 lg:p-12 items-center justify-center min-h-screen">
    <div class="w-full max-w-6xl">
        <header class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-4">
                <!-- Logo placeholder -->
                <div
                    class="w-12 h-12 rounded-xl bg-white shadow-md flex items-center justify-center border border-[#e6f3ee]">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="text-nova-green">
                        <path d="M12 2v20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M5 16h14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-lg font-semibold">Nova Salud</h1>
                    <p class="text-xs text-[#2f6b57]">Sistema de gestión para farmacias</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="px-4 py-2 bg-nova-green text-white rounded-lg shadow-sm text-sm">Ir al panel</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-4 py-2 border border-transparent text-nova-green rounded-lg text-sm">Ingresar</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-4 py-2 bg-white border border-[#dff5ec] text-nova-green rounded-lg shadow-sm text-sm">Crear
                                cuenta</a>
                        @endif
                    @endauth
                @endif
            </div>
        </header>

        <main class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
            <!-- Left: Content -->
            <section class="lg:col-span-7 bg-white rounded-2xl p-8 shadow-lg border border-[#edf9f5]">
                <h2 class="text-2xl font-semibold mb-2">Bienvenido a Nova Salud</h2>
                <p class="text-[#4b7f6f] mb-6">Solución web pensada para farmacias con alta demanda: controla
                    inventario, gestiona ventas y optimiza la atención al cliente con una interfaz clara y rápida.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="p-4 rounded-xl bg-gradient-to-br from-[#f6fffc] to-white border border-[#e8f8f1]">
                        <h3 class="text-sm font-medium mb-1">Stock en tiempo real</h3>
                        <p class="text-xs text-[#6b8c7b]">Actualizaciones instantáneas para evitar sorpresas y
                            desabastecimiento.</p>
                    </div>

                    <div class="p-4 rounded-xl bg-gradient-to-br from-[#fffaf6] to-white border border-[#fff2e9]">
                        <h3 class="text-sm font-medium mb-1">Alertas inteligentes</h3>
                        <p class="text-xs text-[#8b6b5b]">Notificaciones por mínimos y vencimientos para una reposición
                            proactiva.</p>
                    </div>

                    <div class="p-4 rounded-xl bg-gradient-to-br from-[#f6fbff] to-white border border-[#eaf6ff]">
                        <h3 class="text-sm font-medium mb-1">Ventas y reportes</h3>
                        <p class="text-xs text-[#5b7fa0]">Historial de ventas, análisis y reportes exportables.</p>
                    </div>

                    <div class="p-4 rounded-xl bg-gradient-to-br from-[#f7fff4] to-white border border-[#ecfbe9]">
                        <h3 class="text-sm font-medium mb-1">Atención ágil</h3>
                        <p class="text-xs text-[#5b7f6a]">Interfaz optimizada para reducir tiempos de espera y errores
                            en caja.</p>
                    </div>
                </div>

                <div class="mt-6 flex gap-3">
                    <a href="{{ url('/dashboard') }}"
                        class="px-6 py-3 bg-nova-green text-white rounded-lg shadow hover:shadow-md font-medium">Acceder
                        al sistema</a>
                    {{-- <a href="{{ url('/docs') }}"
                        class="px-6 py-3 bg-transparent border border-[#dff5ec] text-nova-green rounded-lg">Documentación</a> --}}
                </div>

                <div class="mt-8 text-sm text-[#6b8c7b]">
                    <strong class="text-[#2f6b57]">¿Por qué Nova Salud?</strong>
                    <p class="mt-2">Diseñado pensando en cadenas y boticas independientes con alta rotación:
                        trazabilidad del stock, control de vencimientos y procesos de venta rápidos y seguros.</p>
                </div>
            </section>

            <!-- Right: Illustration / Stats card -->
            <aside class="lg:col-span-5 flex flex-col gap-6">
                <div
                    class="bg-white rounded-2xl p-6 shadow-lg border border-[#edf9f5] flex flex-col items-center text-center">
                    <img src="{{ asset('images/farmacia.png') }}" alt="Icono Nova Salud — farmacia"
                        class="mb-4 " loading="lazy" />
                    <h4 class="font-medium text-lg">Control rápido</h4>
                    <p class="text-sm text-[#4b7f6f] mt-2">Panel con accesos directos: productos, vencimientos, pedidos
                        y caja.</p>

                    <div class="mt-4 w-full grid grid-cols-3 gap-3">
                        <div class="p-3 bg-[#f0fff9] rounded-lg border border-[#e6f8ef]">
                            <div class="text-xs text-[#2f6b57]">Stock</div>
                            <div class="text-sm font-semibold">1,248</div>
                        </div>
                        <div class="p-3 bg-[#fffef6] rounded-lg border border-[#fff6e8]">
                            <div class="text-xs text-[#8b6b5b]">Venc.</div>
                            <div class="text-sm font-semibold">12</div>
                        </div>
                        <div class="p-3 bg-[#f6fbff] rounded-lg border border-[#eaf6ff]">
                            <div class="text-xs text-[#5b7fa0]">Ventas</div>
                            <div class="text-sm font-semibold">320</div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gradient-to-br from-white to-[#f3fff9] rounded-2xl p-6 shadow-sm border border-[#e9f9f0]">
                    <h5 class="text-sm font-medium mb-2">Características rápidas</h5>
                    <ul class="text-sm text-[#4b7f6f] space-y-2">
                        <li>• Actualización en tiempo real del stock</li>
                        <li>• Alertas automáticas de reposición y vencimiento</li>
                        <li>• Registro de ventas y reportes periódicos</li>
                        <li>• Interfaz pensada para velocidad en caja</li>
                    </ul>
                </div>
            </aside>
        </main>

        <footer class="mt-8 text-center text-sm text-[#3f7b66]">© {{ date('Y') }} - Nova Salud
        </footer>
    </div>
</body>

</html>
