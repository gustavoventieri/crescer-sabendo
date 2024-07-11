
<div class="flex flex-col justify-center items-center ">
        <div class="mb-10 mt-10">
            <img class="w-96" src="{{ asset('images/tag.png') }}" alt="">
        </div>
        <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:gap-40  rounded-lg h-5/6 w-9/12 ">

            <div class="md:ml-24 flex flex-col space-y-6 flex-grow">
            <form action="">
                <label class="block">
                    <span class="block text-sm font-medium text-gray-700">Nome</span>
                    <input type="text" class="mt-1 block w-full border-4 border-customDarkBlue rounded-full px-6 py-3">
                </label>
                <label class="block">
                    <span class="block text-sm font-medium text-gray-700">Email</span>
                    <input type="email" class="mt-1 block w-full border-4 border-customDarkBlue rounded-full px-6 py-3">
                </label>
                <label class="block">
                    <span class="block text-sm font-medium text-gray-700">Assunto</span>
                    <input type="text" class="mt-1 block w-full border-4 border-customDarkBlue rounded-full px-6 p-3">
                </label>
                <label class="block">
                    <span class="block text-sm font-medium text-gray-700">Sua mensagem</span>
                    <textarea class="mt-1 block w-full border-4 border-customDarkBlue  rounded-xl px-6 py-3"></textarea>
                </label>
                <button class="bg-customPurple text-white font-itim rounded-full px-6 py-3 mt-4 self-start hover:bg-purple-900">Enviar</button>
                </div>


                <div class="flex flex-col flex-grow">
                    <h2 class="text-xl font-itim text-customPurple">Entre em contato</h2>
                    <p>(xx) xxxxx-xxxxx</p>
                    <p>xxxxx@gmail.com</p>
                    <p>Rua x, 987, Vila tal</p>
                    <div class="mt-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.8194842695016!2d12.491233315872063!3d41.89021027922013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b7dcf6b33f%3A0xc57b1d1ac5673f9c!2sColosseum!5e0!3m2!1sen!2sit!4v1598637332157!5m2!1sen!2sit"
                        width="100%" height="285" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </form>
        </div>
    </div>
</div>
