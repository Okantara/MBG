@extends('layouts.app')

@section('title', 'MBG || Home')

@section('content')
    <!-- Main Content -->
    <main class="pt-5 px-5">
      <div class="flex items-center justify-between pt-16">
        <h1 class="text-2xl font-bold">Menu MBG <span>SMK 5</span></h1>
        <h2 class="text-2xl font-bold hover:underline"><a href="#">Login</a></h2>
      </div>
    </main>
    <!-- card-->
    <main class="flex flex-wrap justify-between p-4 gap-6">
    <!-- Card Senin -->
  <div class="flex flex-col w-96 p-4 bg-blue-200 border border-gray-300 rounded-xl shadow">

    <!-- Row 1 -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-lg font-bold text-slate-950 text-center">Senin</h2>
        <p class="text-sm text-slate-950">13/04/2026</p>
      </div>
      <div class="text-right">
        <h2 class="text-2xl font-bold">3500</h2>
        <p class="text-sm text-slate-950">Jumlah Ompreng</p>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid grid-cols-4 gap-3 p-2 bg-white rounded-lg">
      <div class="text-center border rounded-sm border-b">
        <h5 class="font-bold text-white bg-blue-500 py-1 rounded-sm">2800</h5>
        <p class="text-xs">SMKN 5</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-green-500 py-1 rounded-sm">400</h5>
        <p class="text-xs">Pesantren</p>
      </div>
      <div class="text-center border rounded-sm ">
        <h5 class="font-bold text-white bg-yellow-500 py-1 rounded-sm">200</h5>
        <p class="text-xs">Ibu Hamil</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-red-400 py-1 rounded-sm">100</h5>
        <p class="text-xs">Balita</p>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="grid grid-cols-4 text-xs mt-3 gap-2">
    <!-- Cols 1 -->
      <div class="grid grid-rows-5 gap-2">
        <p class="text-align pt-1 px-2 bg-yellow-300 rounded-lg border border-white">Karbohidrat</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Hewani</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Nabati</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Sayuran</p>
        <p class="text-align pt-1 bg-yellow-300 rounded-lg border border-white">Buah / Minum</p>
      </div>
      <!-- Cols 2 -->
      <div class="grid grid-rows-5 col-span-2 gap-2">
        <p class="p-1 border rounded-lg bg-white">Nasi</p>
        <p class="p-1 border rounded-lg bg-white ">Ayam Kuah</p>
        <p class="p-1 border rounded-lg bg-white ">Tahu Goreng</p>
        <p class="p-1 border rounded-lg bg-white ">Tumis Jagung Wortel</p>
        <p class="p-1 border rounded-lg bg-white ">Semangka</p>
      </div>
      <!-- Cols 3   -->
      <div class="h-full">
        <img src="./Assest/Ompreng.jpeg"
             class="w-full h-full object-cover rounded-lg">
      </div>

    </div>
    <!-- Catatan -->
     <div>
        <p class="text-left text-xs mt-1 px-2">Catatan : </p>
    <div class=" p-2 bg-gray-200 rounded-lg">
      <p class="text-xs text-gray-700 text-center">...........</p>
    </div>
     </div>
  </div>
    <!-- Card Selasa -->
  <div class="flex flex-col w-96 p-4 bg-blue-200 border border-gray-300 rounded-xl shadow">

    <!-- Row 1 -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-lg font-bold text-slate-950 text-center">Selasa</h2>
        <p class="text-sm text-slate-950">14/04/2026</p>
      </div>
      <div class="text-right">
        <h2 class="text-2xl font-bold">3500</h2>
        <p class="text-sm text-slate-950">Jumlah Ompreng</p>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid grid-cols-4 gap-3 p-2 bg-white rounded-lg">
      <div class="text-center border rounded-sm border-b">
        <h5 class="font-bold text-white bg-blue-500 py-1 rounded-sm">2800</h5>
        <p class="text-xs">SMKN 5</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-green-500 py-1 rounded-sm">400</h5>
        <p class="text-xs">Pesantren</p>
      </div>
      <div class="text-center border rounded-sm ">
        <h5 class="font-bold text-white bg-yellow-500 py-1 rounded-sm">200</h5>
        <p class="text-xs">Ibu Hamil</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-red-400 py-1 rounded-sm">100</h5>
        <p class="text-xs">Balita</p>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="grid grid-cols-4 text-xs mt-3 gap-2">
    <!-- Cols 1 -->
      <div class="grid grid-rows-5 gap-2">
        <p class="text-align pt-1 px-2 bg-yellow-300 rounded-lg border border-white">Karbohidrat</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Hewani</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Nabati</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Sayuran</p>
        <p class="text-align pt-1 bg-yellow-300 rounded-lg border border-white">Buah / Minum</p>
      </div>
      <!-- Cols 2 -->
      <div class="grid grid-rows-5 col-span-2 gap-2">
        <p class="p-1 border rounded-lg bg-white">Nasi</p>
        <p class="p-1 border rounded-lg bg-white ">Ayam Kuah</p>
        <p class="p-1 border rounded-lg bg-white ">Tahu Goreng</p>
        <p class="p-1 border rounded-lg bg-white ">Tumis Jagung Wortel</p>
        <p class="p-1 border rounded-lg bg-white ">Semangka</p>
      </div>
      <!-- Cols 3   -->
      <div class="h-full">
        <img src="./Assest/Ompreng.jpeg"
             class="w-full h-full object-cover rounded-lg">
      </div>

    </div>
    <!-- Catatan -->
     <div>
        <p class="text-left text-xs mt-1 px-2">Catatan : </p>
    <div class=" p-2 bg-gray-200 rounded-lg">
      <p class="text-xs text-gray-700 text-center">...........</p>
    </div>
     </div>
  </div>
      <!-- Card Rabu -->
  <div class="flex flex-col w-96 p-4 bg-blue-200 border border-gray-300 rounded-xl shadow">

    <!-- Row 1 -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-lg font-bold text-slate-950 text-center">Rabu</h2>
        <p class="text-sm text-slate-950">15/04/2026</p>
      </div>
      <div class="text-right">
        <h2 class="text-2xl font-bold">3500</h2>
        <p class="text-sm text-slate-950">Jumlah Ompreng</p>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid grid-cols-4 gap-3 p-2 bg-white rounded-lg">
      <div class="text-center border rounded-sm border-b">
        <h5 class="font-bold text-white bg-blue-500 py-1 rounded-sm">2800</h5>
        <p class="text-xs">SMKN 5</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-green-500 py-1 rounded-sm">400</h5>
        <p class="text-xs">Pesantren</p>
      </div>
      <div class="text-center border rounded-sm ">
        <h5 class="font-bold text-white bg-yellow-500 py-1 rounded-sm">200</h5>
        <p class="text-xs">Ibu Hamil</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-red-400 py-1 rounded-sm">100</h5>
        <p class="text-xs">Balita</p>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="grid grid-cols-4 text-xs mt-3 gap-2">
    <!-- Cols 1 -->
      <div class="grid grid-rows-5 gap-2">
        <p class="text-align pt-1 px-2 bg-yellow-300 rounded-lg border border-white">Karbohidrat</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Hewani</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Nabati</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Sayuran</p>
        <p class="text-align pt-1 bg-yellow-300 rounded-lg border border-white">Buah / Minum</p>
      </div>
      <!-- Cols 2 -->
      <div class="grid grid-rows-5 col-span-2 gap-2">
        <p class="p-1 border rounded-lg bg-white">Nasi</p>
        <p class="p-1 border rounded-lg bg-white ">Ayam Kuah</p>
        <p class="p-1 border rounded-lg bg-white ">Tahu Goreng</p>
        <p class="p-1 border rounded-lg bg-white ">Tumis Jagung Wortel</p>
        <p class="p-1 border rounded-lg bg-white ">Semangka</p>
      </div>
      <!-- Cols 3   -->
      <div class="h-full">
        <img src="./Assest/Ompreng.jpeg"
             class="w-full h-full object-cover rounded-lg">
      </div>

    </div>
    <!-- Catatan -->
     <div>
        <p class="text-left text-xs mt-1 px-2">Catatan : </p>
    <div class=" p-2 bg-gray-200 rounded-lg">
      <p class="text-xs text-gray-700 text-center">...........</p>
    </div>
     </div>
  </div>
      <!-- Card Kamis -->
  <div class="flex flex-col w-96 p-4 bg-blue-200 border border-gray-300 rounded-xl shadow">

    <!-- Row 1 -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-lg font-bold text-slate-950 text-center">Kamis</h2>
        <p class="text-sm text-slate-950">16/04/2026</p>
      </div>
      <div class="text-right">
        <h2 class="text-2xl font-bold">3500</h2>
        <p class="text-sm text-slate-950">Jumlah Ompreng</p>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid grid-cols-4 gap-3 p-2 bg-white rounded-lg">
      <div class="text-center border rounded-sm border-b">
        <h5 class="font-bold text-white bg-blue-500 py-1 rounded-sm">2800</h5>
        <p class="text-xs">SMKN 5</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-green-500 py-1 rounded-sm">400</h5>
        <p class="text-xs">Pesantren</p>
      </div>
      <div class="text-center border rounded-sm ">
        <h5 class="font-bold text-white bg-yellow-500 py-1 rounded-sm">200</h5>
        <p class="text-xs">Ibu Hamil</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-red-400 py-1 rounded-sm">100</h5>
        <p class="text-xs">Balita</p>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="grid grid-cols-4 text-xs mt-3 gap-2">
    <!-- Cols 1 -->
      <div class="grid grid-rows-5 gap-2">
        <p class="text-align pt-1 px-2 bg-yellow-300 rounded-lg border border-white">Karbohidrat</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Hewani</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Nabati</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Sayuran</p>
        <p class="text-align pt-1 bg-yellow-300 rounded-lg border border-white">Buah / Minum</p>
      </div>
      <!-- Cols 2 -->
      <div class="grid grid-rows-5 col-span-2 gap-2">
        <p class="p-1 border rounded-lg bg-white">Nasi</p>
        <p class="p-1 border rounded-lg bg-white ">Ayam Kuah</p>
        <p class="p-1 border rounded-lg bg-white ">Tahu Goreng</p>
        <p class="p-1 border rounded-lg bg-white ">Tumis Jagung Wortel</p>
        <p class="p-1 border rounded-lg bg-white ">Semangka</p>
      </div>
      <!-- Cols 3   -->
      <div class="h-full">
        <img src="./Assest/Ompreng.jpeg"
             class="w-full h-full object-cover rounded-lg">
      </div>

    </div>
    <!-- Catatan -->
     <div>
        <p class="text-left text-xs mt-1 px-2">Catatan : </p>
    <div class=" p-2 bg-gray-200 rounded-lg">
      <p class="text-xs text-gray-700 text-center">...........</p>
    </div>
     </div>
  </div>
      <!-- Card Jum'at -->
  <div class="flex flex-col w-96 p-4 bg-blue-200 border border-gray-300 rounded-xl shadow">

    <!-- Row 1 -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-lg font-bold text-slate-950 text-center">jum'at</h2>
        <p class="text-sm text-slate-950">17/04/2026</p>
      </div>
      <div class="text-right">
        <h2 class="text-2xl font-bold">3500</h2>
        <p class="text-sm text-slate-950">Jumlah Ompreng</p>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid grid-cols-4 gap-3 p-2 bg-white rounded-lg">
      <div class="text-center border rounded-sm border-b">
        <h5 class="font-bold text-white bg-blue-500 py-1 rounded-sm">2800</h5>
        <p class="text-xs">SMKN 5</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-green-500 py-1 rounded-sm">400</h5>
        <p class="text-xs">Pesantren</p>
      </div>
      <div class="text-center border rounded-sm ">
        <h5 class="font-bold text-white bg-yellow-500 py-1 rounded-sm">200</h5>
        <p class="text-xs">Ibu Hamil</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-red-400 py-1 rounded-sm">100</h5>
        <p class="text-xs">Balita</p>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="grid grid-cols-4 text-xs mt-3 gap-2">
    <!-- Cols 1 -->
      <div class="grid grid-rows-5 gap-2">
        <p class="text-align pt-1 px-2 bg-yellow-300 rounded-lg border border-white">Karbohidrat</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Hewani</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Nabati</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Sayuran</p>
        <p class="text-align pt-1 bg-yellow-300 rounded-lg border border-white">Buah / Minum</p>
      </div>
      <!-- Cols 2 -->
      <div class="grid grid-rows-5 col-span-2 gap-2">
        <p class="p-1 border rounded-lg bg-white">Nasi</p>
        <p class="p-1 border rounded-lg bg-white ">Ayam Kuah</p>
        <p class="p-1 border rounded-lg bg-white ">Tahu Goreng</p>
        <p class="p-1 border rounded-lg bg-white ">Tumis Jagung Wortel</p>
        <p class="p-1 border rounded-lg bg-white ">Semangka</p>
      </div>
      <!-- Cols 3   -->
      <div class="h-full">
        <img src="./Assest/Ompreng.jpeg"
             class="w-full h-full object-cover rounded-lg">
      </div>

    </div>
    <!-- Catatan -->
     <div>
        <p class="text-left text-xs mt-1 px-2">Catatan : </p>
    <div class=" p-2 bg-gray-200 rounded-lg">
      <p class="text-xs text-gray-700 text-center">...........</p>
    </div>
     </div>
  </div>
      <!-- Card Sabtu -->
  <div class="flex flex-col w-96 p-4 bg-blue-200 border border-gray-300 rounded-xl shadow">

    <!-- Row 1 -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-lg font-bold text-slate-950 text-center">Sabtu</h2>
        <p class="text-sm text-slate-950">18/04/2026</p>
      </div>
      <div class="text-right">
        <h2 class="text-2xl font-bold">3500</h2>
        <p class="text-sm text-slate-950">Jumlah Ompreng</p>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid grid-cols-4 gap-3 p-2 bg-white rounded-lg">
      <div class="text-center border rounded-sm border-b">
        <h5 class="font-bold text-white bg-blue-500 py-1 rounded-sm">2800</h5>
        <p class="text-xs">SMKN 5</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-green-500 py-1 rounded-sm">400</h5>
        <p class="text-xs">Pesantren</p>
      </div>
      <div class="text-center border rounded-sm ">
        <h5 class="font-bold text-white bg-yellow-500 py-1 rounded-sm">200</h5>
        <p class="text-xs">Ibu Hamil</p>
      </div>
      <div class="text-center border rounded-sm">
        <h5 class="font-bold text-white bg-red-400 py-1 rounded-sm">100</h5>
        <p class="text-xs">Balita</p>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="grid grid-cols-4 text-xs mt-3 gap-2">
    <!-- Cols 1 -->
      <div class="grid grid-rows-5 gap-2">
        <p class="text-align pt-1 px-2 bg-yellow-300 rounded-lg border border-white">Karbohidrat</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Hewani</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Nabati</p>
        <p class="text-align pt-1 px-5 bg-yellow-300 rounded-lg border border-white">Sayuran</p>
        <p class="text-align pt-1 bg-yellow-300 rounded-lg border border-white">Buah / Minum</p>
      </div>
      <!-- Cols 2 -->
      <div class="grid grid-rows-5 col-span-2 gap-2">
        <p class="p-1 border rounded-lg bg-white">Nasi</p>
        <p class="p-1 border rounded-lg bg-white ">Ayam Kuah</p>
        <p class="p-1 border rounded-lg bg-white ">Tahu Goreng</p>
        <p class="p-1 border rounded-lg bg-white ">Tumis Jagung Wortel</p>
        <p class="p-1 border rounded-lg bg-white ">Semangka</p>
      </div>
      <!-- Cols 3   -->
      <div class="h-full">
        <img src="./Assest/Ompreng.jpeg"
             class="w-full h-full object-cover rounded-lg">
      </div>

    </div>
    <!-- Catatan -->
     <div>
        <p class="text-left text-xs mt-1 px-2">Catatan : </p>
    <div class=" p-2 bg-gray-200 rounded-lg">
      <p class="text-xs text-gray-700 text-center">...........</p>
    </div>
     </div>
  </div>
