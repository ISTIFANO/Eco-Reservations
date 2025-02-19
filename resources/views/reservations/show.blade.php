
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<div class="ml-64 flex-1 p-8">
    <div class="flex flex-wrap gap-3 mx-auto justify-center">
        <div class="bg-white p-2 lg:w-[17%] md:w-[40%] sm:w-[60%] border-[1px] border-solid border-gray-400 rounded-lg shadow-xl mb-3 transition-transform hover:scale-105">
            <div class="flex flex-col justify-center items-center">
                <img src="path/to/photo.jpg" alt="photo of project title" class="w-[100%] h-35 object-cover rounded-md">
                <div>
                    <h3 class="text-xl text-center font-semibold text-gray-800">Project Title</h3>
                    <p class="text-gray-600 mt-1">Project Description</p>
                </div>
            </div>
            <div class="mt-4 text-gray-600 space-y-2">
                <p class="text-sm">Budget: $XXX</p>
                <p class="text-sm">Durée: XX days</p>
            </div>
            <div class="flex justify-center space-x-4 mt-4">
                <form action="/Freelencer/Aplayinfo" method="post">
                    <input type="hidden" name="client_id" value="Client_ID">
                    <input type="hidden" name="id_project" value="Project_ID">

                    <button type="submit" name="applay" value="Project_ID" class="bg-red-500 text-white px-2 py-2 text-xs rounded-md transition-colors hover:bg-red-600 focus:outline-none">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
