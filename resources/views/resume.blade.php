<x-layouts.resume>
    <h1 class="text-5xl mb-10">Dieter Stinglhamber</h1>

    <article>
        <section class="prose leading-loose max-w-none mt-16">
            <h2 class="text-[#ECC127] text-3xl leading-snug font-black flex items-center content-center">
                <span class="bg-[#ECC127] mr-4 block h-2 w-52"></span>
                Experience
            </h2>

            <ol class="list-none pl-0">
                @foreach ($experiences as $experience)
                <li class="flex gap-4">
                    <div class="text-right m-0 w-52">
                        {{ $experience['from'] }} - {{ $experience['to'] }}
                    </div>
                     <div class="m-0">
                        <strong>{{ $experience['title'] }}</strong>, <em><a href="{{ $experience['url'] }}">{{ $experience['company'] }}</a></em>, {{ $experience['location'] }}<br>
                        {{ collect($experience['technologies'])->join(', ') }}
                     </div>
                </li>
                @endforeach
            </ol>
        </section>

        <section class="prose leading-loose max-w-none mt-16">
            <h2 class="text-[#ECC127] text-3xl leading-snug font-black flex items-center content-center">
                <span class="bg-[#ECC127] mr-4 block h-2 w-52"></span>
                Education
            </h2>

            <ol class="list-none pl-0">
                @foreach ($educations as $education)
                <li class="flex gap-4">
                    <div class="text-right m-0 w-52">
                        {{ $education['from'] }} - {{ $education['to'] }}
                    </div>
                     <div class="m-0 pl-1">
                        <strong>{{ $education['degree'] }}</strong><br>
                        <em>{{ $education['school'] }}</em>, {{ $education['location'] }}<br>
                        <small>{{ $education['grade'] }}</small>
                     </div>
                </li>
                @endforeach
            </ol>
        </section>

        <section class="prose leading-loose max-w-none mt-16">
            <h2 class="text-[#ECC127] text-3xl leading-snug font-black flex items-center content-center">
                <span class="bg-[#ECC127] mr-4 block h-2 w-52"></span>
                Languages
            </h2>

            <ol class="list-none pl-0">
                @foreach ($languages as $language)
                <li class="flex gap-4">
                    <div class="text-right m-0 w-52">
                        {{ $language['language'] }}
                    </div>
                     <div class="m-0 pl-1">
                        <strong>{{ $language['level'] }}</strong>
                     </div>
                </li>
                @endforeach
            </ol>
        </section>

        <section class="prose leading-loose max-w-none mt-16">
            <h2 class="text-[#ECC127] text-3xl leading-snug font-black flex items-center content-center">
                <span class="bg-[#ECC127] mr-4 block h-2 w-52"></span>
                Interest
            </h2>

            <ul class="ml-52 grid grid-cols-2">
                @foreach ($interests as $interest)
                <li>
                    {{ $interest }}
                </li>
                @endforeach
            </ul>
        </section>
    </article>
</x-layouts.app>
