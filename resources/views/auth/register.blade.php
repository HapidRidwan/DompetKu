<x-guest-layout>

    <div class="min-h-screen bg-[#F7F9FC] lg:bg-white">

        <div class="min-h-screen lg:grid lg:grid-cols-2">


            {{-- ========================================================= --}}
            {{-- LEFT PANEL - DESKTOP ONLY --}}
            {{-- ========================================================= --}}

            <section
                class="
                    hidden
                    lg:block
                    relative
                    min-h-screen
                    bg-[#163A5F]
                    overflow-hidden
                "
            >

                {{-- ================================================= --}}
                {{-- LOGO DESKTOP --}}
                {{-- ================================================= --}}

                <div
                    class="
                        absolute
                        top-[412px]
                        left-1/2
                        -translate-x-1/2
                    "
                >

                    <div
                        class="
                            w-[54px]
                            h-[54px]
                            bg-white
                            flex
                            items-center
                            justify-center
                        "
                    >

                        <div class="w-[42px] h-[42px]">

                            <x-authentication-card-logo />

                        </div>

                    </div>

                </div>


                {{-- ================================================= --}}
                {{-- LEFT CONTENT --}}
                {{-- ================================================= --}}

                <div
                    class="
                        absolute
                        left-[85px]
                        right-[70px]
                        top-[507px]
                    "
                >

                    <h1
                        class="
                            text-white
                            font-serif
                            font-bold
                            text-[32px]
                            leading-[1.25]
                            whitespace-nowrap
                        "
                    >
                        Start Your Financial Journey Today
                    </h1>


                    <p
                        class="
                            mt-[18px]
                            max-w-[470px]
                            text-center
                            font-serif
                            text-[15px]
                            leading-[25px]
                            text-[#7F9BB8]
                        "
                    >
                        Join us to manage your finances safely, securely, and seamlessly all in
                        <br>
                        one place.
                    </p>

                </div>

            </section>



            {{-- ========================================================= --}}
            {{-- RIGHT PANEL --}}
            {{-- ========================================================= --}}

            <section
                class="
                    min-h-screen
                    lg:bg-white
                "
            >

                <div
                    class="
                        w-full
                        px-5

                        lg:px-0
                        lg:ml-[128px]
                        lg:w-[384px]
                    "
                >


                    {{-- ================================================= --}}
                    {{-- MOBILE LOGO --}}
                    {{-- ================================================= --}}

                    <div
                        class="
                            lg:hidden
                            pt-[193px]
                            flex
                            justify-center
                        "
                    >

                        <div
                            class="
                                w-[96px]
                                h-[80px]
                                flex
                                items-center
                                justify-center
                                rounded-[14px]
                                bg-[#F8FAFC]
                                shadow-[0_5px_18px_rgba(31,41,55,0.025)]
                            "
                        >

                            <div
                                class="
                                    w-[60px]
                                    h-[60px]
                                    flex
                                    items-center
                                    justify-center
                                "
                            >

                                <x-authentication-card-logo />

                            </div>

                        </div>

                    </div>



                    {{-- ================================================= --}}
                    {{-- TITLE --}}
                    {{-- ================================================= --}}

                    <header
                        class="
                            mt-[15px]
                            text-center

                            lg:text-left
                            lg:mt-0
                            lg:pt-[187px]
                        "
                    >

                        {{-- ================= MOBILE ================= --}}

                        <h1
                            class="
                                lg:hidden
                                text-[#002D52]
                                text-[32px]
                                leading-[39px]
                                font-bold
                                tracking-[-0.8px]
                            "
                        >
                            Buat Akun Baru
                        </h1>


                        <p
                            class="
                                lg:hidden
                                mt-[7px]
                                text-[16px]
                                leading-[24px]
                                text-[#4F5258]
                            "
                        >
                            Mulai kelola keuangan Anda dengan mudah.
                        </p>


                        {{-- ================= DESKTOP ================= --}}

                        <h1
                            class="
                                hidden
                                lg:block
                                font-serif
                                font-bold
                                text-[25px]
                                leading-[30px]
                                text-[#1F1F1F]
                            "
                        >
                            Buat Akun Baru
                        </h1>


                        <p
                            class="
                                hidden
                                lg:block
                                mt-[9px]
                                font-serif
                                text-[14px]
                                leading-[18px]
                                text-[#555555]
                            "
                        >
                            Silakan isi detail di bawah ini untuk mendaftar.
                        </p>

                    </header>



                    {{-- ================================================= --}}
                    {{-- VALIDATION --}}
                    {{-- ================================================= --}}

                    <x-validation-errors
                        class="
                            mt-4
                            mb-4
                            text-sm
                        "
                    />



                    {{-- ================================================= --}}
                    {{-- REGISTER FORM --}}
                    {{-- ================================================= --}}

                    <form
                        method="POST"
                        action="{{ route('register') }}"
                        class="
                            mt-[33px]
                            lg:mt-[35px]
                        "
                    >

                        @csrf



                        {{-- ================================================= --}}
                        {{-- FULL NAME --}}
                        {{-- ================================================= --}}

                        <div>

                            <label
                                for="name"
                                class="
                                    block
                                    mb-[4px]
                                    text-[13px]
                                    leading-[18px]
                                    text-[#17191C]

                                    lg:ml-[7px]
                                    lg:mb-[4px]
                                    lg:font-serif
                                    lg:text-[12px]
                                    lg:text-[#555555]
                                "
                            >

                                <span class="lg:hidden">
                                    Nama Lengkap
                                </span>

                                <span class="hidden lg:inline">
                                    Nama Lengkap
                                </span>

                            </label>


                            <div class="relative">

                                {{-- PERSON ICON --}}

                                <div
                                    class="
                                        absolute
                                        left-[11px]
                                        top-1/2
                                        -translate-y-1/2
                                        pointer-events-none

                                        lg:left-[17px]
                                    "
                                >

                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-[#7E858D]"
                                    >

                                        <path
                                            d="M12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M4.5 20C4.5 16.9624 7.85786 14.5 12 14.5C16.1421 14.5 19.5 16.9624 19.5 20"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
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
                                    placeholder="Masukkan nama lengkap"

                                    class="
                                        block
                                        w-full
                                        h-[49px]
                                        pl-[33px]
                                        pr-4

                                        rounded-[7px]
                                        border
                                        border-[#E9EBEE]
                                        bg-white

                                        text-[14px]
                                        text-[#25282C]

                                        placeholder:text-[#7E838B]

                                        outline-none

                                        focus:border-[#163A5F]
                                        focus:ring-1
                                        focus:ring-[#163A5F]

                                        lg:h-[54px]
                                        lg:pl-[36px]
                                        lg:rounded-[7px]
                                        lg:border-[#C7CBD2]
                                        lg:bg-[#F4F6F9]
                                        lg:font-serif
                                        lg:text-[14px]
                                        lg:placeholder:text-transparent
                                    "
                                >


                                {{-- DESKTOP PLACEHOLDER --}}

                                <span
                                    class="
                                        hidden
                                        lg:block
                                        absolute
                                        left-[36px]
                                        top-1/2
                                        -translate-y-1/2
                                        pointer-events-none
                                        font-serif
                                        text-[14px]
                                        text-[#747A84]
                                        bg-[#F4F6F9]
                                    "
                                    id="desktop-name-placeholder"
                                >
                                    e.g. Budi Santoso
                                </span>

                            </div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- EMAIL --}}
                        {{-- ================================================= --}}

                        <div class="mt-[15px] lg:mt-[17px]">

                            <label
                                for="email"
                                class="
                                    block
                                    mb-[4px]
                                    text-[13px]
                                    leading-[18px]
                                    text-[#17191C]

                                    lg:ml-[7px]
                                    lg:font-serif
                                    lg:text-[12px]
                                    lg:text-[#555555]
                                "
                            >

                                <span class="lg:hidden">
                                    Email
                                </span>

                                <span class="hidden lg:inline">
                                    Email Address
                                </span>

                            </label>


                            <div class="relative">

                                {{-- MAIL ICON --}}

                                <div
                                    class="
                                        absolute
                                        left-[10px]
                                        top-1/2
                                        -translate-y-1/2
                                        pointer-events-none

                                        lg:left-[17px]
                                    "
                                >

                                    <svg
                                        width="21"
                                        height="21"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-[#7E858D]"
                                    >

                                        <rect
                                            x="3"
                                            y="5"
                                            width="18"
                                            height="14"
                                            rx="1"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M4 7L12 13L20 7"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
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
                                    placeholder="contoh@email.com"

                                    class="
                                        block
                                        w-full
                                        h-[49px]

                                        pl-[33px]
                                        pr-4

                                        rounded-[7px]
                                        border
                                        border-[#E9EBEE]
                                        bg-white

                                        text-[14px]
                                        text-[#25282C]

                                        placeholder:text-[#7E838B]

                                        outline-none

                                        focus:border-[#163A5F]
                                        focus:ring-1
                                        focus:ring-[#163A5F]

                                        lg:h-[54px]
                                        lg:pl-[36px]
                                        lg:border-[#C7CBD2]
                                        lg:bg-[#F4F6F9]
                                        lg:font-serif
                                        lg:placeholder:text-transparent
                                    "
                                >


                                {{-- DESKTOP PLACEHOLDER --}}

                                <span
                                    id="desktop-email-placeholder"
                                    class="
                                        hidden
                                        lg:block
                                        absolute
                                        left-[36px]
                                        top-1/2
                                        -translate-y-1/2
                                        pointer-events-none
                                        bg-[#F4F6F9]
                                        font-serif
                                        text-[14px]
                                        text-[#747A84]
                                    "
                                >
                                    name@example.com
                                </span>

                            </div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- PASSWORD --}}
                        {{-- ================================================= --}}

                        <div class="mt-[15px] lg:mt-[17px]">

                            <label
                                for="password"
                                class="
                                    block
                                    mb-[4px]
                                    text-[13px]
                                    leading-[18px]
                                    text-[#17191C]

                                    lg:ml-[7px]
                                    lg:font-serif
                                    lg:text-[12px]
                                    lg:text-[#555555]
                                "
                            >

                                <span class="lg:hidden">
                                    Kata Sandi
                                </span>

                                <span class="hidden lg:inline">
                                    Create Password
                                </span>

                            </label>


                            <div class="relative">

                                {{-- LOCK ICON --}}

                                <div
                                    class="
                                        absolute
                                        left-[11px]
                                        top-1/2
                                        -translate-y-1/2
                                        pointer-events-none

                                        lg:left-[17px]
                                    "
                                >

                                    <svg
                                        width="20"
                                        height="22"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-[#7E858D]"
                                    >

                                        <rect
                                            x="5"
                                            y="10"
                                            width="14"
                                            height="11"
                                            rx="1"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M8 10V7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7V10"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M12 14V17"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>

                                </div>



                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Minimal 8 karakter"

                                    class="
                                        block
                                        w-full
                                        h-[49px]

                                        pl-[33px]
                                        pr-[45px]

                                        rounded-[7px]
                                        border
                                        border-[#E9EBEE]
                                        bg-white

                                        text-[14px]
                                        text-[#25282C]

                                        placeholder:text-[#7E838B]

                                        outline-none

                                        focus:border-[#163A5F]
                                        focus:ring-1
                                        focus:ring-[#163A5F]

                                        lg:h-[54px]
                                        lg:pl-[36px]
                                        lg:border-[#C7CBD2]
                                        lg:bg-[#F4F6F9]
                                        lg:font-serif
                                        lg:placeholder:text-transparent
                                    "
                                >


                                {{-- DESKTOP PLACEHOLDER --}}

                                <span
                                    id="desktop-password-placeholder"
                                    class="
                                        hidden
                                        lg:block
                                        absolute
                                        left-[36px]
                                        top-1/2
                                        -translate-y-1/2
                                        pointer-events-none
                                        bg-[#F4F6F9]
                                        font-serif
                                        text-[14px]
                                        text-[#747A84]
                                    "
                                >
                                    Min. 8 characters
                                </span>



                                {{-- EYE BUTTON --}}

                                <button
                                    type="button"
                                    onclick="togglePassword('password', 'eye-password')"

                                    class="
                                        absolute
                                        right-[9px]
                                        top-1/2
                                        -translate-y-1/2

                                        flex
                                        items-center
                                        justify-center

                                        text-[#7D848B]

                                        lg:right-[16px]
                                    "
                                    aria-label="Show password"
                                >

                                    <svg
                                        id="eye-password"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >

                                        <path
                                            d="M2 12C4.4 8 7.8 6 12 6C16.2 6 19.6 8 22 12C19.6 16 16.2 18 12 18C7.8 18 4.4 16 2 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="3"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                    </svg>

                                </button>

                            </div>



                            {{-- DESKTOP PASSWORD NOTE --}}

                            <p
                                class="
                                    hidden
                                    lg:block
                                    mt-[7px]
                                    ml-[7px]
                                    font-serif
                                    text-[10px]
                                    text-[#797979]
                                "
                            >
                                Must contain at least 1 number and 1 special character.
                            </p>

                        </div>



                        {{-- ================================================= --}}
                        {{-- CONFIRM PASSWORD --}}
                        {{-- ================================================= --}}

                        <div class="mt-[15px] lg:mt-[17px]">

                            <label
                                for="password_confirmation"
                                class="
                                    block
                                    mb-[4px]
                                    text-[13px]
                                    leading-[18px]
                                    text-[#17191C]

                                    lg:ml-[7px]
                                    lg:font-serif
                                    lg:text-[12px]
                                    lg:text-[#555555]
                                "
                            >

                                <span class="lg:hidden">
                                    Konfirmasi Kata Sandi
                                </span>

                                <span class="hidden lg:inline">
                                    Confirm Password
                                </span>

                            </label>


                            <div class="relative">

                                {{-- LOCK ICON --}}

                                <div
                                    class="
                                        absolute
                                        left-[11px]
                                        top-1/2
                                        -translate-y-1/2
                                        pointer-events-none

                                        lg:left-[17px]
                                    "
                                >

                                    <svg
                                        width="20"
                                        height="22"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-[#7E858D]"
                                    >

                                        <rect
                                            x="5"
                                            y="10"
                                            width="14"
                                            height="11"
                                            rx="1"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M8 10V7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7V10"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M12 14V17"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>

                                </div>



                                <input
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                    placeholder="Ulangi kata sandi"

                                    class="
                                        block
                                        w-full
                                        h-[49px]

                                        pl-[33px]
                                        pr-[45px]

                                        rounded-[7px]
                                        border
                                        border-[#E9EBEE]
                                        bg-white

                                        text-[14px]
                                        text-[#25282C]

                                        placeholder:text-[#7E838B]

                                        outline-none

                                        focus:border-[#163A5F]
                                        focus:ring-1
                                        focus:ring-[#163A5F]

                                        lg:h-[54px]
                                        lg:pl-[36px]
                                        lg:border-[#C7CBD2]
                                        lg:bg-[#F4F6F9]
                                        lg:font-serif
                                        lg:placeholder:text-transparent
                                    "
                                >


                                {{-- DESKTOP PLACEHOLDER --}}

                                <span
                                    id="desktop-confirm-placeholder"
                                    class="
                                        hidden
                                        lg:block
                                        absolute
                                        left-[36px]
                                        top-1/2
                                        -translate-y-1/2
                                        pointer-events-none
                                        bg-[#F4F6F9]
                                        font-serif
                                        text-[14px]
                                        text-[#747A84]
                                    "
                                >
                                    Confirm your password
                                </span>



                                {{-- EYE BUTTON --}}

                                <button
                                    type="button"
                                    onclick="togglePassword('password_confirmation', 'eye-confirm')"

                                    class="
                                        absolute
                                        right-[9px]
                                        top-1/2
                                        -translate-y-1/2

                                        flex
                                        items-center
                                        justify-center

                                        text-[#7D848B]

                                        lg:right-[16px]
                                    "
                                    aria-label="Show confirmation password"
                                >

                                    <svg
                                        id="eye-confirm"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >

                                        <path
                                            d="M2 12C4.4 8 7.8 6 12 6C16.2 6 19.6 8 22 12C19.6 16 16.2 18 12 18C7.8 18 4.4 16 2 12Z"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="3"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                    </svg>

                                </button>

                            </div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- TERMS --}}
                        {{-- ================================================= --}}

                        <div class="mt-[20px] lg:mt-[23px]">

                            <label
                                for="terms"
                                class="
                                    flex
                                    items-center
                                    cursor-pointer
                                "
                            >

                                <input
                                    id="terms"
                                    name="terms"
                                    type="checkbox"
                                    required

                                    class="
                                        w-[21px]
                                        h-[21px]

                                        rounded-[4px]
                                        border-[#C4CAD1]

                                        text-[#163A5F]

                                        focus:ring-[#163A5F]
                                        focus:ring-offset-0

                                        lg:w-[20px]
                                        lg:h-[20px]
                                        lg:rounded-[4px]
                                        lg:border-[#777E86]
                                    "
                                >


                                <span
                                    class="
                                        ml-[8px]
                                        text-[14px]
                                        text-[#4B4E52]

                                        lg:ml-[8px]
                                        lg:font-serif
                                        lg:text-[12px]
                                        lg:text-[#555555]
                                    "
                                >

                                    <span class="lg:hidden">
                                        Saya menyetujui
                                    </span>

                                    <span class="hidden lg:inline">
                                        I agree to the
                                    </span>


                                    @if (Route::has('terms.show'))

                                        <a
                                            href="{{ route('terms.show') }}"
                                            target="_blank"

                                            class="
                                                text-[#002E53]
                                                font-medium

                                                lg:font-serif
                                                lg:font-bold
                                            "
                                        >

                                            <span class="lg:hidden">
                                                Syarat dan Ketentuan
                                            </span>

                                            <span class="hidden lg:inline">
                                                Syarat dan Ketentuan
                                            </span>

                                        </a>

                                    @else

                                        <span
                                            class="
                                                text-[#002E53]
                                                font-medium

                                                lg:font-bold
                                            "
                                        >

                                            <span class="lg:hidden">
                                                Syarat dan Ketentuan
                                            </span>

                                            <span class="hidden lg:inline">
                                                Syarat dan Ketentuan
                                            </span>

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
                                mt-[30px]

                                w-full
                                h-[48px]

                                rounded-[6px]

                                bg-[#002F52]
                                text-white

                                text-[20px]
                                leading-none
                                font-semibold

                                shadow-[0_3px_7px_rgba(0,30,55,0.20)]

                                transition-colors

                                hover:bg-[#002746]

                                focus:outline-none
                                focus:ring-2
                                focus:ring-[#163A5F]
                                focus:ring-offset-2

                                lg:mt-[31px]
                                lg:h-[52px]
                                lg:rounded-[7px]
                                lg:bg-[#002E52]
                                lg:font-serif
                                lg:text-[14px]
                                lg:font-normal
                                lg:shadow-[0_3px_7px_rgba(0,30,55,0.18)]
                            "
                        >

                            {{-- MOBILE --}}

                            <span class="lg:hidden">
                                Daftar Sekarang
                            </span>


                            {{-- DESKTOP --}}

                            <span
                                class="
                                    hidden
                                    lg:flex
                                    items-center
                                    justify-center
                                    gap-[11px]
                                "
                            >

                                Create Account

                                <svg
                                    width="21"
                                    height="21"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >

                                    <path
                                        d="M5 12H19"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M13 6L19 12L13 18"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />

                                </svg>

                            </span>

                        </button>



                        {{-- ================================================= --}}
                        {{-- GOOGLE DIVIDER --}}
                        {{-- ================================================= --}}

                        <div
                            class="
                                flex
                                items-center
                                my-[28px]

                                lg:my-[27px]
                            "
                        >

                            {{-- LEFT LINE --}}

                            <div
                                class="
                                    flex-1
                                    border-t
                                    border-[#D9DDE2]
                                "
                            ></div>


                            {{-- TEXT --}}

                            <span
                                class="
                                    px-[15px]
                                    text-[12px]
                                    text-[#777B80]

                                    lg:px-[15px]
                                    lg:font-serif
                                    lg:text-[12px]
                                    lg:text-[#777777]
                                "
                            >

                                {{-- MOBILE --}}

                                <span class="lg:hidden">
                                    Atau
                                </span>


                                {{-- DESKTOP --}}

                                <span class="hidden lg:inline">
                                    Atau lanjutkan dengan
                                </span>

                            </span>


                            {{-- RIGHT LINE --}}

                            <div
                                class="
                                    flex-1
                                    border-t
                                    border-[#D9DDE2]
                                "
                            ></div>

                        </div>



                        {{-- ================================================= --}}
                        {{-- GOOGLE BUTTON --}}
                        {{-- ================================================= --}}

                        <a
                            href="{{ route('auth.google.redirect') }}"

                            class="
                                w-full
                                h-[49px]

                                rounded-[8px]

                                bg-white

                                border
                                border-[#E5E7EB]

                                flex
                                items-center
                                justify-center

                                gap-[10px]

                                text-[13px]
                                font-semibold
                                text-[#202124]

                                shadow-[0_2px_7px_rgba(0,0,0,0.03)]

                                transition

                                hover:bg-[#FAFAFA]

                                focus:outline-none
                                focus:ring-2
                                focus:ring-[#163A5F]
                                focus:ring-offset-2

                                lg:h-[47px]

                                lg:rounded-[7px]

                                lg:border-[#C5CAD2]

                                lg:shadow-none

                                lg:font-serif
                                lg:font-normal
                                lg:text-[14px]
                                lg:text-[#222222]
                            "
                        >

                            {{-- ================================================= --}}
                            {{-- GOOGLE ICON --}}
                            {{-- ================================================= --}}

                            <svg
                                width="20"
                                height="20"
                                viewBox="0 0 48 48"
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
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
                                    d="M43.6 20.5H42V20H24v8h11.3c-.8 2.3-2.3 4.2-4.2 5.6l6.2 5.2C36.9 39.2 44 34 44 24c0-1.2-.1-2.4-.4-3.5z"
                                />

                            </svg>


                            {{-- MOBILE TEXT --}}

                            <span class="lg:hidden">
                                Masuk dengan Google
                            </span>


                            {{-- DESKTOP TEXT --}}

                            <span class="hidden lg:inline">
                                Masuk dengan Google
                            </span>

                        </a>



                        {{-- ================================================= --}}
                        {{-- LOGIN LINK --}}
                        {{-- ================================================= --}}

                        <div
                            class="
                                mt-[46px]
                                text-center

                                lg:mt-[33px]
                            "
                        >

                            <span
                                class="
                                    text-[14px]
                                    text-[#56595F]

                                    lg:font-serif
                                    lg:text-[14px]
                                    lg:text-[#555555]
                                "
                            >

                                {{-- MOBILE --}}

                                <span class="lg:hidden">
                                    Sudah punya akun?
                                </span>


                                {{-- DESKTOP --}}

                                <span class="hidden lg:inline">
                                    Sudah punya akun?
                                </span>

                            </span>


                            <a
                                href="{{ route('login') }}"

                                class="
                                    ml-[3px]

                                    text-[14px]
                                    text-[#002E53]

                                    hover:underline

                                    lg:font-serif
                                    lg:font-bold
                                "
                            >

                                {{-- MOBILE --}}

                                <span class="lg:hidden">
                                    Masuk
                                </span>


                                {{-- DESKTOP --}}

                                <span class="hidden lg:inline">
                                    Masuk
                                </span>

                            </a>

                        </div>


                    </form>

                </div>

            </section>

        </div>

    </div>



    {{-- ============================================================= --}}
    {{-- JAVASCRIPT --}}
    {{-- ============================================================= --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const fields = [

                {
                    input: 'name',
                    placeholder: 'desktop-name-placeholder'
                },

                {
                    input: 'email',
                    placeholder: 'desktop-email-placeholder'
                },

                {
                    input: 'password',
                    placeholder: 'desktop-password-placeholder'
                },

                {
                    input: 'password_confirmation',
                    placeholder: 'desktop-confirm-placeholder'
                }

            ];


            fields.forEach(function (field) {

                const input =
                    document.getElementById(field.input);

                const placeholder =
                    document.getElementById(field.placeholder);


                if (!input || !placeholder) {
                    return;
                }


                function updatePlaceholder() {

                    if (input.value.length > 0) {

                        placeholder.style.display = 'none';

                    } else if (window.innerWidth >= 1024) {

                        placeholder.style.display = 'block';

                    } else {

                        placeholder.style.display = 'none';

                    }

                }


                input.addEventListener(
                    'input',
                    updatePlaceholder
                );


                input.addEventListener(
                    'focus',
                    function () {

                        placeholder.style.display = 'none';

                    }
                );


                input.addEventListener(
                    'blur',
                    updatePlaceholder
                );


                updatePlaceholder();

            });

        });



        function togglePassword(inputId, iconId) {

            const input =
                document.getElementById(inputId);

            const icon =
                document.getElementById(iconId);


            if (!input) {
                return;
            }


            if (input.type === 'password') {

                input.type = 'text';

            } else {

                input.type = 'password';

            }

        }

    </script>

</x-guest-layout>