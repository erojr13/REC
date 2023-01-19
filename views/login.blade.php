<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/estilos.css">
    <link href="https://michoacan.gob.mx/cdn/css/portalmich.css?ver=0.05" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="/css/estilos.css">
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    @vite('resources/css/app.css')
    <title>Portal de contribuyentes</title>
</head>

</head>

<body>
    <!-- Header-->
    <header
        class="header sticky bg-white shadow-md flex items-center justify-between px-8 py-2 border-b-4 border-rose-200">
        <!-- logo -->
        <h1 class="w-3/12">
            <a href={{ route('login') }}>
                <img src="https://michoacan.gob.mx/cdn/img/logo.svg?ver=2.0" alt="logo" style="height: 70px"> </a>
        </h1>
    </header>

    <!-- Título-->
    <div class="text-center text-stone-600 text-4xl mt-8 font-extrabold">
        <h1>REC MICHOACÁN</h1>
    </div>

    <!-- Login -->
    <form name="registro" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="grid grid-cols-1 gap-4 p-6 my-8 rounded-lg shadow-xl bg-white border-2 w-10/12 md:w-5/12">

            <div class="text-xl text-center">
                <b> Datos de acceso</b>
            </div>

            <div class="relative">
                <input type="text" name="rfc" id="rfc" required autofocus value="{{ old('email') }}"
                    class="input-form text-xl" maxlength="13" />
                <label class="label-form text-2xl"><i class="fa-solid fa-user-tie mr-2"></i>RFC</label>
                @error('rfc')
                    {{ $message }}
                @enderror
            </div>

            <div class="relative">
                <input type="password" name="password" id="password" required class="input-form text-2xl" />
                <label class="label-form text-2xl"><i class="fa-solid fa-key mr-2"></i>Contraseña</label>
                @error('password')
                    {{ $message }}
                @enderror
            </div>

            <div class="block text-center italic"><a href="#">
                    ¿Olvidó su contraseña?</a>
            </div>

            <div class="justify-center mt-4 space-x-3">
                <button type="submit"
                    class="rounded px-6 py-2 bg-rose-800 text-white font-medium text-base hover:bg-rose-600">
                    {{ 'Continuar' }}</button>
                <a href="{{ route('register') }}"><input type="button"
                        class="rounded px-6 py-2 bg-rose-800 text-white font-medium text-base hover:bg-rose-600 cursor-pointer"
                        value="Registrarse"></a>
            </div>
        </div>
    </form>

    <!-- Footer-->
    <footer class="p-4 bg-gray-100/50 rounded-lg shadow justify-center items center block">
        <div class="text-center">
            <h4>#HonestidadyTrabajo</h4>
        </div>
        <div class="text-center">
            <b> Gobierno del Estado de Michoacán 2022</b>
        </div>
    </footer>


</body>

</html>
