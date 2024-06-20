<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="flex flex-col gap-y-4">
    <h1 class="text-3xl font-bold underline bg-red-500 ">
        Add Column
    </h1>


    <div class="m-auto w-fit">

        <form method="post" action="/columns">
            @csrf
            <label for="name">Nama:</label><br>
            <input class="border-black border-solid border" type="text" id="name" name="name"><br>
            
            <button class="bg-gray-200 hover:bg-gray-400" type="submit" >Submit</button>
        </form>

    </div>



    <p class="text-yellow-200 bg-black">test</p>


</body>

</html>