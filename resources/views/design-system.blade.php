@extends('layouts.app', [
    'activeMenu' => 'design-system',
    'pageTitle' => 'Uji Tampilan Ramah Pra-Lansia',
    'pageSubtitle' => 'Tahap 1 — Validasi warna, ukuran huruf, tombol sentuh, dan kenyamanan layar',
])

@section('header-actions')
    <button
        type="button"
        id="btn-reset-alert"
        class="btn-sipos btn-secondary"
    >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
        <span>Tampilkan Ulang Notifikasi</span>
    </button>
@endsection

@section('content')
    {{-- 1. Kotak Pengantar Tahap 1 --}}
    <section class="card-mint">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="space-y-1.5">
                <span class="badge-sipos bg-[#0F766E] text-white">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <span>Tahap 1 Aktif</span>
                </span>
                <h2 class="text-xl font-bold text-[#134E4A]">
                    Halaman Validasi Desain untuk Ibu Kader Posyandu RW 15
                </h2>
                <p class="text-[16px] text-[#1E293B] max-w-3xl">
                    Silakan periksa apakah ukuran tulisan (minimal 15–16px), kontras warna, jarak antar elemen, dan besar tombol sudah nyaman dilihat di laptop maupun HP sebelum kita lanjut ke Tahap 2.
                </p>
            </div>
        </div>
    </section>

    {{-- 2. Komponen Notifikasi Sistem --}}
    <section class="space-y-4" aria-labelledby="judul-notifikasi">
        <h2 id="judul-notifikasi" class="text-lg font-bold text-[#1E293B]">
            1. Contoh Kotak Notifikasi & Peringatan
        </h2>

        <div id="daftar-notifikasi" class="space-y-3">
            <x-alert
                type="info"
                title="Informasi Posyandu"
                message="Jadwal Posyandu Melati RW 15 bulan November 2026 dibuka pada pukul 08.00 – 11.30 WIB."
            />

            <x-alert
                type="warning"
                title="Perhatian: Data Pemeriksaan Belum Lengkap"
                message="Masih ada 3 warga kategori Ibu Hamil yang ukuran Lingkar Lengan Atas (LiLA) belum terisi."
            />

            <x-alert
                type="risk"
                title="Peringatan Risiko Gizi / Stunting"
                message="Ditemukan 2 Balita dengan berat badan di bawah garis hijau dan 1 Ibu Hamil berisiko Kurang Energi Kronis (KEK)."
            />
        </div>
    </section>

    {{-- 3. Palet Warna & Tipografi --}}
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        {{-- Palet Warna --}}
        <div class="card-sipos space-y-4">
            <h2 class="text-lg font-bold text-[#1E293B]">
                2. Palet Warna Sejuk & Kontras Tinggi
            </h2>
            <p class="text-[15px] text-[#475569]">
                Menggunakan warna tenang yang tidak menyilaukan mata saat dipakai lama.
            </p>

            @php
                $palet = [
                    ['nama' => 'Deep Teal (Utama)', 'kode' => '#0F766E', 'bg' => 'bg-[#0F766E]', 'ket' => 'Tombol utama & menu aktif'],
                    ['nama' => 'Soft Mint (Aksen)', 'kode' => '#F0FDFA', 'bg' => 'bg-[#F0FDFA] border border-[#99F6E4]', 'ket' => 'Latar kartu sorotan'],
                    ['nama' => 'Neutral Light (Latar)', 'kode' => '#F8FAFC', 'bg' => 'bg-[#F8FAFC] border border-slate-300', 'ket' => 'Latar belakang halaman'],
                    ['nama' => 'Dark Slate (Teks)', 'kode' => '#1E293B', 'bg' => 'bg-[#1E293B]', 'ket' => 'Tulisan utama kontras tajam'],
                    ['nama' => 'Warm Amber (Perhatian)', 'kode' => '#F59E0B', 'bg' => 'bg-[#F59E0B]', 'ket' => 'Data belum lengkap'],
                    ['nama' => 'Soft Rose (Berisiko)', 'kode' => '#E11D48', 'bg' => 'bg-[#E11D48]', 'ket' => 'Indikator risiko KEK / stunting'],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                @foreach ($palet as $warna)
                    <div class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 bg-white">
                        <div class="w-12 h-12 rounded-xl shrink-0 {{ $warna['bg'] }}"></div>
                        <div class="min-w-0">
                            <p class="text-[15px] font-bold text-[#1E293B] truncate">{{ $warna['nama'] }}</p>
                            <p class="text-[15px] text-[#475569]">{{ $warna['kode'] }} &bull; {{ $warna['ket'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Tipografi & Lencana --}}
        <div class="card-sipos space-y-4">
            <h2 class="text-lg font-bold text-[#1E293B]">
                3. Uji Ukuran Tulisan & Status
            </h2>

            <div class="space-y-3 p-4 rounded-xl bg-[#F8FAFC] border border-slate-200">
                <p class="text-2xl font-extrabold text-[#1E293B]">Judul Halaman (24px Tebal)</p>
                <p class="text-lg font-bold text-[#1E293B]">Judul Bagian / Kartu (18px Tebal)</p>
                <p class="text-[16px] text-[#1E293B]">
                    Ini contoh ukuran tulisan utama (<strong>16px</strong>) untuk membaca data warga, keterangan pemeriksaan, dan panduan pengisian formulir tanpa harus menyipitkan mata.
                </p>
                <p class="text-[15px] text-[#475569]">
                    Ini contoh tulisan pendukung atau keterangan tambahan (<strong>15px</strong>) yang tetap jelas dan kontras.
                </p>
            </div>

            <div class="space-y-2">
                <p class="text-[16px] font-bold text-[#1E293B]">Contoh Penanda Status Warga:</p>
                <div class="flex flex-wrap gap-2.5">
                    <span class="badge-sipos bg-[#F0FDFA] text-[#134E4A] border border-[#0F766E]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>Sudah Hadir &amp; Diperiksa</span>
                    </span>
                    <span class="badge-sipos bg-[#FFFBEB] text-[#78350F] border border-[#F59E0B]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0 3.75h.01" />
                        </svg>
                        <span>Data Belum Lengkap</span>
                    </span>
                    <span class="badge-sipos bg-[#FFF1F2] text-[#881337] border border-[#E11D48]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Perlu Pendampingan TPK</span>
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. Uji Tombol Sentuh Lega & Contoh Formulir Ringkas (Minim Gulir) --}}
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        {{-- Tombol Sentuh --}}
        <div class="card-sipos lg:col-span-5 space-y-4">
            <h2 class="text-lg font-bold text-[#1E293B]">
                4. Tombol Sentuh Lega (Ikon + Teks)
            </h2>
            <p class="text-[15px] text-[#475569]">
                Setiap tombol berukuran tinggi minimal 48px dengan jarak cukup agar tidak salah pencet di layar HP atau tablet.
            </p>

            <div class="flex flex-col gap-3">
                <button type="button" class="btn-sipos btn-primary w-full justify-start">
                    <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <span>Simpan Data Pemeriksaan</span>
                </button>

                <button type="button" class="btn-sipos btn-secondary w-full justify-start">
                    <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <span>Cari Nama atau NIK Warga</span>
                </button>

                <button type="button" class="btn-sipos btn-warning w-full justify-start">
                    <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126Z" />
                    </svg>
                    <span>Lengkapi Data Kosong</span>
                </button>

                <button type="button" class="btn-sipos btn-danger w-full justify-start">
                    <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>
                    <span>Tandai Warga Berisiko</span>
                </button>
            </div>
        </div>

        {{-- Contoh Formulir Ringkas (Minim Gulir) --}}
        <div class="card-sipos lg:col-span-7 space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <h2 class="text-lg font-bold text-[#1E293B]">
                    5. Contoh Formulir Ringkas (Minim Gulir)
                </h2>
                <span class="text-[15px] font-medium text-[#0F766E]">
                    Pratinjau Isian Kader
                </span>
            </div>

            <form onsubmit="return false;" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="uji-nama" class="form-label">Nama Lengkap Warga</label>
                    <input
                        id="uji-nama"
                        type="text"
                        class="form-input"
                        value="Ananda Putri Lestari"
                        placeholder="Contoh: Siti Aminah"
                    >
                </div>

                <div>
                    <label for="uji-kategori" class="form-label">Kategori Peserta</label>
                    <select id="uji-kategori" class="form-input">
                        <option>Balita (0–59 Bulan)</option>
                        <option>Ibu Hamil</option>
                        <option>Calon Pengantin (Catin)</option>
                        <option>Dewasa</option>
                        <option>Lansia</option>
                    </select>
                </div>

                <div>
                    <label for="uji-bb" class="form-label">Berat Badan (kg)</label>
                    <input
                        id="uji-bb"
                        type="number"
                        step="0.1"
                        class="form-input"
                        value="11.4"
                        placeholder="Contoh: 11.4"
                    >
                    <p class="form-hint">Gunakan titik atau koma untuk desimal.</p>
                </div>

                <div>
                    <label for="uji-tb" class="form-label">Tinggi / Panjang Badan (cm)</label>
                    <input
                        id="uji-tb"
                        type="number"
                        step="0.1"
                        class="form-input"
                        value="84.5"
                        placeholder="Contoh: 84.5"
                    >
                    <p class="form-hint">Diisi angka saja tanpa satuan.</p>
                </div>

                <div class="sm:col-span-2 flex flex-wrap items-center justify-end gap-3 pt-2 border-t border-slate-200">
                    <button type="reset" class="btn-sipos btn-secondary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                        <span>Atur Ulang Isian</span>
                    </button>

                    <button type="button" id="btn-uji-simpan" class="btn-sipos btn-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>Uji Klik Simpan</span>
                    </button>
                </div>
            </form>

            <div id="pesan-uji-simpan" class="hidden rounded-xl bg-[#F0FDFA] border border-[#0F766E] px-4 py-3 text-[16px] font-semibold text-[#134E4A]">
                Tombol berhasil ditekan! Tampilan tombol dan formulir siap dipakai di tahap berikutnya.
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const resetAlertBtn = document.getElementById('btn-reset-alert');
        if (resetAlertBtn) {
            resetAlertBtn.addEventListener('click', () => {
                document.querySelectorAll('#daftar-notifikasi [data-alert-box]').forEach((el) => {
                    el.classList.remove('hidden');
                });
            });
        }

        const ujiSimpanBtn = document.getElementById('btn-uji-simpan');
        const pesanUji = document.getElementById('pesan-uji-simpan');
        if (ujiSimpanBtn && pesanUji) {
            ujiSimpanBtn.addEventListener('click', () => {
                pesanUji.classList.remove('hidden');
            });
        }
    });
</script>
@endpush
