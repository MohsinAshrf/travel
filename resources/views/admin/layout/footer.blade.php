
<!-- Footer -->
 <footer class="footer">
    &copy; 2024 All rights reserved.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom Dropdown Toggle -->
<script>
    document.querySelectorAll('.dropdown-icon').forEach(icon => {
        icon.parentElement.addEventListener('click', function () {
            const isOpen = this.querySelector('.dropdown-icon').classList.contains('fa-chevron-right');
            this.querySelector('.dropdown-icon').classList.toggle('fa-chevron-right', !isOpen);
            this.querySelector('.dropdown-icon').classList.toggle('fa-chevron-down', isOpen);
        });
    });
</script>
</body>
</html>
