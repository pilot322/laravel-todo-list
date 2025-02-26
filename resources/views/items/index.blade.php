<x-layout>
    <div class='w-1/2 m-2'>
        <h1>Items</h1>

        <ul>
            @foreach ($items as $item)
            <li>
                <x-card href="/items/{{$item['id']}}" :highlight="$item['amount'] > 20">
                    <h1 class='font-bold text-blue-100' :highlight="true"> {{$item['name']}} </h3>
                    <p> {{$item->box->name}} - {{$item->box->color}}</p>
                </x-card>
            </li>
            @endforeach
        </ul>

        {{ $items->links()}}
    </div>
</x-layout>
