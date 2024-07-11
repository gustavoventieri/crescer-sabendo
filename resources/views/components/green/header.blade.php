<header class="bg-white">
    <div class="flex items-center justify-between ">
        <!-- Logo -->
        <div id="logo" class="flex items-center border bg-customGreen  rounded-br-only">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class=" pl-5 pb-2 pr-7 pt-1">
        </div>

        <!-- Navigation Links -->
        <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
            <a href="{{ url('/') }}" class="text-customBlue  text-3xl font-itim hover:text-green-600">Home</a>
            <a href="{{ url('/') }}#aboutus" class="text-customBlue text-3xl font-itim hover:text-green-600">Sobre nós</a>
            <a href="{{ url('/') }}" class="text-customBlue text-3xl font-itim hover:text-green-600">Parcerias</a>
            <a href="{{ url('/donates')}}" class="text-customBlue text-3xl font-itim hover:text-green-600">Doações</a>
            <a href="{{ url('/donates')}}" class="text-customGreen text-3xl font-itim hover:text-green-600">Voluntários</a>
        </nav>

        <!-- Mobile Navigation Toggle -->
        <div id="mobile-nav" class="md:hidden mr-5 ">

            <button id="mobile-menu-toggle" class="focus:outline-none">
                <img class="h-10" src="{{ asset('images/task.png') }}" alt="">
            </button>
        </div>

        <!-- User Actions -->
        <div id="userAction" class="hidden md:flex items-center space-x-2 mr-6 ">
            <a href="#" class="text-gray-600 hover:text-green-600">
                <img class="h-12 " src="{{ asset('images/userIconGreen.png') }}" alt="">
            </a>
            <a id="button" href="#" class="bg-customGreen font-itim text-2xl text-white px-5 py-3 rounded-full hover:bg-green-600">Sign up</a>
        </div>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="md:hidden bg-white py-2 px-4 ">
        <a href="{{ url('/') }}" class="block text-customBlue  text-lg font-itim py-2 hover:text-green-600">Home</a>
        <a href="#" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Sobre nós</a>
        <a href="#" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Parcerias</a>
        <a href="#" class="block text-customGreen   text-lg font-itim py-2 hover:text-green-600">Doações</a>
        <a href="#" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Voluntários</a>
        <a href="#" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Entrar</a>
        <a href="#" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Registrar-se</a>
    </div>
</header>

<script>
    // Script to toggle mobile menu visibility
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    function adjustNavStyles() {
        const logo = document.querySelectorAll('#logo img');
        const nav = document.querySelectorAll('#navbar');
        const navLinks = document.querySelectorAll('#navbar a');
        const userActions = document.querySelectorAll('#userAction a img');
        const mobileNav = document.querySelectorAll('#mobile-nav');
        const mobileMenu = document.querySelectorAll('#mobile-menu a');
        const button = document.querySelectorAll('#button');

        const screenWidth = window.innerWidth;

        if (screenWidth > 767 && screenWidth <= 1470) {
            logo.forEach(link => {
                link.classList.remove('pl-5', 'pr-7', 'pb-2', 'pt-1');
                link.classList.add('pl-1', 'pr-5', 'pb-3', 'pt-2', 'h-12');
            });
            nav.forEach(link => {
                link.classList.remove('gap-14');

            });
            navLinks.forEach(link => {
                link.classList.remove('text-3xl');
                link.classList.add('text-lg');
            });
            userActions.forEach(link => {
                link.classList.remove('h-12');
                link.classList.add('h-8');
            });
            button.forEach(link => {
                link.classList.remove('text-2xl', 'px-5', 'py-3');
                link.classList.add('text-lg', 'p-1');
            });

        } else {
            logo.forEach(link => {
                link.classList.remove('pl-1', 'pr-5', 'pb-3', 'pt-2', 'h-12');
                link.classList.add('pl-5', 'pr-7', 'pb-2', 'pt-1');
            });
            nav.forEach(link => {

                link.classList.add('gap-14');
            });
            navLinks.forEach(link => {
                link.classList.remove('text-lg');
                link.classList.add('text-3xl');
            });
            userActions.forEach(link => {
                link.classList.remove('h-8');
                link.classList.add('h-12');
            });
            button.forEach(link => {
                link.classList.remove('text-lg', 'p-1');
                link.classList.add('text-2xl', 'px-5', 'py-3');
            });
        }
    }


    adjustNavStyles();
    window.addEventListener('resize', adjustNavStyles);
</script>
