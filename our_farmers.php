<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Farmers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #e8f5e9, #ffffff);
      font-family: 'Poppins', sans-serif;
    }
    /* Navbar */
    .navbar {
      background-color: #2e7d32 !important;
    }
    .navbar-brand, .nav-link {
      color: white !important;
      font-weight: 500;
    }
    .nav-link:hover {
      color: #c8e6c9 !important;
    }

    /* Header */
    .header-section {
      text-align: center;
      padding: 60px 20px;
      background: url('images/farm-bg.jpg') no-repeat center/cover;
      color: white;
      position: relative;
    }
    .header-section::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
    }
    .header-section h1 {
      position: relative;
      font-size: 3rem;
      font-weight: 700;
      z-index: 2;
    }
    .header-section p {
      position: relative;
      z-index: 2;
      font-size: 1.2rem;
    }

    .our-farmers-section {
  background: linear-gradient(180deg, #f8fff4 0%, #e8f5e9 100%);
}

.farmer-card {
  transition: all 0.3s ease;
}

.farmer-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.farmer-card img {
  height: 250px;
  object-fit: cover;
}

.farmer-card .card-body {
  background: #fff;
}

.btn-outline-success:hover {
  background-color: #198754;
  color: white;
}

    footer {
      background-color: #2e7d32;
      color: white;
      text-align: center;
      padding: 15px 0;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">🌾 Farmer Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="our_farmers.html">Our Farmers</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<section class="header-section">
  <h1>Meet Our Farmers</h1>
  <p>Dedicated. Skilled. Passionate about delivering the freshest produce to you.</p>
</section>

<!-- Farmer Cards -->
<!-- 🌾 Our Farmers Section -->
<section class="our-farmers-section py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4 fw-bold text-success">🌿 Our Farmers 🌿</h2>
    <p class="text-muted mb-5">
      Meet the dedicated farmers who bring you fresh, organic, and locally sourced produce every day.
    </p>

    <div class="row g-4">

      <!-- Farmer 1 -->
      <div class="col-md-4">
        <div class="card farmer-card shadow-lg border-0 rounded-4">
          <img src="images/farmer1.jpg" class="card-img-top rounded-top-4" alt="Farmer 1">
          <div class="card-body">
            <h5 class="card-title text-success fw-bold">Ramesh Kumar</h5>
            <p class="text-muted mb-1"><i class="fa fa-map-marker"></i> Punjab</p>
            <p>Specialty: Organic Wheat & Rice</p>
            <button class="btn btn-outline-success btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#farmer1Modal">Read More</button>
          </div>
        </div>
      </div>

      <!-- Farmer 2 -->
      <div class="col-md-4">
        <div class="card farmer-card shadow-lg border-0 rounded-4">
          <img src="images/farmer2.jpg" class="card-img-top rounded-top-4" alt="Farmer 2">
          <div class="card-body">
            <h5 class="card-title text-success fw-bold">Sunita Devi</h5>
            <p class="text-muted mb-1"><i class="fa fa-map-marker"></i> Maharashtra</p>
            <p>Specialty: Fresh Vegetables & Herbs</p>
            <button class="btn btn-outline-success btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#farmer2Modal">Read More</button>
          </div>
        </div>
      </div>

      <!-- Farmer 3 -->
      <div class="col-md-4">
        <div class="card farmer-card shadow-lg border-0 rounded-4">
          <img src="images/farmer3.jpg" class="card-img-top rounded-top-4" alt="Farmer 3">
          <div class="card-body">
            <h5 class="card-title text-success fw-bold">Arjun Patel</h5>
            <p class="text-muted mb-1"><i class="fa fa-map-marker"></i> Gujarat</p>
            <p>Specialty: Fruits & Spices</p>
            <button class="btn btn-outline-success btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#farmer3Modal">Read More</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 🧑‍🌾 Farmer Detail Modals -->
<!-- Farmer 1 Modal -->
<div class="modal fade" id="farmer1Modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-success text-white rounded-top-4">
        <h5 class="modal-title">Ramesh Kumar</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-start">
        <p>Ramesh Kumar has been practicing sustainable farming for over 15 years in Punjab. His organic methods ensure the best quality grains while preserving soil fertility and biodiversity.</p>
      </div>
    </div>
  </div>
</div>

<!-- Farmer 2 Modal -->
<div class="modal fade" id="farmer2Modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-success text-white rounded-top-4">
        <h5 class="modal-title">Sunita Devi</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-start">
        <p>Sunita Devi from Maharashtra is known for cultivating pesticide-free vegetables. She empowers local women through cooperative farming initiatives that promote eco-friendly agriculture.</p>
      </div>
    </div>
  </div>
</div>

<!-- Farmer 3 Modal -->
<div class="modal fade" id="farmer3Modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-success text-white rounded-top-4">
        <h5 class="modal-title">Arjun Patel</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-start">
        <p>Arjun Patel specializes in growing tropical fruits and aromatic spices in Gujarat. His modern irrigation techniques and natural fertilizers set an example for sustainable farming.</p>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer>
  <p>© 2025 Farmer Portal | Empowering Farmers, Feeding the Nation 🌱</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
