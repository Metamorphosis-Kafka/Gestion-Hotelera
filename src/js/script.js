// ====================================
// FUNCIONALIDAD DE PESTAÑAS
// ====================================

document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const tabName = this.getAttribute('data-tab');

            // Remover clase active de todos los botones y pestañas
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));

            // Agregar clase active al botón y pestaña seleccionada
            this.classList.add('active');
            document.getElementById(tabName).classList.add('active');
        });
    });
});

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
