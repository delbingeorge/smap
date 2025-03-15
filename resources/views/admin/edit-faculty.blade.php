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
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    <span>
                        Edit Faculty
                    </span>
                </a>
            </div>
        </nav>
        <div class="flex items-center min-h-[90vh] justify-center flex-col relative">
            <form class="px-4 lg:px-12 space-y-8 py-8  w-full lg:w-2/4" method="post"
                action="{{ route('edit_faculty') }}">
                @csrf
                <div>
                    <div class="flex flex-col text-xl space-y-4 mb-4">
                        <div>
                            <p class="font-medium pb-2">EMP ID:</p>
                            <input type="text" name="emp_id"
                                class="bg-secondary w-full cursor-not-allowed px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="Faculty Number" value="{{$teachers->emp_id}}" readonly>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Faculty Name:</p>
                            <input type="text" name="name"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="Faculty Name" value="{{$teachers->fullname}}" required>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Designation:</p>
                            <input type="text" name="designation"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="Designation" value="{{$teachers->designation}}" required>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Contact Number:</p>
                            <input type="number" name="contact"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="XXXXXXXXXX" value="{{$teachers->contact}}" required>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center flex-col">
                    <input type="submit" value="Submit Changes"
                        class="text-md bg-primary w-[85%] lg:w-56 text-light py-3 rounded-lg border-[2px] border-primary hover:bg-primary/90 cursor-pointer duration-300 font-medium">
                </div>
            </form>
        </div>
    </div>
</body>

</html>