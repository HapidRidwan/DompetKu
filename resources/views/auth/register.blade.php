<x-guest-layout>

    <div class="min-h-screen bg-[#f6f8fb] lg:bg-white">

        <div class="min-h-screen grid lg:grid-cols-2">


            {{-- ========================================================= --}}
            {{-- LEFT SIDE - DESKTOP --}}
            {{-- ========================================================= --}}

            <div
                class="
                    hidden
                    lg:flex
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
                        Kuasai Keuangan Anda
                        <br>
                        dengan DompetKu
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
                        Kelola pengeluaran, buat anggaran, dan capai tujuan finansial Anda
                        dengan platform yang aman, sederhana, dan mudah digunakan.
                    </p>

                </div>

            </div>



            {{-- ========================================================= --}}
            {{-- RIGHT SIDE --}}
            {{-- ========================================================= --}}

            <div
                class="
                    flex
                    items-center
                    justify-center
                    px-5
                    py-8

                    sm:px-8

                    lg:px-16
                    lg:items-start
                    lg:py-16
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
                            pt-6
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
                                text-[25px]
                                leading-tight

                                lg:text-[32px]
                                lg:font-serif
                            "
                        >
                            Buat Akun Baru
                        </h2>


                        <p
                            class="
                                mt-2
                                text-[#4b4b4b]
                                text-[15px]
                                text-center

                                lg:text-[14px]
                            "
                        >
                            Mulai kelola keuangan Anda dengan mudah.
                        </p>

                    </div>



                    {{-- ================================================= --}}
                    {{-- VALIDATION --}}
                    {{-- ================================================= --}}

                    <x-validation-errors class="mb-5" />



                    {{-- ================================================= --}}
                    {{-- REGISTER FORM --}}
                    {{-- ================================================= --}}

                    <form
                        method="POST"
                        action="{{ route('register') }}"
                    >

                        @csrf



                        {{-- ================================================= --}}
                        {{-- NAME --}}
                        {{-- ================================================= --}}

                        <div class="mb-5">

                            <label
                                for="name"
                                class="
                                    block
                                    text-[13px]
                                    lg:text-[12px]
                                    text-[#151515]
                                    mb-2
                                "
                            >
                                Nama Lengkap
                            </label>


                            <div class="relative">

                                {{-- PERSON ICON --}}

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
                                            d="M12 12a4 4 0 100-8 4 4 0 000 8z"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M4 21a8 8 0 0116 0"
                                        />

                                    </svg>

                                </div>


                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autofocus
                                    autocomplete="name"
                                    placeholder="Nama lengkap"

                                    class="
                                        w-full
                                        h-[49px]
                                        lg:h-[46px]

                                        pl-11
                                        pr-4

                                        rounded-lg
                                        lg:rounded-[8px]

                                        bg-[#f0f2f5]
                                        lg:bg-[#f1f2f5]

                                        border
                                        border-transparent
                                        lg:border-[#bec5d1]

                                        text-[14px]
                                        text-[#1f2937]

                                        placeholder-[#c5cad3]
                                        lg:placeholder-[#7d8491]

                                        focus:outline-none
                                        focus:ring-2
                                        focus:ring-[#19476e]
                                        focus:border-transparent
                                    "
                                >

                            </div>

                        </div>



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
                                "
                            >
                                Email
                            </label>


                            <div class="relative">

                                {{-- MAIL ICON --}}

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
                                            d="M3 8l9 6 9-6"
                                        />

                                        <rect
                                            x="3"
                                            y="5"
                                            width="18"
                                            height="14"
                                            rx="2"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                    </svg>

                                </div>


                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
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

                                        bg-[#f0f2f5]
                                        lg:bg-[#f1f2f5]

                                        border
                                        border-transparent
                                        lg:border-[#bec5d1]

                                        text-[14px]
                                        text-[#1f2937]

                                        placeholder-[#c5cad3]
                                        lg:placeholder-[#7d8491]

                                        focus:outline-none
                                        focus:ring-2
                                        focus:ring-[#19476e]
                                        focus:border-transparent
                                    "
                                >

                            </div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- PASSWORD --}}
                        {{-- ================================================= --}}

                        <div class="mb-5">

                            <label
                                for="password"
                                class="
                                    block
                                    text-[13px]
                                    lg:text-[12px]
                                    text-[#151515]
                                    mb-2
                                "
                            >
                                Password
                            </label>


                            <div class="relative">

                                {{-- LOCK ICON --}}

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

                                        <rect
                                            x="5"
                                            y="10"
                                            width="14"
                                            height="11"
                                            rx="2"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-width="1.8"
                                            d="M8 10V7a4 4 0 018 0v3"
                                        />

                                    </svg>

                                </div>


                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="••••••••"

                                    class="
                                        w-full
                                        h-[49px]
                                        lg:h-[46px]

                                        pl-11
                                        pr-12

                                        rounded-lg
                                        lg:rounded-[8px]

                                        bg-[#f0f2f5]
                                        lg:bg-[#f1f2f5]

                                        border
                                        border-transparent
                                        lg:border-[#bec5d1]

                                        text-[14px]
                                        text-[#1f2937]

                                        placeholder-[#bfc5cf]

                                        focus:outline-none
                                        focus:ring-2
                                        focus:ring-[#19476e]
                                        focus:border-transparent
                                    "
                                >


                                {{-- EYE --}}

                                <button
                                    type="button"
                                    onclick="togglePassword('password', 'eyePassword')"
                                    class="
                                        absolute
                                        inset-y-0
                                        right-0
                                        pr-4
                                        flex
                                        items-center
                                        text-[#7c8591]
                                    "
                                >

                                    <svg
                                        id="eyePassword"
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                        />

                                    </svg>

                                </button>

                            </div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- CONFIRM PASSWORD --}}
                        {{-- ================================================= --}}

                        <div class="mb-5">

                            <label
                                for="password_confirmation"
                                class="
                                    block
                                    text-[13px]
                                    lg:text-[12px]
                                    text-[#151515]
                                    mb-2
                                "
                            >
                                Konfirmasi Password
                            </label>


                            <div class="relative">

                                {{-- LOCK ICON --}}

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

                                        <rect
                                            x="5"
                                            y="10"
                                            width="14"
                                            height="11"
                                            rx="2"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-width="1.8"
                                            d="M8 10V7a4 4 0 018 0v3"
                                        />

                                    </svg>

                                </div>


                                <input
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Ulangi password"

                                    class="
                                        w-full
                                        h-[49px]
                                        lg:h-[46px]

                                        pl-11
                                        pr-12

                                        rounded-lg
                                        lg:rounded-[8px]

                                        bg-[#f0f2f5]
                                        lg:bg-[#f1f2f5]

                                        border
                                        border-transparent
                                        lg:border-[#bec5d1]

                                        text-[14px]
                                        text-[#1f2937]

                                        placeholder-[#bfc5cf]

                                        focus:outline-none
                                        focus:ring-2
                                        focus:ring-[#19476e]
                                        focus:border-transparent
                                    "
                                >


                                {{-- EYE --}}

                                <button
                                    type="button"
                                    onclick="togglePassword(
                                        'password_confirmation',
                                        'eyeConfirm'
                                    )"

                                    class="
                                        absolute
                                        inset-y-0
                                        right-0
                                        pr-4
                                        flex
                                        items-center
                                        text-[#7c8591]
                                    "
                                >

                                    <svg
                                        id="eyeConfirm"
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                        />

                                    </svg>

                                </button>

                            </div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- TERMS --}}
                        {{-- ================================================= --}}

                        <div class="mb-6">

                            <label
                                for="terms"
                                class="flex items-center gap-2 cursor-pointer"
                            >

                                <input
                                    id="terms"
                                    type="checkbox"
                                    name="terms"
                                    required

                                    class="
                                        w-5
                                        h-5
                                        rounded
                                        border-gray-300
                                        text-[#123e64]
                                        focus:ring-[#123e64]
                                    "
                                >


                                <span
                                    class="
                                        text-[13px]
                                        lg:text-[12px]
                                        text-[#4c4c4c]
                                    "
                                >
                                    Saya menyetujui

                                    @if (Route::has('terms.show'))

                                        <a
                                            href="{{ route('terms.show') }}"
                                            target="_blank"
                                            class="
                                                text-[#002f59]
                                                font-semibold
                                                hover:underline
                                            "
                                        >
                                            Syarat dan Ketentuan
                                        </a>

                                    @else

                                        <span
                                            class="
                                                text-[#002f59]
                                                font-semibold
                                            "
                                        >
                                            Syarat dan Ketentuan
                                        </span>

                                    @endif

                                </span>

                            </label>

                        </div>



                        {{-- ================================================= --}}
                        {{-- REGISTER BUTTON --}}
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

                                lg:font-serif
                                font-semibold

                                shadow-[0_6px_14px_rgba(0,47,85,0.18)]

                                hover:bg-[#002642]

                                transition

                                flex
                                items-center
                                justify-center
                                gap-3
                            "
                        >

                            <span class="lg:hidden">
                                Daftar
                            </span>


                            <span class="hidden lg:flex items-center gap-3">

                                Daftar

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
                        {{-- DIVIDER --}}
                        {{-- ================================================= --}}

                        <div
                            class="
                                flex
                                items-center
                                my-6
                                lg:my-5
                            "
                        >

                            <div
                                class="
                                    flex-1
                                    border-t
                                    border-[#d8dce2]
                                "
                            ></div>


                            <span
                                class="
                                    px-4
                                    text-[12px]
                                    lg:text-[12px]
                                    text-[#767676]
                                "
                            >
                                Atau
                            </span>


                            <div
                                class="
                                    flex-1
                                    border-t
                                    border-[#d8dce2]
                                "
                            ></div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- GOOGLE --}}
                        {{-- ================================================= --}}

                        <a
                            href="{{ route('auth.google.redirect') }}"

                            class="
                                w-full
                                h-[49px]
                                lg:h-[47px]

                                rounded-lg

                                border
                                border-[#e6e7ea]
                                lg:border-[#bfc5ce]

                                bg-white

                                flex
                                justify-center
                                items-center

                                gap-3

                                text-[13px]
                                lg:text-[14px]

                                text-[#242424]

                                font-semibold
                                lg:font-normal

                                hover:bg-gray-50

                                transition
                            "
                        >

                            {{-- GOOGLE ICON --}}

                            <svg
                                class="w-5 h-5"
                                viewBox="0 0 48 48"
                                xmlns="http://www.w3.org/2000/svg"
                            >

                                <path
                                    fill="#FFC107"
                                    d="M43.6 20.5H42V20H24v8h11.3C33.7 32.7 29.3 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.9 1.2 8 3.1l5.7-5.7C34.1 6.1 29.3 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.2-.1-2.4-.4-3.5z"
                                />

                                <path
                                    fill="#FF3D00"
                                    d="M6.3 14.7l6.6 4.8C14.7 15.1 19 12 24 12c3.1 0 5.9 1.2 8 3.1l5.7-5.7C34.1 6.1 29.3 4 24 4c-7.7 0-14.4 4.3-17.7 10.7z"
                                />

                                <path
                                    fill="#4CAF50"
                                    d="M24 44c5.2 0 9.9-2 13.5-5.2l-6.2-5.2C29.3 35.1 26.8 36 24 36c-5.3 0-9.7-3.3-11.4-8l-6.5 5C9.4 39.4 16.1 44 24 44z"
                                />

                                <path
                                    fill="#1976D2"
                                    d="M43.6 20.5H42V20H24v8h11.3c-.8 2.3-2.3 4.3-4.2 5.6l6.2 5.2C36.9 39.2 44 34 44 24c0-1.2-.1-2.4-.4-3.5z"
                                />

                            </svg>


                            <span>
                                Masuk dengan Google
                            </span>

                        </a>



                        {{-- ================================================= --}}
                        {{-- LOGIN LINK --}}
                        {{-- ================================================= --}}

                        <div
                            class="
                                text-center
                                mt-8
                                lg:mt-6
                                text-[14px]
                            "
                        >

                            <span class="text-[#4f4f4f]">
                                Sudah punya akun?
                            </span>


                            <a
                                href="{{ route('login') }}"
                                class="
                                    text-[#002f59]
                                    font-semibold
                                    lg:font-normal
                                    hover:underline
                                "
                            >
                                Masuk
                            </a>

                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>



    {{-- ============================================================= --}}
    {{-- JAVASCRIPT --}}
    {{-- ============================================================= --}}

    <script>

        function togglePassword(inputId, iconId)
        {
            const input = document.getElementById(inputId);

            if (!input) {
                return;
            }

            input.type =
                input.type === 'password'
                    ? 'text'
                    : 'password';
        }

    </script>

</x-guest-layout>