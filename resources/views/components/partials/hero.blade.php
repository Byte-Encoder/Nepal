<div class="hero h-screen relative">
    <div class="hero-content absolute flex justify-items-center px-10 items-center gap-20">
        <div class="h-[500px] w-[300px] rounded-xl overflow-hidden ">
            <div class="absolute -top-1 left-52">
                <img src="{{ asset('img/symbol.png') }}" alt="" class="w-20">
            </div>
            <img src="https://cdn.britannica.com/17/83817-050-67C814CD/Mount-Everest.jpg" alt=""
                class="h-full w-full object-cover">
        </div>
        <div class="space-y-10 text-center lg:text-left">
            <div class="space-y-5">
                <h1 class="text-6xl font-semibold text-primary leading-normal">Together for a Cleaner, Brighter
                    Nepal</h1>
                <p class="tracking-wide leading-normal">
                    We tackle Nepal's challenges by empowering citizens, promoting accountability, and inspiring change.
                </p>
            </div>
            <div class="space-x-5">
                <button class="btn btn-primary">
                    <x-heroicon-o-fire class="h-5 w-5 " />View Recent Cases
                </button>
                <button class="btn btn-primary btn-outline">
                    <x-heroicon-o-document-plus class="h-5 w-5" />
                    Post an Issue
                </button>
            </div>
        </div>
    </div>
</div>
