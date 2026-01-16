<?php include 'header.php'; ?>

<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    
    <div class="absolute inset-0 w-full h-full z-0">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" 
             alt="Background Tecnologia" 
             class="w-full h-full object-cover">
    </div>

    <div class="absolute inset-0 bg-gradient-to-r from-hannah-dark/95 via-hannah-dark/70 to-blue-900/30 z-0"></div>

    <div class="relative z-10 container mx-auto px-6 text-white pt-20">
        <div class="max-w-2xl">
            <span class="bg-blue-600 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block shadow-lg">Tecnologia & Inovação</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight drop-shadow-lg">
                Soluções que <span class="text-blue-400">impulsionam</span> o seu negócio
            </h1>
            <p class="text-lg md:text-xl mb-8 text-gray-200 leading-relaxed drop-shadow-md">
                Da manutenção especializada de computadores ao desenvolvimento de sistemas personalizados. Conecte-se ao futuro com a Hannah Tech.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#contato" class="bg-white text-hannah-dark font-bold py-4 px-8 rounded-lg shadow-xl hover:bg-gray-100 hover:scale-105 transition transform duration-300 text-center link-scroll">
                    Fazer Orçamento
                </a>
                <a href="#portfolio" class="border-2 border-white text-white font-bold py-4 px-8 rounded-lg hover:bg-white/10 transition duration-300 text-center link-scroll">
                    Ver Projetos
                </a>
            </div>
        </div>
    </div>
</section>

