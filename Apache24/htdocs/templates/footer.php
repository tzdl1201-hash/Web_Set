<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php if (isset($_SESSION['username'])): ?>
    <script src="assets/js/main.js"></script>
    <?php include 'templates/async_loader.php'; // 非同步資料載入 ?>
<?php endif; ?>
</body>

</html>