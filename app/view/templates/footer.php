
<script src="http://localhost/kaswoymvc/public/js/bootstrap.min.js" crossorigin="anonymous"></script>

<!-- Alert Log-In -->
<script>
    // Periksa apakah pesan error tersedia dalam session
    <?php if (isset($_SESSION['error_message'])) : ?>
        // Tampilkan modal dengan pesan error
        $(document).ready(function() {
            $('#errorModal').modal('show');
        });
    <?php
        // Hapus pesan error dari session setelah menampilkannya
        unset($_SESSION['error_message']);
    endif;
    ?>
</script>

<!-- Index Modal -->
<script>
    // Aktifkan modal saat halaman dimuat
    window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
        myModal.show();
    };
</script>

<!-- Pemasukan Opsi -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggleView = document.getElementById('toggleView');
        var tableView = document.getElementById('tableView');
        var formView = document.getElementById('formView');

        // Menampilkan tampilan awal sesuai dengan pilihan dropdown yang dipilih
        toggleView.addEventListener('change', function() {
            var selectedView = toggleView.value;
            if (selectedView === 'table') {
                tableView.style.display = '';
                formView.style.display = 'none';
            } else if (selectedView === 'form') {
                tableView.style.display = 'none';
                formView.style.display = '';
            }
        });
    });
</script>

<!-- Insert Opsi -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggleView = document.getElementById('jenis');
        var tableView = document.getElementById('manual');
        var formView = document.getElementById('import');

        // Menampilkan tampilan awal sesuai dengan pilihan dropdown yang dipilih
        toggleView.addEventListener('change', function() {
            var selectedView = toggleView.value;
            if (selectedView === 'table') {
                tableView.style.display = '';
                formView.style.display = 'none';
            } else if (selectedView === 'form') {
                tableView.style.display = 'none';
                formView.style.display = '';
            }
        });
    });
</script>

<!-- // Fungsi untuk mengatur opsi bulan aktif sesuai dengan bulan saat ini -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const bulanSelect = document.getElementById('floatingSelect');
        const bulanSekarang = new Date().getMonth(); // Mendapatkan bulan saat ini (0 - 11)
        bulanSelect.selectedIndex = bulanSekarang + 1; // Indeks dimulai dari 1 karena ada opsi "Open this select Month"
    });
</script>

</body>
</html>