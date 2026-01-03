<?php include 'header.php'; ?>

<div class="bg-hannah-dark py-12 text-white text-center">
    <h1 class="text-3xl font-bold">Galeria de Manutenção</h1> <p class="text-blue-200 mt-2">Confira os detalhes dos nossos serviços realizados</p>
    <a href="index.php#portfolio" class="inline-block mt-4 text-sm underline hover:text-blue-300">Voltar ao Portfólio</a>
</div>

<section class="py-16 bg-white min-h-screen">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="cursor-pointer overflow-hidden rounded-lg shadow-lg aspect-w-16 aspect-h-9 group" onclick="openModal(this)">
                <img src="https://via.placeholder.com/600x400" alt="Legenda da Foto 1" class="object-cover w-full h-full transform group-hover:scale-105 transition duration-500">
            </div>

            <div class="cursor-pointer overflow-hidden rounded-lg shadow-lg aspect-w-16 aspect-h-9 group" onclick="openModal(this)">
                <img src="https://via.placeholder.com/600x400" alt="Legenda da Foto 2" class="object-cover w-full h-full transform group-hover:scale-105 transition duration-500">
            </div>

            </div>
    </div>
</section>

<div id="imgModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-90 flex items-center justify-center p-4" onclick="closeModal()">
    <span class="absolute top-5 right-5 text-white text-4xl cursor-pointer">&times;</span>
    <img id="modalImage" class="max-w-full max-h-screen rounded shadow-lg">
    <p id="modalCaption" class="absolute bottom-5 text-white text-lg bg-black bg-opacity-50 px-4 py-1 rounded"></p>
</div>

<script>
    function openModal(element) {
        const img = element.querySelector('img');
        const modal = document.getElementById('imgModal');
        const modalImg = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');

        modalImg.src = img.src;
        modalCaption.innerText = img.alt;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('imgModal').classList.add('hidden');
    }
</script>

<?php include 'footer.php'; ?>