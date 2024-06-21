<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>

<body class="flex flex-col gap-y-4">
    <h1 class="text-3xl font-bold underline bg-red-500 ">
        Node List
    </h1>

    <a class="w-fit p-1 m-4 bg-blue-300" href="/nodes/create">Add</a>


    <div>

        <table class="gap-2 border-4 border-black border-solid border-spacing-2">
            <tr class="border-4 border-black border-solid">
                <th>No.</th>
                <th>Nama</th>
                <th>Column no</th>
                <th>Color</th>


                <th class="w-32">Action</th>
            </tr>

            @foreach ($anodes as $anode)
            <tr>
                <td class="w-2 m-auto justify-center">{{$anode['id']}}</td>
                <td class="w-32 m-auto justify-center">{{$anode['name']}}</td>
                <td class="w-32 m-auto justify-center">{{$anode['acol_id']}}</td>
                <td class="w-32 m-auto justify-center">{{$anode['color']}}</td>

                <td class="w-32 m-auto justify-center">Xxx</td>
            </tr>
            @endforeach


        </table>

    </div>



    <p class="text-yellow-200 bg-black">test</p>


</body>

</html>