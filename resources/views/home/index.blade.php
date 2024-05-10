@extends('layout.app')

@section('contents')
<section>
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center mb-5">
        Menu Pesanan
    </h1>
    <div class="container py-32 px-5 md:p-0 flex flex-col  w-full justify-center items-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach ($foods as $index => $food)
                    <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
                        <span class="bg-red-100 border border-red-500 rounded-full text-primary text-sm poppins px-4 py-1 inline-block mb-4 ">Makanan</span>
                        <div class="w-full max-h-[90%] flex flex-col">
                            <img class="w-32 min-h-24 max-h-24 mx-auto transform transition duration-300 hover:scale-105 basis-[20%]" src='{{ asset('assets/images/food' . ($index + 1) .  '.jpg') }}' alt="" />
                            <div class="flex flex-col items-center my-3 space-y-2 basis-[80%] overflow-clip">
                                <h1 class="text-gray-900 poppins text-lg">{{ $food->nama }}</h1>
                                <p class="text-gray-500 poppins text-sm text-center">{{ strlen($food->description) > 50 ? substr($food->description, 0, 50) . '...' : $food->description }}</p>
                                <h2 class="text-gray-900 poppins text-2xl font-bold">Rp.{{ $food->harga }}</h2>
                                <a href="/order" class="bg-primary text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onClick={handleRoute}>Order Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        <a href="/order" class="p-3 rounded bg-blue-500 mt-12 font-bold text-white hover:bg-blue-800 transition duration-200 ease-in-out">Pesan Sekarang</a>
    </div>
</section>
@endsection