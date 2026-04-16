@extends('layouts.app')

@section('title', 'MBG || Home')

@section('content')
    <!-- END: MainHeader -->
    <!-- BEGIN: MainContent -->
    <main
      class="container mx-auto mt-8 px-4 pt-16"
      data-purpose="main-content-layout"
    >
      <!-- Page Title -->
      <h1
        class="text-3xl font-bold text-center mb-10"
        data-purpose="page-title"
      >
        Table Menu Rekab Menu
      </h1>
      <!-- Filter Controls -->
      <div
        class="flex flex-wrap items-center gap-4 mb-8 ml-4"
        data-purpose="filter-controls"
      >
        <!-- Date Input 1 -->
        <div class="relative">
          <select
            class="border border-black px-4 py-3 pr-10 rounded-none w-48 appearance-none bg-white text-lg"
          >
            <option>13/04/2026</option>
          </select>
          <div
            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
          >
            </svg>
          </div>
        </div>
        <!-- Date Input 2 -->
        <div class="relative">
          <select
            class="border border-black px-4 py-3 pr-10 rounded-none w-48 appearance-none bg-white text-lg"
          >
            <option>18/04/2026</option>
          </select>
          <div
            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
          >
          </div>
        </div>
        <!-- Action Buttons -->
        <button class="btn-yellow text-xl" data-purpose="action-ok">OK</button>
        <button class="btn-yellow text-xl" data-purpose="action-pdf">
          Save PDF
        </button>
        <button class="btn-yellow text-xl" data-purpose="action-print">
          Print
        </button>
      </div>
      <!-- BEGIN: MenuTable -->
      <div class="overflow-x-auto mx-4" data-purpose="table-container">
        <table class="w-full border-collapse" id="menu-table">
          <thead class="text-xl font-normal">
            <tr>
              <th class="w-1/6">Hari, Tanggal</th>
              <th class="w-1/6">Karbohidrat</th>
              <th class="w-1/6">Hewani</th>
              <th class="w-1/6">Nabati</th>
              <th class="w-1/6">Sayuran</th>
              <th class="w-1/6">Buah/Minuman</th>
            </tr>
          </thead>
          <tbody class="text-lg">
            <tr>
              <td>Senin, 13/04/2026</td>
              <td>Nasi</td>
              <td class="font-bold">Ayam Goreng</td>
              <td class="font-bold">Tahu</td>
              <td class="font-bold">Sawi Dan timun</td>
              <td class="font-bold">Jeruk</td>
            </tr>
            <tr>
              <td>Selasa, 14/04/2026</td>
              <td>Nasi</td>
              <td class="font-bold">Ayam Opor</td>
              <td class="font-bold">Tahu</td>
              <td class="font-bold">Sawi Dan timun</td>
              <td class="font-bold">Jeruk</td>
            </tr>
            <tr>
              <td>Rabu, 15/04/2026</td>
              <td>Nasi</td>
              <td class="font-bold">Ayam Kecap</td>
              <td class="font-bold">Tempe</td>
              <td>Tumis Jagung Wortel</td>
              <td class="font-bold">Pisang</td>
            </tr>
            <tr>
              <td>Kamis, 16/04/2026</td>
              <td>Nasi</td>
              <td class="font-bold">Abon Ayam</td>
              <td class="font-bold">Tempe</td>
              <td>Tumis Jagung Wortel</td>
              <td class="font-bold">Susu Kotak</td>
            </tr>
            <tr>
              <td>Juma'at, 17/04/2026</td>
              <td>Nasi</td>
              <td class="font-bold">Daging Sapi</td>
              <td class="font-bold">Dadar jagung</td>
              <td class="font-bold">Sawi Dan timun</td>
              <td class="font-bold">Pisang</td>
            </tr>
            <tr>
              <td>Sabtu, 18/04/2026</td>
              <td>Nasi</td>
              <td class="font-bold">Telor</td>
              <td class="font-bold">Dadar jagung</td>
              <td class="text-sm">Oseng-oseng Kacang Panjang</td>
              <td class="font-bold">Melon</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- END: MenuTable -->
    </main>
    <!-- END: MainContent -->
  </body>
</html>
