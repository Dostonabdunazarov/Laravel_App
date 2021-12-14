<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Редактирование автомобиля
        </h2>
    </x-slot>
    <div class="p-4 d-flex mw-auto">
        <div class="m-5">
            <form action="/autos/{{ $auto->id }}" method="post" >
                @method('PATCH')
                @csrf
                <input class="form-control" type="file" name="photo_auto" value="{{'images/'.$auto->photo_auto }}" id="photo_auto" placeholder="добавьте картинку"><br>
                @error('photo_auto') <p style="color:red">{{ $message }}</p>@enderror
                <input class="form-control" type="text" name="mark_auto" value="{{$auto->mark_auto}}" id="mark_auto" placeholder="введите марку авто"><br>
                @error('mark_auto') <p style="color:red">{{ $message }}</p>@enderror
                <input class="form-control" type="text" name="model_auto" value="{{$auto->model_auto}}" id="model_auto" placeholder="введите модель авто"><br>
                @error('model_auto') <p style="color:red">{{ $message }}</p>@enderror
                <input class="form-control" type="date" name="date_auto" value="{{$auto->date_auto}}" id="date_auto" placeholder="дата выпуска"><br>
                @error('date_auto') <p style="color:red">{{ $message }}</p>@enderror
                <input class="form-control" type="number" name="km_auto" value="{{$auto->km_auto}}" id="km_auto" placeholder="введите пробег"><br>
                @error('km_auto') <p style="color:red">{{ $message }}</p>@enderror
                <select class="form-control" name="color" value="{{$auto->color}}" id="color" placeholder="выберите цвет"> <br>
                    <option value=”Белый”>White</option>
                    <option value=”Красный”>Red</option>
                    <option value=”Желтый”>Yellow</option>
                    <option value=”Черный”>Black</option>
                    <option value=”Зеленый”>Green</option>
                    <option value=”Синий”>Blue</option>
                </select> <br>
                <br>
                <button type="submit" class="btn mx-auto col-4 w-100 btn-success">Сохранить</button>

            </form>
        </div>

        <br>
        <div class="p-4 pl-6 w-50">
            <img class="rounded  w-100" src="{{'/images/'.$auto->photo_auto}}">
        </div>
    </div>
</x-app-layout>
