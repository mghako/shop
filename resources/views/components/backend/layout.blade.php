<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>August Shop</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <!-- This example requires Tailwind CSS v2.0+ -->
<div>
    
    <x-backend.navbar></x-backend.navbar>
  
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between align-middle">
        <x-form.link href="{{url()->previous()}}" :btn="'default'" style="display: block"> <- Back</x-form.link>
        <h1 class="md:text-3xl font-bold text-gray-900">
          @yield('title')
        </h1>
        <div>
          @yield('addData')
        </div>
      </div>
    </header>
    <main>
      <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
          {{ $slot }}
        </div>
        <!-- /End replace -->
      </div>
    </main>
    @if(session()->has('success'))
      <div x-data="{show: true}"
            x-init="setTimeout(() => show=false, 5000)"
            x-show="show"
            class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
      >
      <p>{{session('success')}}</p>
      </div>
    @endif
  </div>
  
</body>
</html>