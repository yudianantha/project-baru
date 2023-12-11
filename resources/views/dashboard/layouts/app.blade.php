<!DOCTYPE html>
<html lang="en">

<style>
    body{
        height: 100%;
    }
</style>

{{-- mengambil semua kodingan dari head.blade.php --}}
@include('dashboard.components.head')
<body>
    {{-- mengambil semua kodingan dari sidenav.blade.php --}}
    @include('dashboard.components.sidenav')
    {{-- mengambil semua kodingan dari navbar.blade.php --}}
    @include('dashboard.components.navbar')
    {{-- menjadikan space ini untuk tempat yang bisa diisi oleh page2 lainnya --}}
    @yield('content')
    {{-- mengambil semua kodingan dari footer.blade.php --}}
    @include('dashboard.components.footer')
</body>
{{-- mengambil semua kodingan dari script.blade.php --}}
@include('dashboard.components.script')
</html>