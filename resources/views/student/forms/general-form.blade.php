<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="relative px-0 lg:px-12">
        <nav class="w-full flex items-center justify-between px-4 lg:px-0 py-4">
            <div class="-space-y-3">
                <a href="{{ route('student_dashboard') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    {{-- <x-heroicon-o-arrow-small-left class="w-7 h-7" /> --}}
                    <span>
                        Complete your profile!
                    </span>
                </a>
            </div>
        </nav>
    </div>
    <div class="flex items-center justify-center flex-col">
        <form class="px-4 lg:px-12 space-y-8 py-8 bg-secondary w-3/4" action="{{ route('submit-form') }}" method="post">
            @csrf
            {{-- <h1 class="text-3xl font-semibold">General Form</h1> --}}
            <div>
                <h1 class="font-semibold tracking-widest mb-3 text-black/70">MENTOR INFO</h1>
                <div>
                    <div class="flex space-x-5 text-xl">
                        <span class="font-medium">Name of Mentor:</span>
                        <span class="font-semibold">Diana</span>
                    </div>
                    <div class="flex space-x-5 text-xl">
                        <span class="font-medium">Designation:</span>
                        <span class="font-semibold">Assistant Professor</span>
                    </div>
                </div>
            </div>

            <div>
                <h1 class="font-semibold tracking-widest mb-3 text-black/70">STUDENT INFO</h1>
                <div>
                    <div class="flex space-x-5 text-xl">
                        <span class="font-medium">Full Name:</span>
                        <span class="font-semibold">Bruce Wayne</span>
                    </div>
                    <div class="flex space-x-5 text-xl">
                        <span class="font-medium">USN:</span>
                        <span class="font-semibold">NNM23MC000</span>
                    </div>
                </div>
            </div>

            <div>
                <h1 class="font-semibold tracking-widest mb-3 text-black/70">PERFORMANCE ENQUIRY</h1>
                <div class="flex flex-col text-xl space-y-4 mb-4">
                    <div>
                        <p class="font-medium">Are you having any difficulty in understanding
                            the concepts? If so give details.</p>
                        <input type="text" name="field1" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">Action taken</p>
                        <input type="text" name="field2" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">State of the issue</p>
                        <div class="flex space-x-4">
                            <div class="flex space-x-2">
                                <input type="radio" name="field3" value="Solved" id="issue">
                                <label class="text-lg font-medium" for="Solved">Solved</label>
                            </div>
                            <div class="flex space-x-2">
                                <input type="radio" name="field3" value="Not Solved" id="issue">
                                <label class="text-lg font-medium" for="Not Solved">Not Solved</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col text-xl space-y-4 mb-4">
                    <div>
                        <p class="font-medium">Are you having any difficulty in implementing the
                            concepts in the lab? If so give details.</p>
                        <input type="text" name="field4" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">Action taken</p>
                        <input type="text" name="field5" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">State of the issue</p>
                        <div class="flex space-x-4">
                            <div class="flex space-x-2">
                                <input type="radio" name="field6" value="Solved" id="issue">
                                <label class="text-lg font-medium" for="Solved">Solved</label>
                            </div>
                            <div class="flex space-x-2">
                                <input type="radio" name="field6" value="Not Solved" id="issue">
                                <label class="text-lg font-medium" for="Not Solved">Not Solved</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="font-semibold tracking-widest mb-3 text-black/70 uppercase">Give the attendance percentage
                </h1>
                <div class="w-2/4 flex flex-col space-y-4 items-center justify-between">

                    @foreach ($subjects as $subject)
                    <div class="w-full flex items-center justify-between">
                        <span class="text-xl font-medium">{{ $subject }} :</span>
                        <input type="number" name="{{ $subject }}" class="border-[3px] text-xl font-semibold w-16 h-16 text-center rounded-xl"
                            placeholder="00" name="{{ Str::slug($subject) }}" id="{{ Str::slug($subject) }}">
                    </div>
                    @endforeach

                </div>
                <div class="flex flex-col text-xl space-y-4 mb-4">
                    <div>
                        <p class="font-medium">Any issues in attendance.</p>
                        <input type="text" name="field7" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">Action taken</p>
                        <input type="text" name="field8" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">State of the issue</p>
                        <div class="flex space-x-4">
                            <div class="flex space-x-2">
                                <input type="radio" name="field9" value="Solved" id="issue">
                                <label class="text-lg font-medium" for="Solved">Solved</label>
                            </div>
                            <div class="flex space-x-2">
                                <input type="radio" name="field9" value="Not Solved" id="issue">
                                <label class="text-lg font-medium" for="Not Solved">Not Solved</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col text-xl space-y-4 mb-4">
                    <div>
                        <p class="font-medium">Any other issue.</p>
                        <input type="text" name="field10" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">Action taken</p>
                        <input type="text" name="field11" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                            placeholder="type your text here. ">
                    </div>
                    <div>
                        <p class="font-medium">State of the issue</p>
                        <div class="flex space-x-4">
                            <div class="flex space-x-2">
                                <input type="radio" name="field12" value="Solved" id="issue">
                                <label class="text-lg font-medium" for="Solved">Solved</label>
                            </div>
                            <div class="flex space-x-2">
                                <input type="radio" name="field12" value="Not Solved" id="issue">
                                <label class="text-lg font-medium" for="Not Solved">Not Solved</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="font-semibold tracking-widest mb-3 uppercase text-black/70">Projects involved</h1>
                <div class="space-y-4">
                    <input type="text" name="field13" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                        placeholder="project one">

                    <input type="text" name="field14" class="input border-b-2 outline-none w-2/4 border-primary py-2 pl-2 mt-2"
                        placeholder="project two">
                </div>
            </div>

            <div class="flex items-center justify-center flex-col">
                <p class="pb-3">The Information your entered cannot be modified later!</p>
                <input type="submit" value="Submit"
                    class="text-md bg-primary w-[85%] lg:w-56 text-light py-3 rounded-lg border-[2px] border-primary hover:bg-primary/90 cursor-pointer duration-300 font-medium">
            </div>
        </form>
    </div>
</body>

</html>