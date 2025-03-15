<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="px-0 lg:px-12">
        <nav class=" w-full flex items-center justify-between px-4 lg:px-0 py-4">
            <div class="-space-y-3">
                <a class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    {{-- <x-heroicon-o-arrow-small-left class="w-7 h-7" /> --}}
                    <span>
                        Add Student
                    </span>
                </a>
            </div>
        </nav>
        <div class="flex items-center min-h-[90vh] justify-center flex-col">
            <form action="{{ route('add_student') }}" class="px-4 lg:px-12 space-y-8 py-8  w-full lg:w-2/4"
                method="post">
                @csrf
                <div>
                    <div class="flex flex-col text-xl space-y-4 mb-4">
                        <div>
                            <p class="font-medium pb-2">Student USN:</p>
                            <input type="text" name="usn"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="Student Number">
                        </div>
                        <div>
                            <p class="font-medium pb-2">Student Name:</p>
                            <input type="text" name="fullname"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="Student Name">
                        </div>
                        <div>
                            <p class="font-medium pb-2">Semester:</p>
                            <select
                                class="outline-none bg-secondary p-3 rounded-md w-full border-2 focus:border-black/70 border-black/20"
                                name="semester">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Contact:</p>
                            <input type="contact" name="contact"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="*******688">
                        </div>
                        <div>
                            <p class="font-medium pb-2">Email:</p>
                            <input type="mail" name="email"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="nnm23mc000@nmamit.in">
                        </div>
                        <div>
                            <p class="font-medium pb-2">Password:</p>
                            <input type="text" name="password"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="***************">
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center flex-col">
                    <input type="submit" value="Submit"
                        class="text-md bg-primary w-[85%] lg:w-56 text-light py-3 rounded-lg border-[2px] border-primary hover:bg-primary/90 cursor-pointer duration-300 font-medium">
                </div>
        </div>
        </form>
    </div>
</body>

</html>