<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
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
                    <h1 class="flex items-center justify-center space-x-2 text-2xl font-medium">
                        <a href="{{ route('student_dashboard') }}"
                            class="flex items-center justify-start space-x-2 text-2xl font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M20 11H7.83l5.59-5.59L12 4l-8 8l8 8l1.41-1.41L7.83 13H20z" />
                            </svg>
                            <span>Back</span>
                        </a>
                    </h1>
                </div>
            </nav>
        </div>
        <div class="flex items-center justify-center flex-col">
            <form class="px-0 lg:px-12 space-y-8 py-8 bg-white lg:bg-secondary w-full lg:w-3/4"
                action="{{ route('submit-mse-marks') }}" method="post">
                @csrf
                <h1 class="text-3xl font-semibold">MSE {{ session('pending_mse_number') }}</h1>
                <div class="container mx-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 w-1/12 border-b">No.</th>
                                <th class="py-2 px-4 w-1/12 border-b">Course Code</th>
                                <th class="py-2 px-4 w-6/12 border-b">Course Name</th>
                                <th class="py-2 px-2 w-2/12 border-b">MSE Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($subjects)
                                @php    $serialNumber = 1; @endphp
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td class="py-2 px-4 w-1/12 border-b">{{ $serialNumber }}</td>
                                        <td class="py-2 px-4 w-1/12 border-b">{{ $subject->subject_code }}</td>
                                        <td class="py-2 px-4 w-6/12 border-b">{{ $subject->subject_name }}</td>
                                        <td class="py-2 px-4 w-2/12 border-b">
                                            <input type="text" name="{{ $subject->subject_code }}"
                                                class="border-b-2 w-32 font-semibold text-xl text-center outline-none border-primary py-2 pl-2 mt-2"
                                                placeholder="00">
                                        </td>
                                    </tr>
                                    @php        $serialNumber++; @endphp
                                @endforeach
                            @else
                                                        @php
                                                            header('Location: /student_dashboard');
                                                            exit();
                                                        @endphp
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit</button>
                </div>
            </form>
        </div>
    </body>

    </html>
</body>

</html>