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
                <h1 class="text-2xl font-semibold">Mentor Dashboard</h1>
            </div>
            <div
                class="text-primary hover:bg-secondary border-2 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                {{-- <x-heroicon-o-user class="w-6 h-6" /> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="6" r="4" />
                        <path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                    </g>
                </svg>
                <span class="font-medium hidden lg:block">{{ session('faculty_name') }}</span>
            </div>
        </nav>
        <div class="px-12 py-8">
            <div class="grid grid-cols-3 grid-rows-1 space-x-6">
                <a href="{{ route('teacher.dashboard') }}"
                    class="cursor-pointer hover:bg-black/10 py-6 text-primary mb-2 bg-black/5 rounded-md flex items-center justify-center space-x-4">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 20 20">
                        <path fill="currentColor"
                            d="M12.346 11.101c.88 0 1.741.146 2.555.428a.681.681 0 0 1 .426.873a.7.7 0 0 1-.89.418a6.372 6.372 0 0 0-2.09-.35c-3.467 0-6.276 2.757-6.276 6.159c0 .208.01.414.03.619a.688.688 0 0 1-.624.749a.694.694 0 0 1-.763-.614a7.469 7.469 0 0 1-.038-.754c0-4.157 3.434-7.528 7.67-7.528m4.146 1.369a.707.707 0 0 1 .7.694v2.259l2.114-.005a.707.707 0 0 1 .686.599l.008.102a.675.675 0 0 1-.688.68l-2.12.005v2.37a.674.674 0 0 1-.68.688a.707.707 0 0 1-.7-.694l-.001-2.361l-2.51.007a.707.707 0 0 1-.685-.598l-.008-.103a.675.675 0 0 1 .687-.68l2.516-.007v-2.269a.675.675 0 0 1 .681-.687M7.671 8.22a.69.69 0 0 1 .697.684a.69.69 0 0 1-.697.685c-3.467 0-6.276 2.757-6.276 6.159c0 .207.01.414.03.618a.688.688 0 0 1-.624.75a.694.694 0 0 1-.763-.614A7.469 7.469 0 0 1 0 15.748C0 11.59 3.434 8.22 7.67 8.22m4.938-5.254c2.183 0 3.952 1.737 3.952 3.878c0 2.142-1.77 3.878-3.952 3.878s-3.95-1.736-3.95-3.878c0-2.141 1.769-3.878 3.951-3.878m0 1.369c-1.412 0-2.557 1.123-2.557 2.51c0 1.385 1.145 2.508 2.557 2.508s2.557-1.123 2.557-2.509s-1.145-2.509-2.557-2.509M8.025 0c1.245 0 2.395.57 3.138 1.52c.234.3.176.73-.13.96a.706.706 0 0 1-.977-.127a2.568 2.568 0 0 0-2.031-.984c-1.412 0-2.557 1.123-2.557 2.509c0 1.212.882 2.245 2.081 2.466c.378.07.628.427.557.799a.697.697 0 0 1-.815.546c-1.855-.342-3.218-1.938-3.218-3.811C4.073 1.736 5.843 0 8.025 0" />
                    </svg> -->
                    <h1 class="text-xl text-semibold">View Mentees</h1>
                </a>
            </div>
            <h1 class="text-2xl font-medium mb-6">All Faculties</h1>
            <div class="flex items-center gap-6">
                <form method="get" action="{{ route('view-by-semester') }}">
                    <input class="text-black border-2 rounded-md border-black p-2" type="search" name="id" id=""
                        placeholder="Search Faculty by ID">
                    <input class="text-black border-2 rounded-md bg-slate-300 border-black p-2" type="submit"
                        value="Search">
                    <input type="hidden" name="role" value="teacher">
                </form>
            </div>
        </div>
        <div class="">
            <div class="grid grid-cols-5 gap-x-0 gap-y-0 border-b-2 border-black/20 bg-secondary p-4">
                <h1 class="text-lg font-medium">Emp ID</h1>
                <h1 class="text-lg font-medium">Faculty Name</h1>
                <h1 class="text-lg font-medium">Designation</h1>
                <h1 class="text-lg font-medium">Email</h1>
                <h1 class="text-lg font-medium">Contact</h1>
            </div>
            @foreach ($teachers as $teacher)
            <div class="grid grid-cols-5 gap-x-0 gap-y-0 py-4 px-3 border-b-2 border-black/10">
                <h1 class="text-lg">{{ $teacher->emp_id }}</h1>
                <h1 class="text-lg">{{ $teacher->fullname }}</h1>
                <h1 class="text-lg">{{ $teacher->designation }}</h1>
                <h1 class="text-lg">{{ $teacher->email }}</h1>
                <h1 class="text-lg">{{ $teacher->contact }}</h1>
                <!-- <a href="route('edit-student', ['student_id' => $student->student_id])">
                    <div>
                        {{-- <x-feathericon-edit class="w-5 h-5" /> --}}
                    </div>
                </a> -->
            </div>
            @endforeach
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