<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden margin-auto">
    <!-- Header  -->
    <header class="bg-white ">
        <div class="flex justify-between items-center">
            <div class="flex items-end">
                <div id="logo" class="flex items-center border bg-customRed rounded-br-only">
                    <p class="w-72 h-20 pl-5 pb-2 pr-7 pt-1 text-5xl">Meu Perfil</p>
                </div>
                <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14 mx-10">
                    <a href="{{ url('/home')}}#home"
                        class="text-red-600  text-2xl font-itim hover:text-purple-900 underline underline-offset-4 hover:pb-3 ">Meus
                        Dados</a>
                    <a href="{{ url('/teacher-profile-mural')}}#teacher-profile-mural"
                        class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:pb-3">Mural</a>
                    <a href="{{ url('/teacher-profile-chat')}}#sponsors"
                        class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:pb-3">Chat</a>
                        <a href="{{ url('/grades')}}#sponsors"
                        class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:pb-3">Notas</a>
                </nav>
            </div>
            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                </a>
            </div>
        </div>
        <div id="mobile-nav" class="md:hidden mr-5 ">
            <button id="mobile-menu-toggle" class="focus:outline-none">
                <img class="h-10" src="{{ asset('images/icons/taskPurple.png') }}" alt="">
            </button>
        </div>
        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="#" class="text-purple-700 text-lg font-itim py-2  hover:text-purple-900">Meus Dados</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-purple-900">Mural</a>
            <a href="#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Chat</a>
            <a href="{{ url('/signin') }}"
                class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Entrar</a>
            <a href="{{ url('/signup')}}"
                class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Registrar-se</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- Home Profile-->
    <div id="home" class="relative w-screen h-52 mb-4 md:mb-10">
        <div class="relative inset-0 bg-customBrown w-full h-52">
            <div class="absolute bottom-4 right-4 mx-10">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900 ">
                    <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Logo" class="w-10 h-10">
                </a>
            </div>
        </div>
        <div id="ProfileIcon" class="z-10 absolute bottom-0 left-0 translate-y-1/2 mx-14">
            <div class="border-2 border-black rounded-full w-56 h-56 flex justify-center items-center">
                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                    class="rounded-full w-48 h-48 object-cover">
            </div>
        </div>
        <div id="ProfileImage" class="relative h-72 w-full flex items-end justify-start ">

        </div>
    </div>
    <!-- END Home Profile-->

    <!--Divider Menu-->
    <div class="my-6 mx-10 w-11/12 flex justify-between items-center relative">
        <div class="flex-1 flex justify-center">
            <p class="font-itim font-bold text-4xl">Nome do Aluno</p>
        </div>
        <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
            data-modal-toggle="authentication-modal"
            class="block text-white bg-transparent hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
            <img src="{{ asset('images/icons/tres-pontos.png') }}" alt="Logo" class="w-10 h-10">
        </button>
    </div>
    <div id="Divider" class="w-11/12 h-1 bg-gray-400 mx-10"></div>
    <!--END Divider Menu-->


    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-5 w-7/12 max-h-full mx-auto rounded-lg shadow-lg bg-white mt-14">
            <!-- Modal content -->
            <div class="flex flex-col items-center justify-center p-4 md:p-5 rounded-t">
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-blue-300 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                    data-modal-hide="authentication-modal">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <div class="p-2 md:p-10">
                <div class="flex flex-col justify-center">
                    <div class="flex flex-row">
                        <div class="w-1/2 mr-8">
                            <div class="bg-gray-200 rounded-lg p-4 h-48">
                                <h2 class="text-center text-gray-700 font-bold">IMAGEM</h2>
                            </div>
                            <div
                                class="bg-red-500  text-white font-bold py-2 px-4 rounded  w-full mt-4 flex justify-center">
                                <p>Nome do Curso</p>
                            </div>
                            <div
                                class="bg-red-500  text-white font-bold py-2 px-4 rounded  w-full mt-4 flex justify-center">
                                <p>Horário</p>
                            </div>
                        </div>
                        <div class="w-1/2 flex flex-col items-center">
                            <h2 class="text-xl font-bold mb-4">Informações do curso</h2>
                            <p class="text-gray-700 text-sm">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text-gray-700 text-sm">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text-gray-700 text-sm">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text-gray-700 text-sm">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text-gray-700 text-sm">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text-gray-700 text-sm">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text-gray-700 text-sm">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <div class="bg-gray-200 rounded-lg p-4 mt-4">
                                <p class="text-gray-700 font-bold">Ong- Crescer Sabendo</p>
                                <div class="h-1 bg-gray-400 rounded-full mt-2 w-full">
                                    <div class="bg-gray-700 rounded-full h-1 mt-2 w-1/2"></div>
                                </div>
                                <p class="text-gray-700 text-sm mt-2">35-40 min - Segunda a Sexta</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full mt-4">BOLETIM</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--Data teacher-->
    <div class="w-full h-80 shadow-sm flex justify-center items-center my-14">
        <div id="gridCourses" class="my-20 bg-customBrown w-8/12 h-64 rounded-4xl p-10 flex flex-wrap justify-between">
            <div class="w-1/2">
                <p class="font-itim text-2xl font-bold h-20 ">Nome</p>
                <p class="font-itim text-2xl font-bold h-20">Email</p>
                <p class="font-itim text-2xl font-bold h-20">Idade</p>
            </div>
            <div class="w-1/2">
                <p class="font-itim text-2xl font-bold h-20">Tel do Responsável</p>
                <p class="font-itim text-2xl font-bold h-20">Formação</p>
            </div>
        </div>
    </div>
    <!--End Data teacher-->

    <!--My Courses-->
    <div class="flex flex-wrap justify-between mx-5">
        <div id="Pt1" class="w-7/12 border-2 border-black rounded-4xl mx-14 my-10">
            <div class="my-5 mx-10 max-w-full flex justify-between">
                <p class="font-itim text-black text-2xl">Meus Cursos</p>
                <a class="font-itim underline underline-offset-2 text-lg">Ver todos</a>
            </div>
            <div id="gridCourses" class="grid grid-cols-1 md:grid-cols-3 my-8">
                <!--Content-->
                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>
                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="block text-white bg-transparent hover:bg-blue-00 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                            <div class="flex flex-col justify-center w-40 h-26 ">
                                <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <!--END My Courses-->

        <!-- ONGS NAMES -->
        <div id="Pt2" class="w-3/12 border-2 border-black rounded-4xl mx-14 my-10">
            <div class="my-5 mx-10 max-w-full flex justify-center">
                <p class="font-itim text-black text-4xl">Ongs</p>
            </div>
            <div id="gridCourses" class="flex flex-wrap justify-center my-8">

                <!--content-->
                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class=" rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>
            </div>
        </div>
    </div>
    <!-- END ONGS NAMES -->

    <!-- Teacher Footer Image -->
    <footer>
        <div class="max-w-full max-h-20">
            <!-- Image -->
            <img src="{{ asset('images/Finalback-Red.png') }}" alt=""
                class="relative inset-0 w-full h-full object-fit ">
        </div>
    </footer>
    <!-- END Teacher Footer Image -->
</body>

</html>