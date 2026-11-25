@props([
    'pageTitle' => 'Beranda Posyandu',
    'pageSubtitle' => 'Posyandu Melati RW 15',
])

<header class="sticky top-0 z-20 bg-white border-b border-slate-200">
    <div class="px-4 py-3.5 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-4">
            {{-- Kiri: Tombol Menu HP (Ikon + Teks) & Judul Halaman --}}
            <div class="flex items-center gap-3 min-w-0">
                <button
                    type="button"
                    data-sidebar-open
                    aria-expanded="false"
                    class="lg:hidden btn-sipos btn-secondary !px-4 !py-2.5 shrink-0"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <span>Menu</span>
                </button>

                <div class="min-w-0">
                    <h1 class="text-xl sm:text-2xl font-extrabold text-[#1E293B] leading-tight truncate">
                        {{ $pageTitle }}
                    </h1>
                    @if ($pageSubtitle)
                        <p class="text-[15px] text-[#475569] truncate">
                            {{ $pageSubtitle }}
                        </p>
                    @endif
                </div>
            </div>

            {{-- Kanan: Info Bulan Kegiatan & Aksi Tambahan Halaman --}}
            <div class="flex flex-wrap items-center gap-3">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-[#F0FDFA] border border-[#99F6E4] text-[#134E4A] text-[15px] font-semibold">
                    <svg class="w-5 h-5 text-[#0F766E] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                    </svg>
                    <span>Bulan Aktif: November 2026</span>
                </div>

                @if (trim($slot) !== '')
                    <div class="flex flex-wrap items-center gap-2.5">
                        {{ $slot }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
