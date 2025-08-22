@extends('guest')

@section('title', 'Login')

@section('content')
  <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">
    <h1 class="text-2xl font-bold text-center mb-6">Login Admin</h1>

    @if($errors->any())
      <div class="mb-4 p-3 rounded bg-red-100 text-red-700 text-sm">
        {{ $errors->first() }}
      </div>
    @endif

    <form action="{{ route('login.attempt') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" required
               class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-gray-800 focus:border-gray-800"
               placeholder="admin@agrotourism.local"
               value="{{ old('email') }}">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required
               class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-gray-800 focus:border-gray-800"
               placeholder="••••••••">
      </div>

      <button type="submit"
              class="w-full bg-gray-800 text-white py-2.5 rounded-lg font-medium hover:bg-black transition">
        Masuk
      </button>
    </form>
  </div>
@endsection
