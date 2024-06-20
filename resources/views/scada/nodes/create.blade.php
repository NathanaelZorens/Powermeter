<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="flex flex-col gap-y-4">
    <h1 class="text-3xl font-bold underline bg-red-500 ">
        Add Node
    </h1>


    <div class="m-auto w-fit">

        <form method="post" action="/nodes">
            @csrf
            <label for="name">Name:</label><br>
            <input class="border-black border-solid border" type="text" id="name" name="name"><br>

            <label for="color">Color:</label><br>
            <select name="color" id="color">
                    <option value="red" style="background-color: red;">Red</option>
                    <option value="blue" style="background-color: blue;">Blue</option>
                    <option value="yellow">Yellow</option>
                    <option value="gray">Gray</option>
                    <option value="green">Green</option>
                    <option value="magenta">Pink</option>
                    <option value="white">White</option>
                    <option value="purple">Purple</option>
                    <option value="crimson" style="background-color: crimson;">Crimson</option>
                    <option value="navy" style="background-color: navy;">Navy</option>
                    <option value="orange">Orange</option>


            </select>

            <br>

            <label for="col_id">Posisi:</label><br>
            <select name="col_id" id="col_id">
                @foreach ($acols as $acol)
                    <option value="{{$acol['id']}}">{{$acol['name']}}</option>
                @endforeach
            </select>

            <br>

            <button class="bg-gray-200 hover:bg-gray-400" type="submit">Submit</button>
        </form>

    </div>



    <p class="text-yellow-200 bg-black">test</p>


</body>

</html>