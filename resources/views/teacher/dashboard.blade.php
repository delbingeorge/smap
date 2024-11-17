<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="">
        <nav class="w-full flex items-center justify-between px-12 py-4 shadow-md ">
            <div class="-space-y-3">
                <h1 class="text-2xl font-semibold">Mentor Dashboard</h1>
            </div>
            <button id="profileButton">
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
            </button>
        </nav>
        <div id="profileModal" class="hidden items-center justify-between px-12 pt-4 pb-2 bg-black/5">
            <div class="modal-content text-left">
                <div class=" -space-y-2 lg:space-y-0">
                    <h1 class="text-2xl lg:text-3xl font-semibold">{{ session('faculty_name') }}</h1>
                    <h1 class="text-2xl lg:text-lg font-semibold">{{ session('user_id') }}</h1>
                    <p class="text-lg lg:text-lg text-gray-600">{{ session('email') }} | {{ session('contact') }} </p>
                </div>
            </div>

            <div class="flex space-x-8 items-center justify-between">
                <div
                    class="modal-close cursor-pointer flex flex-col items-center  text-sm text-primary hover:bg-secondary border-2 group hover:bg-primary/20 duration-200 justify-center rounded-full py-3 px-5 space-x-1">
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M2.583 16.993a1 1 0 0 0 1.414.001l11.004-11.004a1 1 0 0 0-1.415-1.415L2.582 15.579a.999.999 0 0 0-.001 1.414z" />
                        <path
                            d="M3.997 2.573l11.003 11.003c.392.391.392 1.023 0 1.415-.391.391-1.023.391-1.414 0L2.583 3.987a1 1 0 0 1-.001-1.414 1 1 0 0 1 1.415-.001z" />
                    </svg>
                </div>

                <a href="{{ route('logout')}}"
                    class="text-primary hover:bg-secondary border-2 group hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:translate-x-1 duration-300"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z" />
                    </svg>{{-- <span class="font-medium">Edit Profile</span> --}}
                </a>
            </div>
        </div>
        <div class="px-12 py-8">
            <div class="grid lg:grid-cols-3 grid-rows-1 space-x-6">
                <a href="{{ route('add-student')}}"
                    class="cursor-pointer hover:bg-black/10 py-6 text-primary mb-2 bg-black/5 rounded-md flex items-center justify-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 20 20">
                        <path fill="currentColor"
                            d="M12.346 11.101c.88 0 1.741.146 2.555.428a.681.681 0 0 1 .426.873a.7.7 0 0 1-.89.418a6.372 6.372 0 0 0-2.09-.35c-3.467 0-6.276 2.757-6.276 6.159c0 .208.01.414.03.619a.688.688 0 0 1-.624.749a.694.694 0 0 1-.763-.614a7.469 7.469 0 0 1-.038-.754c0-4.157 3.434-7.528 7.67-7.528m4.146 1.369a.707.707 0 0 1 .7.694v2.259l2.114-.005a.707.707 0 0 1 .686.599l.008.102a.675.675 0 0 1-.688.68l-2.12.005v2.37a.674.674 0 0 1-.68.688a.707.707 0 0 1-.7-.694l-.001-2.361l-2.51.007a.707.707 0 0 1-.685-.598l-.008-.103a.675.675 0 0 1 .687-.68l2.516-.007v-2.269a.675.675 0 0 1 .681-.687M7.671 8.22a.69.69 0 0 1 .697.684a.69.69 0 0 1-.697.685c-3.467 0-6.276 2.757-6.276 6.159c0 .207.01.414.03.618a.688.688 0 0 1-.624.75a.694.694 0 0 1-.763-.614A7.469 7.469 0 0 1 0 15.748C0 11.59 3.434 8.22 7.67 8.22m4.938-5.254c2.183 0 3.952 1.737 3.952 3.878c0 2.142-1.77 3.878-3.952 3.878s-3.95-1.736-3.95-3.878c0-2.141 1.769-3.878 3.951-3.878m0 1.369c-1.412 0-2.557 1.123-2.557 2.51c0 1.385 1.145 2.508 2.557 2.508s2.557-1.123 2.557-2.509s-1.145-2.509-2.557-2.509M8.025 0c1.245 0 2.395.57 3.138 1.52c.234.3.176.73-.13.96a.706.706 0 0 1-.977-.127a2.568 2.568 0 0 0-2.031-.984c-1.412 0-2.557 1.123-2.557 2.509c0 1.212.882 2.245 2.081 2.466c.378.07.628.427.557.799a.697.697 0 0 1-.815.546c-1.855-.342-3.218-1.938-3.218-3.811C4.073 1.736 5.843 0 8.025 0" />
                    </svg>
                    <h1 class="text-xl text-semibold">Add Mentees</h1>
                </a>

                @if (session('isHOD'))
                    <a href="{{ route('view-faculties') }}"
                        class="cursor-pointer hover:bg-black/10 py-6 text-primary mb-2 bg-black/5 rounded-md flex items-center justify-center space-x-4">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 20 20">
                                                    <path fill="currentColor"
                                                        d="M12.346 11.101c.88 0 1.741.146 2.555.428a.681.681 0 0 1 .426.873a.7.7 0 0 1-.89.418a6.372 6.372 0 0 0-2.09-.35c-3.467 0-6.276 2.757-6.276 6.159c0 .208.01.414.03.619a.688.688 0 0 1-.624.749a.694.694 0 0 1-.763-.614a7.469 7.469 0 0 1-.038-.754c0-4.157 3.434-7.528 7.67-7.528m4.146 1.369a.707.707 0 0 1 .7.694v2.259l2.114-.005a.707.707 0 0 1 .686.599l.008.102a.675.675 0 0 1-.688.68l-2.12.005v2.37a.674.674 0 0 1-.68.688a.707.707 0 0 1-.7-.694l-.001-2.361l-2.51.007a.707.707 0 0 1-.685-.598l-.008-.103a.675.675 0 0 1 .687-.68l2.516-.007v-2.269a.675.675 0 0 1 .681-.687M7.671 8.22a.69.69 0 0 1 .697.684a.69.69 0 0 1-.697.685c-3.467 0-6.276 2.757-6.276 6.159c0 .207.01.414.03.618a.688.688 0 0 1-.624.75a.694.694 0 0 1-.763-.614A7.469 7.469 0 0 1 0 15.748C0 11.59 3.434 8.22 7.67 8.22m4.938-5.254c2.183 0 3.952 1.737 3.952 3.878c0 2.142-1.77 3.878-3.952 3.878s-3.95-1.736-3.95-3.878c0-2.141 1.769-3.878 3.951-3.878m0 1.369c-1.412 0-2.557 1.123-2.557 2.51c0 1.385 1.145 2.508 2.557 2.508s2.557-1.123 2.557-2.509s-1.145-2.509-2.557-2.509M8.025 0c1.245 0 2.395.57 3.138 1.52c.234.3.176.73-.13.96a.706.706 0 0 1-.977-.127a2.568 2.568 0 0 0-2.031-.984c-1.412 0-2.557 1.123-2.557 2.509c0 1.212.882 2.245 2.081 2.466c.378.07.628.427.557.799a.697.697 0 0 1-.815.546c-1.855-.342-3.218-1.938-3.218-3.811C4.073 1.736 5.843 0 8.025 0" />
                                                </svg> -->
                        <h1 class="text-xl text-semibold">View Faculties</h1>
                    </a>
                @endif

            </div>
            <h1 class="text-2xl font-medium mb-6">All Mentees</h1>
            @php
                $selectedSemester = 'all';
            @endphp
            <div class="flex items-center gap-6 px-12">
                <form id="semesterForm" action="{{ route('view-by-semester', ['semester' => $selectedSemester]) }}"
                    method="get">
                    <select id="semesterSelect" name="semester">
                        <option value="all" {{ $selectedSemester == 'all' ? 'selected' : '' }}>All Students</option>
                        <option value="1" {{ $selectedSemester == 1 ? 'selected' : '' }}>Semester 1</option>
                        <option value="2" {{ $selectedSemester == 2 ? 'selected' : '' }}>Semester 2</option>
                        <option value="3" {{ $selectedSemester == 3 ? 'selected' : '' }}>Semester 3</option>
                        <option value="4" {{ $selectedSemester == 4 ? 'selected' : '' }}>Semester 4</option>
                    </select>
                    <input type="hidden" name="role" value="student">
                </form>
                <form method="get" action="{{ route('view-by-semester') }}">
                    <input class="text-black border-2 rounded-md border-black p-2" type="search" name="id"
                        placeholder="Search Student by USN">
                    <input class="text-black border-2 rounded-md bg-slate-300 border-black p-2" type="submit"
                        value="Search">
                    <input type="hidden" name="role" value="student">
                </form>
                <div>
                    <button id="removeStudentsBtn" class="text-red-500 text-right">Remove Students</button>
                </div>
            </div>
            <div id="removeStudentsModal"
                class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex justify-center items-center">
                <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
                    <h2 class="text-lg font-bold mb-4">Remove Students by Semester</h2>
                    <form id="deleteSemesterForm" action="{{ route('delete_students_by_semester') }}" method="post">
                        @csrf
                        <label for="deleteSemester" class="block mb-2">Select Semester:</label>
                        <select id="deleteSemester" name="semester" class="w-full border-gray-300 rounded-md mb-4">
                            <option value="" disabled selected>Select Semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                        </select>
                        <div class="flex justify-end gap-4">
                            <button type="button" id="cancelBtn" class="text-gray-600">Cancel</button>
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="px-12">
            <div class="grid grid-cols-6 gap-x-0 gap-y-0 border-b-2 border-black/20 bg-secondary p-4">
                <h1 class="text-lg font-medium">Student USN</h1>
                <h1 class="text-lg font-medium">Student Name</h1>
                <h1 class="text-lg font-medium">Semester</h1>
                <h1 class="text-lg font-medium">Email</h1>
                <h1 class="text-lg font-medium">Contact</h1>
            </div>
            @foreach ($students as $student)
                <div class="grid grid-cols-6 gap-x-0 gap-y-0 py-4 px-3 border-b-2 border-black/10">
                    <h1 class="text-lg">{{ $student->student_id }}</h1>
                    <h1 class="text-lg">{{ $student->fullname }}</h1>
                    <h1 class="text-lg">{{ $student->semester }}</h1>
                    <h1 class="text-lg"><a href="mailto:{{ $student->email }}">{{ $student->email }}</a></h1>
                    <h1 class="text-lg"><a href="tel:{{ $student->contact }}">{{ $student->contact }}</a></h1>
                    <!-- <a href="route('edit-student', ['student_id' => $student->student_id])">
                                                <div>
                                                    {{-- <x-feathericon-edit class="w-5 h-5" /> --}}
                                                </div>
                                                </a> -->
                    <div class="flex flex-row gap-x-5">
                        <a href="{{ route('download-pdf', ['usn' => $student->student_id]) }}" target="_blank"
                            class="cursor-pointer hover:text-blue-300 text-primary mb-2 rounded-md flex items-center justify-center space-x-4">
                            <h1 class="text-m text-semibold">Download Details</h1>
                        </a>
                        <form action="{{ route('delete_student') }}" method="post" onsubmit="return confirmDelete()">
                            @csrf
                            <input type="hidden" name="student_id" value="{{ $student->student_id }}">
                            <input class="hover:cursor-pointer text-red-500 hover:text-red-300" type="submit"
                                value="delete">
                        </form>
                    </div>
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
        // Get the modal
        const modal = document.getElementById("profileModal");

        // Get the button that opens the modal
        const btn = document.getElementById("profileButton");

        // Get the <span> element that closes the modal
        const span = document.querySelector(".modal-close");

        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        }

        // Close modal on ESC key press
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' || event.key === 'Esc') {
                modal.classList.add('hidden');
            }
        });

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

        function confirmDelete() {
            return confirm('Remove this student?');
        }

        // Show modal
        document.getElementById('removeStudentsBtn').addEventListener('click', function () {
            document.getElementById('removeStudentsModal').classList.remove('hidden');
        });

        // Hide modal
        document.getElementById('cancelBtn').addEventListener('click', function () {
            document.getElementById('removeStudentsModal').classList.add('hidden');
        });

        // Close modal when clicking outside of it
        window.addEventListener('click', function (event) {
            const modal = document.getElementById('removeStudentsModal');
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
</body>

</html>