<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="flex flex-col gap-y-4 bg-black text-white">
    <h1 class="text-3xl font-bold underline bg-red-500 ">
        Add Column
    </h1>


    <div class="m-auto w-fit">

        <form method="post" action="/columns">
            @csrf
            <div class="m-2">
                <label for="name">Nama:</label><br>
                <input class="border-black border-solid border h-8 text-black px-1" type="text" id="name" name="name"><br>
            </div>

            <div class="w-fit mx-auto bg-green-400">
                <button class="bg-blue-400 hover:bg-blue-800 mx-auto p-2 w-24" type="submit">Submit</button>
            </div>
        </form>

    </div>






</body>



</html>