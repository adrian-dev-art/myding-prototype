<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-primary text-white">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-secondary shadow-md overflow-hidden sm:rounded-lg text-white">
        {{ $slot }}
    </div>
</div>
