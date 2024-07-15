<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <script src=" {{ asset('js/adjustStyles.js') }} "></script>
        @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 overflow-x-hidden">
     <!-- Header  -->
    <header class="bg-white ">
        <div class="flex items-center justify-between ">
            <div id="logo" class="flex items-center border bg-customPurple rounded-br-only">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class=" pl-5 pb-2 pr-7 pt-1">
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="#" class="text-purple-700  text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3 ">Home</a>
                <a href="#aboutus" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3" >Sobre nós</a>
                <a href="#sponsors" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Parcerias</a>
                <a href="{{ url('/donates')}}#doacao" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Doações</a>
                <a href="{{ url('/donates')}}#voluntario" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Voluntários</a>
            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="{{ url('/account') }}" class="text-gray-600 hover:text-purple-900 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconPurple.png') }}" alt="">
                </a>
                <a id="button" href="#" class="bg-customPurple ml-3 font-itim text-xl text-white px-3 py-1 rounded-full hover:bg-purple-900">Sign up</a>
            </div>

            <div id="mobile-nav" class="md:hidden mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskPurple.png') }}" alt="">
                </button>
            </div>
        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="#" class="text-purple-700 text-lg font-itim py-2  hover:text-purple-900">Home</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-purple-900">Sobre nós</a>
            <a href="#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Parcerias</a>
            <a href="{{ url('/donates')}}#doacao" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Doações</a>
            <a href="{{ url('/donates')}}#voluntario" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Voluntários</a>
            <a href="{{ url('/account') }}" class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Entrar</a>
            <a href="#" class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Registrar-se</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- Home  -->
    <div id="home" class="relative w-screen h-100 mb-4 md:mb-10 -z-40">
        <div class="absolute inset-0 bg-gray-100"></div>
        <!-- Image -->
        <img src="{{ asset('images/backContent.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover">

        <!-- Overlay Div -->
        <div id="overlay" class="mr-3 absolute md:left-36 md:top-32 flex items-center justify-center p-4">
            <div  id="divContent" class="bg-white  rounded-3xl shadow-2xl p-14 max-w-lg text-center">
                <h1 class="text-purple-700 text-3xl font-itim mb-4">Onde os sonhos ganham vida!</h1>
                <p class="text-gray-700 text-xl font-itim">Oferecemos atividades extracurriculares para desenvolver a criatividade e a coordenação motora dos pequenos.</p>
            </div>
        </div>

        <!-- Additional Elements -->
        <div id= "childrenImage" class="hidden md:flex absolute right-32 bottom-12">
            <img src="{{ asset('images/children.png') }}" alt="" class="w-auto h-auto">
        </div>
    </div>
    <!-- End Home  -->

    <!-- Icons Cards  -->
    <div class="flex justify-center items-center">
        <div id="gridIcons" class="grid gap-12 sm:grid-cols-1 md:grid-cols-3">
            <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-100 md:w-120 h-96 md:h-96">
                <img src="{{ asset('images/icons/iconTargetShooting.png') }}" alt="Icon 1" class="h-16 md:h-20 absolute md:-top-12 -top-10">
                <h2 class="text-2xl font-bold mt-2">Title</h2>
                <p class="mt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac lectus ac nisi vestibulum suscipit. Vestibulum sagittis elit nisl. Sed viverra, purus quis blandit imperdiet, enim lectus pretium urna, ac sollicitudin massa nunc ut orci. Fusce ac justo non erat finibus mollis. Etiam tincidunt, elit ac sodales maximus, purus est eleifend nulla, quis vehicula dolor libero non purus. Vestibulum dapibus, est varius consectetur faucibus, dui erat vestibulum nisi, sit amet eleifend nunc diam id risus. Nulla facilisi.</p>
            </div>
            <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-100 md:w-120 h-96 md:h-96">
                <img src="{{ asset('images/icons/lineG.png') }}" alt="Icon 2" class="h-14 md:h-20 absolute -top-8 md:-top-12">
                <h2 class="text-2xl font-bold mt-2">Title</h2>
                <p class="mt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac lectus ac nisi vestibulum suscipit. Vestibulum sagittis elit nisl. Sed viverra, purus quis blandit imperdiet, enim lectus pretium urna, ac sollicitudin massa nunc ut orci. Fusce ac justo non erat finibus mollis. Etiam tincidunt, elit ac sodales maximus, purus est eleifend nulla, quis vehicula dolor libero non purus. Vestibulum dapibus, est varius consectetur faucibus, dui erat vestibulum nisi, sit amet eleifend nunc diam id risus. Nulla facilisi.</p>
            </div>
            <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-100 md:w-120 h-96 md:h-96">
                <img src="{{ asset('images/icons/loveHand.png') }}" alt="Icon 3" class="h-16 md:h-20 absolute md:-top-14 -top-12">
                <h2 class="text-2xl font-bold mt-2">Title</h2>
                <p class="mt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac lectus ac nisi vestibulum suscipit. Vestibulum sagittis elit nisl. Sed viverra, purus quis blandit imperdiet, enim lectus pretium urna, ac sollicitudin massa nunc ut orci. Fusce ac justo non erat finibus mollis. Etiam tincidunt, elit ac sodales maximus, purus est eleifend nulla, quis vehicula dolor libero non purus. Vestibulum dapibus, est varius consectetur faucibus, dui erat vestibulum nisi, sit amet eleifend nunc diam id risus. Nulla facilisi.</p>
            </div>
        </div>
    </div>
    <!-- End Icons Cards -->

    <!-- AboutUs -->
    <div id="aboutus" class="flex mt-10 items-center justify-center">
        <div class="relative w-full">
            <img src="{{ asset('images/background.png') }}" alt="Imagem de Fundo" class="w-full h-96 md:h-auto">
            <div id="text-container" class="absolute inset-0 flex flex-col items-start  md:ml-28 md:pt-52 mt-20 p-6">
                <h1 id="textH1" class="text-lg md:text-3xl font-bold">COMO TUDO COMEÇOU</h1>
                <p class="text-lg mb-4 font-itim">Located in the heart of Germany</p>
                <p   id="textP" class="text-base md:text-2xl font-itim">Balkan worked with Polygon Studio to design a classically structured bridge that would easily fit in with the visual aesthetic of the city. The underside of the bridge was repurposed as a walkway.</p>
            </div>
        </div>
    </div>
    <!-- End AboutUs -->

    <!-- Courses -->
    <div class="container mx-auto p-6">
        <h1 class="text-6xl font-itim mb-8 text-center">Cursos</h1>
        <div id="gridCourses" class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
            <div class="bg-white shadow-xl rounded-lg p-4 w-101 h-80 mx-auto"></div>
        </div>
    </div>
    <!-- End Courses  -->

    <!-- Dados -->
    <div id="dadosContainer" class="relative p-8 bg-white shadow-2xl rounded-lg mx-auto mt-20 mb-20  w-container h-100">
        <div id="quebracabeca"  class="absolute -z-50 top-10 left-0 transform -translate-x-44 -translate-y-2">
            <img id="quebraCabecaImage" class="hidden md:block h-64" src="{{ asset('images/quebra-cabeca.png') }}" alt="">
        </div>
        <div id="abc" class="  absolute   z-50 bottom-0 right-0 transform translate-x-24 translate-y-10">
            <img  id="abcImage" class="hidden md:block h-48" src="{{ asset('images/ABC.png') }}" alt="">
        </div>
        <div class="mt-36 grid grid-cols-3 gap-16 place-items-center">
          <div class="text-center">
            <svg class="w-12 h-12 mx-auto" fill="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8h10v1H7V8zm0 3h8v1H7v-1zm-5 2a2 2 0 01-2-2V4a2 2 0 012-2h18a2 2 0 012 2v7a2 2 0 01-2 2H2zm18 1v1a2 2 0 01-2 2h-1v2a2 2 0 01-2 2H7a2 2 0 01-2-2v-2H4a2 2 0 01-2-2v-1h18z" />
            </svg>
            <p class="mt-2">Dados</p>
          </div>

          <div class="text-center">
            <svg class="w-12 h-12 mx-auto" fill="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8h10v1H7V8zm0 3h8v1H7v-1zm-5 2a2 2 0 01-2-2V4a2 2 0 012-2h18a2 2 0 012 2v7a2 2 0 01-2 2H2zm18 1v1a2 2 0 01-2 2h-1v2a2 2 0 01-2 2H7a2 2 0 01-2-2v-2H4a2 2 0 01-2-2v-1h18z" />
            </svg>
            <p class="mt-2">Dados</p>
          </div>
          <div class="text-center">
            <svg class="w-12 h-12 mx-auto" fill="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8h10v1H7V8zm0 3h8v1H7v-1zm-5 2a2 2 0 01-2-2V4a2 2 0 012-2h18a2 2 0 012 2v7a2 2 0 01-2 2H2zm18 1v1a2 2 0 01-2 2h-1v2a2 2 0 01-2 2H7a2 2 0 01-2-2v-2H4a2 2 0 01-2-2v-1h18z" />
            </svg>
            <p class="mt-2">Dados</p>
          </div>
          <div class="text-center">
            <svg class="w-12 h-12 mx-auto" fill="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8h10v1H7V8zm0 3h8v1H7v-1zm-5 2a2 2 0 01-2-2V4a2 2 0 012-2h18a2 2 0 012 2v7a2 2 0 01-2 2H2zm18 1v1a2 2 0 01-2 2h-1v2a2 2 0 01-2 2H7a2 2 0 01-2-2v-2H4a2 2 0 01-2-2v-1h18z" />
            </svg>
            <p class="mt-2">Dados</p>
          </div>
          <div class="text-center">
            <svg class="w-12 h-12 mx-auto" fill="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8h10v1H7V8zm0 3h8v1H7v-1zm-5 2a2 2 0 01-2-2V4a2 2 0 012-2h18a2 2 0 012 2v7a2 2 0 01-2 2H2zm18 1v1a2 2 0 01-2 2h-1v2a2 2 0 01-2 2H7a2 2 0 01-2-2v-2H4a2 2 0 01-2-2v-1h18z" />
            </svg>
            <p class="mt-2">Dados</p>
          </div>
          <div class="text-center">
            <svg class="w-12 h-12 mx-auto" fill="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8h10v1H7V8zm0 3h8v1H7v-1zm-5 2a2 2 0 01-2-2V4a2 2 0 012-2h18a2 2 0 012 2v7a2 2 0 01-2 2H2zm18 1v1a2 2 0 01-2 2h-1v2a2 2 0 01-2 2H7a2 2 0 01-2-2v-2H4a2 2 0 01-2-2v-1h18z" />
            </svg>
            <p class="mt-2">Dados</p>
          </div>
        </div>
    </div>
    <!-- End Dados -->

    <!-- Footer -->
    <footer class="w-full mt-auto">
        <img class="w-full h-auto" src="{{ asset('images/footerPurple.png') }}" alt="">
    </footer>
    <!-- End Footer-->

    </body>
</html>
