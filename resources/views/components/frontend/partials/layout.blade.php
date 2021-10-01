<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOP</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div>
        <x-frontend.partials.navbar></x-frontend.partials.navbar>
    </div>
    {{ $slot }}
    @if(session()->has('success'))
      <div x-data="{show: true}"
            x-init="setTimeout(() => show=false, 5000)"
            x-show="show"
            class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
      >
      <p>{{session('success')}}</p>
      </div>
    @endif
</body>
</html>