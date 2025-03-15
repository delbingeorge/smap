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
                    {{-- <x-heroicon-o-arrow-small-left class="w-7 h-7" /> --}}
                    <span>
                        Add Faculty
                    </span>
                </a>
            </div>
        </nav>
        <div class="flex items-center min-h-[90vh] justify-center flex-col relative">
            <form class="px-4 lg:px-12 space-y-8 py-8  w-full lg:w-2/4" method="post"
                action="{{ route('add_faculty') }}">
                @csrf
                <div>
                    <div class="flex flex-col text-xl space-y-4 mb-4">
                        <div>
                            <p class="font-medium pb-2">EMP ID:</p>
                            <input type="text" name="id"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="Faculty Number" required>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Faculty Name:</p>
                            <input type="text" name="name"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="Faculty Name" required>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Designation:</p>
                            <input type="text" name="designation"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="Designation" required>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Contact Number:</p>
                            <input type="number" name="contact"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="XXXXXXXXXX" required>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Email:</p>
                            <input type="mail" name="email"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="*******nmamit.in" required>
                        </div>
                        <div>
                            <p class="font-medium pb-2">Password:</p>
                            <input type="password" name="password"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 focus:border-black/70 border-black/20"
                                placeholder="***************" required>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center flex-col">
                    <input type="submit" value="Submit"
                        class="text-md bg-primary w-[85%] lg:w-56 text-light py-3 rounded-lg border-[2px] border-primary hover:bg-primary/90 cursor-pointer duration-300 font-medium">
                </div>
            </form>
            <div>
                @if (session('error'))
                    <div id="error-message" class="absolute z-40 bg-red-100 rounded-xl pr-24 pl-5 py-3 bottom-0 right-0">
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
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('error-message').style.display = 'none';
        }, 5000);
    </script>
</body>

</html>
