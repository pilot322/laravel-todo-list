@props(['highlight' => false])
<div @class(['bg-stone-500' => !$highlight, 'bg-red-500' => $highlight, 'w-1/2 m-2'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>
