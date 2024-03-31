<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-poppy bg-gray-100 px-4 py-8">
    <div class="max-w-4xl mx-auto">
    <h1 class="font-semibold text-xl mb-4 text-gray-800">STUDENT INFO</h1>
        <div>
            <div class="table w-full border-collapse border border-gray-300">
                <div class="table-row bg-gray-200">
                    <div class="table-cell font-medium border border-gray-300 p-2">Full Name:</div>
                    <div class="table-cell font-semibold border border-gray-300 p-2">{{ $student_details->fullname }}
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell font-medium border border-gray-300 p-2">USN:</div>
                    <div class="table-cell font-semibold border border-gray-300 p-2">{{ $student_details->student_id }}
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
        @if(($feedback->semester == 1 && $i == 0) || ($feedback->semester == 2 && $j == 0) || ($feedback->semester == 3 && $k == 0) || ($feedback->semester == 4 && $l == 0))
            <h2 class="font-semibold text-2xl mt-8">Semester {{ $feedback->semester }}</h2>
        @endif
        <div class="bg-white shadow-md rounded-lg p-6 mt-4 mb-8">
                <h2 class="font-semibold text-lg mb-4">PERFORMANCE ENQUIRY {{ $feedback->form_number }}</h2>
                <div class="table w-full border-collapse border border-gray-300 mb-4">
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">Are you having any difficulty in
                                understanding the concepts? If so give
                                details.</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field1 }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field2 }}</div>
                        </div>
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field3 }}</div>
                        </div>
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">Are you having any difficulty in
                                understanding the concepts? If so give
                                details.</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field4 }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field5 }}</div>
                        </div>
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field6 }}</div>
                        </div>

                        <div class="table w-full m-8">
                            <h3 class="font-semibold text-lg mt-2">Give the attendance percentage</h3>    
                            @if($feedback->semester == 1)
                                @isset($sem1_subjects)
                                    @foreach ($sem1_subjects as $subject)
                                        <div class="table-row">
                                        <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                                            @isset($sem1_attendance[$i])
                                                <div class="table-cell border border-gray-300 p-2">
                                                {{ $sem1_attendance[$i]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                No attendance recorded for this subject.
                                                </div>
                                            @endisset
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $i++
                                @endphp
                            @endif
    
                            @if($feedback->semester == 2)
                                @isset($sem2_subjects)
                                    @foreach ($sem2_subjects as $subject)
                                        <div class="table-row">
                                        <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                                            @isset($sem2_attendance[$j])
                                                <div class="table-cell border border-gray-300 p-2">
                                                {{ $sem2_attendance[$j]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                No attendance recorded for this subject.
                                                </div>
                                            @endisset
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $j++
                                @endphp
                            @endif
    
                            @if($feedback->semester == 3)
                                @isset($sem3_subjects)
                                    @foreach ($sem3_subjects as $subject)
                                        <div class="table-row">
                                        <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                                            @isset($sem3_attendance[$k])
                                                <div class="table-cell border border-gray-300 p-2">
                                                {{ $sem3_attendance[$k]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                No attendance recorded for this subject.
                                                </div>
                                            @endisset
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $k++
                                @endphp
                            @endif
    
                            @if($feedback->semester == 4)
                                @isset($sem4_subjects)
                                    @foreach ($sem4_subjects as $subject)
                                        <div class="table-row">
                                        <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                                            @isset($sem4_attendance[$l])
                                                <div class="table-cell border border-gray-300 p-2">
                                                {{ $sem4_attendance[$l]->{$subject->subject_code} }}%
                                                </div>
                                            @else
                                                <div class="table-cell border border-gray-300 p-2">
                                                No attendance recorded for this subject.
                                                </div>
                                            @endisset
                                        </div>
                                    @endforeach
                                @else
                                    <p>No subjects available.</p>
                                @endisset
                                @php
                                    $l++
                                @endphp
                            @endif
    
                        </div>
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">Any issues in attendance.</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field7 }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field8 }}</div>
                        </div>
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field9 }}</div>
                        </div>
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">Any other issues</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field10 }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell font-medium border border-gray-300 p-2">Action taken</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field11 }}</div>
                        </div>
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">State of the issue</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field12 }}</div>
                        </div>
                        <div class="table-row bg-gray-200">
                            <div class="table-cell font-medium border border-gray-300 p-2">Projects Involved</div>
                            <div class="table-cell border border-gray-300 p-2">{{ $feedback->field13 }}</div>
                        </div>

                        @if($feedback->semester == 1 && $m<2)
                        <div class="table w-full m-8">
                            <h3 class="font-semibold text-lg mt-2">MSE {{ $sem1_mse[$m]->mse_number }}</h3> 
                            @isset($sem1_subjects)
                            @foreach ($sem1_subjects as $subject)
                                <div class="table-row">
                                    <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                                    @isset($sem1_mse[$m])
                                    <div class="table-cell border border-gray-300 p-2">
                                        {{ $sem1_mse[$m]->{$subject->subject_code} }}%
                                        </div>
                                        @else
                                        <div class="table-cell border border-gray-300 p-2">
                                            No attendance recorded for this subject.
                                        </div>
                                        @endisset
                                    </div>
                                    @endforeach
                                    @else
                                    <p>No subjects available.</p>
                                    @endisset
                                    @php
                            $m++
                        @endphp
                        </div>
                    @endif

                    @if($feedback->semester == 2 && $n<2)
                        <div class="table w-full m-8">
                            <h3 class="font-semibold text-lg mt-2">MSE 1</h3> 
                    @isset($sem2_subjects)
                    @foreach ($sem2_subjects as $subject)
                    <div class="table-row">
                        <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                        @isset($sem2_mse[$n])
                        <div class="table-cell border border-gray-300 p-2">
                            {{ $sem2_mse[$n]->{$subject->subject_code} }}%
                        </div>
                        @else
                        <div class="table-cell border border-gray-300 p-2">
                            No attendance recorded for this subject.
                        </div>
                        @endisset
                    </div>
                    @endforeach
                    @else
                    <p>No subjects available.</p>
                    @endisset
                    @php
                            $n++
                        @endphp
                        </div>
                    @endif

                    @if($feedback->semester == 3 && $o<2)
                        <div class="table w-full m-8">
                            <h3 class="font-semibold text-lg mt-2">MSE 1</h3> 
                    @isset($sem3_subjects)
                    @foreach ($sem3_subjects as $subject)
                    <div class="table-row">
                        <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                        @isset($sem3_mse[$o])
                        <div class="table-cell border border-gray-300 p-2">
                            {{ $sem3_mse[$o]->{$subject->subject_code} }}%
                        </div>
                        @else
                        <div class="table-cell border border-gray-300 p-2">
                            No attendance recorded for this subject.
                        </div>
                        @endisset
                    </div>
                            @endforeach
                            @else
                            <p>No subjects available.</p>
                            @endisset
                            @php
                            $o++
                        @endphp
                        </div>
                    @endif

                    @if($feedback->semester == 4 && $p<2)
                        <div class="table w-full m-8">
                            <h3 class="font-semibold text-lg mt-2">MSE 1</h3> 
                    @isset($sem4_subjects)
                    @foreach ($sem4_subjects as $subject)
                    <div class="table-row">
                        <div class="table-cell font-medium border border-gray-300 p-2">{{ $subject->subject_name }}</div>
                        @isset($sem4_mse[$p])
                        <div class="table-cell border border-gray-300 p-2">
                            {{ $sem4_mse[$p]->{$subject->subject_code} }}%
                        </div>
                        @else
                        <div class="table-cell border border-gray-300 p-2">
                            No attendance recorded for this subject.
                        </div>
                        @endisset
                    </div>
                    @endforeach
                    @else
                    <p>No subjects available.</p>
                    @endisset
                    @php
                            $p++
                        @endphp
                        </div>
                    @endif
                </div>
            </div>



                
        @endforeach

    </div>
</body>

</html>