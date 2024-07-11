<style>
    @layer utilities {
            .w-t {
                width: 80rem;
            }
            .w-sm{
                width: 44rem;
            }

        }
</style>
<div id="aboutus" class="flex mt-10 items-center justify-center">
    <div class="relative w-full">
        <img src="{{ asset('images/background.png') }}" alt="Imagem de Fundo" class="w-full h-96 md:h-auto">
        <div id="text-container" class="absolute inset-0 flex flex-col items-start  md:ml-28 md:pt-52 mt-20 p-6">
            <h1 class="text-lg md:text-3xl font-bold">COMO TUDO COMEÇOU</h1>
            <p class="text-lg mb-4 font-itim">Located in the heart of Germany</p>
            <p   id="textP" class="text-base md:text-2xl font-itim">Balkan worked with Polygon Studio to design a classically structured bridge that would easily fit in with the visual aesthetic of the city. The underside of the bridge was repurposed as a walkway.</p>
        </div>
    </div>
</div>

<script>
    function adjustNavStyles() {
        const textContainer = document.querySelectorAll('#text-container');
        const textP = document.querySelectorAll('#textP');
        const screenWidth = window.innerWidth;

        if (screenWidth > 767 && screenWidth <= 1340) {
            textContainer.forEach(link => {
                link.classList.remove('md:pt-52', 'md:ml-28', 'md:text-2xl');
                link.classList.add('md:pt-10', 'md:ml-10', 'md:text-');
            });
            textP.forEach(link => {
                link.classList.remove('md:text-2xl');
                link.classList.add('md:text-xl');
            });

        } else {
            textContainer.forEach(link => {
                link.classList.remove('md:pt-10', 'md:ml-10', 'md:text-lg');
                link.classList.add('md:pt-52', 'md:ml-28', 'md:text-2xl');
            });
            textP.forEach(link => {
                link.classList.remove('md:text-xl');
                link.classList.add('md:text-2xl');
            });
        }
    }


    adjustNavStyles();
    window.addEventListener('resize', adjustNavStyles);
</script>