</main>

<!-- Card Selasa -->
 
      <!-- <div
        class="grid grid-flow-col grid-rows-2 bg-white p-4 rounded-lg shadow-md gap-4"
      >
        <div class="border border-gray-500">
          <h2 class="text-lg font-bold">Senin</h2>
          <h2 class="text-md">13/04/2026</h2>
        </div>
        <div class="bg-white">
          <div class="flex items-center justify-between gap-4">
            <div class="border rounded-lg">
              <h5 class="bg-blue-500">2800</h5>
              <p>Siswa SMKN 5</p>
            </div>
            <div class="border rounded-lg">
              <h5>400</h5>
              <p>Santri Pesantren</p>
            </div>
            <div class="border rounded-lg">
              <h5>200</h5>
              <p>Ibu Hamil</p>
            </div>
            <div class="border rounded-lg">
              <h5>100</h5>
              <p>Balita</p>
            </div>
          </div>
        </div><h2 class="text-lg font-bold">Senin</h2>
        <h2 class="text-md">08:00 - 10:00</h2>
        <h1 class="text-2xl font-bold">3500</h1>
        <p>Jumlah Ompreng</p> -->
      <!-- <div class="border border-gray-500">
          <h2 class="text-lg font-bold">3500</h2>
          <h2 class="text-md">Jumlah Ompreng</h2>
        </div>
      </div> -->
    </main>
  </body>
</html>
