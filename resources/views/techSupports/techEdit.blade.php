<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Редактирование технического осмотра</h2>
    </x-slot>
    <div class="p-4 d-flex mw-auto">
        <div class="m-5">
            <form action="/techs/{{ $tech->id }}" method="post">
                @method('PATCH')
                @csrf
                <input class="form-control" type="file" name="photo_auto" value="{{'images/'.$tech->autos()->photo_auto }}" id="photo_auto" placeholder="добавьте картинку"><br>
                @error('photo_auto') <p style="color:red">{{ $message }}</p>@enderror
                <input class="form-control" type="text" name="tech_type" value="{{$tech->type_tech_supp}}" id="tech_type" placeholder="введите тип тех осмотра"><br>
                @error('tech_type') <p style="color:red">{{ $message }}</p>@enderror
                <input class="form-control" type="text" name="tech_date" value="{{$tech->date_tech_supp}}" id="tech_date" placeholder="введите дату проверки"><br>
                @error('tech_date') <p style="color:red">{{ $message }}</p>@enderror
                <input class="form-control" type="date" name="tech_km" value="{{$tech->km_auto}}" id="tech_km" placeholder="введите пробег автомобиля"><br>
                @error('tech_km') <p style="color:red">{{ $message }}</p>@enderror

                <br>
                <button type="submit" class="btn mx-auto col-4 w-100 btn-success">Сохранить</button>

            </form>
        </div>

        <br>
        <div class="p-4 pl-6 w-50">
            <img class="rounded  w-100" src="{{'/images/'.$tech->autos()->photo_auto }}">
        </div>
    </div>
</x-app-layout>
