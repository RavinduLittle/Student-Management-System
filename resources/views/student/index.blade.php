<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="m-4">
    <a href="{{ route('student.create') }}" class="px-4 py-2 m-10 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
        Create
    </a>
    <div class="flex flex-col m-10">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <table class="min-w-full text-sm font-medium text-left text-gray-800 dark:text-gray-500">
                        <thead class="bg-blue-400 dark:bg-blue-600">
                            <tr>
                                <th scope="row" class="px-6 py-4 text-white rounded-tl-lg">ID</th>
                                <th scope="col" class="px-6 py-4 text-white">First Name</th>
                                <th scope="col" class="px-6 py-4 text-white">Second Name</th>
                                <th scope="col" class="px-6 py-4 text-white">Phone Number</th>
                                <th scope="col" class="px-6 py-4 text-white">Address</th>
                                <th scope="col" class="px-6 py-4 text-white">Grade</th>
                                <th scope="col" class="px-6 py-4 text-white">Birth Date</th>
                                <th scope="col" class="px-6 py-4 text-white rounded-tr-lg">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)

                            <tr class="transition-colors duration-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <th scope="row" class="px-6 py-4">{{$student->id}}</th>
                                <td class="px-6 py-4">{{$student->fname}}</td>
                                <td class="px-6 py-4">{{$student->lname}}</td>
                                <td class="px-6 py-4">{{$student->cnumber}}</td>
                                <td class="px-6 py-4">{{$student->address}}</td>
                                <td class="px-6 py-4">{{$student->grade}}</td>
                                <td class="px-6 py-4">{{$student->dob}}</td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a href="{{route('student.edit',$student->id)}}" class="w-12 p-1 text-center text-white bg-blue-500 border-2 rounded">Edit</a>
                                        <a href="{{route('student.delete',$student->id)}}" class="p-1 text-center text-white bg-red-500 border-2 rounded w-14">Delete</a>

                                         </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
