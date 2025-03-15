<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="">
        <nav class="w-full flex items-center justify-between py-4 border-b-2 px-4 lg:px-12">
            <div class="-space-y-3">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
            </div>
            
            <a href="{{ route('student-profile') }}">
                <div
                    class="text-primary hover:bg-secondary border-2 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="6" r="4" />
                            <path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                        </g>
                    </svg>
                    <span class="font-medium hidden lg:block">{{ session('student_name') }}</span>
                    {{-- <span class="text-lg">{{ session('user_id') }}</span> --}}
                </div>
            </a>
        </nav>
        <div class="px-4 lg:px-12 pt-8">
            <h1 class="text-2xl font-medium mb-6">Latest Updates</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 lg:gap-6 w-full">
                <!-- <a href="#" {{-- href="{{ route('feedback-form') }}" --}}
                    class="flex items-center justify-start cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    {{-- <x-heroicon-o-clock
                        class="w-7 h-7 group-hover:rotate-[30deg] group-hover:text-[#ffd000] duration-300" /> --}}
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-7 h-7 group-hover:rotate-[30deg] group-hover:text-[#ffd000] duration-300"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M464 256a208 208 0 1 1-416 0a208 208 0 1 1 416 0M0 256a256 256 0 1 0 512 0a256 256 0 1 0-512 0m232-136v136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24" />
                    </svg>
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Complete your profile!</h1>
                </a> -->
                <a href="{{ route('feedback-form') }}"
                    class="flex items-center justify-start cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300"
                    style="{{ session('feedback_filled')=="true"?'pointer-events:none; opacity:0.6':'' }}">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-7 h-7 group-hover:rotate-[30deg] group-hover:text-[#ffd000] duration-300"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M464 256a208 208 0 1 1-416 0a208 208 0 1 1 416 0M0 256a256 256 0 1 0 512 0a256 256 0 1 0-512 0m232-136v136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24" />
                    </svg>
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Performance Feedback form</h1>
                </a>
                <a href="{{ route('first-mse-form') }}"
                    class="flex items-center justify-start group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300"
                    style="{{ session('mse_filled')=="true"?'pointer-events:none; opacity:0.6':'' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M144 144v48h160v-48c0-44.2-35.8-80-80-80s-80 35.8-80 80m-64 48v-48C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64v192c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64z" />
                    </svg>
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Update MSE Marks</h1>
                </a>
                <!-- <a href=""
                    class="flex items-center justify-start group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M144 144v48h160v-48c0-44.2-35.8-80-80-80s-80 35.8-80 80m-64 48v-48C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64v192c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64z" />
                    </svg>
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Update second MSE Marks</h1>
                </a> -->

                <!-- <div
                    class="flex items-center justify-start cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    {{-- <x-tni-tick-circle class="w-7 h-7 text-green-500 duration-300" /> --}}
                    <h1 class="font-medium text-xl text-green-500">Complete your profile!</h1>
                </div> -->
            </div>
        </div>
        <!-- <div class="px-4 lg:px-12 py-8">
            <a href="" class="text-2xl font-medium">Subject Updates</a>
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-3 lg:gap-6 w-full pt-4">
                <div
                    class="flex items-center justify-between border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-4 rounded-lg duration-300">
                    <div class="flex items-center justify-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 duration-300" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                d="M225.29 165.93C216.61 151 212 129.57 212 104a84 84 0 0 0-168 0c0 25.58-4.59 47-13.27 61.93a20.08 20.08 0 0 0-.07 20.07A19.77 19.77 0 0 0 48 196h36.18a44 44 0 0 0 87.64 0H208a19.77 19.77 0 0 0 17.31-10a20.08 20.08 0 0 0-.02-20.07M128 212a20 20 0 0 1-19.6-16h39.2a20 20 0 0 1-19.6 16m-73.34-40C63.51 154 68 131.14 68 104a60 60 0 0 1 120 0c0 27.13 4.48 50 13.33 68Z" />
                        </svg>
                        <h1 class="font-medium text-xl">DSA Assignment 5</h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2M7 11l5 5l5-5m-5-7v12" />
                    </svg>
                </div>
                <div
                    class="flex items-center justify-between border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-4 rounded-lg duration-300">
                    <div class="flex items-center justify-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 duration-300" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                d="M225.29 165.93C216.61 151 212 129.57 212 104a84 84 0 0 0-168 0c0 25.58-4.59 47-13.27 61.93a20.08 20.08 0 0 0-.07 20.07A19.77 19.77 0 0 0 48 196h36.18a44 44 0 0 0 87.64 0H208a19.77 19.77 0 0 0 17.31-10a20.08 20.08 0 0 0-.02-20.07M128 212a20 20 0 0 1-19.6-16h39.2a20 20 0 0 1-19.6 16m-73.34-40C63.51 154 68 131.14 68 104a60 60 0 0 1 120 0c0 27.13 4.48 50 13.33 68Z" />
                        </svg>
                        <h1 class="font-medium text-xl">ADBS Assignment 4</h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2M7 11l5 5l5-5m-5-7v12" />
                    </svg>
                </div>
                <div
                    class="flex items-center justify-between border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-4 rounded-lg duration-300">
                    <div class="flex items-center justify-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 duration-300" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                d="M225.29 165.93C216.61 151 212 129.57 212 104a84 84 0 0 0-168 0c0 25.58-4.59 47-13.27 61.93a20.08 20.08 0 0 0-.07 20.07A19.77 19.77 0 0 0 48 196h36.18a44 44 0 0 0 87.64 0H208a19.77 19.77 0 0 0 17.31-10a20.08 20.08 0 0 0-.02-20.07M128 212a20 20 0 0 1-19.6-16h39.2a20 20 0 0 1-19.6 16m-73.34-40C63.51 154 68 131.14 68 104a60 60 0 0 1 120 0c0 27.13 4.48 50 13.33 68Z" />
                        </svg>
                        <h1 class="font-medium text-xl">SET Task 1</h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2M7 11l5 5l5-5m-5-7v12" />
                    </svg>
                </div>
            </div>
        </div> -->
        {{-- <div class="px-4 lg:px-12 py-8">
            <h1 class="text-2xl font-medium mb-6">Subject Updates</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 lg:gap-6 w-full">
                <a href=""
                    class="flex items-center justify-start border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    <x-feathericon-book
                        class="w-7 h-7 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300" />
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Data Structure & Algorithm</h1>
                </a>
                <a href=""
                    class="flex items-center justify-start border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    <x-feathericon-book
                        class="w-7 h-7 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300" />
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Advanced DB Management System</h1>
                </a>
                <a href=""
                    class="flex items-center justify-start border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    <x-feathericon-book
                        class="w-7 h-7 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300" />
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Software Engineering & Technology</h1>
                </a>
                <a href=""
                    class="flex items-center justify-start border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    <x-feathericon-book
                        class="w-7 h-7 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300" />
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Mathamatical Fundamentals</h1>
                </a>
                <a href=""
                    class="flex items-center justify-start border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    <x-feathericon-book
                        class="w-7 h-7 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300" />
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Computer Oriented Architecture</h1>
                </a>
                <a href=""
                    class="flex items-center justify-start border-[3px] border-secondary hover:border-[#e5e7eb] cursor-pointer group bg-secondary space-x-4 px-6 py-7 rounded-lg duration-300">
                    <x-feathericon-book
                        class="w-7 h-7 group-hover:scale-[1.1] group-hover:text-blue-500 duration-300" />
                    <h1 class="font-medium text-xl group-hover:text-dark/80">Research Methadology</h1>
                </a>
            </div>
        </div> --}}
        <div>

            @if (session('success'))
                <div id="message" class="absolute z-40 bg-green-500 rounded-xl pr-24 pl-5 py-3 bottom-0 right-0">
                    <div class="flex items-center justify-center space-x-2 text-white">
                        {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                        <h1 class="">
                            {{ session('success') }}
                        </h1>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('message').style.display = 'none';
        }, 5000);
    </script>
</body>

</html>
