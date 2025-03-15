<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-poppy bg-white  px-4 py-8 flex items-center justify-center">
    <div class="max-w-4xl flex items-center justify-center flex-col">
        <img src="/images/nitte-nmamit-logo.png" class="w-5/6 my-4" />
        <h1 class="font-serif text-md mb-2">(An off-Campus Institution of NITTE (DEEMED TO BE UNIVERSITY), MANGALORE)
        </h1>

        <h1 class="text-3xl font-bold mt-4">DEPARTMENT OF MCA</h1>
        <div class="w-5/6 bg-black h-1"></div>
        <h1 class="text-xl font-semibold mt-4">Student Performance Monitoring System</h1>
        <div class="w-5/6">
            <h1 class="font-semibold text-xl mb-3 text-gray-800">Student Info</h1>
            <div class="border">
                <div class="flex w-full justify-between border  border-collapse border-gray-300">
                    <div class="w-2/4 flex border">
                        <div class="table-cell font-medium border-gray-300 p-2">USN:</div>
                        <div class="table-cell ml-8 font-semibold border-gray-300 p-2">
                            {{ $student_details->student_id }}
                        </div>
                    </div>
                    <div class=" w-2/4 border">
                        <div class="table-cell font-medium  border-gray-300 p-2">Student Name:</div>
                        <div class="table-cell  font-semibold  border-gray-300 p-2">
                            {{ $student_details->fullname }}
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-between border-collapse border border-gray-300">
                    <div class="w-2/4 flex border ">
                        <div class="table-cell font-medium border-gray-300 p-2">Mobile No:</div>
                        <div class="table-cell ml-8 font-semibold border-gray-300 p-2">
                            {{ $student_details->contact }}
                        </div>
                    </div>
                    <div class=" w-2/4 border">
                        <div class="table-cell font-medium  border-gray-300 p-2">Email ID:</div>
                        <div class="table-cell  font-semibold  border-gray-300 p-2">
                            {{ $student_details->email }}
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-between border border-collapse border-gray-300">
                    <div class="w-2/4 flex border">
                        <div class="table-cell font-medium border-gray-300 p-2">Proctor:</div>
                        <div class="table-cell ml-8 font-semibold border-gray-300 p-2">
                            {{ $mentor_details[0]->fullname }}
                        </div>
                    </div>
                    <div class="border w-2/4">
                        <div class="table-cell font-medium  border-gray-300 p-2">Designation:</div>
                        <div class="table-cell  font-semibold  border-gray-300 p-2">
                            {{ $mentor_details[0]->designation }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- <h2 class="font-semibold text-2xl mb-4">Semester {{ $student_details->semester }}</h2> -->
            @php
                $i = 0;
                $j = 0;
                $k = 0;
                $l = 0;
                $m = 0;
                $n = 0;
                $o = 0;
                $p = 0;
            @endphp
            @foreach ($feedbacks as $feedback)
                @if (
                    ($feedback->semester == 1 && $i == 0) ||
                        ($feedback->semester == 2 && $j == 0) ||
                        ($feedback->semester == 3 && $k == 0) ||
                        ($feedback->semester == 4 && $l == 0))
                    <h2 class="font-semibold text-2xl mt-8">Semester {{ $feedback->semester }}</h2>
                @endif
                <div class="mt-4 mb-8">
                    <h2 class="font-semibold text-lg mb-4">PERFORMANCE ENQUIRY {{ $feedback->form_number }}</h2>
                    <div class="table w-full mb-4">
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Are you having any difficulty
                                in understanding the concepts? If so give details.</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field1 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field2 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field3 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Are you having any difficulty
                                in
                                understanding the concepts? If so give
                                details.</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field4 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field5 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field6 }}</div>
                        </div>

                        <div class="table w-full">
                            <h3 class="font-semibold text-lg mt-2">Attendance percentage</h3>
                            @if ($feedback->semester == 1)
                                @isset($sem1_subjects)
                                    @foreach ($sem1_subjects as $subject)
                                        <div class="table-row">
                                            <div class="table-cell font-medium border p-2">
                                                {{ $subject->subject_name }}</div>
                                            @if($sem1_attendance[$i]->{$subject->subject_code}!=null && $sem1_attendance[$i]->{$subject->subject_code}!="null")
                                                <div class="table-cell border border-gray-300 p-2">
                                                    {{ $sem1_attendance[$i]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                    No attendance recorded/Course not opted
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $i++;
                                @endphp
                            @endif

                            @if ($feedback->semester == 2)
                                @isset($sem2_subjects)
                                    @foreach ($sem2_subjects as $subject)
                                        <div class="table-row">
                                            <div class="table-cell font-medium border border-gray-300 p-2">
                                                {{ $subject->subject_name }}</div>
                                            @if($sem2_attendance[$j]->{$subject->subject_code}!=null && $sem2_attendance[$j]->{$subject->subject_code}!="null")
                                                <div class="table-cell border border-gray-300 p-2">
                                                    {{ $sem2_attendance[$j]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                    No attendance recorded/Course not opted
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $j++;
                                @endphp
                            @endif

                            @if ($feedback->semester == 3)
                                @isset($sem3_subjects)
                                    @foreach ($sem3_subjects as $subject)
                                        <div class="table-row">
                                            <div class="table-cell font-medium border border-gray-300 p-2">
                                                {{ $subject->subject_name }}</div>
                                            @if($sem3_attendance[$k]->{$subject->subject_code}!=null && $sem3_attendance[$k]->{$subject->subject_code}!="null")
                                                <div class="table-cell border border-gray-300 p-2">
                                                    {{ $sem3_attendance[$k]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                    No attendance recorded/Course not opted
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $k++;
                                @endphp
                            @endif

                            @if ($feedback->semester == 4)
                                @isset($sem4_subjects)
                                    @foreach ($sem4_subjects as $subject)
                                        <div class="table-row">
                                            <div class="table-cell font-medium border border-gray-300 p-2">
                                                {{ $subject->subject_name }}</div>
                                            @if($sem4_attendance[$l]->{$subject->subject_code}!=null && $sem4_attendance[$l]->{$subject->subject_code}!="null")
                                                <div class="table-cell border border-gray-300 p-2">
                                                    {{ $sem4_attendance[$l]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                    No attendance recorded/Course not opted
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $l++;
                                @endphp
                            @endif

                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Any issues in attendance.
                            </div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field7 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field8 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field9 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Any other issues</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field10 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field11 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field12 }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="table-cell font-medium border border-gray-300 p-2">Projects Involved</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field13 }}</div>
                        </div>

                        @if ($feedback->semester == 1 && $m < 2)
                            <div class="table w-full">
                                <h3 class="font-semibold text-lg mt-2">MSE {{ $sem1_mse[$m]->mse_number }} Performance
                                </h3>
                                @isset($sem1_subjects)
                                    @foreach ($sem1_subjects as $subject)
                                        <div class="table-row">
                                            <div class="table-cell font-medium border border-gray-300 p-2">
                                                {{ $subject->subject_name }}</div>
                                            @if($sem1_mse[$m]->{$subject->subject_code}!=null && $sem1_mse[$m]->{$subject->subject_code}!="null")
                                                <div class="table-cell border border-gray-300 p-2">
                                                    {{ $sem1_mse[$m]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                    No marks recorded/Course not opted
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $m++;
                                @endphp
                            </div>
                        @endif

                        @if ($feedback->semester == 2 && $n < 2)
                            <div class="table w-full m-8">
                                <h3 class="font-semibold text-lg mt-2">MSE {{ $sem2_mse[$n]->mse_number }} Performance
                                </h3>
                                @isset($sem2_subjects)
                                    @foreach ($sem2_subjects as $subject)
                                        <div class="table-row">
                                            <div class="table-cell font-medium border border-gray-300 p-2">
                                                {{ $subject->subject_name }}</div>
                                            @if($sem2_mse[$n]->{$subject->subject_code}!=null && $sem2_mse[$n]->{$subject->subject_code}!="null")
                                                <div class="table-cell border border-gray-300 p-2">
                                                    {{ $sem2_mse[$n]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                    No marks recorded/Course not opted
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $n++;
                                @endphp
                            </div>
                        @endif

                        @if ($feedback->semester == 3 && $o < 2)
                            <div class="table w-full m-8">
                                <h3 class="font-semibold text-lg mt-2">MSE {{ $sem3_mse[$o]->mse_number }} Performance
                                </h3>
                                @isset($sem3_subjects)
                                    @foreach ($sem3_subjects as $subject)
                                        <div class="table-row">
                                            <div class="table-cell font-medium border border-gray-300 p-2">
                                                {{ $subject->subject_name }}</div>
                                            @if($sem3_mse[$o]->{$subject->subject_code}!=null && $sem3_mse[$o]->{$subject->subject_code}!="null")
                                                <div class="table-cell border border-gray-300 p-2">
                                                    {{ $sem3_mse[$o]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                    No marks recorded/Course not opted
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $o++;
                                @endphp
                            </div>
                        @endif

                        @if ($feedback->semester == 4 && $p < 2)
                            <div class="table w-full m-8">
                                <h3 class="font-semibold text-lg mt-2">MSE {{ $sem4_mse[$p]->mse_number }} Performance
                                </h3>
                                @isset($sem4_subjects)
                                    @foreach ($sem4_subjects as $subject)
                                        <div class="table-row">
                                            <div class="table-cell font-medium border border-gray-300 p-2">
                                                {{ $subject->subject_name }}</div>
                                            @if($sem4_mse[$p]->{$subject->subject_code}!=null && $sem4_mse[$p]->{$subject->subject_code}!="null")
                                                <div class="table-cell border border-gray-300 p-2">
                                                    {{ $sem4_mse[$p]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                    No marks recorded/Course not opted
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $p++;
                                @endphp
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
