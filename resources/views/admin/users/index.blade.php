@extends('layouts.app')
@section('tittle', 'Daftar Pengguna')
@section('content')
    <div class="bg-black w-full min-h-screen">
        <h1 class="text-4xl font-bold p-10 text-center text-white">DAFTAR PENGGUNA</h1>
        <div class="px-10 mb-6">
            <hr class="bg-white p-1 w-full">
        </div>
        <div class="text-right mr-10">
            <a href="{{ route('admin.users.create') }}"
                class="inline-block px-4 py-2 bg-green-600 hover:bg-green-800 rounded-lg font-bold text-white">Tambah</a>
        </div>
        <div class="mt-6 mr-10 ml-10 rounded-lg overflow-hidden border border-white">
            <table class="bg-gray-800 text-white gap-4 w-full text-center table-fixed">
                <thead>
                    <tr class="border border-white px-6 py-2">
                        <th class="px-6 py-3">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr class="border border-white">
                            <td class="px-6 py-2">{{ $index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection