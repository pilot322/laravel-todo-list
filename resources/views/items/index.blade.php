<x-layout>
    <h1>Items</h1>

    <ul>
        @foreach ($items as $item)
        <li>
            <x-card href="/items/{{$item['id']}}" :highlight="$item['amount'] > 20">
                <h1 class='font-bold text-blue-100' :highlight="true"> {{$item['name']}} </h3>
            </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>
