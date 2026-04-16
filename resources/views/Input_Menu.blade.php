<!doctype html>

<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ahli Gizi - Input Menu</title>
    <!-- Tailwind CSS v3 CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style data-purpose="custom-colors">
      /* Custom brand colors matching the UI screenshot */
      .bg-brand-cyan {
        background-color: #00ccff;
      }
      .bg-brand-yellow {
        background-color: #ffff00;
      }
      .bg-brand-red {
        background-color: #ff0000;
      }
      .bg-brand-blue-kcal {
        background-color: #0000ff;
      }
      .bg-brand-green-prot {
        background-color: #00cc00;
      }
      .bg-brand-orange-carb {
        background-color: #ff6600;
      }
      .border-custom-gray {
        border-color: #d1d5db;
      }
    </style>
  </head>
  <body class="bg-white font-sans text-gray-900 min-h-screen">
    <!-- BEGIN: Top Navigation Bar -->
    <header
      class="bg-brand-cyan w-full px-6 py-3 flex justify-between items-center shadow-sm"
    >
      <nav class="flex items-center gap-6">
        <div class="font-bold text-xl tracking-wider">LOGO</div>
        <a class="text-black font-semibold hover:opacity-80" href="#">Data</a>
        <button
          class="bg-brand-yellow px-6 py-1 rounded-lg font-bold text-black border border-black/20"
        >
          Menu
        </button>
      </nav>
      <div class="text-4xl font-normal">Admin MBG</div>
    </header>
    <section class="px-8 py-4">
      <h1 class="text-3xl font-bold italic">Input Menu</h1>
    </section>
    <main class="px-8 pb-12">
      <div class="flex justify-center items-center">
        <div class="border border-slate-950 p-4 flex flex-col gap-2 min-h-[500px]">
            <div class="flex gap-2 items-center">
            <span
              class="bg-brand-yellow font-bold px-4 py-1 w-32 text-center border border-black"
              >Hari</span
            >
            <select
              class="flex-1 border border-black rounded-none h-8 text-sm p-0 px-2 font-semibold"
            >
              <option>Senin</option>
            </select>
          </div>
          <div class="flex gap-2 items-center">
            <span
              class="bg-brand-yellow font-bold px-4 py-1 w-32 text-center border border-black"
              >Tanggal</span
            >
            <select
              class="flex-1 border border-black rounded-none h-8 text-sm p-0 px-2"
            >
              <option>13/04/2026</option>
            </select>
          </div>
          <div class="mt-4 space-y-1">
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >Karbohidrat</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>Nasi</option>
              </select>
            </div>
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >Hewani</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>ayam Kuah</option>
              </select>
            </div>
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >Nabati</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>tahu goreng</option>
              </select>
            </div>
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >sayuran</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>Tumis Jagung Wortel</option>
              </select>
            </div>
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >Buah/Minuman</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>Semangka</option>
              </select>
            </div>
          </div>
          <div class="mt-4">
            <p class="text-[10px] font-bold">Isi Data</p>
            <div class="grid grid-cols-4 gap-1 mt-1">
              <div class="flex flex-col items-center">
                <div
                  class="bg-brand-blue-kcal text-white text-xs font-bold w-full text-center py-1 rounded"
                >
                  2800
                </div>
                <span class="text-[8px] text-center">SMKN 5</span>
              </div>
              <div class="flex flex-col items-center">
                <div
                  class="bg-brand-green-prot text-white text-xs font-bold w-full text-center py-1 rounded"
                >
                  400
                </div>
                <span class="text-[8px] text-center leading-tight"
                  >pesantren</span
                >
              </div>
              <div class="flex flex-col items-center">
                <div
                  class="bg-brand-yellow text-black text-xs font-bold w-full text-center py-1 rounded border border-black/20"
                >
                  200
                </div>
                <span class="text-[8px] text-center">Ibu Hamil</span>
              </div>
              <div class="flex flex-col items-center">
                <div
                  class="bg-brand-orange-carb text-white text-xs font-bold w-full text-center py-1 rounded"
                >
                  100
                </div>
                <span class="text-[8px] text-center">Balita</span>
              </div>
            </div>
          </div>
          <div class="mt-4">
            <p class="text-[10px] text-left">Catatan : </p>
            <input
              class="w-full border border-gray-300 rounded-xl h-8 mt-1"
              type="text"
            />
          </div>
          <div class="mt-auto pt-4 flex items-end">
  <div class="flex gap-2">
    <button class="bg-brand-red text-white font-bold px-4 py-2 text-xs">
      Hapus
    </button>
  </div>

  <button class="ml-auto bg-brand-cyan text-white font-bold px-4 py-2 text-xs">
    Simpan
  </button>
