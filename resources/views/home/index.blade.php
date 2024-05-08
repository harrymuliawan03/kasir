@extends('layout.app')

@section('contents')
<section>
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center mb-5">
        Silahkan Pesan Makanan Anda
    </h1>
    <div class="container py-32 px-5 md:p-0 flex flex-col md:flex-row w-full justify-between space-y-10 md:space-y-0 md:space-x-10 items-center md:h-[550px]">
        <div class="md:basis-[70%]">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-10">
                <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
                    <span class="bg-red-100 border border-red-500 rounded-full text-primary text-sm poppins px-4 py-1 inline-block mb-4 ">{foodType}</span>
                    <img class="w-64 mx-auto transform transition duration-300 hover:scale-105" src={image} alt="" />
                    <div class="flex flex-col items-center my-3 space-y-2">
                        <h1 class="text-gray-900 poppins text-lg">{title}</h1>
                        <p class="text-gray-500 poppins text-sm text-center">{description.slice(0,50)}</p>
                        <h2 class="text-gray-900 poppins text-2xl font-bold">${price}</h2>
                        <button class="bg-primary text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onClick={handleRoute}>Order Now</button>
                    </div>
                </div>
                <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
                    <span class="bg-red-100 border border-red-500 rounded-full text-primary text-sm poppins px-4 py-1 inline-block mb-4 ">{foodType}</span>
                    <img class="w-64 mx-auto transform transition duration-300 hover:scale-105" src={image} alt="" />
                    <div class="flex flex-col items-center my-3 space-y-2">
                        <h1 class="text-gray-900 poppins text-lg">{title}</h1>
                        <p class="text-gray-500 poppins text-sm text-center">{description.slice(0,50)}</p>
                        <h2 class="text-gray-900 poppins text-2xl font-bold">${price}</h2>
                        <button class="bg-primary text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onClick={handleRoute}>Order Now</button>
                    </div>
                </div>
                <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
                    <span class="bg-red-100 border border-red-500 rounded-full text-primary text-sm poppins px-4 py-1 inline-block mb-4 ">{foodType}</span>
                    <img class="w-64 mx-auto transform transition duration-300 hover:scale-105" src={image} alt="" />
                    <div class="flex flex-col items-center my-3 space-y-2">
                        <h1 class="text-gray-900 poppins text-lg">{title}</h1>
                        <p class="text-gray-500 poppins text-sm text-center">{description.slice(0,50)}</p>
                        <h2 class="text-gray-900 poppins text-2xl font-bold">${price}</h2>
                        <button class="bg-primary text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onClick={handleRoute}>Order Now</button>
                    </div>
                </div>
                <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
                    <span class="bg-red-100 border border-red-500 rounded-full text-primary text-sm poppins px-4 py-1 inline-block mb-4 ">{foodType}</span>
                    <img class="w-64 mx-auto transform transition duration-300 hover:scale-105" src={image} alt="" />
                    <div class="flex flex-col items-center my-3 space-y-2">
                        <h1 class="text-gray-900 poppins text-lg">{title}</h1>
                        <p class="text-gray-500 poppins text-sm text-center">{description.slice(0,50)}</p>
                        <h2 class="text-gray-900 poppins text-2xl font-bold">${price}</h2>
                        <button class="bg-primary text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onClick={handleRoute}>Order Now</button>
                    </div>
                </div>
                <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
                    <span class="bg-red-100 border border-red-500 rounded-full text-primary text-sm poppins px-4 py-1 inline-block mb-4 ">{foodType}</span>
                    <img class="w-64 mx-auto transform transition duration-300 hover:scale-105" src={image} alt="" />
                    <div class="flex flex-col items-center my-3 space-y-2">
                        <h1 class="text-gray-900 poppins text-lg">{title}</h1>
                        <p class="text-gray-500 poppins text-sm text-center">{description.slice(0,50)}</p>
                        <h2 class="text-gray-900 poppins text-2xl font-bold">${price}</h2>
                        <button class="bg-primary text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onClick={handleRoute}>Order Now</button>
                    </div>
                </div>
                <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
                    <span class="bg-red-100 border border-red-500 rounded-full text-primary text-sm poppins px-4 py-1 inline-block mb-4 ">{foodType}</span>
                    <img class="w-64 mx-auto transform transition duration-300 hover:scale-105" src={image} alt="" />
                    <div class="flex flex-col items-center my-3 space-y-2">
                        <h1 class="text-gray-900 poppins text-lg">{title}</h1>
                        <p class="text-gray-500 poppins text-sm text-center">{description.slice(0,50)}</p>
                        <h2 class="text-gray-900 poppins text-2xl font-bold">${price}</h2>
                        <button class="bg-primary text-white px-8 py-2 focus:outline-none poppins rounded-full mt-24 transform transition duration-300 hover:scale-105" onClick={handleRoute}>Order Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="basis-1/2 md:basis-1/4 h-full bg-amber-300 rounded-xl p-4">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Daftar Pesanan
            </h1>
            <div class="max-h-[90%] flex flex-col gap-5 overflow-auto rounded-xl w-full h-full bg-white p-5">
                <div class="flex flex-row justify-between">
                    <p class="basis-1/12">1.</p>
                    <p class="basis-2/3">Ayam Bakar Paket Komplit</p>
                    <div class="relative">
                        <img src="{{asset('assets/images/makanan1.jpeg')}}" alt="" class='basis-1/12 w-12 h-12 rounded-xl'>
                        <p class="rounded-full absolute top-0 -right-2 bg-red-400 h-5 w-5 text-center content-center font-bold text-white">x</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between">
                    <p class="basis-1/12">1.</p>
                    <p class="basis-2/3">Ayam Bakar Paket Komplit</p>
                    <div class="relative">
                        <img src="{{asset('assets/images/makanan1.jpeg')}}" alt="" class='basis-1/12 w-12 h-12 rounded-xl'>
                        <a class="rounded-full absolute top-0 -right-2 bg-red-400 h-5 w-5 text-center content-center font-bold text-white  cursor-pointer hover:scale-110 transition duration-200 ease-in-out">x</a>
                        <p class="absolute top-0 -right-5 bg-red-400 rounded-xl text-[10px] p-1">Hapus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection