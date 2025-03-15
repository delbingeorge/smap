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
                <a href="{{ route('student-profile') }}"
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
                        {{-- <x-heroicon-s-camera  /> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 lg:w-6 h-5 lg:h-6" viewBox="0 0 56 56">
                            <path fill="currentColor"
                                d="M7.809 50.348H48.19c4.875 0 7.36-2.438 7.36-7.266V18.543c0-4.828-2.485-7.242-7.36-7.242h-5.484c-1.828 0-2.39-.375-3.445-1.547l-1.899-2.11c-1.148-1.288-2.343-1.992-4.781-1.992h-9.328c-2.414 0-3.61.704-4.781 1.992l-1.899 2.11c-1.031 1.148-1.617 1.547-3.445 1.547h-5.32c-4.875 0-7.36 2.414-7.36 7.242v24.539c0 4.828 2.485 7.266 7.36 7.266m.07-3.774c-2.32 0-3.656-1.242-3.656-3.68v-24.14c0-2.438 1.336-3.68 3.656-3.68h6.187c2.11 0 3.235-.398 4.407-1.71l1.851-2.063c1.336-1.5 2.016-1.875 4.102-1.875h6.984c2.086 0 2.766.375 4.102 1.875l1.851 2.062c1.172 1.313 2.297 1.711 4.407 1.711h6.351c2.32 0 3.657 1.242 3.657 3.68v24.14c0 2.438-1.336 3.68-3.657 3.68Zm20.11-3.726a12.76 12.76 0 0 0 12.796-12.82c0-7.126-5.672-12.82-12.797-12.82c-7.078 0-12.773 5.694-12.773 12.82c0 7.124 5.695 12.82 12.773 12.82m16.851-18.54c1.594 0 2.906-1.288 2.906-2.882a2.906 2.906 0 1 0-5.812 0c0 1.594 1.312 2.883 2.906 2.883m-16.85 14.977c-5.086 0-9.234-4.125-9.234-9.258c0-5.132 4.125-9.257 9.234-9.257a9.247 9.247 0 0 1 9.258 9.257a9.247 9.247 0 0 1-9.258 9.258" />
                        </svg>
                    </label>
                </div>

            </div>
            <div class="flex items-end justify-between w-[60%] md:w-[90%]">
                <div class="mx-3 -space-y-2 lg:space-y-0 lg:mx-4 mt-4">
                    <h1 class="text-2xl lg:text-3xl font-semibold">{{ $data->fullname }}</h1>
                    <p class="text-lg lg:text-xl text-gray-600">{{ $data->student_id }}</p>
                </div>
            </div>
        </div>
        <form class="space-y-3 mt-4 lg:mt-8 px-4 lg:px-0 pb-8" action="{{ route('edit-student-profile') }}" method="post">
    @csrf
            <div class="space-y-1">
                <h1 class="font-semibold tracking-widest text-black/70">ABOUT ME</h1>
                <input type="text" name="about" class="py-3 px-2 w-full rounded-lg bg-dark/10"
                    placeholder="About You"
                    value="{{ $data->about }}" required>
            </div>
            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">INTERESTS & SKILLS</h1>
                <h1 class="font-semibold tracking-widest text-black/70 text-xs">(Example : Skill1, Skill2, ...)</h1>
                <div class="flex flex-wrap gap-2">
                    <input type="text" name="skills" class="py-3 px-2 w-full rounded-lg bg-dark/10"
                        placeholder="Enter your skills (Example : Skill1, Skill2, ...)"
                        value="{{ $data->skills }}" required>
                </div>
            </div>
            <div class="space-y-4">
                <h1 class="font-semibold tracking-widest text-black/70">PROJECTS</h1>
                <h1 class="font-semibold tracking-widest text-black/70 text-xs">(project1, project2, ....)</h1>
                <input type="text" name="projects" class="py-3 px-2 w-full rounded-lg bg-dark/10"
                    placeholder="Enter your projects (Example : project1, project2, ....)"
                    value="{{ $data->projects }}" required>
            </div>
            <div class="space-x-4 w-full flex items-end justify-end">
                <a href="{{ route('student-profile') }}" class="text-md bg-secondary w-[85%] lg:w-56 py-3 rounded-lg border-[2px] text-primary border-primary cursor-pointer duration-300 font-medium text-center">
                Discard
                </a>
                <input type="submit" value="Save"
                    class="text-md bg-primary w-[85%] lg:w-56 text-light py-3 rounded-lg border-[2px] border-primary hover:bg-primary/90 cursor-pointer duration-300 font-medium text-center">
            </div>
        </form>
</body>

</html>
