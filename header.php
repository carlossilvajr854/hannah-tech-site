<?php
// Detecta qual é a página atual
$pagina_atual = basename($_SERVER['PHP_SELF']);
$eh_home = ($pagina_atual == 'index.php' || $pagina_atual == '');

// Define o prefixo do link
// Se for home, link é vazio (só a âncora #). Se não, adiciona 'index.php' antes.
$link_prefix = $eh_home ? '' : 'index.php';
?>
<!DOCTYPE html>
<html lang="pt-br" class="scroll-pt-20">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hannah Tech - Soluções em Tecnologia</title>
    
    <?php if(file_exists('img/favicon.png')): ?>
        <link rel="icon" type="image/png" href="img/favicon.png">
    <?php endif; ?>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        hannah: {
                            dark: '#0f2b4c', 
                            light: '#ffffff',
                            accent: '#2563eb'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen">

    <nav class="bg-hannah-dark/95 backdrop-blur-sm text-white fixed w-full z-50 shadow-lg border-b border-blue-900/30 transition-all duration-300">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="<?php echo $link_prefix; ?>#home" class="flex items-center gap-2 link-scroll">
                <?php if(file_exists('img/logotipo.png')): ?>
                    <img src="img/logotipo.png" alt="Hannah Tech" class="h-12 w-auto object-contain brightness-0 invert filter drop-shadow-md">
                <?php elseif(file_exists('img/logo.png')): ?>
                    <img src="img/logo.png" alt="Hannah Tech" class="h-12 w-auto object-contain brightness-0 invert filter drop-shadow-md">
                <?php else: ?>
                    <div class="text-2xl font-bold flex items-center gap-2">
                        <i class="fa-solid fa-microchip text-blue-400"></i> HANNAH TECH
                    </div>
                <?php endif; ?>
            </a>
            
            <div class="hidden md:flex space-x-8 items-center font-medium">
                <a href="<?php echo $link_prefix; ?>#home" class="hover:text-blue-300 transition link-scroll">Início</a>
                <a href="<?php echo $link_prefix; ?>#sobre" class="hover:text-blue-300 transition link-scroll">Sobre</a>
                <a href="<?php echo $link_prefix; ?>#servicos" class="hover:text-blue-300 transition link-scroll">Serviços</a>
                <a href="<?php echo $link_prefix; ?>#portfolio" class="hover:text-blue-300 transition link-scroll">Portfólio</a>
                <a href="<?php echo $link_prefix; ?>#contato" class="bg-blue-600 hover:bg-blue-500 px-5 py-2 rounded-full text-white transition shadow-lg hover:shadow-blue-500/50 flex items-center gap-2 link-scroll">
                   <i class="fa-solid fa-envelope"></i> Contato
                </a>
            </div>
            
            <button id="menu-btn" class="md:hidden text-2xl focus:outline-none text-white">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden bg-hannah-dark border-t border-blue-800 p-4">
            <a href="<?php echo $link_prefix; ?>#home" class="block py-3 border-b border-blue-800/50 hover:text-blue-300 link-scroll">Início</a>
            <a href="<?php echo $link_prefix; ?>#sobre" class="block py-3 border-b border-blue-800/50 hover:text-blue-300 link-scroll">Sobre</a>
            <a href="<?php echo $link_prefix; ?>#servicos" class="block py-3 border-b border-blue-800/50 hover:text-blue-300 link-scroll">Serviços</a>
            <a href="<?php echo $link_prefix; ?>#portfolio" class="block py-3 border-b border-blue-800/50 hover:text-blue-300 link-scroll">Portfólio</a>
            <a href="<?php echo $link_prefix; ?>#contato" class="block py-3 font-bold text-blue-300 link-scroll">Contato</a>
        </div>
    </nav>