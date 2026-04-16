<!doctype html>

<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Biaya Operasional - Keuangan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style data-purpose="custom-styling">
      /* Custom styles to match the specific look of the provided image */
      .bg-cyan-custom {
        background-color: #00d2ff;
      }
      .bg-yellow-custom {
        background-color: #faff00;
      }
      .table-border-dark td,
      .table-border-dark th {
        border: 1px solid #4a4a4a;
      }
      input,
      select {
        border: 1px solid #4a4a4a !important;
      }
    </style>
  </head>
  <body class="bg-white font-sans">
    <!-- BEGIN: MainHeader -->
    <header class="bg-cyan-custom p-4 flex items-center space-x-12 shadow-sm">
      <div class="text-xl font-bold px-4" data-purpose="logo">LOGO</div>
      <nav class="flex items-center space-x-8 text-lg">
        <a class="hover:underline" href="#">Yayasan</a>
        <a class="hover:underline" href="#">Menu</a>
        <div
          class="bg-yellow-custom px-6 py-1 rounded-lg font-medium border border-black cursor-pointer"
        >
          Keuangan
        </div>
      </nav>
    </header>
    <!-- END: MainHeader -->
    <main class="p-8 max-w-[1400px] mx-auto">
      <!-- BEGIN: InputSection -->
      <section
        class="grid grid-cols-12 gap-4 items-end mb-12"
        data-purpose="finance-entry-form"
      >
        <!-- Day Input -->
        <div class="col-span-1">
          <label class="block text-lg mb-1">Hari</label>
          <select class="w-full p-2 border border-black rounded-sm">
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
            <option>Sabtu</option>
            <option>Minggu</option>
          </select>
        </div>
        <!-- Date Input -->
        <div class="col-span-2">
          <label class="block text-lg mb-1">Tanggal</label>
          <input
            class="w-full p-2 border border-black rounded-sm"
            type="text"
            value="18/04/2026"
          />
        </div>
        <!-- Description/Name Input -->
        <div class="col-span-2">
          <label class="block text-lg mb-1">Keterangan</label>
          <input
            class="w-full p-2 border border-black rounded-sm"
            type="text"
            value="Relawan 1"
          />
        </div>
        <!-- Operational Expense Detail -->
        <div class="col-span-4">
          <label class="block text-lg mb-1">Biaya Operasional</label>
          <input
            class="w-full p-2 border border-black rounded-sm"
            type="text"
            value="Gaji Bulan April 2026"
          />
        </div>
        <!-- Total Cost Input -->
        <div class="col-span-2">
          <label class="block text-lg mb-1">Total Biaya</label>
          <input
            class="w-full p-2 border border-black rounded-sm"
            type="text"
            value="Rp 3.000.000"
          />
        </div>
        <!-- Action Button OK -->
        <div class="col-span-1">
          <button
            class="w-full py-2 bg-yellow-custom border border-black rounded-lg font-bold text-lg hover:brightness-95"
          >
            Ok
          </button>
        </div>
      </section>
      <!-- END: InputSection -->
      <!-- BEGIN: TableTitle -->
      <div class="text-center mb-6">
        <h1 class="text-3xl font-bold">Biaya Operasional</h1>
      </div>
      <!-- END: TableTitle -->
      <!-- BEGIN: DataTable -->
      <section class="mb-8" data-purpose="expenses-table-container">
        <table class="w-full text-center table-border-dark border-collapse">
          <thead class="bg-yellow-custom">
            <tr>
              <th class="p-2 w-24">Hari</th>
              <th class="p-2 w-32">Tanggal</th>
              <th class="p-2 w-40">Keterangan</th>
              <th class="p-2">Biaya Operasional</th>
              <th class="p-2 w-48">Total Biaya</th>
              <th class="p-2 w-32">Akses</th>
            </tr>
          </thead>
          <tbody class="text-lg">
            <!-- Row 1 -->
            <tr>
              <td class="p-2">Senin</td>
              <td class="p-2">13/04/2026</td>
              <td class="p-2">Relawan 1</td>
              <td class="p-2 text-left px-4">Gaji Bulan April 2026</td>
              <td class="p-2">Rp. 2.000.000</td>
              <td class="p-2">
                <div class="flex justify-center space-x-1">
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Edit
                  </button>
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Hapus
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 2 -->
            <tr>
              <td class="p-2">Senin</td>
              <td class="p-2">13/04/2026</td>
              <td class="p-2">Relawan 2</td>
              <td class="p-2 text-left px-4">Gaji Bulan April 2026</td>
              <td class="p-2">Rp. 2.000.000</td>
              <td class="p-2">
                <div class="flex justify-center space-x-1">
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Edit
                  </button>
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Hapus
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 3 -->
            <tr>
              <td class="p-2">Senin</td>
              <td class="p-2">13/04/2026</td>
              <td class="p-2">Relawan 3</td>
              <td class="p-2 text-left px-4">Gaji Bulan April 2026</td>
              <td class="p-2">Rp. 2.000.000</td>
              <td class="p-2">
                <div class="flex justify-center space-x-1">
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Edit
                  </button>
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Hapus
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 4 -->
            <tr>
              <td class="p-2">Senin</td>
              <td class="p-2">13/04/2026</td>
              <td class="p-2">Relawan 4</td>
              <td class="p-2 text-left px-4">Gaji Bulan April 2026</td>
              <td class="p-2">Rp. 2.000.000</td>
              <td class="p-2">
                <div class="flex justify-center space-x-1">
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Edit
                  </button>
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Hapus
                  </button>
                </div>
              </td>
            </tr>
            <!-- Row 5 -->
            <tr>
              <td class="p-2">Senin</td>
              <td class="p-2">13/04/2026</td>
              <td class="p-2">Relawan 5</td>
              <td class="p-2 text-left px-4">Gaji Bulan April 2026</td>
              <td class="p-2">Rp. 2.000.000</td>
              <td class="p-2">
                <div class="flex justify-center space-x-1">
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Edit
                  </button>
                  <button
                    class="bg-yellow-custom border border-black px-2 text-sm rounded"
                  >
                    Hapus
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
          <!-- Footer for Total -->
          <tfoot>
            <tr>
              <td
                class="p-2 text-right font-bold text-xl border-none"
                colspan="4"
              >
                Total
              </td>
              <td class="p-2 border border-black bg-white text-lg">
                Rp10.000.000
              </td>
              <td class="border-none"></td>
            </tr>
          </tfoot>
        </table>
      </section>
      <!-- END: DataTable -->
      <!-- BEGIN: FooterActions -->
      <div class="flex justify-end mt-12">
        <button
          class="bg-yellow-custom border border-black px-10 py-2 rounded-lg font-bold text-xl hover:brightness-95"
        >
          Simpan
        </button>
      </div>
      <!-- END: FooterActions -->
    </main>
  </body>
</html>
