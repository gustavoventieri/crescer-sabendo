<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        @vite('resources/css/app.css')
        <script src=" {{ asset('js/adjustStyles.js') }} "></script>
</head>
<body class="bg-gray-100 ">
    <header class="bg-white ">
        <div class="flex items-center justify-between ">
        <div id="logo" class="flex items-center border bg-customGreen rounded-br-only">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class=" pl-5 pb-2 pr-7 pt-1">
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="{{ url('/')}}#" class="text-customPurple  text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3 ">Home</a>
                <a href="{{ url('/')}}#aboutus" class="text-customBlue text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3" >Sobre nós</a>
                <a href="{{ url('/')}}#sponsors" class="text-customBlue text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3">Parcerias</a>
                <a href="#" class="text-green-500 text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3">Doações</a>
                <a href="#" class="text-customBlue text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3">Voluntários</a>
            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="#" class="text-gray-600 hover:text-green-600 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconGreen.png') }}" alt="">
                </a>
                <a id="button" href="#" class="bg-customGreen ml-3 font-itim text-xl text-white px-3 py-1 rounded-full hover:bg-purple-900">Sign up</a>
            </div>

            <div id="mobile-nav" class="md:hidden mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskGreen.png') }}" alt="">
                </button>
            </div>

        </div>


        <div id="mobile-menu" class="md:hidden bg-white  py-2 px-4 ">
            <a href="{{ url('/')}}" class="text-customBlue text-lg font-itim py-2  hover:text-green-600">Home</a>
            <a href="{{ url('/')}}#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-green-600">Sobre nós</a>
            <a href="{{ url('/')}}#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Parcerias</a>
            <a href="#" class="block text-green-500 text-lg font-itim py-2 hover:text-green-600">Doações</a>
            <a href="#" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Voluntários</a>
            <a href="#" class="block  text-customBlue text-lg font-itim py-2 hover:text-green-600">Entrar</a>
            <a href="#" class="block  text-customBlue text-lg font-itim py-2 hover:text-green-600">Registrar-se</a>
        </div>
    </header>


    <div class="flex items-center justify-center  ">
        <div class="bg-white p-8 rounded-lg shadow-md mx-auto w-container">
            <h2 class="text-2xl font-bold text-center text-green-500 mb-6">Doação Monetária</h2>
            <div class="flex justify-between mb-4">
                <button id="value-button" class="value-button bg-green-200 text-green-700 px-4 py-2 rounded-md" data-value="15">R$ 15</button>
                <button class="value-button bg-green-200 text-green-700 px-4 py-2 rounded-md" data-value="30">R$ 30</button>
                <button class="value-button bg-green-200 text-green-700 px-4 py-2 rounded-md" data-value="50">R$ 50</button>
                <button class="value-button bg-green-400 text-white px-4 py-2 rounded-md" data-value="100">R$ 100</button>
                <button class="value-button bg-green-200 text-green-700 px-4 py-2 rounded-md" data-value="200">R$ 200</button>
                <button class="value-button bg-green-200 text-green-700 px-4 py-2 rounded-md" data-value="0">Outro valor</button>
            </div>
            <h3 class="text-lg font-semibold text-center text-gray-700 mb-4">Forma de pagamento</h3>
            <div class="border border-green-400 p-4 rounded-md mb-4">
                <h4 class="text-green-500 font-bold mb-2">Pix</h4>
                <input type="text" placeholder="CPF/CNPJ" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                <input type="text" placeholder="Nome Completo" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                <input type="email" placeholder="E-mail" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
            </div>
            <button class="bg-green-200 text-green-700 w-full py-2 rounded-md mb-2">Outra Opção</button>
            <button class="bg-green-200 text-green-700 w-full py-2 rounded-md mb-2">Outra Opção</button>
            <button class="bg-green-200 text-green-700 w-full py-2 rounded-md mb-2">Outra Opção</button>
            <button class="bg-green-200 text-green-700 w-full py-2 rounded-md mb-6">Outra Opção</button>
            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center text-gray-700">
                    <input type="checkbox" class="form-checkbox text-green-500 mr-2">
                    Cobrir custo da Transação
                </label>
                <span class="text-xl font-bold text-gray-700" id="donation-amount">R$ 100</span>
            </div>
            <button class="bg-green-400 text-white w-full py-3 rounded-md font-bold text-lg">Doar</button>
        </div>
    </div>

    <footer class="w-full mt-auto">
        <img class="w-full h-auto" src="{{ asset('images/footerGreen.png') }}" alt="">
    </footer>









</body>
</html>


