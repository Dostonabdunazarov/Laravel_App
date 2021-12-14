<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ __('Autos') }} </h2>
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ml-8 mr-8">
        @forelse($autos as $auto)
            <div class="m-3 text-center shadow mt-5 ">
                <a class="fs-5 text-decoration-none text-gray-300" href="/autos/{{$auto->id }}">{{ $auto->mark_auto }} {{ $auto->model_auto }}</a> <br>
                <div class="p-4">
                    <img class="rounded-circle w-100" alt="image" src="{{'/images/'.$auto->photo_auto}}">
                </div>
                <div class="text-center text-gray-100">
                    Дата выпуска: {{ $auto->date_auto }} <br>
                    Пробег: {{ $auto->km_auto }} км <br>
                    Цвет: {{ $auto->color }} <br>
                    @can('auto_update', [$auto])
                        <a class="btn btn-secondary m-3 p-1 fs-6" href="/autos/{{ $auto->id }}/edit">Редактировать</a>
                    @endcan

                </div>
            </div>
        @empty
            <strong>No Autos</strong>
        @endforelse
    </div>
</x-app-layout>