<section id="sobre" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 relative">
                <div class="absolute -inset-4 bg-blue-100 rounded-lg transform -rotate-2"></div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Sobre a Equipe Hannah Tech" 
                     class="relative rounded-lg shadow-2xl w-full object-cover h-96">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold text-hannah-dark mb-6 border-l-4 border-blue-500 pl-4">Quem Somos</h2>
                
                <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                    A <strong>Hannah Tech</strong> nasceu em Belém com uma missão clara: descomplicar a tecnologia. Entendemos que, para muitos, problemas de hardware ou a necessidade de um sistema web podem ser barreiras assustadoras.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Combinamos anos de experiência prática em <strong>infraestrutura de TI</strong> com as mais modernas linguagens de <strong>desenvolvimento de software</strong>. Seja trocando a tela de um notebook de alto desempenho ou criando uma Landing Page vendedora, aplicamos o mesmo rigor técnico e atenção aos detalhes.
                </p>
                
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-gray-700">
                        <i class="fa-solid fa-check-circle text-green-500 text-xl"></i> Atendimento personalizado e transparente.
                    </li>
                    <li class="flex items-center gap-3 text-gray-700">
                        <i class="fa-solid fa-check-circle text-green-500 text-xl"></i> Garantia em todos os serviços prestados.
                    </li>
                    <li class="flex items-center gap-3 text-gray-700">
                        <i class="fa-solid fa-check-circle text-green-500 text-xl"></i> Suporte remoto e presencial.
                    </li>
                </ul>

                <a href="#contato" class="text-blue-600 font-bold hover:text-blue-800 transition flex items-center gap-2 link-scroll">
                    Fale com um especialista <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="servicos" class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-hannah-dark mb-4">Nossos Serviços</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Soluções completas para hardware e software em um só lugar.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-8 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition duration-300">
                    <i class="fa-solid fa-gears text-2xl text-blue-600 group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Manutenção de Computadores</h3>
                <p class="text-gray-500">Montagem de PC Gamer, upgrades, manutenção preventiva e corretiva em desktops e notebooks.</p>
            </div>
            <div class="p-8 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition duration-300">
                    <i class="fa-brands fa-windows text-2xl text-blue-600 group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Formatação & Sistemas</h3>
                <p class="text-gray-500">Instalação de Windows/Linux, drivers, backup de dados e remoção de vírus.</p>
            </div>
            <div class="p-8 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition duration-300">
                    <i class="fa-solid fa-screwdriver-wrench text-2xl text-blue-600 group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Troca de Peças</h3>
                <p class="text-gray-500">Substituição de telas de notebooks, teclados, baterias, SSDs e memórias RAM.</p>
            </div>
            <div class="p-8 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition duration-300">
                    <i class="fa-solid fa-broom text-2xl text-blue-600 group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Limpeza & Pasta Térmica</h3>
                <p class="text-gray-500">Higienização interna completa e troca de pasta térmica (silver/gold) para evitar superaquecimento.</p>
            </div>
            <div class="p-8 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition duration-300">
                    <i class="fa-solid fa-video text-2xl text-blue-600 group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Segurança Eletrônica</h3>
                <p class="text-gray-500">Projeto e instalação de câmeras de segurança, DVRs e acesso remoto via celular.</p>
            </div>
            <div class="p-8 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition duration-300">
                    <i class="fa-solid fa-network-wired text-2xl text-blue-600 group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Redes</h3>
                <p class="text-gray-500">Cabeamento estruturado, configuração de roteadores Wi-Fi e redes domésticas/empresariais.</p>
            </div>
            <div class="md:col-span-2 lg:col-span-3 p-8 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 text-center group lg:w-1/3 lg:mx-auto">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition duration-300">
                    <i class="fa-solid fa-code text-2xl text-blue-600 group-hover:text-white transition"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Web, Design & Sistemas</h3>
                <p class="text-gray-500">Desenvolvimento de sites responsivos, sistemas personalizados, criação de logotipos, cartões digitais e artes para redes sociais.</p>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="py-24 bg-hannah-dark text-white">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-4">Portfólio</h2>
        <p class="text-center text-gray-300 mb-12 max-w-2xl mx-auto">Conheça alguns dos projetos que já entregamos.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="galeria-manutencao.php" class="block group relative rounded-xl overflow-hidden shadow-2xl h-80">
                <img src="https://images.unsplash.com/photo-1709102884400-b50ca1a12bc3?auto=format&fit=crop&w=600&q=80" alt="Manutenção" class="absolute inset-0 w-full h-full object-cover transition duration-500 transform group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-70 transition"></div>
                <div class="absolute bottom-0 left-0 p-6 z-10">
                    <h3 class="text-2xl font-bold text-white mb-1 translate-y-2 group-hover:translate-y-0 transition duration-300">Manutenção</h3>
                    <p class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition duration-300 transform translate-y-4 group-hover:translate-y-0 delay-75">Hardware e Reparos</p>
                </div>
            </a>
            <a href="galeria-redes.php" class="block group relative rounded-xl overflow-hidden shadow-2xl h-80">
                <img src="https://images.unsplash.com/photo-1591808216268-ce0b82787efe?auto=format&fit=crop&w=600&q=80" alt="Redes" class="absolute inset-0 w-full h-full object-cover transition duration-500 transform group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-70 transition"></div>
                <div class="absolute bottom-0 left-0 p-6 z-10">
                    <h3 class="text-2xl font-bold text-white mb-1 translate-y-2 group-hover:translate-y-0 transition duration-300">Redes & CFTV</h3>
                    <p class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition duration-300 transform translate-y-4 group-hover:translate-y-0 delay-75">Cabeamento e Câmeras</p>
                </div>
            </a>
            <a href="galeria-design.php" class="block group relative rounded-xl overflow-hidden shadow-2xl h-80">
                <img src="https://plus.unsplash.com/premium_photo-1661770132071-026114fffb61?auto=format&fit=crop&w=600&q=80" alt="Design" class="absolute inset-0 w-full h-full object-cover transition duration-500 transform group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-70 transition"></div>
                <div class="absolute bottom-0 left-0 p-6 z-10">
                    <h3 class="text-2xl font-bold text-white mb-1 translate-y-2 group-hover:translate-y-0 transition duration-300">Design</h3>
                    <p class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition duration-300 transform translate-y-4 group-hover:translate-y-0 delay-75">Logos e Identidade Visual</p>
                </div>
            </a>
            <a href="portfolio-dev.php" class="block group relative rounded-xl overflow-hidden shadow-2xl h-80">
                <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=600&q=80" alt="Dev" class="absolute inset-0 w-full h-full object-cover transition duration-500 transform group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-70 transition"></div>
                <div class="absolute bottom-0 left-0 p-6 z-10">
                    <h3 class="text-2xl font-bold text-white mb-1 translate-y-2 group-hover:translate-y-0 transition duration-300">Sites e Sistemas</h3>
                    <p class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition duration-300 transform translate-y-4 group-hover:translate-y-0 delay-75">Desenvolvimento Web</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="contato" class="py-24 bg-gray-100 relative">
    <div class="absolute top-0 left-0 w-full h-1/2 bg-hannah-dark"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
            
            <div class="w-full md:w-2/5 bg-gradient-to-br from-blue-900 to-hannah-dark text-white p-10 flex flex-col justify-between">
                <div>
                    <h3 class="text-3xl font-bold mb-6">Fale Conosco</h3>
                    <p class="mb-8 text-blue-100">Pronto para transformar sua tecnologia? Preencha o formulário ou chame no WhatsApp.</p>
                    
                    <div class="space-y-6">
                        <a href="https://wa.me/5591986376950" target="_blank" class="flex items-start gap-4 hover:opacity-80 transition">
                            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-blue-200 uppercase">WhatsApp</h4>
                                <p class="text-lg">(91) 98637-6950</p>
                            </div>
                        </a>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-blue-200 uppercase">E-mail</h4>
                                <p class="text-lg break-all">hannahtech7@gmail.com</p> 
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-location-dot text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-blue-200 uppercase">Localização</h4>
                                <p class="text-lg">Belém - PA</p> </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center hover:bg-white hover:text-hannah-dark transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center hover:bg-white hover:text-hannah-dark transition"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="w-full md:w-3/5 p-10">
                <form action="enviar.php" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nome">Nome</label>
                            <input class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" type="text" id="nome" name="nome" placeholder="Seu nome" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="telefone">Telefone / Whats</label>
                            <input class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" type="text" id="telefone" name="telefone" placeholder="(XX) 9XXXX-XXXX" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">E-mail</label>
                        <input class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="mensagem">Mensagem</label>
                        <textarea class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" id="mensagem" name="mensagem" rows="4" placeholder="Como podemos ajudar?" required></textarea>
                    </div>
                    <button class="w-full bg-hannah-dark text-white font-bold py-4 px-6 rounded-lg hover:bg-blue-800 transition transform hover:-translate-y-1 shadow-lg" type="submit">
                        Enviar Mensagem
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>