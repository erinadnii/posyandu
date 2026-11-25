@props(['active' => 'beranda'])

@php
    $menuItems = [
        [
            'key' => 'design-system',
            'label' => 'Uji Tampilan (Tahap 1)',
            'href' => url('/'),
            'ready' => true,
            'icon' => 'sparkles',
        ],
        [
            'key' => 'beranda',
            'label' => 'Beranda Posyandu',
            'href' => '#segera-tahap-2',
            'ready' => false,
            'icon' => 'home',
        ],
        [
            'key' => 'warga',
            'label' => 'Data Warga',
            'href' => '#segera-tahap-2',
            'ready' => false,
            'icon' => 'users',
        ],
        [
            'key' => 'kegiatan',
            'label' => 'Jadwal Kegiatan',
            'href' => '#segera-tahap-3',
            'ready' => false,
            'icon' => 'calendar',
        ],
        [
            'key' => 'pemeriksaan',
            'label' => 'Meja Periksa',
            'href' => '#segera-tahap-3',
            'ready' => false,
            'icon' => 'clipboard',
        ],
        [
            'key' => 'laporan',
            'label' => 'Rekap & Laporan',
            'href' => '#segera-tahap-4',
            'ready' => false,
            'icon' => 'document',
        ],
    ];
@endphp

<aside
    data-sidebar-drawer
    aria-label="Navigasi Utama Posyandu"
    class="fixed inset-y-0 left-0 z-40 w-80 max-w-[85vw] bg-white border-r border-slate-200 flex flex-col transform -translate-x-full transition-transform duration-200 ease-out lg:static lg:translate-x-0 lg:w-72 lg:shrink-0"
>
    {{-- Identitas Aplikasi di Atas Sidebar --}}
    <div class="px-5 py-5 border-b border-slate-200 bg-[#F0FDFA] flex items-center justify-between gap-3">
        <a href="{{ url('/') }}" class="flex items-center gap-3 min-w-0">
            <div class="w-11 h-11 rounded-xl bg-[#0F766E] text-white flex items-center justify-center shrink-0 shadow-sm">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </div>
            <div class="min-w-0">
                <p class="text-[19px] font-extrabold tracking-tight text-[#134E4A] leading-tight">
                    SIPOS RW 15
                </p>
                <p class="text-[15px] font-medium text-[#0F766E] truncate">
                    Posyandu Melati RW 15
                </p>
            </div>
        </a>

        {{-- Tombol Tutup khusus layar HP/tablet (wajib ikon + teks) --}}
        <button
            type="button"
            data-sidebar-close
            class="lg:hidden inline-flex items-center gap-1.5 min-h-[44px] px-3 py-2 rounded-xl bg-white border-2 border-slate-300 text-[15px] font-semibold text-[#1E293B] hover:border-[#0F766E]"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
            <span>Tutup</span>
        </button>
    </div>

    {{-- Daftar Menu Navigasi (Ikon + Label Teks Jelas) --}}
    <nav class="flex-1 overflow-y-auto px-4 py-5 space-y-2">
        <p class="px-3 pb-1 text-[15px] font-bold uppercase tracking-wide text-[#475569]">
            Menu Utama
        </p>

        @foreach ($menuItems as $item)
            @php
                $isActive = $active === $item['key'];
            @endphp

            <a
                href="{{ $item['href'] }}"
                @if (!$item['ready'])
                    title="Halaman ini akan dibuat pada tahap berikutnya"
                @endif
                class="flex items-center justify-between gap-3 min-h-[52px] px-4 py-3 rounded-xl text-[16px] font-semibold transition-colors {{ $isActive
                    ? 'bg-[#0F766E] text-white shadow-sm'
                    : ($item['ready']
                        ? 'text-[#1E293B] hover:bg-[#F0FDFA] hover:text-[#0F766E]'
                        : 'text-[#475569] hover:bg-slate-100') }}"
            >
                <span class="flex items-center gap-3 min-w-0">
                    @switch($item['icon'])
                        @case('sparkles')
                            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z" />
                            </svg>
                            @break
                        @case('home')
                            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955a1.126 1.126 0 0 1 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75" />
                            </svg>
                            @break
                        @case('users')
                            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            @break
                        @case('calendar')
                            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            @break
                        @case('clipboard')
                            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25Z" />
                            </svg>
                            @break
                        @default
                            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                    @endswitch
                    <span class="truncate">{{ $item['label'] }}</span>
                </span>

                @if (!$item['ready'])
                    <span class="shrink-0 px-2.5 py-0.5 rounded-full text-[13px] font-semibold bg-slate-100 text-[#475569]">
                        Segera
                    </span>
                @endif
            </a>
        @endforeach
    </nav>

    {{-- Info Petugas Aktif (Data Dummy Tahap 1) --}}
    <div class="p-4 border-t border-slate-200 bg-slate-50">
        <div class="p-3.5 rounded-xl bg-white border border-slate-200 flex items-center gap-3">
            <div class="w-11 h-11 rounded-full bg-[#F0FDFA] border-2 border-[#0F766E] text-[#0F766E] font-bold text-[16px] flex items-center justify-center shrink-0">
                SA
            </div>
            <div class="min-w-0">
                <p class="text-[16px] font-bold text-[#1E293B] truncate">
                    Ibu Siti Aminah
                </p>
                <p class="text-[15px] text-[#0F766E] font-medium truncate">
                    Kader Posyandu RW 15
                </p>
            </div>
        </div>
    </div>
</aside>
