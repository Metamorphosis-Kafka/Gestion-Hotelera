<?php
// En una aplicación real, esta página podría cargar el contenido desde un CMS o base de datos.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros - Historia y Misión | Royal Inti Host</title>
    <!-- Incluyendo Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configuración del tema de colores y fuentes de IntiHost -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#D1B980', // Color dorado/beige principal
                        'primary-dark': '#c0a66d', // Un poco más oscuro para hover
                        'neutral': '#1a1a1a', // Color de texto principal
                        'background-light': '#f9f9f9', // Fondo
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <!-- Enlace a la fuente Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f9f9f9; }
        .hero-bg-nosotros {
            /* Usamos una imagen que sugiera elegancia y tradición */
            background-image: url('https://images.unsplash.com/photo-1596701062361-8cd734e54e99?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&h=600&fit=crop&bg=FFFFFF&dl=0');
            background-position: center 30%;
        }
    </style>
</head>
<body class="text-neutral bg-background-light">

    <!-- BARRA DE NAVEGACIÓN (Consistente) -->
    <header class="bg-[#f1ebe3] border-b border-gray-200">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-3 items-center gap-4 py-3">
                <div class="flex items-center">
                    <div class="flex items-center gap-3">
                        <div class="bg-primary text-white p-2 rounded-md shadow-sm">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-neutral">IntiHost</div>
                            <div class="text-xs text-gray-600">Royal Inti Host</div>
                        </div>
                    </div>
                </div>

                <nav class="justify-self-center">
                    <ul class="flex items-center gap-8 text-sm font-medium text-neutral">
                        <li><a href="index.php" class="hover:text-primary">Inicio</a></li>
                        <li><a href="habitaciones.php" class="hover:text-primary">Habitaciones</a></li>
                        <li><a href="servicios.php" class="hover:text-primary">Servicios</a></li>
                        <li><a href="nosotros.php" class="text-primary border-b-2 border-primary pb-1">Nosotros</a></li>
                    </ul>
                </nav>

                <div class="flex justify-end items-center gap-3">
                    <a href="login.php" class="inline-flex items-center gap-2 text-sm font-semibold px-3 py-2 rounded-full border border-transparent hover:bg-[#e6dac1] transition">
                        <i class="fas fa-user-circle text-[#6b5b3b]"></i>
                        <span class="text-[#6b5b3b]">Iniciar Sesión</span>
                    </a>

                    <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold px-4 py-2 rounded-full bg-primary hover:bg-primary-dark text-white shadow-sm transition">
                        <i class="fas fa-calendar-check"></i>
                        <span>Reservar Ahora</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- BANNER DE LA HISTORIA -->
    <section class="relative hero-bg-nosotros bg-cover bg-center py-24 md:py-40">
        <div class="absolute inset-0 bg-neutral/70"></div>
        <div class="container mx-auto px-6 relative z-10 text-white text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-wider">Nuestra Historia</h1>
            <p class="text-xl md:text-2xl font-light max-w-3xl mx-auto">Donde la tradición andina se fusiona con el lujo contemporáneo.</p>
        </div>
    </section>

    <!-- SECCIÓN 1: INTRODUCCIÓN Y FUNDACIÓN -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6 max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-neutral">Un Legado de Hospitalidad</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <div class="md:col-span-2">
                    <p class="text-lg mb-6 text-gray-700 leading-relaxed">
                        Royal Inti Host nació de la visión de crear un espacio que no solo ofreciera descanso, sino una inmersión completa en la riqueza cultural y la elegancia moderna. Fundado en 2010, nuestro hotel ha sido reconocido constantemente por elevar los estándares de hospitalidad de lujo en la región.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Cada detalle, desde la arquitectura inspirada en las líneas andinas hasta la selección de obras de arte locales, ha sido cuidadosamente curado para ofrecer un ambiente de serenidad y distinción. Somos un destino, no solo una parada.
                    </p>
                </div>
                <div class="md:col-span-1">
                    <div class="p-6 bg-[#f1ebe3] rounded-xl shadow-lg border-t-4 border-primary">
                        <h4 class="font-bold text-2xl mb-2 text-primary">2010</h4>
                        <p class="text-gray-700">Año de Fundación</p>
                        <hr class="my-4 border-gray-300">
                        <h4 class="font-bold text-2xl mb-2 text-primary">5 Estrellas</h4>
                        <p class="text-gray-700">Clasificación de Lujo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 2: MISIÓN, VISIÓN Y VALORES -->
    <section class="py-16 md:py-20 bg-background-light">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                <!-- Misión -->
                <div class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-primary">
                    <i class="fas fa-mountain text-4xl text-primary mb-4"></i>
                    <h3 class="text-2xl font-bold mb-4">Nuestra Misión</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Proveer una experiencia de alojamiento de cinco estrellas, superando las expectativas de cada huésped con un servicio personalizado, discreto y atento al patrimonio cultural.
                    </p>
                </div>

                <!-- Visión -->
                <div class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-primary">
                    <i class="fas fa-globe-americas text-4xl text-primary mb-4"></i>
                    <h3 class="text-2xl font-bold mb-4">Nuestra Visión</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Ser reconocidos como el hotel de lujo líder en el sur del Perú, sinónimo de excelencia, sostenibilidad y una conexión auténtica con la identidad andina.
                    </p>
                </div>

                <!-- Valores -->
                <div class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-primary">
                    <i class="fas fa-hands-helping text-4xl text-primary mb-4"></i>
                    <h3 class="text-2xl font-bold mb-4">Nuestros Valores</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li><i class="fas fa-chevron-right text-xs mr-2 text-primary"></i> <span class="font-semibold">Integridad</span> en cada interacción.</li>
                        <li><i class="fas fa-chevron-right text-xs mr-2 text-primary"></i> <span class="font-semibold">Excelencia</span> en el servicio.</li>
                        <li><i class="fas fa-chevron-right text-xs mr-2 text-primary"></i> <span class="font-semibold">Respeto</span> cultural y ambiental.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 3: COMPROMISO SOCIAL Y AMBIENTAL -->
    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-6 max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-neutral">Compromiso con la Comunidad</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="rounded-xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1542382025-b4614e52b21c?auto=format&fit=crop&w=800&q=80" alt="Personal Atento" class="w-full h-80 object-cover">
                </div>
                <div>
                    <p class="text-lg mb-6 text-gray-700 leading-relaxed">
                        Creemos que el verdadero lujo incluye responsabilidad. Royal Inti Host está activamente comprometido con el desarrollo sostenible y el apoyo a las comunidades locales.
                    </p>
                    <ul class="space-y-4 text-gray-700 font-semibold">
                        <li class="flex items-start">
                            <i class="fas fa-seedling text-2xl mr-3 text-primary mt-1"></i>
                            <div>
                                <h4 class="text-lg">Sostenibilidad Ecológica</h4>
                                <p class="text-sm font-normal text-gray-600">Programas de reciclaje, reducción de plásticos y uso eficiente de recursos hídricos.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-hand-holding-heart text-2xl mr-3 text-primary mt-1"></i>
                            <div>
                                <h4 class="text-lg">Apoyo a Artesanos</h4>
                                <p class="text-sm font-normal text-gray-600">Promovemos la compra de productos y textiles a cooperativas de artesanos de la zona.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CITA DE CIERRE/LLAMADA A LA ACCIÓN -->
    <section class="bg-primary/10 py-12 md:py-16 mt-10">
        <div class="container mx-auto px-6 text-center">
            <p class="text-2xl md:text-3xl font-light italic text-neutral mb-6 max-w-4xl mx-auto">
                "Nuestra promesa es simple: convertir cada visita en un recuerdo inolvidable de elegancia y autenticidad."
            </p>
            <a href="habitaciones.php" class="inline-block bg-primary text-white font-semibold py-3 px-8 rounded-full text-lg hover:bg-primary-dark transition shadow-lg">
                Descubra su Experiencia
            </a>
        </div>
    </section>

    <!-- FOOTER (Consistente) -->
    <footer class="bg-[#f1ebe3] py-10 border-t mt-10">
        <div class="container mx-auto px-6 grid md:grid-cols-4 gap-8 text-gray-700">
            <div>
                <div class="flex items-center space-x-2 mb-3">
                    <div class="bg-primary text-white p-2 rounded">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3 class="font-bold text-lg">IntiHost</h3>
                </div>
                <p class="text-sm text-gray-600">Experiencia de lujo y confort excepcional para huéspedes distinguidos.</p>
            </div>

            <div>
                <h3 class="font-bold mb-3">Enlaces Rápidos</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="habitaciones.php" class="hover:text-primary">Habitaciones</a></li>
                    <li><a href="servicios.php" class="hover:text-primary">Servicios</a></li>
                    <li><a href="nosotros.php" class="hover:text-primary">Nosotros</a></li>
                    <li><a href="contacto.php" class="hover:text-primary">Contacto</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-3">Contacto</h3>
                <ul class="space-y-2 text-sm">
                    <li><i class="fas fa-phone-alt mr-2 text-primary"></i> +51 999 888 777</li>
                    <li><i class="fas fa-envelope mr-2 text-primary"></i> info@intihost.com</li>
                    <li><i class="fas fa-map-marker-alt mr-2 text-primary"></i> Av. Principal 123, Tacna, Perú</li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-3">Síguenos</h3>
                <div class="flex space-x-4 text-primary text-xl">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <!-- copyright -->
        <div class="text-center text-gray-500 text-sm mt-10 pt-6 border-t border-gray-200">
            &copy; 2025 IntiHost - Royal Inti Host. Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>
