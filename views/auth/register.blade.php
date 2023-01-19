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
    <link rel="stylesheet" href="/css/estilos.css">
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <link href="https://michoacan.gob.mx/cdn/css/portalmich.css?ver=0.05" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>Registro</title>
</head>

</head>

<body>
    <!-- Header-->
    <header
        class="header sticky bg-white shadow-md flex items-center justify-between px-8 py-2 border-b-4 border-rose-200">
        <!-- logo -->
        <h1 class="w-3/12">
            <a href= {{ route('login') }}>
                <img src="https://michoacan.gob.mx/cdn/img/logo.svg?ver=2.0" alt="logo" style="height: 70px"> </a>
        </h1>

        <!-- elementos-->
        <div class="flex items-center justify-end rounded hover:bg-rose-500/50 px-4 py-2">
            <div><i class="fa-solid fa-house-user text-rose-800 mx-2"></i></div>
            <div>
                <a class="text-xl text-rose-800" href={{ route('login') }}>Iniciar sesión</a>
            </div>
        </div>
    </header>

    <!-- Título-->
    <div class="text-center text-stone-600 text-4xl mt-8 font-extrabold">
        <h1>Regístrate</h1>
    </div>

    <!-- Pestañas-->
    <div class="max-w-xl mx-auto mt-4 md:max-w-4xl">
        <nav class="rounded-lg bg-rose-700 border-2 my-4 p-2 text-lg">
            <ul class="tabs flex items-center">
                <li class="mx-auto border-2 rounded-lg bg-rose-600 "><a href="#tab1" class="active">
                        <span class="lg:text-lg">Datos personales</span></a></li>
                <li class="mx-auto border-2 rounded-lg bg-rose-600 "><a href="#tab2">
                        <span class="lg:text-lg">Dirección</span></a></li>
            </ul>
        </nav>

        <!-- Contenido / secciones-->
        <div class="secciones">
            <article id="tab1">
                <form name="registro" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6 rounded-lg shadow-xl bg-white border-2 auto-rows-auto">
                        <div class="relative">
                            <select name="persona" id="persona"
                                class="input-form @error('persona') is-invalid @enderror"
                                onChange="mostrar(this.value);">
                                <option selected value="1">Física</option>
                                <option value="2">Moral</option>
                            </select>
                            <label class="label-form"><i class="fa-solid fa-user-tie mr-2"></i>Tipo de persona</label>
                            @error('persona')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="block"></div>

                        <div class="relative">

                            <label class="label-form">
                                <i class="fa-solid fa-user mr-2"></i>RFC</label>
                            <input type="text" name="rfc" id="rfc"
                                class="input-form uppercase 
                            @error('rfc') is-invalid @enderror"
                                maxlength="13" />
                            @error('rfc')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="relative" id="datocurp">
                            <input type="text" name="cu" id="curp" class="input-form uppercase"
                                onfocusout="" maxlength="18" />
                            <label class="label-form">
                                <i class="fa-solid fa-user mr-2"></i>CURP</label>
                        </div>

                        <div class="relative" id="datonombre">
                            <input type="text" name="name" id="name" class="input-form capitalize"
                                readonly />
                            <label for="name" class="label-form"><i class="fa-solid fa-user mr-2"></i>Nombre</label>
                        </div>

                        <div class="relative" id="datoapellidopat">
                            <input type="text" name="apellido1" id="apellido1" class="input-form capitalize"
                                readonly />
                            <label for="apellido1" class="label-form"><i class="fa-solid fa-user mr-2"></i>Apellido
                                paterno</label>
                        </div>

                        <div class="relative" id="datoapellidoma">
                            <input type="text" name="apellido2" id="apellido2" class="input-form capitalize"
                                readonly />
                            <label for="apellido2" class="label-form"><i class="fa-solid fa-user mr-2"></i>Apellido
                                materno</label>
                        </div>


                        <div class="relative" id="datosexo">
                            <input type="text" name="sexo" id="sexo" readonly class="input-form" readonly />
                            <label class="label-form">
                                <i class="fa-solid fa-venus-mars mr-2"></i>Sexo</label>
                        </div>

                        <div class="relative" id="datofechanac">
                            <input type="text" name="fechan" id="fechan" readonly class="input-form"
                                readonly />
                            <label for="fechan" class="label-form"><i
                                    class="fa-solid fa-calendar-days mr-2"></i>Fecha de nacimiento</label>
                        </div>

                        <div class="relative">
                            <input type="text" name="nrp" id="nrp"
                                class="input-form uppercase 
                            @error('nrp') is-invalid @enderror" />
                            <label class="label-form">
                                <i class="fa-solid fa-user mr-2"></i>NRP</label>
                            @error('nrp')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="relative hidden" id="datorazsoc">
                            <input type="text" name="razonsocial" id="razonsocial"
                                class="input-form capitalize" />
                            <label for="razonsocial" class="label-form"><i class="fa-solid fa-user mr-2"></i>
                                Razón social</label>
                        </div>

                        <div class="relative hidden" id="datorepleg">
                            <input type="text" name="repleg" id="repleg" class="input-form capitalize" />
                            <label class="label-form"><i class="fa-solid fa-user mr-2"></i>Representante
                                legal</label>
                        </div>


                        <div class="relative">
                            <input type="email" name="email" id="email"
                                class="input-form lowercase
                            @error('email') is-invalid @enderror"
                                onKeyPress="tecla(event);" />
                            <label class="label-form"><i class="fa-solid fa-envelope-open mr-2"></i>Correo
                                electrónico</label>
                            @error('email')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="relative">
                            <input type="email" name="email" id="email" class="input-form lowercase"
                                onKeyPress="tecla(event);" />
                            <label class="label-form"><i class="fa-solid fa-envelope mr-2"></i>Confirmar correo
                                electrónico:</label>
                        </div>

                        <div class="relative">
                            <input type="password" name="password" id="password"
                                class="input-form
                            @error('password') is-invalid @enderror"
                                onKeyPress="tecla(event);" />
                            <label class="label-form"><i class="fa-solid fa-unlock mr-2"></i>Contraseña</label>
                            @error('password')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="relative">
                            <input type="password" name="password_confirmation" id="password-confi"
                                class="input-form capitalize" onKeyPress="tecla(event);" />
                            <label class="label-form"><i class="fa-solid fa-lock mr-2"></i>Confirma tu
                                contraseña</label>
                        </div>

                        <div class="block">
                            <label class="label-file"><i class="fa-solid fa-id-card mr-2"></i>Identificación
                                oficial -Frente-</label>
                            <input type="file" name="file1" class="input-form" required id="archivoInput"
                                onchange="return validarExt()" accept="image/" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300 float-left">SVG, PNG, JPG o GIF
                                (MAX. 5 MB).</p>
                        </div>

                        <div class="block">
                            <label class="label-file"><i class="fa-solid fa-id-card mr-2"></i>Identificación
                                oficial -Reverso-</label>
                            <input type="file" name="file2" class="input-form" required id="archivoInput2"
                                onchange="return validarExt2()" accept="image/" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300 float-left">SVG, PNG, JPG o GIF
                                (MAX. 5 MB).</p>
                        </div>

                        <div class="hidden" id="datoactcon">
                            <label class="label-file"><i class="fa-solid fa-file-contract mr-2"></i>Acta
                                constitutiva</label>
                            <input type="file" name="file4" class="input-form" required id="archivoInput4"
                                onchange="return validarExt4()" accept="image/" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300 float-left">SVG, PNG, JPG o GIF
                                (MAX. 5 MB).</p>
                        </div>

                        <div class="block" id="datoconfis">
                            <label class="label-file"><i class="fa-solid fa-file-invoice mr-2"></i>Constancia
                                de situación fiscal</label>
                            <input type="file" name="file3" class="input-form" required id="archivoInput3"
                                onchange="return validarExt3()" accept="image/" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-300 float-left">SVG, PNG, JPG o GIF
                                (MAX. 5 MB).</p>
                        </div>


            </article>

            <!-- Domicilio fiscal-->
            <article id="tab2" style="display: none;">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-4 p-6 rounded-lg shadow-xl bg-white border-2 auto-rows-auto">

                    <div class="relative">
                        <input type="text" name="cp" maxlength="5"
                            class="input-form
                            @error('cp') is-invalid @enderror"
                            placeholder="Buscar" value="" onfocusout="cp(this.value);"
                            maxlength="13" />
                        <label class="label-form"><i class="fa-solid fa-location-crosshairs mr-2"></i>Código
                            postal</label>
                        @error('cp')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="block"></div>

                    <div class="relative">
                        <select name="pais" id="pais"
                            class="input-form capitalize
                            @error('pais') is-invalid @enderror">
                        </select>
                        <label class="label-form"><i class="fa-solid fa-earth-americas mr-2"></i>País</label>
                        @error('pais')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="relative">
                        <select name="estado" id="estado"
                            class="input-form capitalize
                            @error('estado') is-invalid @enderror">
                        </select>
                        <label class="label-form"><i class="fa-solid fa-earth-americas mr-2"></i>Estado</label>
                        @error('estado')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="relative">
                        <select name="municipio" id="municipio"
                            class="input-form capitalize
                            @error('municipio') is-invalid @enderror">
                        </select>
                        <label class="label-form"><i class="fa-solid fa-map-location mr-2"></i>Municipio</label>
                        @error('municipio')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="relative">
                        <select name="localidad" id="localidad"
                            class="input-form capitalize
                            @error('localidad') is-invalid @enderror">
                        </select>
                        <label class="label-form"><i class="fa-solid fa-map-location-dot mr-2"></i>Localidad</label>
                        @error('localidad')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="relative">
                        <select name="colonia" id="colonia"
                            class="input-form capitalize
                            @error('colonia') is-invalid @enderror">
                        </select>
                        <label class="label-form"><i class="fa-solid fa-street-view mr-2"></i>Colonia</label>
                        @error('colonia')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="block"></div>

                    <div class="relative">
                        <input type="text" name="calle" id="calle"
                            class="input-form capitalize
                            @error('calle') is-invalid @enderror" />
                        <label class="label-form"><i class="fa-solid fa-street-view mr-2"></i>Calle</label>
                        @error('calle')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="relative flex justify-between">

                        <div>
                            <input type="text" name="num_ext" id="num_ext"
                                class="input-form
                                @error('num_ext') is-invalid @enderror" />
                            <label class="label-form"><i class="fa-solid fa-hashtag mr-2"></i>Número
                                exterior</label>
                            @error('num_ext')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                    role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="relative">
                            <input type="text" name="num_int" id="num_int" class="input-form capitalize" />
                            <label class="label-form"><i class="fa-solid fa-hashtag mr-2"></i>Número
                                interior</label>
                        </div>

                    </div>

                    <div class="relative">
                        <input type="text" name="entrecalle" id="entrecalle" class="input-form capitalize" />
                        <label class="label-form"><i class="fa-solid fa-road mr-2"></i>Entre calle</label>
                    </div>

                    <div class="relative">
                        <input type="text" name="ycalle" id="ycalle" class="input-form capitalize" />
                        <label class="label-form"><i class="fa-solid fa-road mr-2"></i>Y calle</label>
                    </div>

                    <div class="relative lg:col-span-2">
                        <input type="text" name="referencia" id="referencia"
                            class="input-form capitalize
                            @error('referencia') is-invalid @enderror" />
                        <label class="label-form"><i class="fa-solid fa-rectangle-list mr-2"></i>Referencia</label>
                        @error('referencia')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="relative">
                        <input type="text" name="lat" id="lat" class="input-form capitalize" />
                        <label class="label-form"><i class="fa-solid fa-globe mr-2"></i>Latitud</label>
                    </div>

                    <div class="relative">
                        <input type="text" name="lon" id="lon" class="input-form capitalize" />
                        <label class="label-form"><i class="fa-solid fa-globe mr-2"></i>Longitud</label>
                    </div>

                    <div class="relative">
                        <input type="text" name="telefono" id="telefono" class="input-form" />
                        <label class="label-form"><i class="fa-solid fa-phone mr-2"></i>Teléfono</label>
                    </div>

                    <div class="relative">
                        <input type="text" name="celular" id="celular"
                            class="input-form
                            @error('celular') is-invalid @enderror" />
                        <label class="label-form"><i class="fa-solid fa-mobile mr-2"></i>Celular</label>
                        @error('celular')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-1 py-1 mt-1 rounded-lg text-xs"
                                role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="justify-center mt-4 space-x-4 lg:col-span-2">
                        <button type="submit"
                            class="rounded px-6 py-2 bg-rose-800 text-white font-medium text-lg hover:bg-rose-600">
                            {{ 'Continuar' }}</button>
                        <button type="reset"
                            class="rounded px-6 py-2 bg-rose-800 text-white font-medium text-lg hover:bg-rose-600">
                            {{ 'Cancelar' }}</button>
                    </div>
                </div>
                </form>
            </article>
        </div>
    </div>

    <!-- Footer-->
    <footer class="p-6 bg-gray-100/50 rounded-lg shadow justify-center items-center block mt-14">
        <div class="text-center">
            <h4>#HonestidadyTrabajo</h4>
        </div>
        <div class="text-center">
            <b> Gobierno del Estado de Michoacán 2022</b>
        </div>
    </footer>

