@extends('layouts.app')

@section('title', 'MBG || Data Kategori & Ompreng')

@section('content')
    <!-- END: NavigationBar -->
    <main class="p-8 pt-20">
      <h1 class="text-2xl font-bold mb-8">Input Katagori</h1>
      <!-- BEGIN: Section1InputKatagori -->
      <section class="mb-12" data-purpose="section-kategori">
          <!-- Input Row -->
          <form action="{{ route('kategori.store') }}" method="POST" class="flex items-center mb-6 space-x-4">
              @csrf
              <div class="flex border border-black items-stretch">
                  <div
                      class="bg-[#FFFF00] input-group-label px-4 py-2 flex items-center justify-center font-bold border-r border-black"
                  >
                      Kategori
                  </div>
                  <input
                      name="nama_kategori"
                      class="px-4 py-2 focus:outline-none w-64 border-none"
                      data-purpose="input-kategori-name"
                      type="text"
                      placeholder="Masukkan kategori"
                  />
              </div>
              <button
                  type="submit"
                  class="border border-black px-3 py-1 text-2xl font-bold flex items-center justify-center h-full hover:bg-gray-100"
                  data-purpose="btn-add-kategori"
              >
                  +
              </button>
          </form>

          <!-- Categories Table -->
          <div class="table-container border border-black">

              @foreach ($kategori as $item)
              <div class="flex border-b border-black last:border-b-0">

                  <!-- Nama kategori -->
                  <div class="flex-grow px-4 py-2 font-semibold">
                      {{ $item->nama_kategori }}
                  </div>

                  <!-- Action -->
                  <div class="flex space-x-2 px-2 py-2 items-center">

                      <!-- Hapus -->
                      <form action="{{ route('kategori.destroy', $item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="action-btn hover:bg-gray-200">
                              Hapus
                          </button>
                      </form>

                      <!-- Edit (inline sederhana) -->
                      <form action="{{ route('kategori.update', $item->id) }}" method="POST" class="flex space-x-1">
                          @csrf
                          @method('PUT')
                          <input
                              type="text"
                              name="nama_kategori"
                              value="{{ $item->nama_kategori }}"
                              class="border px-2 py-1 w-32"
                          >
                          <button type="submit" class="action-btn hover:bg-gray-200">
                              Edit
                          </button>
                      </form>

                  </div>
              </div>
              @endforeach

              @if ($kategori->isEmpty())
              <div class="px-4 py-2 text-gray-500">
                  Belum ada kategori
              </div>
              @endif

          </div>
      </section>
      <!-- END: Section1InputKatagori -->
      <!-- BEGIN: Section2IsiData -->
      <section class="mt-16" data-purpose="section-isi-data">

    <!-- Input Row -->
    <form action="{{ route('ompreng.store') }}" method="POST" class="flex items-center mb-6 space-x-4">
        @csrf
        <div class="flex border border-black items-stretch">
            <div class="bg-[#FFFF00] px-4 py-2 font-bold border-r border-black">
                isi Data
            </div>
            <input
                name="nama_pelanggan"
                class="px-4 py-2 focus:outline-none w-40 border-r border-black"
                type="text"
                placeholder="Nama pelanggan"
            />
            <input
                name="jumlah"
                class="px-4 py-2 focus:outline-none w-24 text-right font-bold"
                type="number"
                placeholder="0"
            />
        </div>
        <button type="submit"
            class="border border-black px-3 py-1 text-2xl font-bold hover:bg-gray-100">
            +
        </button>
    </form>

    <!-- Table -->
    <div class="table-container border border-black">

        @foreach ($ompreng as $item)
        <div class="flex border-b border-black last:border-b-0">

            <div class="w-1/2 px-4 py-3 font-semibold border-r border-black">
                {{ $item->nama_pelanggan }}
            </div>

            <div class="w-20 px-2 py-3 font-bold text-center border-r border-black">
                {{ $item->jumlah }}
            </div>

            <div class="flex-grow flex items-center justify-center space-x-2 p-1">

                <div class="flex space-x-1">

                    <!-- Hapus -->
                    <form action="{{ route('ompreng.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="action-btn hover:bg-gray-200">Hapus</button>
                    </form>

                    <!-- Edit -->
                    <form action="{{ route('ompreng.update', $item->id) }}" method="POST" class="flex space-x-1">
                        @csrf
                        @method('PUT')
                        <input type="text" name="nama_pelanggan" value="{{ $item->nama_pelanggan }}" class="border w-24 text-xs text-center">
                        <input type="number" name="jumlah" value="{{ $item->jumlah }}" class="border w-16 text-xs text-center">
                        <button class="action-btn hover:bg-gray-200">Edit</button>
                    </form>

                </div>
            </div>
        </div>
        @endforeach

        @if ($ompreng->isEmpty())
        <div class="px-4 py-2 text-gray-500">
            Belum ada data
        </div>
        @endif

    </div>
</section>
      <!-- END: Section2IsiData -->
    </main>
    <script data-purpose="interaction-placeholder">
      // This script block is a placeholder for future interaction logic
      // such as adding items to the list or managing edit/delete state.
      document.addEventListener("DOMContentLoaded", () => {
        console.log("Category Management Screen Loaded");
      });
    </script>
  </body>
</html>
