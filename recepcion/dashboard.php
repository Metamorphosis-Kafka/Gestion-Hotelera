<?php
// --- SIMULACIÓN DE DATOS DE UNA BASE DE DATOS ---

// Datos para la pestaña de "Reservas de Hoy"
$reservas_hoy = [
    ['nombre' => 'Juan Pérez', 'estado' => 'Check-in', 'habitacion' => '101', 'hora' => '14:00', 'completado' => false],
    ['nombre' => 'María García', 'estado' => 'Check-in', 'habitacion' => '205', 'hora' => '15:30', 'completado' => false],
    ['nombre' => 'Carlos López', 'estado' => 'Check-out', 'habitacion' => '312', 'hora' => '12:00', 'completado' => true],
    ['nombre' => 'Ana Martínez', 'estado' => 'Check-in', 'habitacion' => '201', 'hora' => '16:00', 'completado' => false],
];
$pendientes = count(array_filter($reservas_hoy, function($r) { return !$r['completado']; }));

// Datos para la pestaña "Estado de Habitaciones"
$habitaciones = [
    ['numero' => '101', 'tipo' => 'Standard', 'piso' => '1º', 'estado' => 'Disponible', 'info' => '10:30 AM'],
    ['numero' => '102', 'tipo' => 'Standard', 'piso' => '1º', 'estado' => 'Ocupada', 'info' => 'Pedro Ruiz'],
    ['numero' => '103', 'tipo' => 'Standard', 'piso' => '1º', 'estado' => 'Limpieza', 'info' => 'En proceso'],
    ['numero' => '201', 'tipo' => 'Deluxe', 'piso' => '2º', 'estado' => 'Disponible', 'info' => '11:00 AM'],
    ['numero' => '205', 'tipo' => 'Deluxe', 'piso' => '2º', 'estado' => 'Mantenimiento', 'info' => '---'],
    ['numero' => '301', 'tipo' => 'Suite', 'piso' => '3º', 'estado' => 'Ocupada', 'info' => 'Laura Sánchez'],
];

