<header class="bg-white ">
    <div class="flex items-center justify-between ">
        <div id="logo" class="flex items-center border bg-customPurple rounded-br-only">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class=" pl-5 pb-2 pr-7 pt-1">
        </div>

        <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
            <a href="#" class="text-purple-700  text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3 ">Home</a>
            <a href="#aboutus" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3" >Sobre nós</a>
            <a href="#sponsors" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Parcerias</a>
            <a href="{{ url('/donates')}}" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Doações</a>
            <a href="{{ url('/donates')}}" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Voluntários</a>
        </nav>

         <div id="userAction" class="hidden md:flex items-center space-x-2 mr-5 ">
            <a href="#" class="text-gray-600 hover:text-purple-900 mr-2">
                <img id="userImg" class="h-12" src="{{ asset('images/icons/userIconPurple.png') }}" alt="">
            </a>
            <a id="button" href="#" class="bg-customPurple font-itim text-2xl text-white px-4 py-2 rounded-full hover:bg-purple-900">Sign up</a>
        </div>


         <div id="mobile-nav" class="md:hidden mr-5 ">
            <button id="mobile-menu-toggle" class="focus:outline-none">
                <img class="h-10" src="{{ asset('images/icons/taskPurple.png') }}" alt="">
            </button>
        </div>


    </div>


    <div id="mobile-menu" class="md:hidden bg-white  py-2 px-4 ">
        <a href="#" class="text-purple-700 text-lg font-itim py-2  hover:text-purple-900">Home</a>
        <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-purple-900">Sobre nós</a>
        <a href="#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Parcerias</a>
        <a href="{{ url('/donates')}}" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Doações</a>
        <a href="{{ url('/donates')}}" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Voluntários</a>
        <a href="#" class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Entrar</a>
        <a href="#" class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Registrar-se</a>
    </div>
</header>
<script>
    document
    .getElementById("mobile-menu-toggle")
    .addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    })
</script>

