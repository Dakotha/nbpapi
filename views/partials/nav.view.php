<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="border-b border-gray-700">
            <div class="flex h-16 items-center justify-between px-4 sm:px-0">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="NBP API">
                        </a>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/" class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Kursy walut</a>
                            <a href="/konwerter" class="<?= $_SERVER['REQUEST_URI'] === '/konwerter' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Konwerter walut</a>
                            <a href="/o-projekcie" class="<?= $_SERVER['REQUEST_URI'] === '/o-projekcie' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">O projekcie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>