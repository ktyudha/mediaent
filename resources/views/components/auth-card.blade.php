
<style>
    .gradient {
            background: linear-gradient(90deg, #037e9c 0%, #064ca7 100%);
        }
</style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-blue-300">
    <div class="w-full h-screen py-60 -mt-80 rounded-b-3xl gradient">
          
    </div>
    @include('layouts.navigation');
    
        
        {{-- <div>
            {{ $logo }}
        </div> --}}

        <div
            class="w-full sm:max-w-md -mt-60 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    
</div>