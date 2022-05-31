<x-user-dashboard>
    <x-slot name="lead">
    </x-slot>

    <x-slot name="search">
        <div class="container font-sans bg-green-100 rounded mt-3 p-4 md:p-24 text-center">
            <h2 class="font-bold break-normal text-2xl md:text-4xl">Cek Data Ibu Hamil Dan Balita</h2>
            <h3 class="font-bold break-normal text-gray-600 text-base md:text-xl">Memastikan ibu hamil dan balita mendapatkan status sehat</h3>
            <div class="w-full text-center pt-4">
                <form action="#" method="GET">
                    <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                        <input name="" value="" type="search" placeholder="NIK (exp.2015101008)" maxlength="16" class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                        <button type="submit" class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-user-dashboard>
