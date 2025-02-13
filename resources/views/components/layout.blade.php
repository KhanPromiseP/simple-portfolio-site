<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ashraful - Full Stack Developer</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Style & Script -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-black text-white/50">
    <div class="bg-black text-white/50 bg-no-repeat bg-contain"
        style="background-image: url({{ asset('images/background.png') }})">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <main class="mt-32 mb-10">
                    <div class="grid gap-6 grid-cols-1 lg:grid-cols-12 items-start lg:gap-8">
                        {{-- Personal Info Card Start --}}
                        <x-card class="lg:sticky top-28 lg:col-span-4 flex flex-col items-start gap-6 mx-auto">
                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div class="flex items-start gap-6 lg:flex-col">
                                    <div class="pt-3 sm:pt-5 text-center lg:pt-0 space-y-4">
                                        <img class="w-10/12 -mt-36 mx-auto aspect-square object-cover rounded-full shadow"
                                            src="{{ asset('images/'.$profile['image']) }}" alt="Profile Picture">
                                        <div class="space-y-3">
                                            <h1 class="text-4xl font-bold text-white">{{ $profile['name'] }}</h1>
                                            <div
                                                class="inline-block text-lg text-accent bg-accent/10 rounded-md px-4 py-1">
                                                {{ $profile['profession'] }}</div>
                                        </div>

                                        {{-- Contact info start --}}
                                        <div class="p-6 rounded-2xl mt-7 bg-zinc-900 border border-zinc-800">
                                            <div class="flex py-2.5 border-b border-zinc-700">
                                                <span
                                                    class="flex items-center justify-center rounded size-10 bg-zinc-950 text-[#f3ff8c] shadow-md"><svg
                                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 320 512" height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">
                                                        </path>
                                                    </svg></span>
                                                <div class="text-left ml-2.5">
                                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]">Phone</p>
                                                    <p class="text-white break-all"><a
                                                            class="hover:text-[#FA5252] duration-300 transition"
                                                            href="tel:+1234567890">{{ $profile['phone'] }}</a></p>
                                                </div>
                                            </div>
                                            <div class="flex py-2.5 border-b border-zinc-700">
                                                <span
                                                    class="flex items-center justify-center rounded size-10 bg-zinc-950 text-[#6fbbbf] shadow-md"><svg
                                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 512 512" height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z">
                                                        </path>
                                                    </svg></span>
                                                <div class="text-left ml-2.5">
                                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]">Email</p>
                                                    <p class="text-white break-all"> <a
                                                            class="hover:text-[#FA5252] duration-300 transition"
                                                            href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a></p>
                                                </div>
                                            </div>
                                            <div class="flex py-2.5">
                                                <span
                                                    class="flex items-center justify-center rounded size-10 bg-zinc-950  text-[#fe7490] shadow-md"><svg
                                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 384 512" height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                        </path>
                                                    </svg></span>
                                                <div class="text-left ml-2.5">
                                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]">Location</p>
                                                    <p class="text-white break-all">{{ $profile['location'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Contact info end --}}

                                        {{-- Social icons start --}}
                                        <div
                                            class="w-full py-2 h-auto flex items-center justify-center text-white/40 gap-2 flex-wrap">
                                            <a target="_blank" href="{{ $profile['facebook_url'] }}"
                                                class="p-2 rounded-lg flex items-center border-2 border-white/10 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-white/10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 71 72" fill="none">
                                                    <path
                                                        d="M46.4233 38.6403L47.7279 30.3588H39.6917V24.9759C39.6917 22.7114 40.8137 20.4987 44.4013 20.4987H48.1063V13.4465C45.9486 13.1028 43.7685 12.9168 41.5834 12.8901C34.9692 12.8901 30.651 16.8626 30.651 24.0442V30.3588H23.3193V38.6403H30.651V58.671H39.6917V38.6403H46.4233Z"
                                                        fill="#ffffff" />
                                                </svg>
                                            </a>
                                            <a target="_blank" href="{{ $profile['instagram_url'] }}"
                                                class="p-2 rounded-lg flex items-center border-2 border-white/10 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-white/10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 71 72" fill="none">
                                                    <path
                                                        d="M27.3762 35.7808C27.3762 31.1786 31.1083 27.4468 35.7132 27.4468C40.3182 27.4468 44.0522 31.1786 44.0522 35.7808C44.0522 40.383 40.3182 44.1148 35.7132 44.1148C31.1083 44.1148 27.3762 40.383 27.3762 35.7808ZM22.8683 35.7808C22.8683 42.8708 28.619 48.618 35.7132 48.618C42.8075 48.618 48.5581 42.8708 48.5581 35.7808C48.5581 28.6908 42.8075 22.9436 35.7132 22.9436C28.619 22.9436 22.8683 28.6908 22.8683 35.7808ZM46.0648 22.4346C46.0646 23.0279 46.2404 23.608 46.5701 24.1015C46.8997 24.595 47.3684 24.9797 47.9168 25.2069C48.4652 25.4342 49.0688 25.4939 49.6511 25.3784C50.2334 25.2628 50.7684 24.9773 51.1884 24.5579C51.6084 24.1385 51.8945 23.6041 52.0105 23.0222C52.1266 22.4403 52.0674 21.8371 51.8404 21.2888C51.6134 20.7406 51.2289 20.2719 50.7354 19.942C50.2418 19.6122 49.6615 19.436 49.0679 19.4358H49.0667C48.2708 19.4361 47.5077 19.7522 46.9449 20.3144C46.3821 20.8767 46.0655 21.6392 46.0648 22.4346ZM25.6072 56.1302C23.1683 56.0192 21.8427 55.6132 20.9618 55.2702C19.7939 54.8158 18.9606 54.2746 18.0845 53.4002C17.2083 52.5258 16.666 51.6938 16.2133 50.5266C15.8699 49.6466 15.4637 48.3214 15.3528 45.884C15.2316 43.2488 15.2073 42.4572 15.2073 35.781C15.2073 29.1048 15.2336 28.3154 15.3528 25.678C15.4639 23.2406 15.8731 21.918 16.2133 21.0354C16.668 19.8682 17.2095 19.0354 18.0845 18.1598C18.9594 17.2842 19.7919 16.7422 20.9618 16.2898C21.8423 15.9466 23.1683 15.5406 25.6072 15.4298C28.244 15.3086 29.036 15.2844 35.7132 15.2844C42.3904 15.2844 43.1833 15.3106 45.8223 15.4298C48.2612 15.5408 49.5846 15.9498 50.4677 16.2898C51.6356 16.7422 52.4689 17.2854 53.345 18.1598C54.2211 19.0342 54.7615 19.8682 55.2161 21.0354C55.5595 21.9154 55.9658 23.2406 56.0767 25.678C56.1979 28.3154 56.2221 29.1048 56.2221 35.781C56.2221 42.4572 56.1979 43.2466 56.0767 45.884C55.9656 48.3214 55.5573 49.6462 55.2161 50.5266C54.7615 51.6938 54.2199 52.5266 53.345 53.4002C52.4701 54.2738 51.6356 54.8158 50.4677 55.2702C49.5872 55.6134 48.2612 56.0194 45.8223 56.1302C43.1855 56.2514 42.3934 56.2756 35.7132 56.2756C29.033 56.2756 28.2432 56.2514 25.6072 56.1302ZM25.4001 10.9322C22.7371 11.0534 20.9174 11.4754 19.3282 12.0934C17.6824 12.7316 16.2892 13.5878 14.897 14.977C13.5047 16.3662 12.6502 17.7608 12.0116 19.4056C11.3933 20.9948 10.971 22.8124 10.8497 25.4738C10.7265 28.1394 10.6982 28.9916 10.6982 35.7808C10.6982 42.57 10.7265 43.4222 10.8497 46.0878C10.971 48.7494 11.3933 50.5668 12.0116 52.156C12.6502 53.7998 13.5049 55.196 14.897 56.5846C16.289 57.9732 17.6824 58.8282 19.3282 59.4682C20.9204 60.0862 22.7371 60.5082 25.4001 60.6294C28.0687 60.7506 28.92 60.7808 35.7132 60.7808C42.5065 60.7808 43.3592 60.7526 46.0264 60.6294C48.6896 60.5082 50.5081 60.0862 52.0983 59.4682C53.7431 58.8282 55.1373 57.9738 56.5295 56.5846C57.9218 55.1954 58.7745 53.7998 59.4149 52.156C60.0332 50.5668 60.4575 48.7492 60.5768 46.0878C60.698 43.4202 60.7262 42.57 60.7262 35.7808C60.7262 28.9916 60.698 28.1394 60.5768 25.4738C60.4555 22.8122 60.0332 20.9938 59.4149 19.4056C58.7745 17.7618 57.9196 16.3684 56.5295 14.977C55.1395 13.5856 53.7431 12.7316 52.1003 12.0934C50.5081 11.4754 48.6894 11.0514 46.0284 10.9322C43.3612 10.811 42.5085 10.7808 35.7152 10.7808C28.922 10.7808 28.0687 10.809 25.4001 10.9322Z"
                                                        fill="#ffffff" />
                                                </svg></a>
                                            <a target="_blank" href="{{ $profile['twitter_url'] }}"
                                                class="p-2 rounded-lg flex items-center border-2 border-white/10 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-white/10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 72 72" fill="none">
                                                    <path
                                                        d="M40.7568 32.1716L59.3704 11H54.9596L38.7974 29.383L25.8887 11H11L30.5205 38.7983L11 61H15.4111L32.4788 41.5869L46.1113 61H61L40.7557 32.1716H40.7568ZM34.7152 39.0433L32.7374 36.2752L17.0005 14.2492H23.7756L36.4755 32.0249L38.4533 34.7929L54.9617 57.8986H48.1865L34.7152 39.0443V39.0433Z"
                                                        fill="#ffffff" />
                                                </svg></a>
                                            <a target="_blank" href="{{ $profile['linkedin_url'] }}"
                                                class="p-2 rounded-lg flex items-center border-2 border-white/10 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-white/10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 72 72" fill="none">
                                                    <path
                                                        d="M24.7612 55.999V28.3354H15.5433V55.999H24.7621H24.7612ZM20.1542 24.5591C23.3679 24.5591 25.3687 22.4348 25.3687 19.7801C25.3086 17.065 23.3679 15 20.2153 15C17.0605 15 15 17.065 15 19.7799C15 22.4346 17.0001 24.5588 20.0938 24.5588H20.1534L20.1542 24.5591ZM29.8633 55.999H39.0805V40.5521C39.0805 39.7264 39.1406 38.8985 39.3841 38.3088C40.0502 36.6562 41.5668 34.9455 44.1138 34.9455C47.4484 34.9455 48.7831 37.4821 48.7831 41.2014V55.999H58V40.1376C58 31.6408 53.4532 27.6869 47.3887 27.6869C42.4167 27.6869 40.233 30.4589 39.0198 32.347H39.0812V28.3364H29.8638C29.9841 30.9316 29.8631 56 29.8631 56L29.8633 55.999Z"
                                                        fill="#ffffff" />
                                                </svg></a>
                                        </div>
                                        {{-- Social icons end --}}

                                        <div><a target="_blank" href="{{ $profile['cv_url'] }}"
                                                class="bg-accent text-black font-medium px-6 py-2 rounded">Download
                                                CV</a></div>
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        {{-- Personal Info Card end --}}

                        {{-- Content Area Start --}}
                        <div class="flex flex-col items-center lg:col-span-8 space-y-8">
                            {{-- Navigation start --}}
                            <x-card class="inline-flex gap-4 items-center p-4">
                                <a href="{{ route('home') }}"
                                    class="{{ request()->routeIs('home') ? 'bg-accent/10 text-accent/70 border-accent/20' : 'bg-zinc-900 text-white/70 border-zinc-800' }} border-2 px-6 py-2 rounded">Home</a>
                                <a href="{{ route('experience') }}"
                                    class="{{ request()->routeIs('experience') ? 'bg-accent/10 text-accent/70 border-accent/20' : 'bg-zinc-900 text-white/70 border-zinc-800' }} border-2 px-6 py-2 rounded">Experience</a>
                                <a href="{{ route('project') }}"
                                    class="{{ request()->routeIs('project') || request()->routeIs('project.show') ? 'bg-accent/10 text-accent/70 border-accent/20' : 'bg-zinc-900 text-white/70 border-zinc-800' }} border-2 px-6 py-2 rounded">Portfolio</a>
                            </x-card>
                            {{-- Navigation end --}}

                            {{-- Page content start --}}
                            <x-card class="w-full space-y-12">
                                {{ $slot }}

                                <footer class="bg-blacdk text-center text-sm text-white/70">
                                    Copyright 2024
                                </footer>
                            </x-card>
                            {{-- Page content end --}}
                        </div>
                        {{-- Content Area End --}}
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
