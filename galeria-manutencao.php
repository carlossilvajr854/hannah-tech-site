<?php include 'header.php'; ?>

<div class="relative bg-hannah-dark py-20 mt-20"> 
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl font-bold text-white mb-2">Galeria de Manutenção</h1>
        <p class="text-blue-200 text-lg">Confira os detalhes dos nossos serviços de hardware e reparo</p>
        <a href="index.php#portfolio" class="inline-flex items-center gap-2 mt-6 text-sm font-bold text-white border border-white/30 py-2 px-4 rounded-full hover:bg-white hover:text-hannah-dark transition">
            <i class="fa-solid fa-arrow-left"></i> Voltar ao Portfólio
        </a>
    </div>
</div>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 gallery-grid">
            
            <div class="cursor-pointer overflow-hidden rounded-xl shadow-lg group h-64 relative item-galeria" onclick="openModal(0)">
                <img src="https://images.unsplash.com/photo-1709102884400-b50ca1a12bc3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Limpeza Interna de Notebook" 
                     class="object-cover w-full h-full transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition"></div>
            </div>

            <div class="cursor-pointer overflow-hidden rounded-xl shadow-lg group h-64 relative item-galeria" onclick="openModal(1)">
                <img src="https://images.unsplash.com/photo-1721332154191-ba5f1534266e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Instalação de NVMe em Notebook" 
                     class="object-cover w-full h-full transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition"></div>
            </div>

            <div class="cursor-pointer overflow-hidden rounded-xl shadow-lg group h-64 relative item-galeria" onclick="openModal(2)">
                <img src="https://plus.unsplash.com/premium_photo-1664301923554-fa1023546fd8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Troca de Pasta Térmica em Placa de Vídeo" 
                     class="object-cover w-full h-full transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition"></div>
            </div>

            <div class="cursor-pointer overflow-hidden rounded-xl shadow-lg group h-64 relative item-galeria" onclick="openModal(3)">
                <img src="https://plus.unsplash.com/premium_photo-1663013244412-1153aabaa1bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Pequeno Reparo em Placa Mãe" 
                     class="object-cover w-full h-full transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition"></div>
            </div>

            <div class="cursor-pointer overflow-hidden rounded-xl shadow-lg group h-64 relative item-galeria" onclick="openModal(4)">
                <img src="https://images.unsplash.com/photo-1591238372358-dbbb7a59f22c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Montagem de Desktop" 
                     class="object-cover w-full h-full transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition"></div>
            </div>

            <div class="cursor-pointer overflow-hidden rounded-xl shadow-lg group h-64 relative item-galeria" onclick="openModal(5)">
                <img src="https://plus.unsplash.com/premium_photo-1726804906019-20ac68ddec1b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Limpeza e Manutenção Preventiva em Notebook" 
                     class="object-cover w-full h-full transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition"></div>
            </div>

        </div>
    </div>
</section>

<div id="imgModal" class="fixed inset-0 z-[60] hidden bg-black/95 backdrop-blur-sm flex items-center justify-center transition-opacity duration-300">
    
    <span class="absolute top-6 right-6 text-white text-4xl cursor-pointer hover:text-gray-300 z-50" onclick="closeModal()">&times;</span>
    
    <button class="absolute left-4 md:left-10 text-white text-4xl p-4 hover:text-blue-400 transition z-50 focus:outline-none" onclick="mudarImagem(-1)">
        <i class="fa-solid fa-chevron-left"></i>
    </button>

    <div class="max-w-5xl w-full p-4 flex flex-col items-center justify-center relative" onclick="event.stopPropagation()">
        <img id="modalImage" class="max-w-full max-h-[80vh] object-contain rounded-lg shadow-2xl transition-all duration-300">
        <p id="modalCaption" class="text-center text-white text-lg mt-4 font-medium"></p>
    </div>

    <button class="absolute right-4 md:right-10 text-white text-4xl p-4 hover:text-blue-400 transition z-50 focus:outline-none" onclick="mudarImagem(1)">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
</div>

<script>
    // Variáveis Globais para controle do Carrossel
    let indiceAtual = 0;
    const imagens = document.querySelectorAll('.item-galeria img'); // Pega todas as imagens da grid

    function openModal(index) {
        const modal = document.getElementById('imgModal');
        const modalImg = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');

        // Atualiza o índice
        indiceAtual = index;
        
        // Carrega a imagem e texto baseado no índice
        atualizarModal();

        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
        }, 10);
    }

    function atualizarModal() {
        const modalImg = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        
        // Pega a imagem do array na posição atual
        const imgElement = imagens[indiceAtual];
        
        modalImg.src = imgElement.src;
        modalCaption.innerText = imgElement.alt;
    }

    function mudarImagem(direcao) {
        // Atualiza o índice
        indiceAtual += direcao;

        // Lógica circular (se for menor que 0, vai pro último; se for maior que o total, vai pro primeiro)
        if (indiceAtual < 0) {
            indiceAtual = imagens.length - 1;
        } else if (indiceAtual >= imagens.length) {
            indiceAtual = 0;
        }

        atualizarModal();
    }

    function closeModal() {
        const modal = document.getElementById('imgModal');
        modal.classList.add('opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
    
    // Navegação por Teclado
    document.addEventListener('keydown', function(event) {
        const modal = document.getElementById('imgModal');
        if (!modal.classList.contains('hidden')) {
            if (event.key === "Escape") {
                closeModal();
            } else if (event.key === "ArrowLeft") {
                mudarImagem(-1);
            } else if (event.key === "ArrowRight") {
                mudarImagem(1);
            }
        }
    });
</script>

<?php include 'footer.php'; ?>