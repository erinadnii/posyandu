@props([
    'type' => 'info',
    'title' => null,
    'message' => '',
    'dismissible' => true,
])

@php
    $styles = [
        'info' => [
            'box' => 'bg-[#F0FDFA] border-[#0F766E] text-[#134E4A]',
            'icon' => 'text-[#0F766E]',
            'btn' => 'bg-white border-[#99F6E4] text-[#134E4A] hover:bg-[#CCFBF1]',
        ],
        'success' => [
            'box' => 'bg-[#F0FDFA] border-[#0F766E] text-[#134E4A]',
            'icon' => 'text-[#0F766E]',
            'btn' => 'bg-white border-[#99F6E4] text-[#134E4A] hover:bg-[#CCFBF1]',
        ],
        'warning' => [
            'box' => 'bg-[#FFFBEB] border-[#F59E0B] text-[#78350F]',
            'icon' => 'text-[#D97706]',
            'btn' => 'bg-white border-[#FDE68A] text-[#78350F] hover:bg-[#FEF3C7]',
        ],
        'risk' => [
            'box' => 'bg-[#FFF1F2] border-[#E11D48] text-[#881337]',
            'icon' => 'text-[#E11D48]',
            'btn' => 'bg-white border-[#FECDD3] text-[#881337] hover:bg-[#FFE4E6]',
        ],
    ];

    $style = $styles[$type] ?? $styles['info'];
@endphp

<div
    data-alert-box
    role="status"
    {{ $attributes->merge(['class' => 'rounded-2xl border-2 p-4 sm:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 ' . $style['box']]) }}
>
    <div class="flex items-start gap-3.5 min-w-0">
        {{-- Ikon sesuai jenis notifikasi --}}
        <div class="mt-0.5 shrink-0 {{ $style['icon'] }}">
            @if ($type === 'warning')
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
            @elseif ($type === 'risk')
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
            @else
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            @endif
        </div>

        <div class="min-w-0 space-y-1">
            @if ($title)
                <p class="text-[17px] font-bold leading-snug">
                    {{ $title }}
                </p>
            @endif
            <div class="text-[16px] leading-relaxed">
                {{ $message !== '' ? $message : $slot }}
            </div>
        </div>
    </div>

    @if ($dismissible)
        <button
            type="button"
            data-alert-close
            class="inline-flex items-center justify-center gap-1.5 min-h-[44px] px-4 py-2 rounded-xl border-2 text-[15px] font-semibold shrink-0 transition-colors cursor-pointer {{ $style['btn'] }}"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
            <span>Tutup</span>
        </button>
    @endif
</div>
