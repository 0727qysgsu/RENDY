<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENDY RAMDHANI</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="script.js" defer></script>
</head>

<body>
    <!-- Loader -->
    <div id="loader" class="loader"></div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="brand-logo">
                <i class="fas fa-laptop-code"></i> MyPortfolio
            </a>
            <button class="navbar-toggler" aria-label="Toggle navigation" aria-expanded="false">☰</button>
            <ul class="navbar-menu">
                <li><a href="#about"><i class="fas fa-user"></i> About</a></li>
                <li><a href="#projects"><i class="fas fa-folder-open"></i> Projects</a></li>
                <li><a href="#skills"><i class="fas fa-tools"></i> Skills</a></li>
                <li><a href="#gallery"><i class="fas fa-images"></i> Gallery</a></li>
                <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="section">
        <div class="container">
            <h1>Welcome to My Portfolio</h1>
            <div class="hero-content">
                <div class="gif-container">
                    <img src="assets/bergerak.gif" alt="Gif Description" class="hero-gif">
                </div>
                <h2>Hallo Nama Saya Rendy Ramdhani</h2>
                <p>Gatau sih bikin ini buat apa heheheh.gbutz oh ya boleh deh liat-liat kebawah kalau mau ngasih projetct atau ngasih tantangan boleh dibawah bagian contact (GAK ADA JOKI YA LAGI MALES JOKI TERUS).lumayan buat libur nanti bisa ngoding.oh ya aku juga kepikiran buat bikin website tempat jahit tapi bingung buat databasesnya ada yang bisa tolong buatin hehehhe</p>
            </div>
        </div>
    </section>

    <!-- About Section --> 
    <section id="about" class="section">
        <div class="container">
            <h1><i class="fas fa-user"></i> About Me</h1>
            <p>Bjir Bentar lagi udah mau lulus aja perasaan baru kemarin masuk,baru kemarin juga perasaan masuk BK HEHEHHE.tau ah doa terbaik aja buat semuanya teruma temen-temen kelas.semoga nanti UJIKOM nilainya memuaskan.maaf bingung disini mau nambahin apa tapi kedepannya pasti ini diubah lagi</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h1><i class="fas fa-folder-open"></i>Pernah bikin project</h1>
            <p>(LEBIH KE ARAH KELUH KESAH DULU SIH)</p>
            <br>
            <div class="projects-list">
                <div class="project-card">
                    <p>Html, Css, Js</p>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-js-square"></i>
                    <p>Dulu bikin Portfolio kelas 10/11 lupa, tapi hasilnya jelek banget sama kayak ini, tapi ya lumayan sekarang mah dulu bikin portfolio 1 bulan, sekarang cuma beberapa jam doang.</p>
                </div>
                <div class="project-card">
                    <p>PHP, CSS, JS</p>
                    <i class="fab fa-php"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-js-square"></i>
                    <p>Nah ini nih yang kelas 11, udah mah laptop rusak, ada project harus cepet beres. Masih inget deadline-nya 12 jam lagi, langsung ke warnet main 3 jam buat ngerjain itu doang, tapi hasilnya kurang memuaskan. Tapi sekarang alhamdulillah udah ada laptop, ada beberapa yang dibikin nanti bisa liat di gallery.</p>
                </div>
                <div class="project-card">
                    <p>CodeIgniter 4</p>
                    <i class="fas fa-cogs"></i>
                    <p>INI NIH YANG PALING BIKIN PUSING 7 KELILING PAS PKL, EROR AJA TERUS SAMPE MUAL TIAP HARI EROR TERUS, TAPI GAPAPA NAMANYA JUGA AWAL BELAJAR (Tetap aja suka ada EROR) TAPI UDAH LEBIH NGERTI DARIPADA PAS DULU WAKTU PKL.</p>
                </div>
            </div>
        </div>
    </section>    
    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h1><i class="fas fa-tools"></i> Skills</h1>
            <ul class="skills-list">
                <li><span>HTML</span><div class="skill-bar" data-skill="80"><span class="skill-percentage">0%</span></div></li>
                <li><span>CSS</span><div class="skill-bar" data-skill="70"><span class="skill-percentage">0%</span></div></li>
                <li><span>JavaScript</span><div class="skill-bar" data-skill="50"><span class="skill-percentage">0%</span></div></li>
                <li><span>PHP</span><div class="skill-bar" data-skill="75"><span class="skill-percentage">0%</span></div></li>
                <li><span>MySQL</span><div class="skill-bar" data-skill="50"><span class="skill-percentage">0%</span></div></li>            
            </ul>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section">
        <div class="container">
            <h1><i class="fas fa-images"></i> Gallery</h1>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="assets/Screenshot (81).png" alt="Gallery Image 1">
                    <div class="gallery-text">Ini kasir</div>
                </div>
                <div class="gallery-item">
                    <img src="assets/Screenshot (82).png" alt="Gallery Image 2">
                    <div class="gallery-text">Ini perpustakaan</div>
                </div>
            </div>
        </div>
        <p>(sebenernya masih ada yang lain tapi gatau foldernya dimana jadi yang ada saja oke)</p>
    </section>
    

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h1><i class="fas fa-envelope"></i> Contact</h1>
            <form action="send_email.php" method="POST" class="contact-form" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Nama" required>
                <input type="email" name="email" placeholder=" Email" required>
                <textarea name="message" placeholder="Mau bikin apa " required></textarea>
            
                <label for="technology">pilih pake apa</label>
                <select name="technology" id="technology" required>
                    <option value="">pilih pake apa</option>
                    <option value="html_css_js">HTML, CSS, JS</option>
                    <option value="php_css_js">PHP, CSS, JS</option>
                    <option value="codeigniter_4">CodeIgniter 4</option>
                    <option value="other">Other</option>
                </select>
            
                <!-- Input field for other technology -->
                 <p>disini kirim struktur databases atau fotonya bias ngerti</p>
                <div id="other-technology-div" style="display: none;">
                    <input type="text" name="other_technology" placeholder="Please specify the technology">
                </div>
            
                <input type="file" name="file" accept="image/*, .pdf, .docx" id="file">
                <button type="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
            </form>
            
        </div>
    </section>
    

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 MyPortfolio. All rights reserved.</p>
            <p><i class="fas fa-heart"></i> Made with love.</p>
        </div>
    </footer>

</body>

</html>
