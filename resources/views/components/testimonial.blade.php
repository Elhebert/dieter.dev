@props(['author'])

<div class="pt-4 break-inside-avoid-column">
    <figure class="bg-[#FAF8EF] p-10 rounded-2xl">
        <blockquote>
            <p>&quot;{{ $slot }}&quot;</p>
        </blockquote>
        <figcaption class="text-sm font-bold mt-5">— {{ $author }}</figcaption>
    </figure>
</div>