</body>


<script type="text/javascript">
    function validarExt() {
        var archivoInput = document.getElementById('archivoInput');
        var pesoarchivoInput = document.getElementById('archivoInput').files[0].size;
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.png|.PNG|.jpg|.JPG|.jpeg|.JPEG)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            alert('Asegurese de haber seleccionado un imagen');
            archivoInput.value = '';
            return false;
        }
        if (pesoarchivoInput > 5242880) {
            alert('El tamaño del archivo excede el limite de 5 MB');
            archivoInput.value = '';
            return false;
        }
    }

    function validarExt2() {
        var archivoInput2 = document.getElementById('archivoInput2');
        var pesoarchivoInput2 = document.getElementById('archivoInput2').files[0].size;
        var archivoRuta2 = archivoInput2.value;
        var extPermitidas2 = /(.png|.PNG|.jpg|.JPG|.jpeg|.JPEG)$/i;
        if (!extPermitidas2.exec(archivoRuta2)) {
            alert('Asegurese de haber seleccionado una imagen');
            archivoInput2.value = '';
            return false;
        }
        if (pesoarchivoInput2 > 5242880) {
            alert('El tamaño del archivo excede el limite de 5 MB');
            archivoInput2.value = '';
            return false;
        }
    }

    function validarExt3() {
        var archivoInput3 = document.getElementById('archivoInput3');
        var pesoarchivoInput3 = document.getElementById('archivoInput3').files[0].size;
        var archivoRuta3 = archivoInput3.value;
        var extPermitidas3 = /(.png|.PNG|.jpg|.JPG|.jpeg|.JPEG)$/i;
        if (!extPermitidas3.exec(archivoRuta3)) {
            alert('Asegurese de haber seleccionado una imagen');
            archivoInput3.value = '';
            return false;

        } else {
            if (pesoarchivoInput3 > 5242880) {
                alert('El tamaño del archivo excede el limite de 5 MB');
                archivoInput3.value = '';
                return false;
            }


        }

    }

    function validarExt4() {
        var archivoInput4 = document.getElementById('archivoInput4');
        var pesoarchivoInput4 = document.getElementById('archivoInput4').files[0].size;
        var archivoRuta4 = archivoInput4.value;
        var extPermitidas4 = /(.png|.PNG|.jpg|.JPG|.jpeg|.JPEG)$/i;
        if (!extPermitidas4.exec(archivoRuta4)) {
            alert('Asegurese de haber seleccionado una imagen');
            archivoInput4.value = '';
            return false;

        } else {
            if (pesoarchivoInput4 > 5242880) {
                alert('El tamaño del archivo excede el limite de 5 MB');
                archivoInput4.value = '';
                return false;
            }


        }

    }

    function mostrar(id) {
        if (id == "1") {
            $("#datocurp").show();
            $("#datorazsoc").hide();
            $("#datorepleg").hide();
            $("#datonombre").show();
            $("#datoapellidopat").show();
            $("#datoapellidoma").show();
            $("#datosexo").show();
            $("#datofechanac").show();
            $("#datoactcon").hide();
            $("#datoconfis").show();
        }

        if (id == "2") {
            $("#datocurp").hide();
            $("#datorazsoc").show();
            $("#datorepleg").show();
            $("#datonombre").hide();
            $("#datoapellidopat").hide();
            $("#datoapellidoma").hide();
            $("#datosexo").hide();
            $("#datofechanac").hide();
            $("#datoactcon").show();
            $("#datoconfis").hide();
        }
    }

    //Pestañas

    $('ul.tabs li a:first').addClass('active');
    $('.secciones article').hide();
    $('.secciones article:first').show();

    $('ul.tabs li a').click(function() {
        $('ul.tabs li a').removeClass('active');
        $(this).addClass('active');
        $('.secciones article').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    });
</script>

</html>
