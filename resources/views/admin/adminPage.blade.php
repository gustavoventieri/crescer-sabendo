<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Geral - Admin</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
        <script src=" {{ asset('js/script.js') }} "></script>

        @vite('resources/css/app.css')

</head>
    <body class="bg-gray-100 overflow-x-hidden">
        <header class="bg-white  ">
            <div class="flex items-center justify-between ">
                <div id="logo" class="flex items-center  p-5 bg-customBlue2 rounded-br-only">
                    <p id="plogo" class="text-white font-itim text-5xl px-10">ADM</p>
                </div>
                <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                    <a href="" class="text-blue-600  text-2xl font-itim hover:text-blue-700 hover:underline hover:pb-3 ">Geral</a>
                    <a href="/aprovarong" class="text-customBlue  text-2xl font-itim hover:text-blue-700 hover:underline hover:pb-3 ">Aprovar ONG's</a>
                </nav>

                <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                    <a href="#" class="text-gray-600 hover:text-customRed ">
                        <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconBlue.png') }}" alt="">
                    </a>
                </div>

                <div id="mobile-nav" class="md:hidden mr-5 ">
                    <button id="mobile-menu-toggle" class="focus:outline-none">
                        <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                    </button>
                </div>

            </div>


            <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
                <a href="#" class="block text-blue-700  text-lg font-itim py-2 ">Geral</a>
                <a href="/aprovarong" class="block text-customBlue2  text-lg font-itim py-2">Aprovar ONG's</a>
            </div>
        </header>

        <div class="flex justify-around my-8">
        <div class="bg-gray-200 rounded-lg shadow p-4 text-center w-1/4">
            <div class="text-6xl font-bold text-gray-600">000</div>
            <div class="text-lg mt-2">ONGs Cadastradas</div>
        </div>
        <div class="bg-gray-200 rounded-lg shadow p-4 text-center w-1/4">
            <div class="text-6xl font-bold text-gray-600">000</div>
            <div class="text-lg mt-2">Cursos Cadastrados</div>
        </div>
        <div class="bg-gray-200 rounded-lg shadow p-4 text-center w-1/4">
            <div class="text-6xl font-bold text-gray-600">000</div>
            <div class="text-lg mt-2">Alunos Cadastrados</div>
        </div>
        </div>
        <hr class="bg-customBlue2 h-2 mb-4 mt-4"/>

    <!-- Tabela de Gerenciamento -->
    <h2 class="ml-10 text-gray-500 text-3xl  mb-4">Gerenciar ONGs Cadastradas</h2>
    <div class="flex justify-center items-center">

        <div class="overflow-x-auto">
            <table class="max-w-5xl bg-white">
                <thead>
                    <tr class=" bg-blue-200 border border-black text-left">
                        <th class="py-2 px-4">ONG</th>
                        <th class="py-2 px-4">Email</th>
                        <th class="py-2 px-4 text-center">
                            <div class="relative">
                                <input type="text" class="py-2 pl-4 pr-10 rounded-lg border font-normal border-gray-300 focus:outline-none focus:ring focus:border-blue-300" placeholder="Pesquisar...">
                                <button class="absolute right-0 top-0 mt-2 mr-3">
                                    🔍
                                </button>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="border border-black">
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">
                            <button class="bg-blue-500 text-white px-3 py-2 rounded-lg">✎</button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">
                            <button class="bg-blue-500 text-white px-3 py-2 rounded-lg">✎</button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">
                            <button class="bg-blue-500 text-white px-3 py-2 rounded-lg">✎</button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">
                            <button class="bg-blue-500 text-white px-3 py-2 rounded-lg">✎</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 ">
                            <button class="bg-blue-500 text-white px-3 py-2 rounded-lg">✎</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <footer class="w-full mt-auto">
            <img class="w-full h-auto" src="{{ asset('images/footerBlue.png') }}" alt="">
        </footer>
    </body>
</html>

