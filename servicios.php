<?php
// En una aplicación real, esta página podría cargar los servicios desde una base de datos.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Servicios Exclusivos - Royal Inti Host</title>
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
        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1543977526-cb17a561d56f?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&h=600&fit=crop&bg=FFFFFF&dl=0');
            background-position: center 30%; /* Ajusta la posición para mostrar el lujo */
        }
    </style>
</head>
<body class="text-neutral bg-background-light">

    <!-- BARRA DE NAVEGACIÓN (Consistente con habitaciones.php) -->
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
                        <li><a href="nosotros.php" class="hover:text-primary">Nosotros</a></li>
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

    <!-- BANNER DE SERVICIOS -->
    <section class="relative hero-bg bg-cover bg-center py-24 md:py-40">
        <div class="absolute inset-0 bg-neutral/70"></div>
        <div class="container mx-auto px-6 relative z-10 text-white text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Servicios Exclusivos</h1>
            <p class="text-xl md:text-2xl font-light max-w-3xl mx-auto">Más allá del alojamiento, ofrecemos una experiencia de bienestar integral y atención inigualable.</p>
        </div>
    </section>

    <!-- SECCIÓN 1: SERVICIOS DESTACADOS (Grid de Iconos) -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Nuestros Pilares de Lujo</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                
                <!-- Servicio 1: Gastronomía -->
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300">
                    <i class="fas fa-utensils text-5xl text-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Restaurante Gourmet</h3>
                    <p class="text-sm text-gray-600">Cocina de autor con ingredientes locales e internacionales de primera calidad.</p>
                </div>

                <!-- Servicio 2: Spa y Bienestar -->
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300">
                    <i class="fas fa-spa text-5xl text-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Spa & Wellness Center</h3>
                    <p class="text-sm text-gray-600">Tratamientos relajantes, masajes especializados y piscina climatizada de hidroterapia.</p>
                </div>

                <!-- Servicio 3: Conserjería -->
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300">
                    <i class="fas fa-concierge-bell text-5xl text-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Conserje 24 Horas</h3>
                    <p class="text-sm text-gray-600">Asistencia personalizada para reservas, tours y cualquier requerimiento especial.</p>
                </div>

                <!-- Servicio 4: Negocios -->
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300">
                    <i class="fas fa-briefcase text-5xl text-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Business Center Premium</h3>
                    <p class="text-sm text-gray-600">Salas de reuniones equipadas con tecnología de punta y WiFi de alta velocidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 2: DETALLE DE SERVICIOS POR CATEGORÍA -->
    <section class="py-16 md:py-20">
        <div class="container mx-auto px-6">
            
            <!-- Bloque 1: Gastronomía -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-16 md:mb-24">
                <div class="order-2 md:order-1">
                    <h3 class="text-3xl font-bold mb-4 text-neutral">Experiencia Culinaria</h3>
                    <p class="text-lg text-gray-600 mb-6">Nuestro enfoque se centra en la frescura, la innovación y el servicio impecable. Disfrute de cenas privadas o de nuestro renombrado buffet matutino.</p>
                    <ul class="space-y-3 text-gray-700">
                        <li><i class="fas fa-check-circle mr-3 text-primary"></i> Desayuno Americano y Andino incluido.</li>
                        <li><i class="fas fa-check-circle mr-3 text-primary"></i> Bar de cócteles con vista panorámica.</li>
                        <li><i class="fas fa-check-circle mr-3 text-primary"></i> Servicio a la habitación 24/7.</li>
                    </ul>
                    <a href="#" class="mt-8 inline-block bg-neutral text-white font-semibold py-3 px-6 rounded-lg hover:bg-neutral/80 transition">Ver Menú de Restaurante</a>
                </div>
                <div class="order-1 md:order-2 rounded-xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1550977271-e947d4e5f750?auto=format&fit=crop&w=800&q=80" alt="Restaurante Gourmet" class="w-full h-96 object-cover">
                </div>
            </div>

            <!-- Bloque 2: Relax y Ocio (Invertido) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="rounded-xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1544026367-9c92257d0796?auto=format&fit=crop&w=800&q=80" alt="Spa y Piscina" class="w-full h-96 object-cover">
                </div>
                <div>
                    <h3 class="text-3xl font-bold mb-4 text-neutral">Spa y Piscina de Relajación</h3>
                    <p class="text-lg text-gray-600 mb-6">Un santuario de calma diseñado para desconectar. Ofrecemos tratamientos ancestrales y modernos para revitalizar cuerpo y mente.</p>
                    <ul class="space-y-3 text-gray-700">
                        <li><i class="fas fa-check-circle mr-3 text-primary"></i> Masajes con piedras calientes andinas.</li>
                        <li><i class="fas fa-check-circle mr-3 text-primary"></i> Sauna seco y húmedo con aromaterapia.</li>
                        <li><i class="fas fa-check-circle mr-3 text-primary"></i> Gimnasio de última generación disponible 24h.</li>
                    </ul>
                    <a href="#" class="mt-8 inline-block bg-primary text-white font-semibold py-3 px-6 rounded-lg hover:bg-primary-dark transition">Pedir Cita en el Spa</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 3: ATENCIÓN AL DETALLE (Pequeños Lujos) -->
    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Atención al Detalle</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-background-light p-6 rounded-xl border border-gray-200 shadow-md text-center">
                    <i class="fas fa-car-side text-4xl text-primary mb-3"></i>
                    <h4 class="font-semibold text-xl mb-2">Traslados Premium</h4>
                    <p class="text-gray-600 text-sm">Servicio de recogida y retorno al aeropuerto en vehículos de alta gama.</p>
                </div>

                <div class="bg-background-light p-6 rounded-xl border border-gray-200 shadow-md text-center">
                    <i class="fas fa-tshirt text-4xl text-primary mb-3"></i>
                    <h4 class="font-semibold text-xl mb-2">Lavandería Express</h4>
                    <p class="text-gray-600 text-sm">Servicio de limpieza y planchado con entrega en menos de 3 horas.</p>
                </div>

                <div class="bg-background-light p-6 rounded-xl border border-gray-200 shadow-md text-center">
                    <i class="fas fa-baby-carriage text-4xl text-primary mb-3"></i>
                    <h4 class="font-semibold text-xl mb-2">Servicios Familiares</h4>
                    <p class="text-gray-600 text-sm">Cunas de lujo, niñeras certificadas y menús especiales para niños (bajo petición).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER (Consistente con habitaciones.php) -->
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
