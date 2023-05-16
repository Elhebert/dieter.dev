<x-layouts.app title="{{ $title }} - Dieter Stinglhamber">
    <article class="sm:mt-16">
        @if ($archived)
        <p class="bg-[#FAF8EF] dark:bg-slate-500 border border-[#ECC127] dark:border-slate-400 dark:text- py-4 px-3 mb-16">
            This article was writen in {{ $writtenOn }}. It might not be relevant anymore.
        </p>
        @endif

        <div class="prose dark:prose-invert leading-loose max-w-none">
        {!! parsedown($body) !!}
        </div>

    </article>
</x-layouts.app>
