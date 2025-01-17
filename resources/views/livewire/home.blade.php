<div>
    <div class="fixed top-10 left-0 w-full">
        <x-partials.hero />
    </div>
    <div class="bg-base-200 min-h-screen relative mt-[100vh] z-20 "
        style="background-image: url('https://pinkary.com/img/dots.svg')">
        <div class="flex w-full justify-center items-center">
            <div class="lg:w-1/2 md:w-[620px]">
                <div class="feed-nav sticky z-10 top-0 bg-base-200 lg:py-5 py-10">
                    <div class="sticky top-5 flex lg:gap-5 gap-4 my-5 justify-center items-center">
                        <button class="btn w-16 md:w-auto lg:w-auto btn-primary text-white font-normal">
                            <x-heroicon-o-home class="h-5 w-5" />
                            <span class="lg:block md:block  hidden">
                                Feed
                            </span>
                        </button>
                        <button class="btn w-16 md:w-auto lg:w-auto btn-primary text-white font-normal">
                            <x-heroicon-o-document-magnifying-glass class="h-5 w-5" />
                            <span class="lg:block  md:block hidden">
                                Recent Cases
                            </span>
                        </button>
                        <button class="btn w-16 md:w-auto lg:w-auto btn-primary text-white font-normal">
                            <x-heroicon-o-heart class="h-5 w-5" />
                            <span class="lg:block md:block hidden">
                                Following
                            </span>
                        </button>
                        <button class="btn w-16 md:w-auto lg:w-auto btn-primary text-white font-normal">
                            <x-heroicon-o-magnifying-glass class="h-5 w-5" />
                            <span class="lg:block md:block  hidden">
                                Search
                            </span>
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
    </div>
</div>
