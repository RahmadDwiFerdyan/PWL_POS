<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Layout</title>
    <!-- Link to your CSS (e.g., Bootstrap or your custom styles) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MyApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- Profile Photo with Link -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?php echo e(asset('path/to/profile-photo.jpg')); ?>" alt="Profile" class="img-circle" style="width: 30px; height: 30px; object-fit: cover;">
                    </a>
                </li>
                <!-- Back Button -->
                <li class="nav-item">
                    <a class="nav-link" href="javascript:history.back()">Kembali</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Include JS (Bootstrap JS or any other) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\PWL_POS\resources\views/layouts/app.blade.php ENDPATH**/ ?>