// Datos para la pestaña "Gestión de Pagos"
$pagos = [
    ['nombre' => 'Juan Pérez', 'habitacion' => 101, 'total' => 450, 'pagado' => false],
    ['nombre' => 'Carlos López', 'habitacion' => 312, 'total' => 1350, 'pagado' => true, 'metodo' => 'Efectivo'],
];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Recepción - IntiHost</title>
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome (para los iconos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="src/css/style_recepcion.css">
</head>
<body>

    <div class="container">
        <!-- HEADER SUPERIOR -->
        <header class="main-header">
            <div class="logo">IntiHost</div>
            <nav class="main-nav">
                <a href="#" class="nav-link">Dashboard</a>
                <div class="user-menu">
                    <i class="fa-solid fa-user"></i>
                    <span>María Recepcionista</span>
                    <span class="user-role">Recepcionista</span>
                </div>
                <a href="#" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i></a>
            </nav>
        </header>

        <!-- CONTENIDO PRINCIPAL -->
        <main class="main-content">
            <!-- Título y botones de acción rápida -->
            <section class="panel-header">
                <h1>Panel de Recepción</h1>
                <p>Gestiona reservas y operaciones del hotel</p>
                <div class="action-buttons">
                    <button class="action-btn check-in"><i class="fa-solid fa-right-to-bracket"></i> Check-in</button>
                    <button class="action-btn check-out"><i class="fa-solid fa-left-right"></i> Check-out</button>
                    <button class="action-btn new-reservation"><i class="fa-regular fa-calendar-plus"></i> Nueva Reserva</button>
                    <button class="action-btn register-payment"><i class="fa-solid fa-dollar-sign"></i> Registrar Pago</button>
                </div>
            </section>

            <!-- NAVEGACIÓN POR PESTAÑAS -->
            <nav class="tabs-nav">
                <button class="tab-link active" data-tab="reservas">Reservas</button>
                <button class="tab-link" data-tab="habitaciones">Habitaciones</button>
                <button class="tab-link" data-tab="pagos">Pagos</button>
            </nav>

            <!-- CONTENIDO DE LAS PESTAÑAS -->
            <div class="tabs-content">

                <!-- Pestaña 1: Reservas -->
                <div id="reservas" class="tab-pane active">
                    <div class="card">
                        <div class="card-header">
                            <h2>Reservas de Hoy <small>Check-ins y check-outs programados</small></h2>
                            <span class="badge-pending"><?php echo $pendientes; ?> Pendientes</span>
                        </div>
                        <div class="search-bar">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Buscar por nombre o habitación...">
                        </div>
                        <ul class="reservations-list">
                            <?php foreach ($reservas_hoy as $reserva): ?>
                                <li class="reservation-item">
                                    <div class="info">
                                        <h3><?php echo htmlspecialchars($reserva['nombre']); ?>
                                            <span class="status <?php echo strtolower($reserva['estado']); ?>"><?php echo htmlspecialchars($reserva['estado']); ?></span>
                                        </h3>
                                        <p><i class="fa-solid fa-bed"></i> Habitación <?php echo htmlspecialchars($reserva['habitacion']); ?> <i class="fa-regular fa-clock"></i> <?php echo htmlspecialchars($reserva['hora']); ?></p>
                                    </div>
                                    <div class="actions">
                                        <?php if ($reserva['completado']): ?>
                                            <span class="status-completed"><i class="fa-solid fa-check"></i> Completado</span>
                                        <?php else: ?>
                                            <button class="btn-action-primary"><i class="fa-regular fa-clock"></i> Realizar Check-in</button>
                                            <button class="btn-action-secondary">Modificar</button>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Pestaña 2: Habitaciones -->
                <div id="habitaciones" class="tab-pane">
                    <div class="card">
                        <div class="card-header">
                            <h2>Estado de Habitaciones <small>Vista en tiempo real del estado de todas las habitaciones</small></h2>
                            <div class="legend">
                                <span class="legend-item available">Disponibles: 2</span>
                                <span class="legend-item occupied">Ocupadas: 2</span>
                            </div>
                        </div>
                        <table class="rooms-table">
                            <thead>
                                <tr>
                                    <th>Habitación</th>
                                    <th>Tipo</th>
                                    <th>Piso</th>
                                    <th>Estado</th>
                                    <th>Info</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($habitaciones as $hab): ?>
                                    <tr>
                                        <td><strong><?php echo htmlspecialchars($hab['numero']); ?></strong></td>
                                        <td><?php echo htmlspecialchars($hab['tipo']); ?></td>
                                        <td><?php echo htmlspecialchars($hab['piso']); ?></td>
                                        <td><span class="status-room <?php echo strtolower($hab['estado']); ?>"><?php echo htmlspecialchars($hab['estado']); ?></span></td>
                                        <td><?php echo htmlspecialchars($hab['info']); ?></td>
                                        <td>
                                            <?php if ($hab['estado'] == 'Disponible'): ?>
                                                <button class="btn-action-secondary">Asignar</button>
                                            <?php else: ?>
                                                <button class="btn-action-secondary">Ver</button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="floor-summary">
                        <div class="floor-card"><h3>Piso 1</h3><p>Disponibles<span>1/3</span></p></div>
                        <div class="floor-card"><h3>Piso 2</h3><p>Disponibles<span>1/2</span></p></div>
                        <div class="floor-card"><h3>Piso 3</h3><p>Disponibles<span>0/1</span></p></div>
                    </div>
                </div>

                <!-- Pestaña 3: Pagos -->
                <div id="pagos" class="tab-pane">
                    <div class="card">
                        <div class="card-header">
                            <h2><i class="fa-solid fa-dollar-sign"></i> Gestión de Pagos <small>Registrar pagos y emitir comprobantes</small></h2>
                        </div>
                        <ul class="payments-list">
                            <?php foreach ($pagos as $pago): ?>
                                <li class="payment-item">
                                    <div class="info">
                                        <h3><?php echo htmlspecialchars($pago['nombre']); ?></h3>
                                        <p>Habitación <?php echo htmlspecialchars($pago['habitacion']); ?></p>
                                    </div>
                                    <div class="payment-details">
                                        <div class="amount">
                                            <span>$<?php echo number_format($pago['total'], 2); ?></span>
                                            <small>Total a pagar</small>
                                        </div>
                                        <div class="actions">
                                            <?php if ($pago['pagado']): ?>
                                                <span class="payment-status-paid">Pagado - <?php echo htmlspecialchars($pago['metodo']); ?></span>
                                            <?php else: ?>
                                                <button class="btn-action-secondary">Efectivo</button>
                                                <button class="btn-action-secondary">Tarjeta</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <!-- Script para la funcionalidad de las pestañas -->
    <script src="../src/js/script_recepcion.js"></script>
</body>
</html>