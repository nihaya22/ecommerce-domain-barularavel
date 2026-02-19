@extends('admin.layouts.main')

@section('content')

<div class="bg-white p-6 rounded-2xl shadow">

<form action="{{ route('admin.testimonials.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="space-y-5">
    @csrf

    <div class="grid grid-cols-2 gap-4">

        <div>
            <label class="block mb-1 font-semibold">Nama</label>
            <input type="text" name="name"
                   class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500"
                   required>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Jabatan</label>
            <input type="text" name="position"
                   class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500"
                   required>
        </div>

    </div>

    <div>
        <label class="block mb-1 font-semibold">Pesan</label>
        <textarea name="message"
                  class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500"
                  rows="4"
                  required></textarea>
    </div>

    <div class="grid grid-cols-2 gap-4">

        <div>
            <label class="block mb-1 font-semibold">Rating</label>
            <select name="rating"
                    class="w-full border rounded-lg p-3">
                <option value="5">⭐⭐⭐⭐⭐ (5)</option>
                <option value="4">⭐⭐⭐⭐ (4)</option>
                <option value="3">⭐⭐⭐ (3)</option>
                <option value="2">⭐⭐ (2)</option>
                <option value="1">⭐ (1)</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Foto</label>
            <input type="file" name="photo"
                   class="w-full border rounded-lg p-2">
        </div>

    </div>

    <div>
        <button type="submit"
                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold">
            Simpan
        </button>
    </div>

</form>

</div>


@endsection
