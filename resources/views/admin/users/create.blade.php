@extends('layouts.app')

@section('tittle', 'tambah user')

@section('content')
    <form action="{{route('admin.users.store')}}" method="POST">
        @csrf
        <div class="bg-black w-full min-h-screen">
            <h1 class="text-4xl font-bold p-10 text-center text-white">TAMBAH USER</h1>
            <div class="px-10 mb-4">
                <hr class="bg-white p-1 w-full">
            </div>

            <br>
            <div class="px-10">
                <label for="name" class="text-white">Nama:</label>
                <input type="text" id="name" name="name"
                    class="text-white w-full rounded-lg p-2 mt-2 border border-white mr-10 mb-3" placeholder="Masukkan nama"
                    required>
                <br>
                <label for="email" class="text-white">Email:</label>
                <input type="email" id="email" name="email"
                    class="text-white w-full rounded-lg p-2 mt-2 border border-white mb-3" placeholder="Masukkan Email"
                    required>
                <br>
                <label for="role" class="text-white">Role:</label>
                <select name="role" id="role" required
                    class="text-white w-full rounded-lg p-2 mt-2 border border-white mb-3 bg-black">
                    <option value="" disabled selected>Pilih Role</option>
                    <option value="admin" class="text-white">Admin</option>
                    <option value="staff" class="text-white">Staff</option>
                    <option value="mahasiswa" class="text-white">Mahasiswa</option>
                </select>
                <br>
                <label for="password" class="text-white">Password:</label>
                <input type="password" id="password" name="password"
                    class="text-white w-full rounded-lg p-2 mt-2 border border-white mb-3" placeholder="Masukkan password"
                    required>

                <button type="submit"
                    class="mt-4 bg-green-600 hover:bg-green-800 rounded-lg px-4 py-2 text-white font-bold">Simpan</button>
            </div>
        </div>
    </form>
@endsection