<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="relative px-0 lg:px-12">
        <nav class="w-full flex items-center justify-between px-4 lg:px-0 py-4 sticky top-0 z-50 bg-white">
            <div>
                <a href="{{ route('student_dashboard') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20 11H7.83l5.59-5.59L12 4l-8 8l8 8l1.41-1.41L7.83 13H20z" />
                    </svg>
                    <span>Profile</span>
                </a>
            </div>
            <div id="toggleSidebar" class="cursor-pointer block lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5" />
                </svg>
            </div>
        </nav>
        <img src="images/background.png" alt="Cover Photo" class="w-full rounded-none lg:rounded-xl h-64 object-cover">
        <div class="mx-3 lg:mx-8 -mt-12 lg:-mt-20 relative z-10 flex items-end ">
            <div class=" overflow-hidden ">
                <img
                    src="https://png.pngtree.com/png-vector/20191110/ourmid/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg"
                    alt="Profile Picture" class="w-28 lg:w-40 h-28 lg:h-40 object-cover border-4 rounded-2xl">
            </div>
            <div class="flex items-end justify-between w-[60%] md:w-[90%]">
                <div class="mx-2 -space-y-2 lg:space-y-0 lg:mx-4 mt-4">
                    <h1 class="text-2xl lg:text-3xl font-semibold">{{ $data->fullname }}</h1>
                    <p class="text-lg lg:text-xl text-gray-600">{{ $data->student_id }}</p>
                </div>
                <div class="hidden lg:flex flex-row space-x-2">
                    <a href="{{ route('edit-profile') }}"
                        class="text-primary hover:bg-secondary group border-2 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                        <p class="text-lg lg:text-sm text-gray-600">EDIT</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:scale-[1.08] duration-300"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M10 4H7.2c-1.12 0-1.68 0-2.108.218a1.999 1.999 0 0 0-.874.874C4 5.52 4 6.08 4 7.2v9.6c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h9.606c1.118 0 1.677 0 2.104-.218c.377-.192.683-.498.875-.874c.218-.428.218-.987.218-2.105V14m-4-9l-6 6v3h3l6-6m-3-3l3-3l3 3l-3 3m-3-3l3 3" />
                        </svg>
                        {{-- <span class="font-medium">Edit Profile</span> --}}
                    </a>
                    <a href="{{ route('logout') }}"
                        class="text-primary hover:bg-secondary border-2 group hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                        <p class="text-lg lg:text-sm text-gray-600">LOGOUT</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:translate-x-1 duration-300"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z" />
                        </svg>
                        {{-- <span class="font-medium">Edit Profile</span> --}}
                    </a>
                </div>
            </div>
        </div>
        <div class="space-y-3 mt-4 lg:mt-8 px-4 lg:px-0 pb-8">
            <div class="space-y-1">
                <h1 class="font-semibold tracking-widest text-black/70">ABOUT ME</h1>
                <p class="text-lg">{{ $data->about }}</p>
            </div>
            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">INTERESTS & SKILLS</h1>
                <div class="flex flex-wrap gap-2">
                    @foreach (explode(', ', $data->skills) as $skill)
                        <span class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>{{ $skill }}</span>
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">PROJECTS{{ session('pending_feedback_number') }}</h1>
                <div class="flex flex-wrap gap-2">
                    @foreach (explode(', ', $data->projects) as $project)
                        <span class="text-md flex items-center justify-center space-x-3 bg-black/10 py-2 px-4 rounded-lg text-center">
                        <span>{{ $project }}</span>
                        </span>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="sidebar"
            class="fixed flex items-center justify-center space-y-8 flex-col inset-y-0 left-0 z-50 w-full bg-dark/80 text-white p-4 transform -translate-x-full transition-transform ease-in-out">
            <a href="{{ route('edit-profile') }}" class="flex text-xl space-x-3">
                {{-- <x-heroicon-m-pencil-square class="w-6 h-6 group-hover:scale-[1.08] duration-300" /> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:scale-[1.08] duration-300"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 4H7.2c-1.12 0-1.68 0-2.108.218a1.999 1.999 0 0 0-.874.874C4 5.52 4 6.08 4 7.2v9.6c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h9.606c1.118 0 1.677 0 2.104-.218c.377-.192.683-.498.875-.874c.218-.428.218-.987.218-2.105V14m-4-9l-6 6v3h3l6-6m-3-3l3-3l3 3l-3 3m-3-3l3 3" />
                </svg>
                <span class="font-medium">Edit Profile</span>
            </a>
            <a href="{{ route('logout') }}" class="flex text-xl space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:translate-x-1 duration-300"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z" />
                </svg>
                <span class="font-medium">Log Out</span>
            </a>
            <div id="closeSidebar" class="flex text-xl space-x-3 cursor-pointer">
                {{-- <x-heroicon-m-x-mark class="w-6 h-6 group-hover:translate-x-1 duration-300" /> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:translate-x-1 duration-300" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg>
                {{-- <span class="font-medium">Close</span> --}}
            </div>
            
        </div>

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
        <script>
            const sidebar = document.getElementById('sidebar');
            const closeSidebar = document.getElementById('closeSidebar');
            const toggleSidebar = document.getElementById('toggleSidebar');

            toggleSidebar.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
            });

            closeSidebar.addEventListener('click', function() {
                sidebar.classList.add('-translate-x-full');
            });

            setTimeout(function() {
                document.getElementById('message').style.display = 'none';
            }, 5000);
        </script>
</body>

</html>
