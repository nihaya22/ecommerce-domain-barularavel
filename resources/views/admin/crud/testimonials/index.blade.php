@extends('admin.layouts.main')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Testimonials</h1>

    <a href="{{ route('admin.testimonials.create') }}"
       class="px-4 py-2 bg-brand-600 hover:bg-brand-700 text-white rounded-xl font-semibold">
        + Tambah Testimonial
    </a>
</div>

<form action="{{ route('admin.testimonials.store') }}"
      method="POST"
      enctype="multipart/form-data">
    @csrf


@if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-100">
    <tr>
        <th class="p-3 text-left">#</th>
        <th class="p-3 text-left">Foto</th>
        <th class="p-3 text-left">Nama</th>
        <th class="p-3 text-left">Jabatan</th>
        <th class="p-3 text-left">Rating</th>
        <th class="p-3 text-left">Pesan</th>
        <th class="p-3 text-left">Status</th>
    </tr>
</thead>


        <tbody>
@forelse($testimonials as $testimonial)
<tr class="border-t align-top">

    <td class="p-3">{{ $testimonial->id }}</td>

    {{-- FOTO --}}
    <td class="p-3">
        @if($testimonial->photo)
            <img src="{{ asset('storage/'.$testimonial->photo) }}"
                 class="w-12 h-12 rounded-full object-cover">
        @else
            <div class="w-12 h-12 rounded-full bg-blue-500 text-white 
                        flex items-center justify-center font-bold">
                {{ strtoupper(substr($testimonial->name,0,1)) }}
            </div>
        @endif
    </td>

    {{-- NAMA --}}
    <td class="p-3 font-semibold">
        {{ $testimonial->name }}
    </td>

    {{-- JABATAN --}}
    <td class="p-3 text-gray-600">
        {{ $testimonial->position }}
    </td>

    {{-- RATING --}}
    <td class="p-3 text-yellow-500">
        @for($i = 0; $i < $testimonial->rating; $i++)
            ⭐
        @endfor
        <span class="text-gray-500 text-xs">
            ({{ $testimonial->rating }}/5)
        </span>
    </td>

    {{-- PESAN --}}
    <td class="p-3 max-w-xs">
        {{ Str::limit($testimonial->message, 60) }}
    </td>

    {{-- STATUS --}}
    <td class="p-3">
        @if($testimonial->status == 'Active')
            <span class="text-green-600 font-semibold">Active</span>
        @else
            <span class="text-gray-500 font-semibold">Inactive</span>
        @endif
    </td>

</tr>
@empty
<tr>
    <td colspan="7" class="p-6 text-center text-gray-500">
        Belum ada testimonial.
    </td>
</tr>
@endforelse
</tbody>

    </table>
</div>

@endsection
