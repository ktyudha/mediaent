<div class="h-screen flex flex-row sm:justify-center items-center gap-4">
    <div class="w-1/2">
        <img src="{{ asset('images/auth.svg') }}" alt="" class="w-2/3">
    </div>
    <div
        class="w-full sm:max-w-md">
        {{ $slot }}
    </div>
</div>
