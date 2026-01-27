    <footer class="bg-gray-900 text-white py-8 text-center mt-auto">
        <div class="container mx-auto px-6">
            <p class="mb-2">&copy; <?php echo date("Y"); ?> Hannah Tech. Desenvolvido por Carlos Oliveira.</p>
            <div class="flex justify-center gap-4 text-2xl mt-4">
                <a href="#" class="hover:text-blue-400 transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/5591986376950" target="_blank" class="hover:text-blue-400 transition"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Menu Mobile
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        if(btn && menu){
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }

        // --- Rolagem Suave para links na MESMA página ---
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.link-scroll');
            
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    
                    // Se for um link interno (começa com #)
                    if(href.startsWith('#')) {
                        e.preventDefault(); 
                        
                        // Se for apenas #, volta pro topo
                        if(href === '#home' || href === '#') {
                             window.scrollTo({ top: 0, behavior: 'smooth' });
                             history.replaceState(null, null, ' ');
                             return;
                        }

                        const targetId = href.substring(1);
                        const targetElement = document.getElementById(targetId);

                        if(targetElement) {
                            const headerOffset = 80;
                            const elementPosition = targetElement.getBoundingClientRect().top;
                            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                            window.scrollTo({
                                top: offsetPosition,
                                behavior: "smooth"
                            });

                            if(menu && !menu.classList.contains('hidden')){
                                menu.classList.add('hidden');
                            }
                            // Limpa URL
                            history.replaceState(null, null, ' ');
                        }
                    }
                });
            });

            // --- Limpar URL ao voltar de OUTRA página ---
            if(window.location.hash) {
                setTimeout(() => {
                    const cleanUrl = window.location.pathname.replace('index.php', '');
                    history.replaceState(null, null, cleanUrl);
                }, 500);
            }
        });
    </script>
</body>
</html>