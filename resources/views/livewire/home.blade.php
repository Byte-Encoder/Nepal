<div>
    <div class="fixed top-10 left-0 w-full">
        <x-partials.hero />
    </div>

    <div class="bg-base-100 min-h-screen relative mt-[100vh] z-20 "
        style="background-image: url('https://pinkary.com/img/dots.svg')">
        <div class="flex w-full justify-center items-center">
            <div class="w-1/2">
                <div class="feed-nav sticky z-10 top-0 bg-base-100 py-5">
                    <div class="sticky top-5 flex gap-5 my-5 justify-center items-center">
                        <button class="btn btn-primary text-white font-normal">
                            <x-heroicon-o-home class="h-5 w-5" /> Feed
                        </button>
                        <button class="btn btn-primary text-white font-normal">
                            <x-heroicon-o-document-magnifying-glass class="h-5 w-5" /> Recent Cases
                        </button>
                        <button class="btn btn-primary text-white font-normal">
                            <x-heroicon-o-heart class="h-5 w-5" /> Following
                        </button>
                        <button class="btn btn-primary text-white font-normal">
                            <x-heroicon-o-magnifying-glass class="h-5 w-5" /> Search
                        </button>
                    </div>
                </div>
                <div class="feed-contents mx-10 space-y-20 mb-10">
                    <div class="space-y-5">
                        <x-partials.cards />
                        <x-partials.comments />
                    </div>
                    <div class="space-y-5">
                        <x-partials.cards />
                        <x-partials.comments />
                    </div>
                    <div class="space-y-5">
                        <x-partials.cards />
                        <x-partials.comments />
                    </div>
                    <div class="space-y-5">
                        <x-partials.cards />
                        <x-partials.comments />
                        <x-partials.comments />
                        <x-partials.comments />
                    </div>
                </div>
            </div>
        </div>
        <x-shared.footer />
    </div>
</div>
