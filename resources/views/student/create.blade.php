<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Registration Form</title>
    <style>
        @keyframes animate-circle {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }

        .animate-circle {
            animation: animate-circle 25s linear infinite;
        }

        .animate-circle-12 {
            animation: animate-circle 12s 2s linear infinite;
        }

        .animate-circle-18 {
            animation: animate-circle 18s 0s linear infinite;
        }

        .animate-circle-45 {
            animation: animate-circle 45s 15s linear infinite;
        }

        .animate-circle-35 {
            animation: animate-circle 35s 2s linear infinite;
        }

        .animate-circle-11 {
            animation: animate-circle 11s 0s linear infinite;
        }
    </style>
</head>

<body>
    <div class="relative min-h-screen bg-gradient-to-l from-[#8f94fb] to-[#4e54c8]">
        <!-- Animated Circles -->
        <ul class="absolute top-0 left-0 w-full h-[96%] overflow-hidden">
            <li class="absolute w-[80px] h-[80px] bg-white bg-opacity-20 bottom-[-150px] left-[25%] animate-circle"></li>
            <li class="absolute w-[20px] h-[20px] bg-white bg-opacity-20 bottom-[-150px] left-[10%] animate-circle-12"></li>
            <li class="absolute w-[20px] h-[20px] bg-white bg-opacity-20 bottom-[-150px] left-[70%] animate-circle"></li>
            <li class="absolute w-[60px] h-[60px] bg-white bg-opacity-20 bottom-[-150px] left-[40%] animate-circle-18"></li>
            <li class="absolute w-[20px] h-[20px] bg-white bg-opacity-20 bottom-[-150px] left-[65%] animate-circle"></li>
            <li class="absolute w-[110px] h-[110px] bg-white bg-opacity-20 bottom-[-150px] left-[75%] animate-circle"></li>
            <li class="absolute w-[150px] h-[150px] bg-white bg-opacity-20 bottom-[-150px] left-[35%] animate-circle"></li>
            <li class="absolute w-[25px] h-[25px] bg-white bg-opacity-20 bottom-[-150px] left-[50%] animate-circle-45"></li>
            <li class="absolute w-[15px] h-[15px] bg-white bg-opacity-20 bottom-[-150px] left-[20%] animate-circle-35"></li>
            <li class="absolute w-[150px] h-[150px] bg-white bg-opacity-20 bottom-[-150px] left-[85%] animate-circle-11"></li>
        </ul>

        <!-- Form Container -->
        <div class="relative flex items-center justify-center min-h-screen bg-transparent">
            <div class="w-full max-w-lg px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
                <h2 class="mb-6 text-2xl font-bold text-gray-700">Student Registration Form</h2>

                <form action="{{ route('student.store') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                    <div class="p-3 mb-4 text-red-800 bg-red-100 border-2 border-red-300 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Student First Name -->
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="fname">
                            Student First Name
                        </label>
                        <input name="fname" id="fname" type="text" placeholder="Enter student's first name"
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                    </div>

                    <!-- Student Last Name -->
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="lname">
                            Student Last Name
                        </label>
                        <input name="lname" id="lname" type="text" placeholder="Enter student's last name"
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                    </div>

                    <!-- Contact No -->
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="cnumber">
                            Contact No
                        </label>
                        <input name="cnumber" id="cnumber" type="tel" placeholder="Enter student's Contact No"
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                    </div>

                    <!-- Student Address -->
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                            Student Address
                        </label>
                        <input name="address" id="address" type="text" placeholder="Enter student's address"
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                    </div>


