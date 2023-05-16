@props(['name'])

<div>
    <dt class="font-bold block lg:inline">{{ $name }}</dt><span class="hidden lg:inline">&nbsp;</span><dd class="block lg:inline">{{ $slot }}</dd>
</div>