</div>
        </div>
        </div>
      </div>
      <!-- BEGIN: Grid Layout for Menu Cards -->
      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div
          class="border border-gray-400 p-4 flex flex-col gap-2 min-h-[500px]"
          data-purpose="menu-card-item"
        >
          <div class="flex gap-2 items-center">
            <span
              class="bg-brand-yellow font-bold px-4 py-1 w-32 text-center border border-black"
              >Hari</span
            >
            <select
              class="flex-1 border border-black rounded-none h-8 text-sm p-0 px-2 font-semibold"
            >
              <option>Senin</option>
            </select>
          </div>
          <div class="flex gap-2 items-center">
            <span
              class="bg-brand-yellow font-bold px-4 py-1 w-32 text-center border border-black"
              >Tanggal</span
            >
            <select
              class="flex-1 border border-black rounded-none h-8 text-sm p-0 px-2"
            >
              <option>13/04/2026</option>
            </select>
          </div>
          <div class="mt-4 space-y-1">
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >Karbohidrat</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>Nasi</option>
              </select>
            </div>
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >Hewani</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>ayam Kuah</option>
              </select>
            </div>
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >Nabati</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>tahu goreng</option>
              </select>
            </div>
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >sayuran</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>Tumis Jagung Wortel</option>
              </select>
            </div>
            <div class="flex gap-2 items-center">
              <span
                class="bg-brand-yellow font-bold px-2 py-1 w-32 text-xs text-center border border-black"
                >Buah/Minuman</span
              >
              <select
                class="flex-1 border border-black rounded-none h-6 text-[10px] p-0 px-2"
              >
                <option>Semangka</option>
              </select>
            </div>
          </div>
          <div class="mt-4">
            <p class="text-[10px] font-bold">Isi Data</p>
            <div class="grid grid-cols-4 gap-1 mt-1">
              <div class="flex flex-col items-center">
                <div
                  class="bg-brand-blue-kcal text-white text-xs font-bold w-full text-center py-1 rounded"
                >
                  2800
                </div>
                <span class="text-[8px] text-center">SMKN 5</span>
              </div>
              <div class="flex flex-col items-center">
                <div
                  class="bg-brand-green-prot text-white text-xs font-bold w-full text-center py-1 rounded"
                >
                  400
                </div>
                <span class="text-[8px] text-center leading-tight"
                  >pesantren</span
                >
              </div>
              <div class="flex flex-col items-center">
                <div
                  class="bg-brand-yellow text-black text-xs font-bold w-full text-center py-1 rounded border border-black/20"
                >
                  200
                </div>
                <span class="text-[8px] text-center">Ibu Hamil</span>
              </div>
              <div class="flex flex-col items-center">
                <div
                  class="bg-brand-orange-carb text-white text-xs font-bold w-full text-center py-1 rounded"
                >
                  100
                </div>
                <span class="text-[8px] text-center">Balita</span>
              </div>
            </div>
          </div>
          <div class="mt-4">
            <p class="text-[10px] text-left">Catatan :</p>
            <input
              class="w-full border border-gray-300 rounded-xl h-8 mt-1"
              type="text"
            />
          </div>
          <div class="mt-auto pt-4 flex justify-between items-end">
            <div class="flex gap-2">
              <button
                class="bg-brand-red text-white font-bold px-4 py-2 text-xs"
              >
                Hapus
              </button>
              <button
                class="bg-brand-cyan text-white font-bold px-4 py-2 text-xs"
              >
                Tayang
              </button>
            </div>
            <div class="text-[10px] space-y-1">
              <p class="text-right">Aproval Tampil</p>
              <div class="flex items-center justify-end gap-2">
                <label>Ahli gizi</label>
                <div class="w-12 h-6 border border-black relative">
                  <input
                    checked=""
                    class="absolute inset-0 opacity-0 cursor-pointer peer"
                    type="checkbox"
                  />
                  <span
                    class="hidden peer-checked:block text-center text-lg leading-none"
                    >✓</span
                  >
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Existing Menu Cards -->
      </div>
      <!-- END: Grid Layout -->
    </main>
  </body>
</html>
