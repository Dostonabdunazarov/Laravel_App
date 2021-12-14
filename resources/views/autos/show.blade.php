<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="container">
    </div>
    <br>
    <div class="text-center d-flex bg-dark">

        <div class="mx-auto text-gray-400 p-3 text-sm fs-4 leading-tight">
            <h2 class="text-gray-300 p-3 text-sm fs-4"> <a class="underline" href="{{ route('autos') }}" {{ __('Autos') }}></a> {{ $auto->mark_auto }} {{ $auto->model_auto }} </h2>
            <hr>
            <div class=" fs-6 w-75 mx-auto">
                <p> Дата выпуска:   {{ $auto->date_auto }}</p>
                <p> Пробег:   {{ $auto->km_auto }} км </p>
                <p> Цвет:   {{ $auto->color }}</p>
            </div>
            <div>
                @can('auto_update', [$auto])
                    <a href="/autos/{{ $auto->id }}/edit" class="text-decoration-none text-gray-300">Редактировать</a>
                @endcan
            </div>
            <hr>
            <form action="/autos/{{ $auto->id }}" method="post">
                @method('DELETE')
                @csrf
                @can('auto_update', [$auto])
                    <button  class="w-50 mt-3 p-1 btn btn-secondary">Удалить</button>
                @endcan
            </form>
            <br>
        </div>
        <div class="w-50 pr-5 mx-auto">
            <img class="rounded w-100" alt="image" src="{{'/images/'.$auto->photo_auto}}">
        </div>
    </div>
</x-app-layout>
