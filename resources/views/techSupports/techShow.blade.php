<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="container"></div><br>
    <div class="text-center d-flex bg-dark">
        <div class="mx-auto text-gray-400 p-3 text-sm fs-4 leading-tight">
            <h2 class="text-gray-300 p-3 text-sm fs-4"> <a class="underline" href="{{ route('techSupports') }}" {{ __('Technical Support') }}></a> </h2>
            <hr>
            <div class=" fs-6 w-75 mx-auto">
                <p> Дата тех.осмотра: {{ $tech->date_tech_supp }}</p> <br>
                <p> Пробег авто: {{ $tech->km_auto }} км <br></p>
                <p> Тип тех.осмотра: {{ $tech->type_tech_supp }} <br></p>
            </div>
            <div>
                @can('tech_update', [$tech])
                    <a href="/techs/{{ $tech->id }}/edit" class="text-decoration-none text-gray-300">Редактировать</a>
                @endcan
            </div><hr>
            <form action="/techs/{{ $tech->id }}" method="post">
                @method('DELETE')
                @csrf
                @can('tech_update', [$tech])
                    <button  class="w-50 mt-3 p-1 btn btn-secondary">Удалить</button>
                @endcan
            </form><br>
        </div>
        <div class="w-50 pr-5 mx-auto">
            <img class="rounded w-100" alt="image" src="{{'/images/'.$tech->autos()->photo_auto}}">
        </div>
    </div>
</x-app-layout>
