<div id="splash-screen" class="fixed inset-0 z-[9999] flex flex-col items-center bg-[#F8F9FA] font-sans">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white via-[#F8F9FA] to-[#F0F2F5]"></div>

    <div class="relative z-10 flex flex-col items-center justify-center flex-grow w-full mt-20 md:mt-0">
        
        <div class="w-32 h-32 md:w-[140px] md:h-[140px] bg-white rounded-[2rem] shadow-[0_15px_40px_rgba(0,0,0,0.06)] flex items-center justify-center mb-6 border border-gray-50/50 animate-pulse-slow">
            <div class="relative w-20 h-20 md:w-24 md:h-24">
                <img src="{{ asset('images/logo.png') }}" alt="DompetKu" class="w-full h-full object-contain drop-shadow-sm">
            </div>
        </div>

        <h1 class="text-xl md:text-2xl font-bold text-[#0C2D48] tracking-tight mb-2">DompetKu</h1>
        <p class="text-gray-700 text-sm md:text-base font-medium">Kelola Keuangan, Capai Tujuan</p>

        <div class="hidden md:flex flex-col items-start w-80 mt-16">
            <div class="w-full h-[3px] bg-gray-200 overflow-hidden">
                <div class="h-full bg-[#0C2D48] animate-progress"></div>
            </div>
            <div class="mt-4 text-[11px] tracking-[0.2em] text-[#333] uppercase font-semibold">
                Menyiapkan Dashboard<span class="loading-dots"></span>
            </div>
        </div>
    </div>

    <div class="md:hidden relative z-10 pb-16 flex flex-col items-center">
        <div class="w-8 h-8 border-[3px] border-transparent border-t-[#0C2D48] rounded-full animate-spin"></div>
    </div>

    <div class="hidden md:block absolute bottom-10 z-10 text-xs text-gray-600 font-medium tracking-wide">
        Versi 2.4.0 &bull; Terenkripsi 256-bit
    </div>
</div>

<style>
    /* CSS Animasi Interaktif */
    
    /* Animasi Progress Bar Desktop */
    @keyframes progress {
        0% { width: 0%; }
        20% { width: 15%; }
        50% { width: 60%; }
        80% { width: 85%; }
        100% { width: 100%; }
    }
    .animate-progress {
        animation: progress 2.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    }

    /* Animasi shadow lembut dan melayang pada logo */
    @keyframes pulse-slow {
        0%, 100% { box-shadow: 0 15px 40px rgba(12, 45, 72, 0.05); }
        50% { box-shadow: 0 15px 40px rgba(12, 45, 72, 0.15); transform: translateY(-3px); }
    }
    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }

    /* Animasi titik-titik pada teks "Menyiapkan Dashboard..." */
    .loading-dots::after {
        content: '';
        animation: dots 1.5s steps(4, end) infinite;
    }
    @keyframes dots {
        0%, 20% { content: ''; }
        40% { content: '.'; }
        60% { content: '..'; }
        80%, 100% { content: '...'; }
    }

    /* Transisi Fade Out saat loading selesai */
    .splash-fade-out {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.6s ease-out, visibility 0.6s ease-out;
    }
</style>

<script>
    // Logika untuk menghilangkan splash screen
    document.addEventListener("DOMContentLoaded", () => {
        // Durasi simulasi loading (Di set 2.5 detik)
        const loadingDuration = 2500; 
        
        setTimeout(() => {
            const splashScreen = document.getElementById('splash-screen');
            if (splashScreen) {
                splashScreen.classList.add('splash-fade-out');
                document.body.classList.add('page-leaving');

                setTimeout(() => {
                    window.location.href = @json(route('onboarding'));
                }, 600);
            }
        }, loadingDuration);
    });
</script>