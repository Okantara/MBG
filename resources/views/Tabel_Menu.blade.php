<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Table Menu Rekab Menu</title>
    <!-- Tailwind CSS v3 CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style data-purpose="custom-table-styles">
      /* Ensure table borders are crisp and black as per the image */
      table,
      th,
      td {
        border: 1px solid black !important;
      }
      th,
      td {
        padding: 8px 12px;
        text-align: center;
      }
      /* Simple sans-serif font preference */
      body {
        font-family:
          ui-sans-serif,
          system-ui,
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          Roboto,
          "Helvetica Neue",
          Arial,
          sans-serif;
      }
    </style>
    <style data-purpose="button-styles">
      /* Specific yellow for buttons as seen in the image */
      .btn-yellow {
        background-color: #ffff00;
        border: 1px solid #000;
        border-radius: 8px;
        padding: 6px 20px;
        font-weight: 500;
        transition: background-color 0.2s;
      }
      .btn-yellow:hover {
        background-color: #e6e600;
      }
    </style>
  </head>
  <body class="bg-white p-0 m-0">
    <!-- BEGIN: MainHeader -->
    <header class="fixed top-0 left-0 right-0 z-50">
      <div
        class="flex items-center justify-between py-5 px-5 bg-blue-600 text-white w-full"
      >
        <!-- KIRI -->
        <div class="flex items-center gap-8">
          <a href="#" class="hover:underline font-semibold">Logo</a>
          <!-- Dropdown Yayasan -->
          <!-- Yayasan -->
    <div class="relative">
      <a href="#" onclick="toggleMenu(event, this)" class="hover:underline">
        Yayasan
      </a>

      <div onclick="event.stopPropagation()" 
           class="hidden absolute left-0 top-full mt-2 bg-white shadow-md min-w-[150px] rounded dropdown">
        <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Password</a>
        <a href="Input_Kategori.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Input Kategori</a>
        <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Input Data Ompreng</a>
      </div>
    </div>

    <!-- Data Menu -->
    <div class="relative">
      <a href="#" onclick="toggleMenu(event, this)" class="hover:underline">
        Data Menu
      </a>

      <div onclick="event.stopPropagation()" 
           class="hidden absolute left-0 top-full mt-2 bg-white shadow-md min-w-[150px] rounded dropdown">
        <a href="Input_Menu.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Input Menu</a>
        <a href="Tabel_Menu.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Tabel Menu</a>
        <a href="Tabel_Ompreng.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Tabel Ompreng</a>
      </div>
    </div>

    <!-- Keuangan -->
    <div class="relative">
      <a href="#" onclick="toggleMenu(event, this)" class="hover:underline">
        Keuangan
      </a>

      <div onclick="event.stopPropagation()" 
           class="hidden absolute left-0 top-full mt-2 bg-white shadow-md min-w-[150px] rounded dropdown">
        <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Biaya belanja</a>
        <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Biaya Operasional</a>
        <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Tabel Biaya</a>
        <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Tabel Operasional</a>
      </div>
    </div>

  </div>

  <script>
    function toggleMenu(event, element) {
      event.stopPropagation();

      const dropdown = element.nextElementSibling;

      const isOpen = !dropdown.classList.contains("hidden");

      // tutup semua dropdown
      document.querySelectorAll(".dropdown").forEach(menu => {
        menu.classList.add("hidden");
      });

      // buka jika sebelumnya tertutup
      if (!isOpen) {
        dropdown.classList.remove("hidden");
      }
    }

    // klik di luar → tutup semua dropdown
    document.addEventListener("click", function () {
      document.querySelectorAll(".dropdown").forEach(menu => {
        menu.classList.add("hidden");
      });
    });
  </script>
<!-- KANAN -->
        <div>
          <h1 class="font-bold">Admin</h1>
        </div>
      </div>
        </div>
    </header>
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
