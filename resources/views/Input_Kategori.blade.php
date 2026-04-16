<!doctype html>

<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin - Input Menu</title>
    <!-- Tailwind CSS v3 CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts for sans-serif look -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <style data-purpose="custom-typography">
      body {
        font-family: "Inter", sans-serif;
        background-color: #ffffff;
      }
      .text-admin {
        color: #333;
        font-size: 2.5rem;
        font-weight: 400;
      }
    </style>
    <style data-purpose="custom-colors">
      .bg-cyan-custom {
        background-color: #00ccff;
      }
      .bg-yellow-custom {
        background-color: #ffff00;
      }
      .border-custom {
        border-color: #999;
      }
    </style>
  </head>
  <body class="p-0 m-0">
    <!-- BEGIN: Top Header -->
    <header class="fixed top-0 left-0 right-0 z-50">
      <div
        class="flex items-center justify-between py-5 px-5 bg-blue-600 text-white w-full"
      >
        <!-- KIRI -->
        <div class="flex items-center gap-8">
          <img src="./Assest/Logo_Badan_Gizi_Nasional_(2024).png" alt="Logo" class="h-8">
          <!-- Dropdown Yayasan -->
          <!-- Yayasan -->
    <div class="relative">
      <a href="#" onclick="toggleMenu(event, this)" class="hover:underline">
        Yayasan
      </a>

      <div onclick="event.stopPropagation()" 
           class="hidden absolute left-0 top-full mt-2 bg-white shadow-md min-w-[150px] rounded dropdown">
        <a href="Password.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Password</a>
        <a href="Input_Kategori_Ompreng.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Input Kategori & Ompreng</a>
        <a href="Input_Kategori.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Input Data Menu</a>
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
        <a href="Biaya_Bahan_Baku.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Biaya belanja</a>
        <a href="Biaya_Operasional.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Biaya Operasional</a>
        <a href="Tabel_Biaya.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Tabel Biaya</a>
        <a href="Tabel_Operasional.html" class="block px-4 py-2 text-xs hover:bg-gray-100 text-slate-950">Tabel Operasional</a>
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
      </div>
        </div>
    </header>
    <!-- END: Navigation Bar -->
    <!-- BEGIN: Main Content -->
    <main class="p-8 max-w-[1200px] mx-auto pt-20">
      <h2 class="text-2xl font-bold mb-6">Input Data Menu</h2>
      <!-- CATEGORY SECTION: Karbohidrat -->
      <!-- BEGIN: SectionKarbohidrat -->
      <section
        class="border border-gray-400 rounded-3xl p-8 mb-8 flex flex-col md:flex-row gap-8"
        data-purpose="category-card"
      >
        <!-- Left Input Side -->
        <div class="flex-1 flex items-center">
          <div class="flex w-full border border-gray-400 overflow-hidden">
            <div
              class="bg-yellow-custom px-6 py-3 font-bold border-r border-gray-400 min-w-[150px] flex items-center justify-center"
            >
              Karbohidrat
            </div>
            <input
              class="flex-1 px-4 py-3 outline-none border-none focus:ring-0 text-lg"
              type="text"
              value="Nasi"
            />
            <button
              class="px-4 py-3 border-l border-gray-400 hover:bg-gray-50 text-3xl leading-none"
            >
              +
            </button>
          </div>
        </div>
        <!-- Right List Side -->
        <div class="flex-1">
          <div class="border border-gray-400">
            <!-- Item Row -->
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2 last:border-b-0"
            >
              <span class="font-semibold text-lg px-2">Nasi</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded hover:bg-gray-100"
                >
                  Hapus
                </button>
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded hover:bg-gray-100"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2 last:border-b-0"
            >
              <span class="font-semibold text-lg px-2">Mie</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded hover:bg-gray-100"
                >
                  Hapus
                </button>
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded hover:bg-gray-100"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2 last:border-b-0"
            >
              <span class="font-semibold text-lg px-2">Roti</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded hover:bg-gray-100"
                >
                  Hapus
                </button>
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded hover:bg-gray-100"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2 last:border-b-0"
            >
              <span class="font-semibold text-lg px-2">Ubi</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded hover:bg-gray-100"
                >
                  Hapus
                </button>
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded hover:bg-gray-100"
                >
                  Edit
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: SectionKarbohidrat -->
      <!-- CATEGORY SECTION: Hewani -->
      <!-- BEGIN: SectionHewani -->
      <section
        class="border border-gray-400 rounded-3xl p-8 mb-8 flex flex-col md:flex-row gap-8"
        data-purpose="category-card"
      >
        <div class="flex-1 flex items-center">
          <div class="flex w-full border border-gray-400 overflow-hidden">
            <div
              class="bg-yellow-custom px-6 py-3 font-bold border-r border-gray-400 min-w-[150px] flex items-center justify-center"
            >
              Hewani
            </div>
            <input
              class="flex-1 px-4 py-3 outline-none border-none focus:ring-0 text-lg"
              type="text"
              value="Ayam Goreng"
            />
            <button
              class="px-4 py-3 border-l border-gray-400 hover:bg-gray-50 text-3xl leading-none"
            >
              +
            </button>
          </div>
        </div>
        <div class="flex-1">
          <div class="border border-gray-400">
            <!-- Item Rows -->
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Ayam Goreng</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Ayam Opor</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Ayam Kecap</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Abon Ayam</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Daging Sapi</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Telor</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2 last:border-b-0"
            >
              <span class="font-semibold text-lg px-2">Ayam Fillet</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: SectionHewani -->
      <!-- CATEGORY SECTION: Nabati -->
      <!-- BEGIN: SectionNabati -->
      <section
        class="border border-gray-400 rounded-3xl p-8 mb-8 flex flex-col md:flex-row gap-8"
        data-purpose="category-card"
      >
        <div class="flex-1 flex items-center">
          <div class="flex w-full border border-gray-400 overflow-hidden">
            <div
              class="bg-yellow-custom px-6 py-3 font-bold border-r border-gray-400 min-w-[150px] flex items-center justify-center"
            >
              Nabati
            </div>
            <input
              class="flex-1 px-4 py-3 outline-none border-none focus:ring-0 text-lg"
              type="text"
              value="Tahu"
            />
            <button
              class="px-4 py-3 border-l border-gray-400 hover:bg-gray-50 text-3xl leading-none"
            >
              +
            </button>
          </div>
        </div>
        <div class="flex-1">
          <div class="border border-gray-400">
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Tahu</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Tempe</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2 last:border-b-0"
            >
              <span class="font-semibold text-lg px-2">Dadar jagung</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: SectionNabati -->
      <!-- CATEGORY SECTION: Sayuran -->
      <!-- BEGIN: SectionSayuran -->
      <section
        class="border border-gray-400 rounded-3xl p-8 mb-8 flex flex-col md:flex-row gap-8"
        data-purpose="category-card"
      >
        <div class="flex-1 flex items-center">
          <div class="flex w-full border border-gray-400 overflow-hidden">
            <div
              class="bg-yellow-custom px-6 py-3 font-bold border-r border-gray-400 min-w-[150px] flex items-center justify-center"
            >
              Sayuran
            </div>
            <input
              class="flex-1 px-4 py-3 outline-none border-none focus:ring-0 text-lg"
              type="text"
              value="Oseng-oseng Kacang Panjang"
            />
            <button
              class="px-4 py-3 border-l border-gray-400 hover:bg-gray-50 text-3xl leading-none"
            >
              +
            </button>
          </div>
        </div>
        <div class="flex-1">
          <div class="border border-gray-400">
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2"
                >Oseng-oseng Kacang Panjang</span
              >
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Sawi Dan timun</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2 last:border-b-0"
            >
              <span class="font-semibold text-lg px-2"
                >Tumis Jagung Wortel</span
              >
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: SectionSayuran -->
      <!-- CATEGORY SECTION: Buah/Minuman -->
      <!-- BEGIN: SectionBuah -->
      <section
        class="border border-gray-400 rounded-3xl p-8 mb-8 flex flex-col md:flex-row gap-8"
        data-purpose="category-card"
      >
        <div class="flex-1 flex items-center">
          <div class="flex w-full border border-gray-400 overflow-hidden">
            <div
              class="bg-yellow-custom px-6 py-3 font-bold border-r border-gray-400 min-w-[150px] flex items-center justify-center"
            >
              Buah/Minuman
            </div>
            <input
              class="flex-1 px-4 py-3 outline-none border-none focus:ring-0 text-lg"
              type="text"
              value="Jeruk"
            />
            <button
              class="px-4 py-3 border-l border-gray-400 hover:bg-gray-50 text-3xl leading-none"
            >
              +
            </button>
          </div>
        </div>
        <div class="flex-1">
          <div class="border border-gray-400">
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Jeruk</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Pisang</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2"
            >
              <span class="font-semibold text-lg px-2">Melon</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
            <div
              class="flex items-center justify-between border-b border-gray-400 p-2 last:border-b-0"
            >
              <span class="font-semibold text-lg px-2">Susu Kotak</span>
              <div class="flex gap-2">
                <button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Hapus</button
                ><button
                  class="text-[10px] border border-gray-400 px-2 py-1 rounded"
                >
                  Edit
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: SectionBuah -->
    </main>
    <!-- END: Main Content -->
  </body>
</html>
