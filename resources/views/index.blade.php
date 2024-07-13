

<script src=" {{ asset('js/adjustStyles.js') }} "></script>
<script>
    function adjustOverlay() {
        const screenWidth = window.innerWidth;
        const overlay = document.getElementById('overlay');
        const divContent = document.getElementById('divContent');

        if (screenWidth < 1260) {
            overlay.classList.remove('md:left-36', 'md:top-32');
            overlay.classList.add('inset-x-0', 'transform', 'mt-28');
        } else {
            overlay.classList.remove('inset-x-0', 'transform','mt-28');
            overlay.classList.add('md:left-36', 'md:top-32');

        }
    }

    window.addEventListener('resize', adjustOverlay);
    document.addEventListener('DOMContentLoaded', adjustOverlay);
</script>
@section('titulo', "Home Page")
@extends('layouts.indexLayout')

@section('content')
<div class="relative w-screen h-100 mb-4 md:mb-10 -z-40">
    <div class="absolute inset-0 bg-gray-100"></div>
    <!-- Image -->
    <img src="{{ asset('images/backContent.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay Div -->
    <div id="overlay" class="mr-3 absolute md:left-36 flex items-center justify-center p-4">
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





@endsection

@section('dados')
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
@endsection



