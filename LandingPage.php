<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Buana Kursus Online</title>
    <link rel="stylesheet" href="public/css/landingpage.css">
</head>
<body>
    <body>
    <header class="main-header">
        <nav class="navbar">
        <div class="logo">
    <img src="public/img/logo_KB.png" alt="Logo MyApp" width="150">
</div>
<form class="search-form" action="search.php" method="GET">
        <input type="text" name="query" placeholder="Search..." required>
        <button type="submit">Search</button>
    </form>

            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="src/views/user_list.php">Users List</a></li>
                    <li><a href="src/controller/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="public/login.php">Login</a></li>
                    <li><a href="public/index.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
            <div class="hero-section">
                <h1>Selamat Datang di Kelas Buana</h1>
                <p>Ayo Terhubung Dengan Seluruh Dunia Dengan Belajar Bahasa Inggris!</p><br>
                <a href="public/index.php" class="btn-primary">Get Started</a>
            </div>
        </header>
    
        <section class="features-section">
            <h2>Features</h2>
            <div class="features">
                <div class="feature-item">
                    <img src="https://via.placeholder.com/100" alt="Icon Register">
                    <h3>Register Users</h3>
                    <p>Quick and easy user registration system to manage your users efficiently.</p>
                </div>
                <div class="feature-item">
                    <img src="https://via.placeholder.com/100" alt="Icon View">
                    <h3>View Users</h3>
                    <p>Easily view all registered users in a simple and organized list.</p>
                </div>
                <div class="feature-item">
                    <img src="https://via.placeholder.com/100" alt="Icon Manage">
                    <h3>Edit & Delete Users</h3>
                    <p>Manage users with the ability to update or delete user data when necessary.</p>
                </div>
            </div>
        </section>
    
        <section class="recommended-section">
            <h2>Sangat Direkomendasikan Untuk:</h2>
            <ul>
                <li><img src="public/img/gambar-ilustrasi-siswa.png" alt="Icon Pelajar">Pelajar yang ingin meningkatkan kemampuan bahasa Inggris</li>
                <li><img src="public/img/profesional.png" alt="Icon Profesional">Profesional yang membutuhkan kemampuan bahasa Inggris untuk karir</li>
                <li><img src="public/img/orang tua.jpg" alt="Icon Orang Tua">Orang tua yang ingin memberikan bekal bahasa Inggris untuk anak-anak mereka</li>
                <li><img src="public/img/pengusaha.jpg" alt="Icon Pengusaha">Pengusaha yang ingin memperluas bisnis ke pasar internasional</li>
            </ul>
        </section>
    
        <section class="reviews-section">
            <h2>Ulasan</h2>
            <div class="review">
                <img src="public/img/rv1.jpg" alt="Reviewer 1">
                <div class="rating">
            ★★★★☆
        </div>
                <p>"Platform ini benar-benar membantu saya meningkatkan kemampuan bahasa Inggris dengan cepat!"</p>
                <span>- Anita, Mahasiswa</span>
            </div>
            <div class="review">
                <img src="public/img/rv2.jpg" alt="Reviewer 2">
                <div class="rating">
            ★★★★★
        </div>
                <p>"Sangat mudah digunakan, dan fitur manajemen pengguna sangat berguna untuk tim saya."</p>
                <span>- Budi, Manajer Proyek</span>
            </div>
            <div class="review">
                <img src="public/img/rv3.jpg" alt="Reviewer 3">
                <div class="rating">
            ★★★★☆
        </div>
                <p>"Program ini membuat belajar bahasa Inggris menjadi menyenangkan dan efektif!"</p>
                <span>- Carli, Pengusaha</span>
            </div>
        </section>
    
        <section class="benefits-section">
            <h2>Keuntungan Menggunakan Kelas Buana</h2>
            <ul>
                <li><img src="public/img/24.jpg" alt="Icon Akses 24/7"><strong>Akses 24/7:</strong>Belajar kapan saja dan di mana saja</li>
                <li><img src="public/img/qlt.png" alt="Icon Konten Berkualitas"><strong>Konten Berkualitas:</strong> Materi yang disusun oleh para ahli</li>
                <li><img src="public/img/rp.jpg" alt="Icon Harga Terjangkau"><strong>Harga Terjangkau:</strong> Dapatkan pembelajaran dengan harga kompetitif</li>
                <li><img src="public/img/dp.png" alt="Icon Dukungan Pelanggan"><strong>Dukungan Pelanggan:</strong> Tim kami siap membantu Anda kapan saja</li>
            </ul>
        </section>
    
        <footer class="main-footer">
            <p>&copy; 2024 Kelas Buana Team. All rights reserved.</p>
        </footer>
</body>
</html>
