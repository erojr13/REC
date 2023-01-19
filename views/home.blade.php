<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <script src="/js/home.js"></script>
    <link rel="stylesheet" href="/css/estilos.css">
    @vite('resources/css/app.css')
    <title>Portal de contribuyentes</title>
</head>

</head>

<body>

    <!-- Sidebar-->
    <span class="text-2xl mt-5 ml-5 cursor-pointer lg:hidden" onclick="Openbar()">
        <i class="fa-solid fa-bars"></i>
    </span>
    <aside
        class="sidebar fixed lg:left-0 left-[-300px] duration-700 p-2 w-[300px] overflow-y-auto text-center bg-white md:bg-gray-100/20 h-screen border-r-4 border-rose-200 z-50">
        <div class="text-gray-100 text-lg">
            <div class="p-2.5 mt-1 flex items-center rounded-md ">
                <img src="https://michoacan.gob.mx/cdn/img/logo.svg?ver=2.0" alt="logo" style="height: 70px">
                <i class="fa-solid fa-x ml-20 cursor-pointer lg:hidden text-black" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-800">

            <div class="p-2.5 flex items-center rounded-md px-4 border-b border-gray-200">
                <div class="grow">
                    <p class="text-base text-gray-800">Nombre / Razón social</p>
                    <p class="text-sm text-gray-600">Interlocutor comercial</p>
                </div>
            </div>

            <div class=" py-3 px-3">
                <ul class="space-y-4">
                    <li
                        class="opcion cursor-pointer flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-400">
                        <i class="fa-solid fa-house mr-2"></i>
                        <a id="o1" class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Inicio</a>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-400"
                            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <i class="fa-solid fa-money-check-dollar mr-2"></i>
                            <a class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Impuestos</a>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li class="opcion cursor-pointer">
                                <a id="o2"
                                    class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-400">Nómina</a>
                            </li>
                            <li class="opcion cursor-pointer">
                                <a
                                    class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-400">Hospedaje</a>
                            </li>
                            <li class="opcion cursor-pointer">
                                <a
                                    class="flex items-center justify-between p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-400">Nuevo
                                    <i class="fa-solid fa-plus"></i></a>

                            </li>
                        </ul>
                    </li>

                    <li
                        class="opcion cursor-pointer flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-400">
                        <i class="fa-solid fa-file mr-2"></i>
                        <a id="o3" class="flex-1 ml-3 text-left whitespace-nowrap"
                            sidebar-toggle-item>Constancia</a>
                    </li>

                    <form action="/logout" method="POST">
                        @csrf
                        <li
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-400">
                            <i class="fa-solid fa-right-from-bracket mr-2"></i>
                            <a href="#" onclick="this.closest('form').submit()"
                                class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Salir</a>
                        </li>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- Contenido-->
    <div class="lg:pl-[300px]">

        <header class="bg-white shadow-md flex items-center justify-end px-8 py-2 border-b-4 border-rose-200">

            <!-- elementos-->
            <div class="flex items-center justify-end rounded hover:bg-rose-500/50 px-4 py-2">
                <div><i class="fa-solid fa-house-user text-rose-800 mx-2"></i></div>
                <div>
                    <a class="text-xl text-rose-800" href={{ route('login') }}>Inicio</a>
                </div>
            </div>
        </header>

        <div class="block bg-white" id="mi-aside">

            <!-- Título-->
            <div class="text-center text-stone-600 lg:text-4xl mt-8 font-extrabold">
                <h1>Bienvenido al portal de contribuyentes</h1>
            </div>

            <div class="carousel mx-6 my-6 md:bg-fixed">
                <div class="carousel-inner">

                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
                        hidden="" checked="checked">
                    <div class="carousel-item">
                        <img src="https://michoacan.gob.mx/slider/2023-01-02_Ka4Tj.jpg">
                    </div>

                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                        hidden="">
                    <div class="carousel-item">
                       <img src="https://michoacan.gob.mx/slider/2022-12-01_B1335.jpg">
                    </div>

                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                        hidden="">
                    <div class="carousel-item">
                        <img src="https://michoacan.gob.mx/slider/2022-12-05_d2Fto.jpg">
                    </div>

                    <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                    <label for="carousel-2" class="carousel-control next control-1">›</label>
                    <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                    <label for="carousel-3" class="carousel-control next control-2">›</label>
                    <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                    <label for="carousel-1" class="carousel-control next control-3">›</label>
                    <ol class="carousel-indicators">
                        <li>
                            <label for="carousel-1" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-2" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-3" class="carousel-bullet">•</label>
                        </li>
                    </ol>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class="p-6 bg-gray-100/50 rounded-lg shadow justify-center items-center mt-24">
            <div class="text-center">
                <h4>#HonestidadyTrabajo</h4>
            </div>
            <div class="text-center">
                <b> Gobierno del Estado de Michoacán 2022</b>
            </div>
        </footer>

    </div>
</body>

</html>
