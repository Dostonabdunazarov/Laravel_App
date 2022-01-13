<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ __('TechSupports') }} </h2>
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ml-8 mr-8">
        @forelse($techs as $tech)
            <div class="m-3 text-center shadow mt-5 ">
                <a class="fs-5 text-decoration-none text-gray-300" href="/techs/{{$tech->id }}"></a> <br>
                <div class="text-center text-gray-100">
                    Дата тех.осмотра: {{ $tech->date_tech_supp }} <br>
                    Пробег авто: {{ $tech->km_auto }} км <br>
                    Тип тех.осмотра: {{ $tech->type_tech_supp }} <br>
                    @can('tech_update', [$tech])
                        <a class="btn btn-secondary m-3 p-1 fs-6" href="/techSupports/{{ $tech->id }}/edit">Редактировать</a>
                    @endcan
                </div>
            </div>
        @empty
            <strong>No Technical Supports</strong>
        @endforelse
    </div>
</x-app-layout>
