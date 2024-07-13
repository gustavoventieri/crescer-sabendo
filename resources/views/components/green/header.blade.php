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
<script>
    document
    .getElementById("mobile-menu-toggle")
    .addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    })
</script>

