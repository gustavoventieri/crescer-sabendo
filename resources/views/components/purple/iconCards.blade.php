<style>
    @layer utilities {
        .w-120 {
            width: 33rem;
        }
        .w-100{
            width: 22rem;
        }
    }
</style>
<div class="flex justify-center items-center">
    <div id="gridLayout" class="grid gap-12 sm:grid-cols-1 md:grid-cols-3">
        <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-100 md:w-120 h-96 md:h-96">
            <img src="{{ asset('images/iconTargetShooting.png') }}" alt="Icon 1" class="h-16 md:h-20 absolute md:-top-12 -top-10">
            <h2 class="text-2xl font-bold mt-2">Title</h2>
            <p class="mt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac lectus ac nisi vestibulum suscipit. Vestibulum sagittis elit nisl. Sed viverra, purus quis blandit imperdiet, enim lectus pretium urna, ac sollicitudin massa nunc ut orci. Fusce ac justo non erat finibus mollis. Etiam tincidunt, elit ac sodales maximus, purus est eleifend nulla, quis vehicula dolor libero non purus. Vestibulum dapibus, est varius consectetur faucibus, dui erat vestibulum nisi, sit amet eleifend nunc diam id risus. Nulla facilisi.</p>
        </div>
        <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-100 md:w-120 h-96 md:h-96">
            <img src="{{ asset('images/lineG.png') }}" alt="Icon 2" class="h-14 md:h-20 absolute -top-8 md:-top-12">
            <h2 class="text-2xl font-bold mt-2">Title</h2>
            <p class="mt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac lectus ac nisi vestibulum suscipit. Vestibulum sagittis elit nisl. Sed viverra, purus quis blandit imperdiet, enim lectus pretium urna, ac sollicitudin massa nunc ut orci. Fusce ac justo non erat finibus mollis. Etiam tincidunt, elit ac sodales maximus, purus est eleifend nulla, quis vehicula dolor libero non purus. Vestibulum dapibus, est varius consectetur faucibus, dui erat vestibulum nisi, sit amet eleifend nunc diam id risus. Nulla facilisi.</p>
        </div>
        <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-100 md:w-120 h-96 md:h-96">
            <img src="{{ asset('images/loveHand.png') }}" alt="Icon 3" class="h-16 md:h-20 absolute md:-top-14 -top-12">
            <h2 class="text-2xl font-bold mt-2">Title</h2>
            <p class="mt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac lectus ac nisi vestibulum suscipit. Vestibulum sagittis elit nisl. Sed viverra, purus quis blandit imperdiet, enim lectus pretium urna, ac sollicitudin massa nunc ut orci. Fusce ac justo non erat finibus mollis. Etiam tincidunt, elit ac sodales maximus, purus est eleifend nulla, quis vehicula dolor libero non purus. Vestibulum dapibus, est varius consectetur faucibus, dui erat vestibulum nisi, sit amet eleifend nunc diam id risus. Nulla facilisi.</p>
        </div>
    </div>
</div>

    <script>
    // Script to toggle mobile menu visibility
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    function adjustNavStyles() {
        const card = document.querySelectorAll('#card');
        const gridLayout = document.querySelectorAll('#gridLayout');

        const screenWidth = window.innerWidth;

        if (screenWidth < 768 ) {
            card.forEach(link => {
                link.classList.remove('w-120');
                link.classList.add('w-100');
            });

        } else {
            card.forEach(link => {
                link.classList.remove('w-100');
                link.classList.add('w-120');
            });
        }

        if(screenWidth <= 1170){
        gridLayout.forEach(link => {
            link.classList.remove('md:grid-cols-3');
            link.classList.add('md:grid-cols-1');
        });
        } else {
            gridLayout.forEach(link => {
                link.classList.remove('md:grid-cols-1');
                link.classList.add('md:grid-cols-3');
            });
        }
    }


    adjustNavStyles();
    window.addEventListener('resize', adjustNavStyles);
</script>

