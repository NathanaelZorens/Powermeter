

<div class="border-2 border-black border-solid rounded-lg">
    <div class="absolute m-2">
        <h4 class="text-white text-lg font-bold">{{$name}}</h4>
        <p>{{$name}}</p>

        <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
            <polygon points="10,1 15,19 5,19" style="fill:lime;stroke:purple;stroke-width:3" />
        </svg>

    </div>

    <svg height="100" width="192" viewBox="0 0 192 100" xmlns="http://www.w3.org/2000/svg">
        <rect width="192" height="100" rx="6"  fill="{{$color}}">
    </svg>
</div>

<!-- border komponen keseluruhan (div) sama border rect-nya svg biar pas pakai nilai yang sama atau selisih 2 (yang svg lebih kecil)  -->