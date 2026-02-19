@extends('admin.layouts.main')

@section('content')

<h1 class="text-2xl font-bold mb-6">Tambah Service</h1>

<form action="{{ route('admin.services.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded-xl shadow">
    @csrf

    <div>
        <label class="block font-semibold mb-1">Nama Service</label>
        <input type="text" name="name" class="w-full border rounded-lg p-2" required>
    </div>

    <div>
        <label class="block font-semibold mb-1">Harga</label>
        <input 
            type="text" 
            name="price" 
            id="price"
            class="w-full border rounded-lg p-2"
            placeholder="Contoh: 300000"
            required
        >

    </div>

    <script>
        document.getElementById('price').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        e.target.value = new Intl.NumberFormat('id-ID').format(value);
        });
    </script>


    <div>
        <label class="block font-semibold mb-1">Deskripsi</label>
        <textarea name="description" class="w-full border rounded-lg p-2"></textarea>
    </div>

    <div>
        <label class="block font-semibold mb-1">Status</label>
        <select name="status" class="w-full border rounded-lg p-2">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
    </div>

    <button class="bg-brand-600 text-white px-4 py-2 rounded-lg hover:bg-brand-700">
        Simpan
    </button>
</form>

@endsection
