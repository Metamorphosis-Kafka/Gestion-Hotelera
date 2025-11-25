<?php
// En una aplicación real, este archivo manejaría el envío del formulario a un backend (Laravel).
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Simulación de envío exitoso
    $mensaje_estado = "Gracias por tu mensaje, " . $nombre . ". Lo hemos recibido y te responderemos en breve.";
    $estado_clase = "bg-green-100 border-green-400 text-green-700";
} else {
    $mensaje_estado = "";
    $estado_clase = "";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto - Royal Inti Host</title>
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
        /* Estilo para el iframe del mapa */
        .map-container {
            position: relative;
            padding-bottom: 75%; /* Ratio 4:3 para el mapa */
            height: 0;
            overflow: hidden;
            border-radius: 0.75rem; /* rounded-xl */
        }
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
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

    <!-- BANNER DE CONTACTO -->
    <section class="bg-white pt-16 pb-10">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-neutral">Contáctenos</h1>
            <p class="text-xl font-light max-w-2xl mx-auto text-gray-600">Estamos a su disposición para consultas, reservas especiales o cualquier requerimiento.</p>
        </div>
    </section>

    <!-- SECCIÓN PRINCIPAL: FORMULARIO Y DATOS -->
    <section class="py-10 md:py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                
                <!-- COLUMNA 1: Formulario de Contacto -->
                <div class="lg:col-span-2 bg-white p-8 md:p-12 rounded-xl shadow-2xl">
                    <h2 class="text-2xl md:text-3xl font-bold mb-8 text-primary border-b pb-3 border-gray-100">Envíanos un Mensaje</h2>

                    <?php if ($mensaje_estado): ?>
                        <div class="p-4 mb-6 border rounded-lg <?php echo $estado_clase; ?>" role="alert">
                            <?php echo $mensaje_estado; ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="space-y-6">
                        
                        <!-- Nombre y Email (en línea) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre Completo</label>
                                <input type="text" id="nombre" name="nombre" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="Tu nombre" />
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="tu.correo@ejemplo.com" />
                            </div>
                        </div>

                        <!-- Teléfono y Asunto -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono (Opcional)</label>
                                <input type="tel" id="telefono" name="telefono" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="+51 987 654 321" />
                            </div>
                            <div>
                                <label for="asunto" class="block text-sm font-medium text-gray-700 mb-1">Asunto</label>
                                <select id="asunto" name="asunto" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition appearance-none">
                                    <option value="">Selecciona un asunto...</option>
                                    <option value="Reservas">Consultas de Reservas</option>
                                    <option value="Eventos">Eventos y Banquetes</option>
                                    <option value="Prensa">Prensa y Colaboraciones</option>
                                    <option value="General">Consulta General</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Mensaje -->
                        <div>
                            <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">Tu Mensaje</label>
                            <textarea id="mensaje" name="mensaje" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition" placeholder="Escribe tu mensaje o solicitud aquí..."></textarea>
                        </div>
                        
                        <!-- Botón de Envío -->
                        <div>
                            <button type="submit" class="w-full md:w-auto bg-primary text-white font-semibold py-3 px-8 rounded-full hover:bg-primary-dark transition shadow-md">
                                <i class="fas fa-paper-plane mr-2"></i> Enviar Mensaje
                            </button>
                        </div>
                    </form>
                </div>

                <!-- COLUMNA 2: Información de Contacto y Mapa -->
                <div class="lg:col-span-1 space-y-8">
                    
                    <!-- Información Rápida -->
                    <div class="bg-[#f1ebe3] p-8 rounded-xl shadow-lg border-l-4 border-primary">
                        <h3 class="text-2xl font-bold mb-6 text-neutral">Datos de Contacto</h3>
                        
                        <div class="space-y-5">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-2xl text-primary mt-1 mr-4"></i>
                                <div>
                                    <p class="font-semibold text-lg">Dirección</p>
                                    <p class="text-gray-700">Av. Principal 123, Zona Residencial, Tacna, Perú</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone-alt text-2xl text-primary mt-1 mr-4"></i>
                                <div>
                                    <p class="font-semibold text-lg">Teléfono</p>
                                    <p class="text-gray-700">+51 999 888 777 (Reservas)</p>
                                    <p class="text-gray-700">+51 52 456 789 (Recepción)</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-2xl text-primary mt-1 mr-4"></i>
                                <div>
                                    <p class="font-semibold text-lg">Email</p>
                                    <p class="text-gray-700">reservas@intihost.com</p>
                                    <p class="text-gray-700">gerencia@intihost.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horario de Atención -->
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-2xl font-bold mb-4 text-neutral border-b pb-3 border-gray-100">Horario de Atención</h3>
                        <p class="text-gray-700 mb-4">Nuestro equipo de recepción y conserjería está disponible 24 horas al día, 7 días a la semana.</p>
                        <ul class="text-gray-700 space-y-2">
                            <li class="flex justify-between items-center"><span class="font-semibold">Recepción:</span> <span class="text-primary font-bold">24 / 7</span></li>
                            <li class="flex justify-between items-center"><span class="font-semibold">Restaurante:</span> <span>07:00 - 23:00</span></li>
                            <li class="flex justify-between items-center"><span class="font-semibold">Spa & Wellness:</span> <span>09:00 - 21:00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAPA DE UBICACIÓN -->
    <section class="container mx-auto px-6 py-10 md:py-16">
        <h2 class="text-3xl font-bold text-center mb-6 text-neutral">Encuéntranos en Tacna</h2>
        <div class="map-container shadow-2xl border-4 border-white">
            <!-- Este iframe simula un mapa de Google Maps con una ubicación céntrica en Tacna, Perú -->
            <iframe src="https://maps.google.com/maps?q=Tacna,+Per%C3%BA&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen=""></iframe>
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