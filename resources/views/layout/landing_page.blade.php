<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BlueCare - Sistem Manajemen Kesehatan Digital</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=fallback">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  
  <style>
    /* General Reset and Typography */
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f8fafc;
      margin: 0;
      padding: 0;
      min-height: 100vh;
    }

    .main-header {
      background: linear-gradient(90deg, #1e3a8a 0%, #3b82f6 100%);
      padding: 20px 0;
      color: white;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
    }
    
    .brand-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-text {
      font-size: 24px;
      font-weight: 700;
      color: white;
      text-decoration: none;
    }

    .nav-links {
      display: flex;
      gap: 30px;
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.9);
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: white;
      text-decoration: none;
    }

    /* Hero Section */
    .hero-section {
      display: flex;
      padding: 80px 0;
      align-items: center;
    }

    .hero-content {
      flex: 1;
      padding-right: 40px;
    }

    .hero-image {
      flex: 1;
      text-align: center;
    }

    .hero-title {
      font-size: 42px;
      font-weight: 700;
      color: #1e3a8a;
      margin-bottom: 20px;
      line-height: 1.2;
    }

    .hero-subtitle {
      font-size: 18px;
      color: #64748b;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    /* Buttons */
    .btn {
      display: inline-block;
      padding: 14px 32px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-primary {
      background-color: #2563eb;
      color: white;
      border: none;
    }

    .btn-primary:hover {
      background-color: #1d4ed8;
      transform: translateY(-2px);
    }

    .btn-secondary {
      background-color: white;
      color: #2563eb;
      border: 2px solid #2563eb;
      margin-left: 15px;
    }

    .btn-secondary:hover {
      background-color: rgba(37, 99, 235, 0.1);
      transform: translateY(-2px);
    }

    /* Features Section */
    .features-section {
      background-color: white;
      padding: 80px 0;
      text-align: center;
    }

    .section-title {
      font-size: 32px;
      font-weight: 700;
      color: #1e3a8a;
      margin-bottom: 50px;
      position: relative;
      display: inline-block;
    }

    .section-title:after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 4px;
      background-color: #3b82f6;
      border-radius: 2px;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      margin-top: 40px;
    }

    .feature-card {
      background-color: #f8fafc;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
      font-size: 40px;
      color: #3b82f6;
      margin-bottom: 20px;
    }

    .feature-title {
      font-size: 20px;
      font-weight: 600;
      color: #1e3a8a;
      margin-bottom: 15px;
    }

    .feature-desc {
      color: #64748b;
      font-size: 15px;
      line-height: 1.6;
    }

    /* Footer */
    .footer {
      background-color: #1e293b;
      color: white;
      padding: 50px 0 20px;
    }

    .footer-content {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 40px;
      margin-bottom: 40px;
    }

    .footer-logo {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .footer-desc {
      color: rgba(255, 255, 255, 0.7);
      font-size: 15px;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .footer-social {
      display: flex;
      gap: 15px;
    }

    .footer-social a {
      color: white;
      background-color: rgba(255, 255, 255, 0.1);
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .footer-social a:hover {
      background-color: #3b82f6;
      transform: translateY(-3px);
    }

    /* Footer Links */
    .footer-links-col {
      margin-bottom: 20px;
    }

    .footer-title {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 20px;
      position: relative;
    }

    .footer-title:after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 30px;
      height: 3px;
      background-color: #3b82f6;
    }

    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-links li {
      margin-bottom: 12px;
    }

    .footer-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      color: white;
      padding-left: 5px;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 20px;
      text-align: center;
      color: rgba(255, 255, 255, 0.5);
      font-size: 14px;
    }

    /* Responsive */
    @media (max-width: 991px) {
      .hero-section {
        flex-direction: column;
        text-align: center;
      }

      .hero-content {
        padding-right: 0;
        margin-bottom: 40px;
      }

      .features-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .footer-content {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        gap: 15px;
      }

      .nav-links {
        gap: 15px;
      }

      .features-grid {
        grid-template-columns: 1fr;
      }

      .footer-content {
        grid-template-columns: 1fr;
        gap: 30px;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="main-header">
    <div class="container">
      <div class="navbar">
        <div class="brand-logo">
          <a href="#" class="logo-text"><i class="fas fa-heartbeat"></i> BlueCare</a>
        </div>
        
        <div class="nav-links">
          <a href="#" class="nav-link">Beranda</a>
          <a href="#" class="nav-link">Fitur</a>
          <a href="#" class="nav-link">Tentang Kami</a>
          <a href="#" class="nav-link">Kontak</a>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">Kelola Kesehatan Anda dengan Teknologi Terkini</h1>
        <p class="hero-subtitle">BlueCare menyediakan platform digital komprehensif untuk memantau, mengelola, dan meningkatkan kesehatan Anda dengan fitur canggih dan antarmuka yang mudah digunakan.</p>
        
        <div class="hero-buttons">
          <form action="{{ route('login') }}" method="GET" style="display: inline;">
            <button type="submit" class="btn btn-primary">Masuk Sekarang</button>
          </form>
          
          <form action="{{ route('register') }}" method="GET" style="display: inline;">
            <button type="submit" class="btn btn-secondary">Buat Akun</button>
          </form>
        </div>
      </div>
      
      <div class="hero-image">
        <img src="/api/placeholder/500/400" alt="Healthcare Digital Platform" />
      </div>
    </div>
  </section>
  
  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <h2 class="section-title">Fitur Unggulan Kami</h2>
      
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3 class="feature-title">Monitoring Kesehatan Digital</h3>
          <p class="feature-desc">Pantau vital sign, aktivitas fisik, dan kondisi kesehatan secara real-time dengan visualisasi data yang interaktif dan mudah dipahami.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-pills"></i>
          </div>
          <h3 class="feature-title">Pengingat Obat & Perawatan</h3>
          <p class="feature-desc">Dapatkan notifikasi untuk jadwal minum obat, pemeriksaan kesehatan, dan tindakan medis lainnya agar tidak terlewatkan.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-user-md"></i>
          </div>
          <h3 class="feature-title">Konsultasi Dokter Online</h3>
          <p class="feature-desc">Hubungi dokter spesialis terbaik kapan saja melalui chat, audio, atau video call untuk konsultasi medis yang nyaman dan cepat.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-file-medical-alt"></i>
          </div>
          <h3 class="feature-title">Rekam Medis Digital</h3>
          <p class="feature-desc">Simpan dan akses riwayat kesehatan, hasil laboratorium, dan dokumen medis lainnya dalam format digital yang aman dan terorganisir.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-hospital"></i>
          </div>
          <h3 class="feature-title">Jaringan Fasilitas Kesehatan</h3>
          <p class="feature-desc">Akses jaringan rumah sakit, klinik, dan fasilitas kesehatan lainnya dengan kemudahan pemesanan jadwal dan informasi lengkap.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 class="feature-title">Keamanan Data Terjamin</h3>
          <p class="feature-desc">Data kesehatan Anda dilindungi dengan sistem keamanan enkripsi tingkat tinggi sesuai standar internasional untuk privasi Anda.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">BlueCare</div>
        <div class="footer-desc">
          BlueCare adalah platform digital untuk memantau dan mengelola kesehatan dengan fitur-fitur canggih dan mudah digunakan.
        </div>
        
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      
      <div class="footer-links">
        <div class="footer-links-col">
          <h4 class="footer-title">Navigasi</h4>
          <ul class="footer-links">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Fitur</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>
        <div class="footer-links-col">
          <h4 class="footer-title">Legal</h4>
          <ul class="footer-links">
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
          </ul>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 BlueCare. Semua hak dilindungi.</p>
      </div>
    </div>
  </footer>
</body>
</html>
