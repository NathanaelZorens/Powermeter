<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="flex flex-col gap-y-4">
    <h1 class="text-3xl font-bold underline bg-red-500 ">
        Hello world!asas
    </h1>


    <div>
    <button class="w-fit p-2 bg-blue-300">Add</button>

        <table class="gap-2 border-4 border-black border-solid border-spacing-2">
            <tr class="border-4 border-black border-solid">
                <th>No.</th>
                <th >Nama</th>
                <th class="w-32">Aksi</th>
            </tr>

            @foreach ($acols as $acol)
            <tr>
                <td class="w-2 m-auto justify-center">{{$acol['id']}}</td>
                <td class="w-32 m-auto justify-center">{{$acol['name']}}</td>
                <td class="w-32 m-auto justify-center">Xxx</td>
            </tr>
            @endforeach


        </table>

</div>

        
<div>

        <table class="gap-2 border-4 border-black border-solid border-spacing-2">
            <tr class="border-4 border-black border-solid">
                <th>No.</th>
                <th>Nama</th>
                <th>Warna</th>
                <th class="w-32">Aksi</th>
            </tr>

            @foreach ($anodes as $anode)
            <tr>
                <td class="w-2 m-auto justify-center">{{$anode['id']}}</td>
                <td class="w-32 m-auto justify-center">{{$anode['name']}}</td>
                <td id="color" class="w-32 m-auto justify-center bg-slate-400" style="color:<?php echo $anode['color'] ?>">{{$anode['color']}}</td>
                <td class="w-32 m-auto justify-center">Xxx</td>
            </tr>

            <?php 

            ?>

            

            @endforeach

       

        </table>



    </div>

<p class="text-yellow-200 bg-black">test</p>


</body>

</html>