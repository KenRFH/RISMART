@extends('guest')

@section('title', 'Login Admin')

@section('content')
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-200 via-white to-amber-100 p-6">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-sm shadow-xl rounded-2xl p-8 border border-purple-200">

      <!-- Header -->
      <div class="text-center mb-6">
        <!-- Icon Bubble -->
        <div class="mx-auto mb-4 w-16 h-16 flex items-center justify-center rounded-full bg-amber-500 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" stroke="white" viewBox="0 0 1920 1920" class="w-12 h-12">
            <path d="M276.941 440.584v565.722c0 422.4 374.174 625.468 674.71 788.668l8.02 4.292 8.131-4.292c300.537-163.2 674.71-366.268 674.71-788.668V440.584l-682.84-321.657L276.94 440.584Zm682.73 1479.529c-9.262 0-18.523-2.372-26.993-6.89l-34.9-18.974C588.095
                1726.08 164 1495.906 164 1006.306V404.78c0-21.91 12.65-41.788 32.414-51.162L935.727 5.42c15.134-7.228 32.866-7.228 48 0l739.313 348.2c19.765 9.374 32.414 29.252 32.414 51.162v601.525c0 489.6-424.207 719.774-733.779 887.943l-34.899 18.975c-8.47 4.517-17.731
                6.889-27.105 6.889Zm467.158-547.652h-313.412l-91.595-91.482v-83.803H905.041v-116.78h-83.69l-58.503-58.504c-1.92.113-3.84.113-5.76.113-176.075 0-319.285-143.21-319.285-319.285 0-176.075 143.21-319.398 319.285-319.398 176.075 0 319.285 143.323 319.285 319.398
                0 1.92 0 3.84-.113 5.647l350.57 350.682v313.412Zm-266.654-112.941h153.713v-153.713L958.462 750.155l3.953-37.27c1.017-123.897-91.595-216.621-205.327-216.621S550.744 588.988 550.744 702.72c0 113.845 92.612 206.344 206.344 206.344l47.21-5.309 63.811
                63.7h149.873v116.78h116.781v149.986l25.412 25.299Zm-313.4-553.57c0 46.758-37.949 84.706-84.706 84.706-46.758 0-84.706-37.948-84.706-84.706s37.948-84.706 84.706-84.706c46.757 0 84.706 37.948 84.706 84.706" fill-rule="evenodd"/>
            </svg>
        </div>

        <!-- Title & Subtitle -->
        <h1 class="text-2xl font-bold text-gray-800">Admin Login Page</h1>
        <p class="mt-1 text-sm text-gray-500">Log in to manage the system</p>
    </div>


      <!-- Error Message -->
      @if($errors->any())
        <div class="mb-4 p-3 rounded-lg bg-red-100 text-red-700 text-sm shadow">
          {{ $errors->first() }}
        </div>
      @endif

      <!-- Form -->
      <form action="{{ route('login.attempt') }}" method="POST" class="space-y-5">
        @csrf
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" required
                 class="m-2 p-2 w-full rounded-lg border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500"
                 placeholder="Insert your email"
                 value="{{ old('email') }}">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" required
                 class="m-2 p-2 w-full rounded-lg border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500"
                 placeholder="••••••••">
        </div>

        <button type="submit"
                class="w-full bg-purple-600 text-white py-2.5 rounded-lg font-medium shadow hover:bg-purple-700 hover:shadow-md transition">
          Masuk
        </button>
      </form>
    </div>
  </div>
@endsection
