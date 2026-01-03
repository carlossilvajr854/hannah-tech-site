<?php include 'header.php'; ?>

<div class="bg-hannah-dark py-12 text-white text-center">
    <h1 class="text-3xl font-bold">Sites e Sistemas</h1>
    <p class="text-blue-200 mt-2">Projetos desenvolvidos e soluções entregues</p>
    <a href="index.php#portfolio" class="inline-block mt-4 text-sm underline hover:text-blue-300">Voltar ao Portfólio</a>
</div>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100 flex flex-col">
                <div class="h-48 bg-gray-200 flex items-center justify-center overflow-hidden">
                    <img src="https://via.placeholder.com/500x300" alt="Projeto 1" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-hannah-dark mb-2">Nome do Projeto</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Descrição breve do sistema. Ex: Landing page para advocacia com formulário de contato e SEO otimizado.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded font-semibold">HTML5</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded font-semibold">Tailwind</span>
                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded font-semibold">PHP</span>
                    </div>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="#" target="_blank" class="block text-center bg-hannah-dark text-white py-2 rounded hover:bg-blue-800 transition">
                        <i class="fa-solid fa-external-link-alt mr-2"></i> Visitar Site
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100 flex flex-col">
                <div class="h-48 bg-gray-200 flex items-center justify-center overflow-hidden">
                    <img src="https://via.placeholder.com/500x300" alt="Projeto 2" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-hannah-dark mb-2">Painel Administrativo</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Sistema interno para controle de estoque com dashboard em tempo real.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded font-semibold">Vue.js</span>
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded font-semibold">Firebase</span>
                    </div>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="#" class="block text-center border border-hannah-dark text-hannah-dark py-2 rounded hover:bg-gray-50 transition">
                        <i class="fa-solid fa-lock mr-2"></i> Acesso Restrito
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>