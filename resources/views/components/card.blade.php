@props(['highlight' => false])
<div @class(['bg-stone-500' => !$highlight, 'bg-red-500' => $highlight])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>
