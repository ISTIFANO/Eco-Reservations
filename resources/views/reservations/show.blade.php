<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-8">
        <div class="flex flex-wrap justify-between gap-8">
            @foreach($salle as $salles)
            <div class="bg-white p-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 border border-gray-300 rounded-lg shadow-xl transition-transform transform hover:scale-105">
                <div class="flex flex-col justify-center items-center">
                    <img src="path/to/photo.jpg" alt="photo of project title" class="w-full h-48 object-cover rounded-md">
                    <div class="mt-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">{{$salles->title}}</h3>
                        <p class="text-gray-600 mt-2">{{$salles->description}}</p>
                        <p class="text-gray-600 mt-1">{{$salles->status}}</p>
                    </div>
                </div>

                <div class="mt-4 text-gray-600 space-y-2 text-center">
                    <p class="text-sm">{{$salles->location}}</p>
                    <p class="text-sm">{{$salles->number}}</p>
                </div>

                <div class="flex justify-center mt-4">
                    <form action="/Freelencer/Aplayinfo" method="post">
                        <button type="submit" name="applay" value="Project_ID" class="bg-red-500 text-white px-6 py-2 text-sm rounded-md transition-colors hover:bg-red-600 focus:outline-none">
                            Apply
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>
