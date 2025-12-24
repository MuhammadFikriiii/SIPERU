@extends('layouts.app')

@section('tittle', 'tambah ruangan')

@section('content')

    <form action="{{route('admin.ruangan.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-black w-full min-h-screen">
            <h1 class="text-4xl font-bold p-10 text-center text-white">TAMBAH RUANGAN</h1>
            <div class="px-10 mb-4">
                <hr class="bg-white p-1 w-full">
            </div>

            <br>
            <div class="px-10">
                <label for="nama_ruangan" class="text-white">Nama Ruangan:</label>
                <input type="text" id="nama_ruangan" name="nama_ruangan"
                    class="text-white w-full rounded-lg p-2 mt-2 border border-white mr-10 mb-3"
                    placeholder="Masukkan nama ruangan" required>
                <br>
                <label for="keterangan" class="text-white">Keterangan:</label>
                <input type="text" id="keterangan" name="keterangan"
                    class="text-white w-full rounded-lg p-2 mt-2 border border-white mr-10 mb-3"
                    placeholder="Masukkan nama ruangan" required>
                <label for="foto_ruangan" class="text-white">Foto Ruangan:</label>
                <input type="file" id="foto_ruangan" name="foto_ruangan"
                    class="text-white w-full rounded-lg p-2 mt-2 border border-white mr-10 mb-3" accept="image/*" required>
                <br>

                <button type="submit"
                    class="mt-4 bg-green-600 hover:bg-green-800 rounded-lg px-4 py-2 text-white font-bold">Simpan</button>
            </div>
        </div>
    </form>
@endsection