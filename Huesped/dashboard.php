<?php
/*
 * ============================================
 * PANEL DEL HUÉSPED - DASHBOARD
 * ============================================
 * Archivo: dashboard.php
 * Descripción: Panel principal del huésped para gestionar sus reservas y servicios
 * Requiere: Session iniciada y variables de usuario
 */

session_start();

// Validar que el usuario esté autenticado como huésped
// if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'huesped') {
//     header('Location: ../login.html');
//     exit;
// }

// Variables de sesión del usuario (con valores por defecto para demo)
$nombre_usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Juan Huésped';
$rol = isset($_SESSION['rol']) ? $_SESSION['rol'] : 'Huésped';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel de control del huésped - IntiHost">
    <title>Mi Panel - IntiHost</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../src/css/style.css">
</head>
<body>
    <!-- Contenedor principal -->
    <div class="wrapper">
        
        <!-- ======================== HEADER ======================== -->
        <header class="header-main">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a class="navbar-brand logo-brand" href="#">
                        <i class="fas fa-building me-2"></i>
                        <span>IntiHost</span>
                    </a>

                    <!-- Toggle para responsive -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navegación principal -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Dashboard</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Sección derecha del header: Usuario y logout -->
                    <div class="d-flex align-items-center gap-3">
                        <!-- Información del usuario -->
                        <div class="user-header d-flex align-items-center gap-2">
                            <i class="fas fa-user-circle user-icon"></i>
                            <div class="user-info-text">
                                <div class="user-name"><?php echo htmlspecialchars($nombre_usuario); ?></div>
                                <div class="user-role-badge">
                                    <span class="badge bg-light text-dark"><?php echo htmlspecialchars($rol); ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Botón logout -->
                        <button type="button" class="btn btn-logout" title="Cerrar sesión">
                            <i class="fas fa-arrow-right-from-bracket"></i>
                        </button>
                    </div>
                </div>
            </nav>
        </header>

        <!-- ======================== CONTENIDO PRINCIPAL ======================== -->
        <main class="main-content py-5">
            <div class="container-lg">
                
                <!-- Encabezado de página -->
                <div class="page-header mb-5">
                    <h1 class="page-title">Mi Panel</h1>
                    <p class="page-subtitle">Gestiona tus reservas y servicios</p>
                </div>

                <!-- ======================== CARD DE RESERVA ======================== -->
                <div class="card card-reservation mb-5">
                    
                    <!-- Encabezado del card -->
                    <div class="card-header-custom">
                        <div>
                            <h5 class="card-title-main">Tu Próxima Estancia</h5>
                            <small class="text-muted">Reserva confirmada</small>
                        </div>
                        <span class="badge-status badge-confirmed">Confirmada</span>
                    </div>

                    <!-- Detalles de la reserva en grid responsivo -->
                    <div class="card-body">
                        <div class="reservation-details-grid">
                            
                            <!-- Detalle: Habitación -->
                            <div class="detail-box">
                                <div class="detail-icon">
                                    <i class="fas fa-door-open"></i>
                                </div>
                                <div class="detail-info">
                                    <label class="detail-label">Habitación</label>
                                    <div class="detail-value">205</div>
                                    <small class="detail-type">Deluxe</small>
                                </div>
                            </div>

                            <!-- Detalle: Check-in -->
                            <div class="detail-box">
                                <div class="detail-icon">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <div class="detail-info">
                                    <label class="detail-label">Check-in</label>
                                    <div class="detail-value">2025-10-10</div>
                                    <small class="detail-type">14:00 hrs</small>
                                </div>
                            </div>

                            <!-- Detalle: Check-out -->
                            <div class="detail-box">
                                <div class="detail-icon">
                                    <i class="fas fa-calendar-xmark"></i>
                                </div>
                                <div class="detail-info">
                                    <label class="detail-label">Check-out</label>
                                    <div class="detail-value">2025-10-15</div>
                                    <small class="detail-type">12:00 hrs</small>
                                </div>
                            </div>

                            <!-- Detalle: Duración -->
                            <div class="detail-box">
                                <div class="detail-icon">
                                    <i class="fas fa-hourglass-end"></i>
                                </div>
                                <div class="detail-info">
                                    <label class="detail-label">Duración</label>
                                    <div class="detail-value">5 noches</div>
                                    <small class="detail-type">$1250 total</small>
                                </div>
                            </div>

                        </div>

                        <!-- Botones de acción -->
                        <div class="reservation-actions mt-4">
                            <button type="button" class="btn btn-primary-custom">
                                <i class="fas fa-clipboard me-2"></i>Solicitar Servicios
                            </button>
                            <button type="button" class="btn btn-secondary-custom">Modificar Reserva</button>
                            <button type="button" class="btn btn-danger-custom">Cancelar Reserva</button>
                        </div>
                    </div>
                </div>

                <!-- ======================== SECCIÓN DE TABS (mejorado) ======================== -->
                <div class="card card-tabs mb-4 p-0 border-0">
                <!-- Pestañas de navegación -->
                <ul class="nav nav-tabs bg-white px-4 pt-3" id="myTab" role="tablist" style="border-bottom:1px solid #eee;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="servicios-tab" data-bs-toggle="tab" data-bs-target="#servicios" type="button" role="tab">Servicios</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="historial-tab" data-bs-toggle="tab" data-bs-target="#historial" type="button" role="tab">Historial</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reserva-tab" data-bs-toggle="tab" data-bs-target="#nueva-reserva" type="button" role="tab">Nueva Reserva</button>
                    </li>
                </ul>

                    <!-- Contenido de las pestañas -->
                    <div class="tab-content p-4" id="myTabContent">

                        <!-- Pestaña: Servicios -->
                        <div class="tab-pane fade show active" id="servicios" role="tabpanel">

                            <!-- Título -->
                            <div class="mb-4">
                                <h5 class="fw-semibold">Servicios Disponibles</h5>
                                <p class="text-muted">Mejora tu experiencia con nuestros servicios premium</p>
                            </div>

                            <!-- Grid de servicios (tus tarjetas) -->
                            <div class="row g-3">

                                <!-- Servicio 1 -->
                                <div class="col-md-6">
                                    <div class="service-card position-relative p-4 border rounded bg-white shadow-sm">
                                        <span class="service-price">Desde $15</span>
                                        <div class="icon-circle mb-3"><i class="fas fa-bell-concierge"></i></div>
                                        <h6 class="fw-semibold mb-1">Servicio de Habitación</h6>
                                        <p class="text-muted small mb-3">Disponible 24/7</p>
                                        <button class="btn btn-outline-secondary w-100">Solicitar</button>
                                    </div>
                                </div>

                                <!-- Servicio 2 -->
                                <div class="col-md-6">
                                    <div class="service-card position-relative p-4 border rounded bg-white shadow-sm">
                                        <span class="service-price">$10/día</span>
                                        <div class="icon-circle mb-3"><i class="fas fa-wifi"></i></div>
                                        <h6 class="fw-semibold mb-1">WiFi Premium</h6>
                                        <p class="text-muted small mb-3">Alta velocidad</p>
                                        <button class="btn btn-outline-secondary w-100">Solicitar</button>
                                    </div>
                                </div>

                                <!-- Servicio 3 -->
                                <div class="col-md-6">
                                    <div class="service-card position-relative p-4 border rounded bg-white shadow-sm">
                                        <span class="service-price">$25/persona</span>
                                        <div class="icon-circle mb-3"><i class="fas fa-utensils"></i></div>
                                        <h6 class="fw-semibold mb-1">Desayuno Buffet</h6>
                                        <p class="text-muted small mb-3">7:00 AM - 11:00 AM</p>
                                        <button class="btn btn-outline-secondary w-100">Solicitar</button>
                                    </div>
                                </div>

                                <!-- Servicio 4 -->
                                <div class="col-md-6">
                                    <div class="service-card position-relative p-4 border rounded bg-white shadow-sm">
                                        <span class="service-price">$50</span>
                                        <div class="icon-circle mb-3"><i class="fas fa-clock"></i></div>
                                        <h6 class="fw-semibold mb-1">Late Check-out</h6>
                                        <p class="text-muted small mb-3">Hasta las 4:00 PM</p>
                                        <button class="btn btn-outline-secondary w-100">Solicitar</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Sección de ayuda -->
                            <div class="contact-support mt-4 p-3 border rounded bg-white shadow-sm d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fw-semibold mb-0">¿Necesitas ayuda?</h6>
                                    <p class="text-muted small mb-0">Nuestro equipo está disponible 24/7 para asistirte con cualquier solicitud especial</p>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-light border"><i class="fas fa-phone me-2"></i>Llamar a Recepción</button>
                                    <button class="btn btn-outline-secondary">Conserje</button>
                                </div>
                            </div>
                        </div>

                        <!-- Pestaña: Historial -->
                        <div class="tab-pane fade" id="historial" role="tabpanel">
                            <p class="text-muted">Contenido de Historial</p>
                        </div>

                        <!-- Pestaña: Nueva Reserva -->
                        <div class="tab-pane fade" id="nueva-reserva" role="tabpanel">
                            <p class="text-muted">Contenido de Nueva Reserva</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- ======================== SCRIPTS ======================== -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script personalizado -->
    <script src="../src/js/script.js"></script>
</body>
</html>
