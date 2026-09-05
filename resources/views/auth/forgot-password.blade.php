<x-guest-layout>

    <div class="min-h-screen bg-[#f6f8fb] lg:bg-white">

        <div class="min-h-screen lg:grid lg:grid-cols-2">


            {{-- ========================================================= --}}
            {{-- LEFT SIDE - DESKTOP --}}
            {{-- ========================================================= --}}

            <section
                class="
                    hidden
                    lg:flex
                    min-h-screen
                    bg-[#345b7d]
                    text-white
                    px-24
                    py-12
                    flex-col
                    items-center
                    justify-center
                    text-center
                "
            >

                <div class="max-w-md">

                    {{-- LOGO --}}
                    <div class="mb-8 flex justify-center">

                        <div
                            class="
                                w-12
                                h-12
                                bg-white
                                flex
                                items-center
                                justify-center
                                shadow-sm
                            "
                        >

                            <x-authentication-card-logo />

                        </div>

                    </div>


                    {{-- TITLE --}}
                    <h1
                        class="
                            mb-5
                            text-[32px]
                            leading-[1.2]
                            font-bold
                            font-serif
                        "
                    >
                        Lupa Kata Sandi?
                    </h1>


                    {{-- DESCRIPTION --}}
                    <p
                        class="
                            mx-auto
                            max-w-lg
                            text-[16px]
                            leading-6
                            text-[#8ca7c0]
                        "
                    >
                        Jangan khawatir, kami akan membantu Anda
                        mendapatkan kembali akses ke akun Anda.
                    </p>

                </div>

            </section>



            {{-- ========================================================= --}}
            {{-- RIGHT SIDE --}}
            {{-- ========================================================= --}}

            <section
                class="
                    min-h-screen
                    flex
                    items-center
                    justify-center
                    px-5
                    py-8

                    sm:px-8

                    lg:px-16
                    lg:py-0
                "
            >

                <div
                    class="
                        w-full
                        max-w-[448px]
                    "
                >


                    {{-- ================================================= --}}
                    {{-- MOBILE LOGO --}}
                    {{-- ================================================= --}}

                    <div
                        class="
                            lg:hidden
                            flex
                            justify-center
                            mb-5
                        "
                    >

                        <div
                            class="
                                w-[78px]
                                h-[78px]
                                rounded-2xl
                                bg-white
                                shadow-[0_8px_25px_rgba(0,0,0,0.05)]
                                flex
                                items-center
                                justify-center
                            "
                        >

                            <div class="w-12 h-12">

                                <x-authentication-card-logo />

                            </div>

                        </div>

                    </div>



                    {{-- ================================================= --}}
                    {{-- HEADING --}}
                    {{-- ================================================= --}}

                    <div
                        class="
                            mb-6
                            text-center
                            lg:mb-5
                        "
                    >

                        {{-- MOBILE --}}

                        <h2
                            class="
                                text-[#002b50]
                                font-bold
                                text-[32px]
                                leading-tight
                                tracking-[-0.5px]

                                lg:hidden
                            "
                        >
                            Lupa Kata Sandi?
                        </h2>


                        <p
                            class="
                                mt-2
                                text-[#4b4b4b]
                                text-[15px]
                                leading-6

                                lg:hidden
                            "
                        >
                            Masukkan email untuk mengatur ulang
                            kata sandi Anda.
                        </p>



                        {{-- DESKTOP --}}

                        <h2
                            class="
                                hidden
                                lg:block
                                text-[#1f1f1f]
                                font-bold
                                font-serif
                                text-[25px]
                                leading-[30px]
                            "
                        >
                            Lupa Kata Sandi?
                        </h2>


                        <p
                            class="
                                hidden
                                lg:block
                                mt-2
                                text-[#555555]
                                text-[14px]
                                leading-[18px]
                                font-serif
                            "
                        >
                            Masukkan email untuk mengatur ulang kata sandi Anda.
                        </p>

                    </div>



                    {{-- ================================================= --}}
                    {{-- STATUS MESSAGE --}}
                    {{-- ================================================= --}}

                    @session('status')

                        <div
                            class="
                                mb-5
                                px-4
                                py-3
                                rounded-lg
                                bg-[#f0fdf4]
                                border
                                border-[#bbf7d0]
                                text-[#166534]
                                text-[13px]

                                lg:font-serif
                                lg:text-[12px]
                            "
                        >

                            {{ $value }}

                        </div>

                    @endsession



                    {{-- ================================================= --}}
                    {{-- VALIDATION --}}
                    {{-- ================================================= --}}

                    <x-validation-errors
                        class="mb-5"
                    />



                    {{-- ================================================= --}}
                    {{-- FORM --}}
                    {{-- ================================================= --}}

                    <form
                        method="POST"
                        action="{{ route('password.email') }}"
                    >

                        @csrf



                        {{-- ================================================= --}}
                        {{-- EMAIL --}}
                        {{-- ================================================= --}}

                        <div class="mb-5">

                            <label
                                for="email"
                                class="
                                    block
                                    text-[13px]
                                    lg:text-[12px]
                                    text-[#151515]
                                    mb-2

                                    lg:font-serif
                                    lg:text-[#555555]
                                "
                            >
                                Email
                            </label>


                            <div class="relative">


                                {{-- EMAIL ICON --}}

                                <div
                                    class="
                                        absolute
                                        inset-y-0
                                        left-0
                                        pl-4
                                        flex
                                        items-center
                                        pointer-events-none
                                    "
                                >

                                    <svg
                                        class="w-5 h-5 text-[#858e9b]"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        />

                                    </svg>

                                </div>



                                {{-- INPUT --}}

                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autofocus
                                    autocomplete="username"
                                    placeholder="nama@email.com"

                                    class="
                                        w-full
                                        h-[49px]
                                        lg:h-[46px]

                                        pl-11
                                        pr-4

                                        rounded-lg
                                        lg:rounded-[8px]

                                        bg-white
                                        lg:bg-[#f1f2f5]

                                        border
                                        border-[#e5e7eb]
                                        lg:border-[#bec5d1]

                                        text-[14px]
                                        text-[#1f2937]

                                        placeholder-[#c5cad3]
                                        lg:placeholder-[#7d8491]

                                        focus:outline-none
                                        focus:ring-2
                                        focus:ring-[#19476e]
                                        focus:border-transparent

                                        transition
                                    "
                                />

                            </div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- DESCRIPTION --}}
                        {{-- ================================================= --}}

                        <p
                            class="
                                mb-6
                                text-[12px]
                                leading-[18px]
                                text-[#73777d]

                                lg:mb-5
                                lg:font-serif
                                lg:text-[10px]
                                lg:text-[#797979]
                            "
                        >

                            <span class="lg:hidden">
                                Link untuk mengatur ulang kata sandi
                                akan dikirim ke email Anda.
                            </span>

                            <span class="hidden lg:inline">
                                Kami akan mengirimkan link untuk mengatur ulang
                                kata sandi ke email Anda.
                            </span>

                        </p>



                        {{-- ================================================= --}}
                        {{-- RESET BUTTON --}}
                        {{-- ================================================= --}}

                        <button
                            type="submit"

                            class="
                                w-full
                                h-[49px]

                                lg:h-[53px]

                                rounded-lg
                                lg:rounded-[8px]

                                bg-[#002f55]
                                lg:bg-[#194970]

                                text-white

                                text-[13px]
                                lg:text-[20px]

                                font-semibold
                                lg:font-serif

                                shadow-[0_6px_14px_rgba(0,47,85,0.18)]

                                hover:bg-[#002642]

                                transition

                                flex
                                items-center
                                justify-center
                                gap-3

                                focus:outline-none
                                focus:ring-2
                                focus:ring-[#19476e]
                                focus:ring-offset-2
                            "
                        >

                            {{-- MOBILE --}}

                            <span class="lg:hidden">
                                Kirim Link Reset
                            </span>


                            {{-- DESKTOP --}}

                            <span
                                class="
                                    hidden
                                    lg:flex
                                    items-center
                                    justify-center
                                    gap-3
                                "
                            >

                                Kirim Link Reset

                                <svg
                                    class="w-5 h-5"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 12h14m-6-6l6 6-6 6"
                                    />

                                </svg>

                            </span>

                        </button>



                        {{-- ================================================= --}}
                        {{-- BACK TO LOGIN --}}
                        {{-- ================================================= --}}

                        <div
                            class="
                                text-center
                                mt-8

                                lg:mt-6
                                lg:font-serif
                                lg:text-[14px]
                            "
                        >

                            <span
                                class="
                                    text-[14px]
                                    text-[#4f4f4f]
                                "
                            >
                                Ingat kata sandi?
                            </span>


                            <a
                                href="{{ route('login') }}"
                                class="
                                    ml-1
                                    text-[14px]
                                    text-[#002f59]
                                    font-semibold
                                    lg:font-bold
                                    hover:underline
                                "
                            >
                                Masuk
                            </a>

                        </div>


                    </form>

                </div>

            </section>

        </div>

    </div>

</x-guest-layout>