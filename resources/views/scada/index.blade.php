<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="www.[yourdomain].com/FamilyTree.js"></script>
</head>

<body class="flex flex-col gap-y-4">
    <h1 class="text-3xl font-bold underline text-sky-900 ">
        Hello world!asasxxx
    </h1>





    <div class="text-white bg-black p-5 m-3 w-1/2 h-2/3 lg:w-auto  ">

        <div class="bg-gray-500 border-dashed border-2 border-white p-5 h-auto">
            test 2

            <script src="https://balkan.app/js/familytree.js"></script>
            <div id="tree" />

            <script>
                //JavaScript
                FamilyTree.CLINK_CURVE = 2;
                
                var family = new FamilyTree(document.getElementById("tree"), {
                    template: "tommy",
                    mouseScrool: FamilyTree.none,
                    clinks: [{
                            from: 1,
                            to: 2,
                            label: 'text'
                        },
                        {
                            from: 2,
                            to: 3,
                            template: 'blue'
                        },
                        {
                            from: 3,
                            to: 4,
                            template: 'yellow',
                            label: 'lorem ipsum'
                        },
                        {
                            from: 4,
                            to: 5,
                            template: 'yellow',
                            label: 'lorem ipsum'
                        },
                    ],
                    nodeBinding: {
                        field_0: "name"
                    }
                });

                family.load([{
                        id: 1,
                        pids: [1],
                        name: "Amber McKenzie",
                        gender: "female"
                    },
                    {
                        id: 2,
                        pids: [2],
                        name: "Ava Field",
                        gender: "male"
                    },
                    {
                        id: 3,
                        pids: [3],
                        name: "Ava Field",
                        gender: "female"
                    },

                    {
                        id: 4,
                        name: "Peter Stevens",
                        gender: "male"
                    },
                    {
                        id: 5,
                        fid: 4,
                        name: "Peter Stevens",
                        gender: "male"
                    }
                ]);
            </script>



        </div>

    </div>
</body>

</html>