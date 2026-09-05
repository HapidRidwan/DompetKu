<div class="min-h-screen bg-[#F8F9FA] font-sans flex items-center justify-center relative overflow-hidden">
    <!-- Main Container -->
    <div class="w-full max-w-[1200px] mx-auto px-6 py-12 md:px-12 flex flex-col md:flex-row items-center gap-12 lg:gap-24 relative z-10">

        <!-- ========================================== -->
        <!-- BAGIAN KIRI / ATAS (ILUSTRASI VISUAL) -->
        <!-- ========================================== -->
        
        <!-- 1. Visual Mobile (Sembunyi di Desktop) -->
        <div class="w-full md:hidden flex justify-center items-center relative h-72 mt-8">
            <!-- Lingkaran Putus-putus berputar -->
            <div class="absolute w-56 h-56 border-[2px] border-dashed border-gray-300 rounded-full animate-[spin_15s_linear_infinite]"></div>
            
            <!-- Ikon Dompet Tengah -->
            <div class="w-32 h-32 bg-gradient-to-tr from-gray-100 to-white rounded-full shadow-xl flex justify-center items-center z-10">
                <svg class="w-12 h-12 text-[#081C34]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 5H5C3.34 5 2 6.34 2 8V16C2 17.66 3.34 19 5 19H19C20.66 19 22 17.66 22 16V8C22 6.34 20.66 5 19 5ZM19 17H5C4.45 17 4 16.55 4 16V12H20V16C20 16.55 19.55 17 19 17ZM20 9H4V8C4 7.45 4.45 7 5 7H19C19.55 7 20 7.45 20 8V9ZM16 14C15.45 14 15 13.55 15 13C15 12.45 15.45 12 16 12C16.55 12 17 12.45 17 13C17 13.55 16.55 14 16 14Z" />
                </svg>
            </div>

            <!-- Tombol Panah Melayang (Animasi Bounce) -->
            <div class="absolute top-8 left-8 bg-white p-3 rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.08)] animate-bounce-slow">
                <svg class="w-5 h-5 text-[#081C34]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </div>
            <div class="absolute bottom-8 right-8 bg-white p-3 rounded-2xl shadow-[0_8px_20px_rgba(0,0,0,0.08)] animate-bounce-slow" style="animation-delay: 0.5s;">
                <svg class="w-5 h-5 text-[#081C34]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
            </div>
        </div>

        <!-- 2. Visual Desktop (Sembunyi di Mobile) -->
        <div class="hidden md:flex w-1/2 relative justify-center items-center p-8">
            <!-- Mockup Laptop -->
            <div class="relative w-full max-w-[500px] aspect-[16/10] bg-[#1C1C1E] rounded-t-[1.5rem] p-3 shadow-2xl border-b-4 border-gray-900">
                <div class="w-full h-full bg-gradient-to-br from-[#E6EEF5] to-[#FFFFFF] rounded-t-lg overflow-hidden relative flex flex-col items-center justify-center">
                    <!-- Elemen Dummy Layar (FINPAY) -->
                    <div class="absolute top-4 left-6 flex items-center gap-2">
                        <div class="w-5 h-5 bg-[#C8A951] rounded-sm"></div>
                        <span class="font-bold text-[#081C34] tracking-wider text-xs">FINPAY</span>
                    </div>
                    <!-- Ilustrasi Dompet 3D (Diganti dengan blok visual) -->
                    <div class="w-48 h-32 bg-[#274871] rounded-xl shadow-lg border-2 border-[#C8A951] relative flex items-center justify-center mt-4">
                        <div class="w-10 h-10 border-2 border-[#C8A951] rounded flex items-center justify-center text-[#C8A951] font-bold">F</div>
                    </div>
                </div>
                <!-- Base Laptop -->
                <div class="absolute -bottom-4 left-[-4%] w-[108%] h-4 bg-[#A3A3A3] rounded-b-2xl border-t border-gray-400">
                    <div class="w-1/4 h-2 bg-[#8C8C8C] mx-auto rounded-b-md"></div>
                </div>
            </div>

            <!-- Floating Card "Pertumbuhan" -->
            <div class="absolute -bottom-6 right-0 bg-white/95 backdrop-blur-sm rounded-2xl shadow-[0_15px_40px_rgba(0,0,0,0.1)] p-4 flex items-center gap-4 animate-float border border-white">
                <div class="w-12 h-12 bg-[#081C34] rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <div>
                    <div class="text-[11px] text-gray-500 font-semibold tracking-wider uppercase mb-0.5">Pertumbuhan</div>
                    <div class="text-xl font-bold text-gray-900">+12.5%</div>
                </div>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- BAGIAN KANAN / BAWAH (TEKS & KONTROL) -->
        <!-- ========================================== -->
        <div class="w-full md:w-1/2 flex flex-col items-center md:items-start text-center md:text-left mt-4 md:mt-0">
            
            <!-- Indikator Desktop (Di atas teks) -->
            <div class="hidden md:block w-10 h-1.5 bg-[#081C34] rounded-full mb-10"></div>

            <!-- Judul -->
            <h1 class="text-2xl md:text-[2.5rem] md:leading-[1.1] text-gray-800 mb-4 md:mb-6">
                <span class="font-normal block md:inline">Kelola Keuangan</span>
                <span class="font-bold text-[#081C34] relative inline-block mt-1 md:mt-0">
                    dengan Mudah
                    <!-- Garis Bawah Lengkung Kustom (Hanya Desktop) -->
                    <svg class="hidden md:block absolute w-[110%] h-4 -bottom-3 left-[-5%] text-[#6E95B8]" viewBox="0 0 100 20" fill="currentColor" preserveAspectRatio="none">
                        <path d="M0 10 Q50 20 100 10 L100 20 L0 20 Z" opacity="0.3"/>
                    </svg>
                </span>
            </h1>

            <!-- Deskripsi -->
            <p class="text-gray-600 text-[15px] md:text-lg leading-relaxed md:leading-8 mb-8 md:mb-12 max-w-md md:max-w-xl">
                Catat pemasukan dan pengeluaran dalam satu aplikasi yang aman dan terpercaya. <span class="hidden md:inline">Raih kebebasan finansial dengan sistem yang terorganisir.</span>
            </p>

            <!-- Indikator Mobile (Di bawah teks) -->
            <div class="flex md:hidden justify-center mb-10">
                <div class="w-8 h-1.5 bg-[#081C34] rounded-full"></div>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex flex-row items-center justify-between md:justify-start gap-4 md:gap-8 w-full md:w-auto">
                <!-- Di Desktop "Lanjut" di kiri, di Mobile "Lanjut" di kanan -->
                <a href="{{ route('login') }}" class="order-2 md:order-1 px-8 py-3.5 bg-[#081C34] text-white font-medium rounded-xl hover:bg-[#123154] transition-all duration-300 flex items-center gap-3 shadow-[0_8px_20px_rgba(8,28,52,0.2)] hover:shadow-[0_10px_25px_rgba(8,28,52,0.3)]">
                    Lanjut
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ route('login') }}" class="order-1 md:order-2 px-4 py-3 text-gray-500 font-medium hover:text-gray-800 transition-colors">
                    Lewati
                </a>
            </div>

            <!-- Fitur Keamanan (Hanya Desktop) -->
            <div class="hidden md:flex items-center gap-8 mt-16 text-[13px] text-gray-500 font-medium">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    Keamanan Enkripsi 256-bit
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z"/></svg>
                    Terdaftar di OJK
                </div>
            </div>
            
        </div>
    </div>
</div>

<style>
    /* Animasi Melayang untuk Kartu Pertumbuhan Desktop */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .animate-float {
        animation: float 4s ease-in-out infinite;
    }

    /* Animasi Pantul Lambat untuk Panah Mobile */
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(-10%); animation-timing-function: cubic-bezier(0.8, 0, 1, 1); }
        50% { transform: translateY(0); animation-timing-function: cubic-bezier(0, 0, 0.2, 1); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 2.5s infinite;
    }
</style>