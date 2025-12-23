@extends('layouts.app')

@section('tittle', 'tambah user')

@section('content')
    <div class="bg-black w-full min-h-screen">
        <h1 class="text-4xl font-bold p-10 text-center text-white">TAMBAH USER</h1>
        <div class="px-10 mb-7">
            <hr class="bg-white p-1 w-full">
        </div>

        <br>
        <div class="px-10">
            <label for="name" class="text-white">Nama:</label>
            <input type="text" id="name" name="name"
                class="text-white w-full rounded-lg p-2 mt-2 border border-white mr-10 mb-3" placeholder="Masukkan nama">
            <br>
            <label for="email" class="text-white">Email:</label>
            <input type="email" id="email" name="email" class="text-white w-full rounded-lg p-2 mt-2 border border-white"
                placeholder="Masukkan Email">
            <br>
            <label for="email" class="text-white">Email:</label>
            <input type="email" id="email" name="email" class="text-white w-full rounded-lg p-2 mt-2 border border-white"
                placeholder="Masukkan Email">
        </div>
    </div>
@endsection