<div class="flex justify-between px-10 backdrop-blur-sm">
    <div class="hidden px-5 lg:navbar">
        <div class="flex-1">
            <a href="#"
                class="text-xl text-primary hover:text-base-300 font-bold duration-500 transition-all delay-100 ease-in-out">
                NEPAL
            </a>
        </div>
    </div>
    <div class="flex items-center gap-10">
        <ul class="inline-flex font-poppins gap-10 text-base-300">
            <li>
                <a href="{{ route('home') ?? '#' }}" wire:navigate
                    class="hover:text-primary duration-500 ease-in-out delay-75 transition-all {{ Route::currentRouteName() === 'home' ? 'text-primary' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') ?? '#' }}" wire:navigate
                    class="hover:text-primary duration-500 ease-in-out delay-75 transition-all {{ Route::currentRouteName() === 'about' ? 'text-primary' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('about') ?? '#' }}" wire:navigate
                    class="hover:text-primary duration-500 ease-in-out delay-75 transition-all {{ Route::currentRouteName() === 'about' ? 'text-primary' : '' }}">
                    Highlights
                </a>
            </li>
            <li>
                <a href="{{ route('about') ?? '#' }}" wire:navigate
                    class="hover:text-primary duration-500 ease-in-out delay-75 transition-all {{ Route::currentRouteName() === 'about' ? 'text-primary' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
        <div>
            {{-- <a href="{{ route('contact') }}" wire:navigate class="btn text-secondary btn-primary">
            <span>
                <x-heroicon-m-phone-arrow-up-right class="h-5 w-5 " />
            </span>
            Connect
        </a> --}}
        </div>
    </div>
</div>
