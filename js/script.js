// Abrir la ventana emergente

/**
 *
 *
 * @param {*} modalId
 * @param {*} event
 */
function openModal(modalId, event) {
  event.preventDefault(); // Evita que el enlace recargue la página
  document.getElementById(modalId).style.display = "flex";
}

// Cerrar la ventana emergente
/**
 *
 *
 * @param {*} modalId
 */
function closeModal(modalId) {
  document.getElementById(modalId).style.display = "none";
}
