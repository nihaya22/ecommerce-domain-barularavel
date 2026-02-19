@extends('frontend.layouts.main')

@section('content')
<section class="py-12">
  <div class="max-w-4xl mx-auto px-4">
    <a href="{{ route('domain.index') }}" class="text-sm font-semibold text-blue-700 hover:text-blue-800">
      ← Kembali
    </a>

    <div class="mt-4 bg-white/80 border border-blue-100 rounded-2xl p-6 shadow-sm">
      <h1 class="text-3xl font-extrabold text-slate-900">{{ $domain->name }}</h1>
      <p class="text-slate-600 mt-2">Slug: {{ $domain->slug }}</p>
      <p class="text-slate-600 mt-2">Rp {{ number_format($domain->price, 0, ',', '.') }}</p>
    </div>
  </div>
</section>
@endsection
