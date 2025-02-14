document.addEventListener('DOMContentLoaded', function() {
    // Get all read more buttons
    const buttons = document.querySelectorAll('.btn');
    const modals = document.querySelectorAll('.modale');
    const closeButtons = document.querySelectorAll('.close-btn');

    // Add click event to each button
    buttons.forEach(button => {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        const modalId = this.getAttribute('data-modal');
        const modal = document.getElementById(modalId);
        modal.style.display = 'block';
      });
    });

    // Add click event to close buttons
    closeButtons.forEach(button => {
      button.addEventListener('click', function() {
        const modal = this.closest('.modale');
        modal.style.display = 'none';
      });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
      modals.forEach(modal => {
        if (e.target === modal) {
          modal.style.display = 'none';
        }
      });
    });
  });