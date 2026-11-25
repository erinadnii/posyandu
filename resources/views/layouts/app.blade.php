<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIPOS RW 15 — Sistem Administrasi Posyandu')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#F8FAFC] text-[#1E293B]">
    {{-- Tautan lewati untuk kemudahan aksesibilitas --}}
    <a href="#konten-utama" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 btn-sipos btn-primary">
        Langsung ke Isi Halaman
    </a>

    <div class="min-h-screen flex">
        {{-- Latar gelap tipis saat menu HP dibuka --}}
        <div
            data-sidebar-backdrop
            class="fixed inset-0 z-30 bg-slate-900/50 hidden lg:hidden"
            aria-hidden="true"
        ></div>

        {{-- Menu Samping (Sidebar Desktop & Drawer Mobile) --}}
        <x-sidebar :active="$activeMenu ?? 'beranda'" />

        {{-- Area Konten Utama --}}
        <div class="flex-1 flex flex-col min-w-0">
            {{-- Bagian Kepala Halaman (Navbar) --}}
            <x-navbar
                :pageTitle="$pageTitle ?? 'Beranda Posyandu'"
                :pageSubtitle="$pageSubtitle ?? 'Posyandu Melati RW 15 • Pelayanan Warga Terpadu'"
            >
                @hasSection('header-actions')
                    @yield('header-actions')
                @endif
            </x-navbar>

            {{-- Isi Utama --}}
            <main id="konten-utama" class="flex-1 px-4 py-6 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto space-y-6">
                    @yield('content')
                </div>
            </main>

            {{-- Catatan Kaki Sederhana --}}
            <footer class="bg-white border-t border-slate-200 px-4 py-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 text-[15px] text-[#475569]">
                    <p class="font-medium text-[#1E293B]">
                        SIPOS RW 15 &mdash; Sistem Informasi Administrasi Posyandu RW 15
                    </p>
                    <p>
                        Tampilan dirancang khusus agar nyaman dibaca dan mudah dipakai Kader.
                    </p>
                </div>
            </footer>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
