@extends('layouts.app')

@section('title', 'MBG || Input Menu')

@section('content')
<section class="px-4 sm:px-8 py-4 pt-20 text-center">
  <h1 class="text-2xl sm:text-3xl font-bold italic">Input Menu</h1>
</section>

<main class="px-4 sm:px-8 pb-12">

  {{-- FORM INPUT --}}
  <div class="flex justify-center items-center">
    <form action="{{ route('menu.store') }}" method="POST"
      class="border border-slate-950 p-3 sm:p-4 flex flex-col gap-2 min-h-[420px] sm:min-h-[500px] w-full max-w-xl">
      
      @csrf

      {{-- Hari --}}
      <div class="flex gap-2 items-center">
        <span class="bg-brand-yellow font-bold px-2 sm:px-4 py-1 w-24 sm:w-32 text-center border border-black text-xs sm:text-sm">
          Hari
        </span>
        <input type="text" name="hari"
          class="flex-1 border border-black h-8 text-xs sm:text-sm px-2 font-semibold"
          value="{{ now()->format('l') }}" readonly>
      </div>

      {{-- Tanggal --}}
      <div class="flex gap-2 items-center">
        <span class="bg-brand-yellow font-bold px-2 sm:px-4 py-1 w-24 sm:w-32 text-center border border-black text-xs sm:text-sm">
          Tanggal
        </span>
        <input type="date" name="tanggal"
          class="flex-1 border border-black h-8 text-xs sm:text-sm px-2"
          value="{{ now()->format('Y-m-d') }}" required>
      </div>

      {{-- Kategori --}}
      <div class="mt-4 space-y-1">
        @foreach($kategori as $kat)
        <div class="flex gap-2 items-center">
          <span class="bg-brand-yellow font-bold px-2 py-1 w-24 sm:w-32 text-xs text-center border border-black">
            {{ $kat->nama_kategori }}
          </span>

          <select name="items[{{ $kat->id }}]"
            class="flex-1 border border-black h-6 text-[10px] px-2">
            <option value="">-- Pilih --</option>
            @foreach($kat->items as $item)
              <option value="{{ $item->id }}">{{ $item->nama_item }}</option>
            @endforeach
          </select>
        </div>
        @endforeach
      </div>

      {{-- Ompreng --}}
      <div class="mt-4">
        <p class="text-[10px] font-bold">Isi Data</p>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-1 mt-1">
          @foreach ($ompreng as $o)
            <div class="flex flex-col items-center">
              <div class="bg-blue-500 text-white text-xs font-bold w-full text-center py-1 rounded">
                {{ $o->jumlah }}
              </div>
              <span class="text-[8px] text-center">
                {{ $o->nama_pelanggan }}
              </span>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Catatan --}}
      <div class="mt-4">
        <p class="text-[10px]">Catatan :</p>
        <input type="text" name="catatan"
          class="w-full border border-gray-300 rounded-xl h-8 mt-1 px-2 text-xs"
          placeholder="Tambahkan catatan...">
      </div>

      {{-- Button --}}
      <div class="mt-auto pt-4 flex flex-wrap gap-2 justify-between items-center">
        <button type="reset"
          class="bg-red-500 text-white font-bold px-3 py-1 text-xs">
          Hapus
        </button>

        <button type="submit"
          class="bg-blue-500 text-white font-bold px-3 py-1 text-xs">
          Simpan
        </button>
      </div>

    </form>
  </div>

  {{-- GRID MENU --}}
  <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-8">
    @foreach ($menus as $menu)
    <div class="border border-gray-400 p-3 sm:p-4 flex flex-col gap-2 min-h-[420px] sm:min-h-[500px]">

      {{-- Hari --}}
      <div class="flex gap-2 items-center">
        <span class="bg-brand-yellow font-bold px-2 sm:px-4 py-1 w-24 sm:w-32 text-center border border-black text-xs sm:text-sm">
          Hari
        </span>
        <input type="text"
          value="{{ \Carbon\Carbon::parse($menu->tanggal)->translatedFormat('l') }}"
          class="flex-1 border border-black h-8 text-xs sm:text-sm px-2"
          readonly>
      </div>

      {{-- Tanggal --}}
      <div class="flex gap-2 items-center">
        <span class="bg-brand-yellow font-bold px-2 sm:px-4 py-1 w-24 sm:w-32 text-center border border-black text-xs sm:text-sm">
          Tanggal
        </span>
        <input type="text"
          value="{{ \Carbon\Carbon::parse($menu->tanggal)->format('d/m/Y') }}"
          class="flex-1 border border-black h-8 text-xs sm:text-sm px-2"
          readonly>
      </div>

      {{-- Items --}}
      <div class="mt-4 space-y-1">
        @foreach ($kategori as $kat)
          @php
            $selectedItem = $menu->items->firstWhere('kategori_id', $kat->id);
          @endphp

          <div class="flex gap-2 items-center">
            <span class="bg-brand-yellow font-bold px-2 py-1 w-24 sm:w-32 text-xs text-center border border-black">
              {{ $kat->nama_kategori }}
            </span>

            <input type="text"
              class="flex-1 border border-black h-6 text-[10px] px-2"
              value="{{ $selectedItem->nama_item ?? '-' }}"
              readonly>
          </div>
        @endforeach
      </div>

      {{-- Ompreng --}}
      <div class="mt-4">
        <p class="text-[10px] font-bold">Isi Data</p>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-1 mt-1">
          @foreach ($ompreng as $o)
            <div class="flex flex-col items-center">
              <div class="bg-blue-500 text-white text-xs font-bold w-full text-center py-1 rounded">
                {{ $o->jumlah }}
              </div>
              <span class="text-[8px] text-center">
                {{ $o->nama_pelanggan }}
              </span>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Catatan --}}
      <div class="mt-4">
        <p class="text-[10px]">Catatan :</p>
        <input type="text"
          class="w-full border border-gray-300 rounded-xl h-8 mt-1 px-2 text-xs"
          value="{{ $menu->catatan ?? '-' }}"
          readonly>
      </div>

      {{-- Button --}}
      <div class="mt-auto pt-4 flex flex-wrap gap-2 justify-between items-center">
        <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="bg-red-500 text-white px-3 py-1 text-xs">
            Hapus
          </button>
        </form>

        <button class="bg-blue-500 text-white px-3 py-1 text-xs">
          Tayang
        </button>
      </div>

    </div>
    @endforeach
  </div>

</main>
@endsection