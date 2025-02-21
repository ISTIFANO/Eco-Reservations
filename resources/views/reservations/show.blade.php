<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Reservations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-[Poppins]">
    <!-- Header Section -->
        <div class="container mx-auto px-4">
            <!-- Top Bar -->
            <div class="flex justify-between items-center py-4 border-b border-gray-100">
                <div class="flex items-center space-x-2">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <span class="text-xl font-semibold text-gray-800">Eco-reservation</span>
                </div>
    
                <div class="flex items-center space-x-6">
               <a href="/mesreservation">
                    <button id="openModal" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <span>Profile</span>
                    </button>
                </a>
                </div>
            </div>
    
            <div class="py-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-3">Available Rooms</h1>
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Find and book your perfect room</p>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center text-gray-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z"/>
                            </svg>
                            <span>24 rooms available</span>
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Updated 5 mins ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container mx-auto px-4 pb-12">
        <div class="mb-8 bg-white p-4 rounded-lg shadow-sm">
            <div class="flex flex-wrap gap-4 items-center">
                <input type="text" placeholder="Search rooms..." class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($salle as $salles)
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-2xl hover:transform hover:scale-[1.02]">
                <div class="relative">
                    <img src="{{$salles->images}}" alt="{{$salles->title}}" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-white rounded-full text-sm font-medium text-gray-700 shadow">
                            {{$salles->status}}
                        </span>
                    </div>
                </div>

             
                <div class= "p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{$salles->title}}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{$salles->description}}</p>
             
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-sm">{{$salles->location}}</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-sm">{{$salles->number}}</span>
                        </div>
                    </div>

                  
                    <form action="/ApplayReservation" method="post" class="mt-4">
                        @csrf
                        <input type="hidden" name="user_id" value="1">

                        <input type="hidden" name="status" value="panding">
                        <button type="submit" name="salle_id" value="{{$salles->id}}" 
                            class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-medium
                            transition-colors duration-200 hover:bg-blue-700 focus:outline-none 
                            focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Reserve Now
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Empty State -->
    @if(count($salle) == 0)
    <div class="text-center py-12">
        <div class="text-gray-400 mb-4">
            <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
            </svg>
        </div>
        <h3 class="text-lg font-medium text-gray-900">No rooms available</h3>
        <p class="mt-1 text-gray-500">Check back later for new rooms.</p>
    </div>
    @endif

    <!-- Footer -->
    <footer class="bg-white border-t mt-12">
        <div class="container mx-auto px-4 py-6">
            <p class="text-center text-gray-600 text-sm">© 2024 Room Reservation System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>