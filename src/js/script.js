// (Se eliminó la lógica antigua de pestañas .tab-btn / .tab-pane porque ya
// se usa la implementación de Bootstrap en las páginas principales.)

// ====================================
// FUNCIONALIDAD DE LOGOUT
// ====================================

const logoutBtn = document.querySelector('.logout-btn');
if (logoutBtn) {
    logoutBtn.addEventListener('click', function() {
        if (confirm('¿Deseas cerrar sesión?')) {
            window.location.href = '../logout.php';
        }
    });
}

// ====================================
// FUNCIONALIDAD DE BOTONES DE RESERVA
// ====================================

document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        // Agregar efecto de ripple
        const ripple = document.createElement('span');
        ripple.style.width = ripple.style.height = '20px';
        ripple.style.background = 'rgba(255,255,255,0.5)';
        ripple.style.borderRadius = '50%';
        ripple.style.position = 'absolute';
        ripple.style.pointerEvents = 'none';
        
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.style.animation = 'ripple 0.6s ease-out';
        
        if (this.style.position !== 'absolute' && this.style.position !== 'fixed' && this.style.position !== 'relative') {
            this.style.position = 'relative';
        }
    });
});


// ====================================
// FUNCIONALIDAD DE RECEPCION
// ====================================

document.addEventListener('DOMContentLoaded', function() {
    
    // Selecciona todos los botones de las pestañas y todos los paneles de contenido
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabPanes = document.querySelectorAll('.tab-pane');

    // Agrega un evento de clic a cada botón de pestaña
    tabLinks.forEach(link => {
        link.addEventListener('click', () => {
            // Obtiene el identificador del panel de contenido desde el atributo data-tab
            const tabId = link.getAttribute('data-tab');
            const targetPane = document.getElementById(tabId);

            // 1. Quita la clase 'active' de todos los botones y paneles
            tabLinks.forEach(item => item.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));

            // 2. Agrega la clase 'active' solo al botón clickeado y a su panel correspondiente
            link.classList.add('active');
            targetPane.classList.add('active');
        });
    });

});