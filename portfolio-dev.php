<?php include 'header.php'; ?>

<div class="relative bg-hannah-dark py-20 mt-20"> 
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl font-bold text-white mb-2">Desenvolvimento de Sites e Softwares</h1>
        <p class="text-blue-200 text-lg">Sistemas personalizados e soluções web de alta escala</p>
        <a href="index.php#portfolio" class="inline-flex items-center gap-2 mt-6 text-sm font-bold text-white border border-white/30 py-2 px-4 rounded-full hover:bg-white hover:text-hannah-dark transition">
            <i class="fa-solid fa-arrow-left"></i> Voltar ao Portfólio
        </a>
    </div>
</div>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100 flex flex-col hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gray-200 flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?auto=format&fit=crop&w=500&q=80" alt="ERP Agência de Viagens" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-hannah-dark mb-2">ERP Agência de Viagens</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Sistema completo para gestão de reservas e controle financeiro. Focado em automação e escalabilidade.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded font-semibold italic">Laravel 12</span>
                        <span class="bg-emerald-100 text-emerald-800 text-xs px-2 py-1 rounded font-semibold italic">Vue.js 3</span>
                        <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded font-semibold italic">Tailwind CSS</span>
                    </div>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="https://demo.sftour.com.br/" target="_blank" class="block text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition font-bold mb-2">
                        <i class="fa-solid fa-rocket mr-2"></i> Ver Demo Online
                    </a>
                    <span class="block text-center text-gray-400 text-xs italic">
                        <i class="fa-solid fa-lock mr-2"></i> Repositório Privado
                    </span>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100 flex flex-col hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gray-200 flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=500&q=80" alt="Portfolio Hannah Tech" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-hannah-dark mb-2">Portfolio Hannah Tech</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Landing page institucional com arquitetura modular, design responsivo e foco em performance.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded font-semibold italic">PHP 8</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded font-semibold italic">Tailwind CSS</span>
                    </div>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="https://github.com/carlossilvajr854/hannah-tech-site" target="_blank" class="block text-center border border-hannah-dark text-hannah-dark py-2 rounded hover:bg-hannah-dark hover:text-white transition font-bold">
                        <i class="fa-brands fa-github mr-2"></i> Ver no GitHub
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>