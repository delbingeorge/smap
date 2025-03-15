<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>

<body class="font-poppy">
    <div class="flex lg:flex-row flex-col">
        <div class="w-full lg:w-2/4 min-h-screen relative flex items-end justify-start overflow-hidden">
            <div>
                <img id="zoomImage" src="images/background.png"
                    class="w-full top-0 left-0 h-full object-cover absolute -z-20" alt="">
                <div
                    class="left-0 top-0 h-full w-full bg-gradient-to-t from-black/40 via-black/10 to-transparent absolute -z-10">
                </div>
            </div>
            <div class="pb-12 text-light px-6 lg:px-12">
                <img src="/images/logo.png" id="zoomLogo" class="w-32 h-full invert brightness-0 pb-2" alt="">
                <div class="-space-y-1 mb-3">
                    <h2 class="font-medium text-xl">Welcome to</h2>
                    <h1 class="font-medium text-4xl">Student Mentorship App</h1>
                </div>
                <p class="font-semibold mb-3">Automated Feedback Collection and Academic Performance Analysis</p>
                <p class=" mb-3">To develop NITTE as a Centre of Excellence imparting quality education, generating
                    competent, skilled manpower to face the scientific and social challenges, with a high degree of
                    credibility, integrity, ethical standards and social concern.</p>
                <div class="">
                    <a href="#login-screen" class="font-mono lg:hidden flex items-center space-x-2">
                        <span>Login to your account
                        </span>
                        {{-- <x-heroicon-m-chevron-right class="h-5 w-5" /> --}}
                        {{-- <x-heroicon-o-arrow-right /> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h306.7L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="min-h-screen flex-col w-full lg:w-2/4 flex items-center justify-center">
            <form id="login-screen" class="flex items-center flex-col w-[95%] lg:w-full justify-center space-y-6"
                method="post" action="{{ route('student_staff_login') }}">
                @csrf
                <div class="flex flex-col items-center -space-y-1 lg:-space-y-3 justify-center">
                    <h2 class="text-[1rem] flex justify-center items-center space-x-2 lg:text-[1.3rem]">
                        {{-- <x-heroicon-s-users /> --}}
                        <h1 class="text-[2rem] lg:text-[2rem] font-medium">
                            Student & Staff Login
                        </h1>
                    </h2>
                </div>
                <div class="flex flex-col w-[85%] lg:w-3/4">
                    <label for="password" class="label animate-shakes">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="12" cy="6" r="4" />
                                <path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                            </g>
                        </svg>
                        <span>
                            Email Address
                        </span>
                    </label>
                    <input type="email" name="email" class="input-fields" required placeholder="nnm2xmcxxx@nmamit.in">
                </div>
                <div class="flex flex-col w-[85%] lg:w-3/4">
                    <label for="password" class="label animate-shakes">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25" />
                        </svg>
                        <span>
                            Password
                        </span>
                    </label>
                    <input type="password" name="password" class="input-fields" required
                        placeholder="*****************">
                </div>
                <input type="submit"
                    class="text-[1.35rem] bg-primary w-[85%] lg:w-3/4 text-light py-3 px-24 rounded-lg hover:bg-primary/90 cursor-pointer duration-300 font-medium"
                    value="Login">
            </form>
            <div>
                @if (session('invalid_student_credential'))
                    <div id="error-message" class="absolute z-40 bg-red-100 rounded-xl pr-24 pl-5 py-3 bottom-2 right-2">
                        <div class="flex items-center justify-center space-x-2 text-red-500">
                            {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                            <h1 class="">
                                {{ session('invalid_student_credential') }}
                            </h1>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        window.addEventListener("scroll", function () {
            var scrollValue = window.scrollY;
            var image = document.getElementById("zoomImage");

            var scaleValue = 1 + scrollValue / 1000;
            image.style.transform = "scale(" + scaleValue + ")";
        });

        setTimeout(function () {
            document.getElementById('error-message').style.display = 'none';
        }, 5000);
    </script>

</body>

</html>