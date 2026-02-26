@extends('frontend.layouts.main')

@section('content')

<div class="max-w-6xl mx-auto py-16 px-6">

@foreach($extensions as $category => $items)

    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-blue-600">
            {{ $category }}
        </h2>

        <div class="grid md:grid-cols-4 gap-6">
            @foreach($items as $ext)
            <div class="bg-white shadow rounded-xl p-6 text-center">
                <div class="text-2xl font-bold text-blue-600">
                    {{ $ext->extension }}
                </div>
                <div class="mt-2 text-gray-600">
                    Rp {{ number_format($ext->price) }}
                </div>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">
                    Pesan
                </button>
            </div>
            @endforeach
        </div>
    </div>

@endforeach

</div>

@endsection
