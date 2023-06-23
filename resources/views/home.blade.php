<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h2 class="text-center font-bold   p-8">Flex Box</h2>
    <div class="flex flex-wrap">
        <div class="bg-red-500 text-white flex-auto">
            item 1
        </div>
        <div class="bg-blue-500 text-white flex-auto">
            item 2
        </div>
        <div class="bg-yellow-500 text-white">
            item 3
        </div>
    </div>

        {{-- Justificado al centro con el mismo espacio --}}
        <h2 class="text-center font-bold   p-8">justificado con el mismo espacio evenly</h2>

    <div class="flex justify-evenly mt-4">
        <div class="bg-purple-500 text-white">
            item 4
        </div>
        <div class="bg-gray-500 text-white">
            item 5
        </div>
    </div>
    <h2 class="text-center font-bold  p-8">Justificados pero centrados:center</h2>

    <div class="flex justify-center mt-4">
        <div class="bg-purple-500 text-white">
            item 4
        </div>
        <div class="bg-gray-500 text-white">
            item 5
        </div>
    </div>
    <h2 class="text-center font-bold   p-8">Justificados al principio:start/end</h2>

    <div class="flex justify-start mt-4">
        <div class="bg-purple-500 text-white">
            item 4
        </div>
        <div class="bg-gray-500 text-white">
            item 5
        </div>
    </div>
    <h2 class="text-center font-bold   p-8">Pal medio: around</h2>
   
    <div class="flex justify-around mt-4">
        <div class="bg-purple-500 text-white">
            item 4
        </div>
        <div class="bg-gray-500 text-white">
            item 5
        </div>
    </div>

    <h2 class="text-2xl text-bold text-center">Cambios de resolución:</h2>

    <div class="flex sm:justify-center md:justify-end xl:justify-start mt-4">
            <div class="xl:bg-red-500 md:bg-orange-900">
                1
            </div>
            <div class="div bg-blue-500 sm:border-l-indigo-800">
                2
            </div>
            <div class="div bg-orange-500">
                3
            </div>
            <div class="div bg-green-500">
                4
            </div>
    </div>


    <div class="container bg-gray-500 mt-5">
        <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                <div class="bg-blue-300 col-span-2 col-start-2">a</div>
                <div class="bg-blue-400 col-start-1">b</div>
                <div class="bg-blue-500">c</div>
                <div class="bg-blue-600">d</div>
                <div class="bg-blue-500">c</div>
                <div class="bg-blue-600">d</div>

        </div>
    </div>
</body>
</html>