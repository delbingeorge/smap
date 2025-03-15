<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">

    <div>
        <nav class="w-full flex items-center justify-between py-4 border-b-2 px-4 lg:px-12">
            <div>
                <a href="{{ route('student_dashboard') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    {{-- <x-heroicon-o-arrow-small-left class="w-7 h-7" /> --}}
                    <span>Subject updates</span>
                </a>
            </div>
            <a href="{{ route('student-profile') }}">
                <div
                    class="text-primary hover:bg-secondary border-2 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                    {{-- <x-heroicon-o-user class="w-6 h-6" /> --}}
                    <span class="font-medium hidden lg:block">Bruce Wayne</span>
                    {{-- <span class="text-lg">NNM23MC111</span> --}}
                </div>
            </a>
        </nav>
        <div class="px-4 lg:px-12 py-8">
            <div>
                <h1 class="text-3xl font-semibold">Data Structures & Algorithm</h1>
                <h2 class="text-xl tracking-wider font-medium">NNM23S101</h2>
            </div>
        </div>
    </div>
</body>

</html>
