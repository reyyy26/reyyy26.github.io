<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Pupuk</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Toko <span>Pupuk</span></a>
        <div class="navbar-nav">
            <a href="index.php">Home</a>
            <a href="about.php">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="index.php">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="beli.php" id="shopping-card"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <!-- hero section start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Silahkan Berbelanja di Toko Kami</h1>
        </main>
    </section>
    <!-- hero section end -->




    <div class="content">
        <div class="card">
            <div class="card-image">
                <img src="../asset/ecofert.jpg" alt="Card Image 1">
            </div>
            <div class="card-content">
                <h3>"Ecofert"</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <img src="../asset/bioneensis.jpg" alt="Card Image 2">
            </div>
            <div class="card-content">
                <h3>"Bioneensis"</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <img src="../asset/npk phonska.jpg" alt="Card Image 3">
            </div>
            <div class="card-content">
                <h3>"NPK Phonska"</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <img src="../asset/beensae.jpg" alt="Card Image 4">
            </div>
            <div class="card-content">
                <h3>"Beensae"</h3>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="../asset/arthaganik.jpg" alt="Card Image 5">
            </div>
            <div class="card-content">
                <h3>"Arthaganik"</h3>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="../asset/granul.jpg" alt="Card Image 5">
            </div>
            <div class="card-content">
                <h3>"Granul"</h3>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="../asset/nitrea.jpg" alt="Card Image 5">
            </div>
            <div class="card-content">
                <h3>"Nitrea"</h3>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="../asset/npk.jpg" alt="Card Image 5">
            </div>
            <div class="card-content">
                <h3>"NPK"</h3>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="../asset/petroganik.jpg" alt="Card Image 5">
            </div>
            <div class="card-content">
                <h3>"Petroganik"</h3>
            </div>
        </div>

        <!-- contact Section start -->
        <section id="contact" class="contact">
            <h2>Kontak Kami</h2>
            <p>
                Hubungi kami melalui formulir di bawah ini:
            </p>
            <form action="#" method="POST" class="contact-form">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="cta">Kirim Pesan</button>
            </form>
        </section>
        <!-- contact Section end -->

        <!-- icons -->
        <script>
            feather.replace();
        </script>

        <!-- Js -->
        <script src="script.js"></script>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Toko Pupuk &bull; Waktu saat ini: <?php echo date("d-m-Y H:i:s"); ?></p>
        </footer>
</body>

</html>