<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="relative px-0 lg:px-12">
        <nav class=" w-full flex items-center justify-between px-4 lg:px-0 py-4">
            <div class="-space-y-3">
                <a href="{{ route('teacher_dashboard') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20 11H7.83l5.59-5.59L12 4l-8 8l8 8l1.41-1.41L7.83 13H20z" />
                    </svg> 
                    <span>
                        Edit Profile
                    </span>
                </a>
            </div>
        </nav>
        <img src="images/background.png" alt="Cover Photo" class="w-full rounded-none lg:rounded-xl h-64 object-cover">
        <div class="mx-3 lg:mx-8 -mt-12 lg:-mt-20 relative z-10 flex items-end">
            <div class="relative">
                <img src="https://i.pinimg.com/originals/dd/2c/d9/dd2cd97e17455c5612de4ef815734ea8.jpg"
                    {{-- src="https://images.unsplash.com/photo-1554780336-390462301acf?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" --}} alt="Profile Picture"
                    class="w-28 lg:w-40 h-28 lg:h-40 object-cover border-4 rounded-2xl">
                <div class="relative">
                    <input type="file" id="fileInput" class="hidden" />
                    <label for="fileInput"
                        class="p-2 lg:p-3 bottom-3 right-3 bg-light cursor-pointer text-primary hover:bg-secondary absolute z-10 rounded-full">
                        {{-- <x-heroicon-s-camera class="w-5 lg:w-6 h-5 lg:h-6" /> --}}
                    </label>
                </div>

            </div>
            <div class="flex items-end justify-between w-[60%] md:w-[90%]">
                <div class="mx-3 -space-y-2 lg:space-y-0 lg:mx-4 mt-4">
                    <h1 class="text-2xl lg:text-3xl font-semibold">Bruce Wayne(Teacher)</h1>
                    <p class="text-lg lg:text-xl text-gray-600">nnm23mc000@nmamit.in</p>
                </div>
            </div>
        </div>
        Is edit teacher profile required??
</body>

</html>
