@extends('pages.Admin');


@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Sales Dashboard</h2>
        
        <!-- Table for sales data -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="py-3 px-4 text-left">title</th>
                        <th class="py-3 px-4 text-left">description</th>
                        <th class="py-3 px-4 text-left">status</th>
                        <th class="py-3 px-4 text-left">location</th>
                        <th class="py-3 px-4 text-left">number</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example sales data, you can loop this with PHP or a template engine -->
                    @foreach($Tsalle as $sale)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-4">{{$sale->title}}</td>
                        <td class="py-3 px-4">{{$sale->description}}</td>
                        <td class="py-3 px-4">{{$sale->status}}</td>
                        <td class="py-3 px-4">{{$sale->location}}</td>
                        <td class="py-3 px-4">{{$sale->number}}</td>
                        <td class="py-3 px-4 text-center">
                            <a href="/sales/update/{{$sale->id}}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors mr-2">
                                <i class="fas fa-pencil-alt"></i> <!-- Pencil icon for Update -->
                            </a>
                            <form action="/sales/delete/{{$sale->id}}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors">
                                    <i class="fas fa-trash"></i> 
                                </button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
@endsection