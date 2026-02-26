@extends('admin.layouts.app')

@section('content')

<div class="p-6 max-w-xl">
    <h1 class="text-2xl font-bold mb-6">Edit Domain Extension</h1>

    <form action="{{ route('domain-extensions.update',$domain_extension->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Extension</label>
            <input type="text" name="extension"
                   value="{{ $domain_extension->extension }}"
                   class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Category</label>
            <input type="text" name="category"
                   value="{{ $domain_extension->category }}"
                   class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Price</label>
            <input type="number" name="price"
                   value="{{ $domain_extension->price }}"
                   class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Status</label>
            <select name="is_active" class="w-full border p-2 rounded">
                <option value="1" {{ $domain_extension->is_active ? 'selected' : '' }}>
                    Aktif
                </option>
                <option value="0" {{ !$domain_extension->is_active ? 'selected' : '' }}>
                    Nonaktif
                </option>
            </select>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Update
        </button>

    </form>
</div>

@endsection
