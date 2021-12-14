<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Добавление автомобиля
        </h2>
    </x-slot>
    <div class="container p-4 bg-dark">
        <form action="/autos" method="post">
            @csrf
            <input class="form-control " type="file" name="photo_auto" id="photo_auto" placeholder="добавьте картинку"><br>
            @error('photo_auto') <p style="color:red">{{ $message }}</p>@enderror
            <input class="form-control" type="text" name="mark_auto" id="mark_auto" placeholder="введите марку авто"><br>
            @error('mark_auto') <p style="color:red">{{ $message }}</p>@enderror
            <input class="form-control" type="text" name="model_auto" id="model_auto" placeholder="введите модель авто"><br>
            @error('model_auto') <p style="color:red">{{ $message }}</p>@enderror
            <input class="form-control" type="date" name="date_auto" id="date_auto" placeholder="дата выпуска"><br>
            @error('date_auto') <p style="color:red">{{ $message }}</p>@enderror
            <input class="form-control" type="number" name="km_auto" id="km_auto" placeholder="введите пробег"><br>
            @error('km_auto') <p style="color:red">{{ $message }}</p>@enderror
            <select class="form-control" name="color" id="color" placeholder="выберите цвет"> <br>
                <option value=”Белый”>White</option>
                <option value=”Красный”>Red</option>
                <option value=”Желтый”>Yellow</option>
                <option value=”Черный”>Black</option>
                <option value=”Зеленый”>Green</option>
                <option value=”Синий”>Blue</option>
            </select> <br>
            <button type="submit" class="btn mx-auto col-4 btn-success">Добавить</button>
        </form>
        <br>
    </div>
</x-app-layout>
