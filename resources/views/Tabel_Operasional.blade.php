<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tabel Operasional - Keuangan</title>
    <!-- Tailwind CSS v3 CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              "brand-cyan": "#00ccff",
              "brand-yellow": "#ffff00",
            },
          },
        },
      };
    </script>
    <style data-purpose="custom-table-styles">
      /* Specific table borders to match the clean grid in the image */
      #operational-table th,
      #operational-table td {
        border: 1px solid #000;
      }
      /* Removal of default focus rings for a cleaner UI look matching the mockup */
      select:focus,
      button:focus {
        outline: none;
        box-shadow: none;
      }
    </style>
  </head>
  <body class="bg-white font-sans text-black">
    <!-- BEGIN: MainHeader -->
    <header
      class="bg-brand-cyan px-8 py-4 flex items-center gap-12"
      data-purpose="top-navigation-bar"
    >
      <div class="text-xl font-bold uppercase tracking-wider" id="logo">
        LOGO
      </div>
      <nav class="flex items-center gap-10 text-xl">
        <a class="hover:underline" href="#">Yayasan</a>
        <a class="hover:underline" href="#">Menu</a>
        <!-- Highlighted current page button -->
        <button
          class="bg-brand-yellow px-6 py-1.5 rounded-xl border border-black font-medium shadow-sm"
          data-purpose="active-nav-link"
        >
          Keuangan
        </button>
      </nav>
    </header>
    <!-- END: MainHeader -->
    <!-- BEGIN: FilterSection -->
    <main class="max-w-6xl mx-auto mt-20 px-4">
      <section
        class="flex items-center gap-4 mb-12"
        data-purpose="date-filter-controls"
      >
        <!-- Start Date Input -->
        <div
          class="relative border border-black p-1 px-2 flex items-center min-w-[180px] bg-white"
        >
          <input
            class="w-full border-none p-0 focus:ring-0 text-lg"
            readonly=""
            type="text"
            value="18/04/2026"
          />
          <svg
            class="w-5 h-5 ml-2"
            fill="none"
            stroke="currentColor"
            viewbox="0 0 24 24"
          >
            <path
              d="M19 9l-7 7-7-7"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            ></path>
          </svg>
        </div>
        <!-- End Date Input -->
        <div
          class="relative border border-black p-1 px-2 flex items-center min-w-[180px] bg-white"
        >
          <input
            class="w-full border-none p-0 focus:ring-0 text-lg"
            readonly=""
            type="text"
            value="18/04/2026"
          />
          <svg
            class="w-5 h-5 ml-2"
            fill="none"
            stroke="currentColor"
            viewbox="0 0 24 24"
          >
            <path
              d="M19 9l-7 7-7-7"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            ></path>
          </svg>
        </div>
        <!-- Submit Button -->
        <button
          class="bg-brand-yellow border border-black px-8 py-1.5 text-lg font-medium hover:bg-opacity-90 transition-colors"
          data-purpose="filter-submit"
        >
          OK
        </button>
      </section>
      <!-- END: FilterSection -->
      <!-- BEGIN: TableSection -->
      <section class="w-full mb-12" data-purpose="operational-data-display">
        <h1 class="text-center text-3xl font-bold mb-4">Tabel Operasional</h1>
        <table
          class="w-full border-collapse text-left text-lg"
          id="operational-table"
        >
          <thead class="bg-brand-yellow">
            <tr>
              <th class="px-4 py-2 text-center w-24">Hari</th>
              <th class="px-4 py-2 text-center w-36">Tanggal</th>
              <th class="px-4 py-2 text-center w-48">Keterangan</th>
              <th class="px-4 py-2 text-center">Biaya Operasional</th>
              <th class="px-4 py-2 text-center w-48">Total Biaya</th>
            </tr>
          </thead>
          <tbody>
            <!-- Data Row 1 -->
            <tr>
              <td class="px-4 py-2 text-center">Senin</td>
              <td class="px-4 py-2 text-center">13/04/2026</td>
              <td class="px-4 py-2 text-center">Relawan 1</td>
              <td class="px-4 py-2">Gaji Bulan April 2026</td>
              <td class="px-4 py-2">Rp. 2.000.000</td>
            </tr>
            <!-- Data Row 2 -->
            <tr>
              <td class="px-4 py-2 text-center">Senin</td>
              <td class="px-4 py-2 text-center">13/04/2026</td>
              <td class="px-4 py-2 text-center">Relawan 2</td>
              <td class="px-4 py-2">Gaji Bulan April 2026</td>
              <td class="px-4 py-2">Rp. 2.000.000</td>
            </tr>
            <!-- Data Row 3 -->
            <tr>
              <td class="px-4 py-2 text-center">Senin</td>
              <td class="px-4 py-2 text-center">13/04/2026</td>
              <td class="px-4 py-2 text-center">Relawan 3</td>
              <td class="px-4 py-2">Gaji Bulan April 2026</td>
              <td class="px-4 py-2">Rp. 2.000.000</td>
            </tr>
            <!-- Data Row 4 -->
            <tr>
              <td class="px-4 py-2 text-center">Senin</td>
              <td class="px-4 py-2 text-center">13/04/2026</td>
              <td class="px-4 py-2 text-center">Relawan 4</td>
              <td class="px-4 py-2">Gaji Bulan April 2026</td>
              <td class="px-4 py-2">Rp. 2.000.000</td>
            </tr>
            <!-- Data Row 5 -->
            <tr>
              <td class="px-4 py-2 text-center">Senin</td>
              <td class="px-4 py-2 text-center">13/04/2026</td>
              <td class="px-4 py-2 text-center">Relawan 5</td>
              <td class="px-4 py-2">Gaji Bulan April 2026</td>
              <td class="px-4 py-2">Rp. 2.000.000</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <!-- Colspan to align Total label -->
              <td
                class="px-4 py-2 text-right font-medium border-none"
                colspan="4"
              >
                Total
              </td>
              <td class="px-4 py-2 bg-white font-medium">Rp10.000.000</td>
            </tr>
          </tfoot>
        </table>
      </section>
      <!-- END: TableSection -->
      <!-- BEGIN: ActionButtons -->
      <div class="flex justify-end gap-6 mb-20" data-purpose="footer-actions">
        <button
          class="bg-brand-yellow border border-black px-6 py-2 text-xl font-medium rounded-xl shadow-sm hover:brightness-95 active:scale-95 transition-all"
        >
          Save PDF
        </button>
        <button
          class="bg-brand-yellow border border-black px-10 py-2 text-xl font-medium rounded-xl shadow-sm hover:brightness-95 active:scale-95 transition-all"
        >
          Print
        </button>
      </div>
      <!-- END: ActionButtons -->
    </main>
  </body>
</html>
