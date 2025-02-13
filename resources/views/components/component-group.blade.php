@props(['componentGroup' => null])

<div x-data x-disclosure default-open class="overflow-hidden rounded-lg border shadow dark:border-zinc-700">
    <div class="flex items-center justify-between border-b bg-white p-4 dark:border-zinc-700 dark:bg-zinc-800">
        <button x-disclosure:button class="flex items-center gap-3 text-zinc-500 dark:text-zinc-300">
            <h3 class="text-lg font-semibold">
                {{ $componentGroup->name }}
            </h3>
            <x-heroicon-o-chevron-up ::class="!$disclosure.isOpen && 'rotate-180'" class="h-6 w-6 transition" />
        </button>

        <a href="#" class="rounded border border-zinc-800 px-2 py-1 text-xs font-semibold text-zinc-800 dark:border-zinc-600 dark:text-zinc-400">4 incidents</a>
    </div>

    <div x-disclosure:panel x-collapse class="flex flex-col divide-y bg-white dark:bg-zinc-800">
        <ul class="divide-y dark:divide-zinc-700">
            @foreach($componentGroup->components as $component)
            <x-cachet::component :component="$component" />
            @endforeach
        </ul>
    </div>
</div>
