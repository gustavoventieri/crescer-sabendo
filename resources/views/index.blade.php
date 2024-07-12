

<script src=" {{ asset('js/adjustStyles.js') }} "></script>

@section('titulo', "Home Page")
@extends('layouts.indexLayout')

@section('content')
@endsection

@section('dados')
<div id="dadosContainer" class="relative p-8 bg-white shadow-2xl rounded-lg mx-auto mt-20 mb-20  w-container h-100">
    <div id="quebracabeca"  class="absolute -z-50 top-10 left-0 transform -translate-x-44 -translate-y-2">
        <img id="quebraCabecaImage" class="h-64" src="{{ asset('images/quebra-cabeca.png') }}" alt="">
    </div>
    <div id="abc" class="absolute   z-50 bottom-0 right-0 transform translate-x-24 translate-y-10">
        <img  id="abcImage" class="h-48" src="{{ asset('images/ABC.png') }}" alt="">
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



