<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Добавление ТО
        </h2>
    </x-slot>
    <div class="container p-4 bg-dark">
        <br>
        <form action="/techs" method="post">
            @csrf
            <input class="form-control" type="text" name="type_tech_supp" id="type_tech_supp" placeholder="введите тип тех осмотра"><br>
            @error('type_tech_supp') <p style="color:red">{{ $message }}</p>@enderror
            <input class="form-control" type="date" name="date_tech_supp" id="date_tech_supp" placeholder="введите дату проверки"><br>
            @error('date_tech_supp') <p style="color:red">{{ $message }}</p>@enderror
            <input class="form-control" type="text" name="km_auto" id="km_auto" placeholder="введите пробег автомобиля"><br>
            @error('km_auto') <p style="color:red">{{ $message }}</p>@enderror
            <br>
            <button type="submit" class="btn mx-auto col-4 btn-success">Добавить</button>
        </form>
        <br>
    </div>
</x-app-layout>
