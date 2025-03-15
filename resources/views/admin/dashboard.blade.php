<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="">
        <nav class="w-full flex items-center justify-between py-4 shadow-md px-12">
            <div class="-space-y-3">
                <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
            </div>
            <div class="flex items-center justify-center space-x-5">
                {{-- <div
                    class="text-primary border-2 hover:bg-secondary duration-200 cursor-pointer flex items-center justify-center rounded-full p-3">
                    <x-heroicon-o-user class="w-6 h-6" />
                    <span class="text-lg">NNM23MC111</span>
                </div> --}}
                <a href="{{ route('logout') }}"
                    class="text-primary hover:bg-secondary border-2 group hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-3 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:translate-x-1 duration-300"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z" />
                    </svg>
                </a>
            </div>
        </nav>
        <div class="px-12 py-8">
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <h1 class="text-2xl font-medium">
                    Add new facutly
                </h1>
                <a href="{{ route('add-faculty') }}">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-primary hover:bg-primary/70 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Add</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <div class="flex-col items-center justify-start">
                    <h1 class="text-2xl font-medium">
                        Go to next semester
                    </h1>
                    <h6 class="text-xs font-medium text-red-700">*please confirm before proceeding</h6>
                </div>
                <a href="{{ route('increment_semester') }}" onclick="return confirmAction()">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-primary hover:bg-primary/70 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Proceed</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <div class="flex-col items-center justify-start">
                    <h1 class="text-2xl font-medium">
                        Activate Feedback Form
                    </h1>
                    <h6 class="text-xs font-medium text-red-700">*please confirm before proceeding</h6>
                </div>
                <a href="{{ route('activate_feedback_form') }}" onclick="return confirmAction()">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-primary hover:bg-primary/70 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Proceed</span>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-between mb-6 bg-secondary py-4 px-2 rounded-lg">
                <div class="flex-col items-center justify-start">
                    <h1 class="text-2xl font-medium">
                        Activate MSE Form
                    </h1>
                    <h6 class="text-xs font-medium text-red-700">*please confirm before proceeding</h6>
                </div>
                <a href="{{ route('activate_mse_form') }}" onclick="return confirmAction()">
                    <div
                        class="flex items-center justify-center text-white rounded-md bg-primary hover:bg-primary/70 duration-300 py-2 px-12">
                        {{-- <x-feathericon-plus class="w-6 h-6" /> --}}
                        <span class="text-xl">Proceed</span>
                    </div>
                </a>
            </div>
            <div>
                <div class="flex items-center space-x-1 pb-3">
                    {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                    <h1 class="text-xl font-medium">All Facutlies</h1>
                    <div class="flex items-center gap-6">
                        <form method="get" action="{{ route('view-by-semester') }}">
                            <input class="text-black border-2 rounded-md border-black p-2" type="search" name="id" id=""
                                placeholder="Search Faculty by ID">
                            <input class="text-black border-2 rounded-md bg-slate-300 border-black p-2" type="submit"
                                value="Search">
                            <input type="hidden" name="role" value="admin">
                        </form>
                    </div>
                </div>
                <div class="">
                    @if ($teachers != null)
                        <div class="grid grid-cols-5 gap-x-0 gap-y-0 border-b-2 border-black/20 bg-secondary p-4">
                            <h1 class="text-lg font-medium">Emp ID</h1>
                            <h1 class="text-lg font-medium">Faculty Name</h1>
                            <h1 class="text-lg font-medium">Email</h1>
                            <h1 class="text-lg font-medium">Contact</h1>
                            <h1 class="text-lg font-medium">Actions</h1>
                        </div>
                        @foreach ($teachers as $teacher)
                            <div class="grid grid-cols-5 gap-x-0 gap-y-0 py-4 px-3 border-b-2 border-black/10">
                                <h1 class="text-lg">{{ $teacher->emp_id }}</h1>
                                <h1 class="text-lg">{{ $teacher->fullname }}</h1>
                                <h1 class="text-lg"><a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a></h1>
                                <h1 class="text-lg"><a href="tel:{{ $teacher->contact }}">{{ $teacher->contact }}</a></h1>
                                <div class="flex flex-row gap-x-6">
                                    <a href="{{ route('edit-faculty', ['teacher_id' => $teacher->emp_id]) }}">
                                        <svg width="23" height="23" viewBox="-0.24 -0.24 24.48 24.48" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.096">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.7566 2.62145C16.5852 0.792851 19.55 0.792851 21.3786 2.62145C23.2072 4.45005 23.2072 7.41479 21.3786 9.24339L11.8933 18.7287C11.3514 19.2706 11.0323 19.5897 10.6774 19.8665C10.2592 20.1927 9.80655 20.4725 9.32766 20.7007C8.92136 20.8943 8.49334 21.037 7.76623 21.2793L4.43511 22.3897L3.63303 22.6571C2.98247 22.8739 2.26522 22.7046 1.78032 22.2197C1.29542 21.7348 1.1261 21.0175 1.34296 20.367L2.72068 16.2338C2.96303 15.5067 3.10568 15.0787 3.29932 14.6724C3.52755 14.1935 3.80727 13.7409 4.13354 13.3226C4.41035 12.9677 4.72939 12.6487 5.27137 12.1067L14.7566 2.62145ZM4.40051 20.8201L7.24203 19.8729C8.03314 19.6092 8.36927 19.4958 8.68233 19.3466C9.06287 19.1653 9.42252 18.943 9.75492 18.6837C10.0284 18.4704 10.2801 18.2205 10.8698 17.6308L18.4393 10.0614C17.6506 9.78321 16.6346 9.26763 15.6835 8.31651C14.7324 7.36538 14.2168 6.34939 13.9387 5.56075L6.36917 13.1302C5.77951 13.7199 5.52959 13.9716 5.3163 14.2451C5.05704 14.5775 4.83476 14.9371 4.65341 15.3177C4.50421 15.6307 4.3908 15.9669 4.12709 16.758L3.17992 19.5995L4.40051 20.8201ZM15.1554 4.34404C15.1896 4.519 15.2474 4.75684 15.3438 5.03487C15.561 5.66083 15.9712 6.48288 16.7442 7.25585C17.5171 8.02881 18.3392 8.43903 18.9651 8.6562C19.2432 8.75266 19.481 8.81046 19.656 8.84466L20.3179 8.18272C21.5607 6.93991 21.5607 4.92492 20.3179 3.68211C19.0751 2.4393 17.0601 2.4393 15.8173 3.68211L15.1554 4.34404Z"
                                                    fill="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>



                                    <form action="{{ route('delete_faculty') }}" method="post"
                                        onsubmit="return confirmDelete()">
                                        @csrf
                                        <input type="hidden" name="teacher_id" value="{{ $teacher->emp_id }}">
                                        <button type="submit" class="hover:cursor-pointer" value="delete">
                                            <svg width='24' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M20.5001 6H3.5" stroke="#000000" stroke-width="1.5"
                                                        stroke-linecap="round"></path>
                                                    <path
                                                        d="M18.8332 8.5L18.3732 15.3991C18.1962 18.054 18.1077 19.3815 17.2427 20.1907C16.3777 21 15.0473 21 12.3865 21H11.6132C8.95235 21 7.62195 21 6.75694 20.1907C5.89194 19.3815 5.80344 18.054 5.62644 15.3991L5.1665 8.5"
                                                        stroke="#000000" stroke-width="1.5" stroke-linecap="round">
                                                    </path>
                                                    <path d="M9.5 11L10 16" stroke="#000000" stroke-width="1.5"
                                                        stroke-linecap="round"></path>
                                                    <path d="M14.5 11L14 16" stroke="#000000" stroke-width="1.5"
                                                        stroke-linecap="round"></path>
                                                    <path
                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                        stroke="#000000" stroke-width="1.5"></path>
                                                </g>
                                            </svg>

                                        </button>
                                    </form>
                                    <a
                                        href="{{ route('view-mentees', ['teacher_id' => $teacher->emp_id, 'teacher_name' => $teacher->fullname]) }}">
                                        <svg width='23' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M8 6L21 6.00078M8 12L21 12.0008M8 18L21 18.0007M3 6.5H4V5.5H3V6.5ZM3 12.5H4V11.5H3V12.5ZM3 18.5H4V17.5H3V18.5Z"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="grid grid-cols-5 gap-x-0 gap-y-0 border-b-2 border-black/20 bg-secondary p-4">
                            <h1 class="text-lg font-medium">Faculty not found</h1>
                        </div>
                    @endif
                </div>
            </div>
            <div>
                @if (session('success'))
                    <div id="message" class="absolute z-40 bg-primary rounded-xl pr-24 pl-5 py-3 bottom-0 right-0">
                        <div class="flex items-center justify-center space-x-2 text-white">
                            {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                            <h1 class="">
                                {{ session('success') }}
                            </h1>
                        </div>
                    </div>
                @endif
                @if (session('error'))
                    <div id="message" class="absolute z-40 bg-red-100 rounded-xl pr-24 pl-5 py-3 bottom-0 right-0">
                        <div class="flex items-center justify-center space-x-2 text-red-500">
                            {{-- <x-heroicon-o-user class="w-5 h-5" /> --}}
                            <h1 class="">
                                {{ session('error') }}
                            </h1>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <script>
            function confirmDelete() {
                return confirm('Delete this faculty member? \nMentees under this faculty will also be removed?');
            }

            function confirmAction() {
                return confirm('Are you sure? This action cannot be undone.');
            }

            setTimeout(function () {
                document.getElementById('message').style.display = 'none';
            }, 5000);

            const urlParams = new URLSearchParams(window.location.search);
            const semesterParam = urlParams.get('semester');

            if (semesterParam) {
                document.getElementById('semesterSelect').value = semesterParam;
            }

            document.getElementById('semesterSelect').addEventListener('change', function () {
                document.getElementById('semesterForm').submit();
            });
        </script>
</body>

</html>