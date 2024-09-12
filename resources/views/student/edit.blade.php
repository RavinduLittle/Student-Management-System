<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-50">
        <div class="w-full max-w-lg px-8 pt-6 pb-8 mb-4 bg-white rounded-lg shadow-lg">
          <h2 class="mb-6 text-3xl font-semibold text-blue-600">Edit Student Information</h2>

          <form action="{{route('student.update',$student->id)}}" method="POST">
            @method('PUT')

            @csrf
            @if ($errors->any())
            <div class="p-4 mb-4 text-red-800 bg-red-100 border border-red-200 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Student First Name -->
            <div class="mb-5">
              <label class="block mb-2 text-sm font-medium text-gray-700" for="student-fname">
                First Name
              </label>
              <input
                name="fname"
                id="student-fname"
                type="text"
                value="{{$student->fname}}"
                placeholder="Enter student's first name"
                class="w-full px-4 py-3 leading-tight text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
              />
            </div>

            <!-- Student Last Name -->
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="student-lname">
                  Last Name
                </label>
                <input
                name="lname"
                  id="student-lname"
                  type="text"
                  value="{{$student->lname}}"
                  placeholder="Enter student's last name"
                  class="w-full px-4 py-3 leading-tight text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                />
            </div>

            <!-- Contact Number -->
            <div class="mb-5">
              <label class="block mb-2 text-sm font-medium text-gray-700" for="cnumber">
                Contact Number
              </label>
              <input
              name="cnumber"
                id="cnumber"
                type="tel"
                value="{{$student->cnumber}}"
                placeholder="Enter contact number"
                class="w-full px-4 py-3 leading-tight text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
              />
            </div>

             <!-- Student Address -->
             <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="student-address">
                  Address
                </label>
                <input
                name="address"
                  id="student-address"
                  type="text"
                  value="{{$student->address}}"
                  placeholder="Enter student's address"
                  class="w-full px-4 py-3 leading-tight text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                />
              </div>

            <!-- Grade -->
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="grade">
                    Grade
                </label>
                <input
                name="grade"
                  id="grade"
                  type="text"
                  value="{{$student->grade}}"
                  placeholder="Enter student's grade"
                  class="w-full px-4 py-3 leading-tight text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                />
            </div>

            <!-- Date of Birth -->
            <div class="mb-5">
              <label class="block mb-2 text-sm font-medium text-gray-700" for="dob">
                Date of Birth
              </label>
              <input
              name="dob"
                id="dob"
                type="date"
                value="{{$student->dob}}"
                class="w-full px-4 py-3 leading-tight text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
              />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
              <button
                type="submit"
                class="px-6 py-3 text-lg font-bold text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:shadow-outline"
              >
                Update Information
              </button>
            </div>
          </form>
        </div>
      </div>
</body>


</html>
