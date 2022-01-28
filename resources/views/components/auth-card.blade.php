<div class="h-screen flex flex-row sm:justify-center items-center gap-4">
    <div class="hidden md:block w-1/2">
        <img src="{{ asset('images/auth.svg') }}" alt="" class="w-2/3">
    </div>
    <div
        class="w-full md:max-w-md p-10">
        <a href="/" class="flex justify-center mb-4">
            <img src="{{ asset('ent.png') }}" class="w-16"/>
        </a>

        {{ $slot }}
    </div>
</div>
