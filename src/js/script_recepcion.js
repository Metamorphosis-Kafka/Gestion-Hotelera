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