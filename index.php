<?php
session_start();
require 'db.php';

// fetch products from DB
$result = $conn->query("SELECT * FROM products ORDER BY id DESC");
?>






<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>SabjiMandi</title>

<style>


</style>




<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/farmerstyle.css">
<link rel="stylesheet" type="text/css" href="css/hsection.css">
<link rel="stylesheet" type="text/css" href="css/product.css">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

     <!-- bootystrap java script---->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

    <script src="https://kit.fontawesome.com/67f58695eb.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      

<meta name="keywords" content="online Vegetables and fruits,online Vegetables and fruits chennai,online Vegetables and fruits shopping,online Vegetables and fruits store,online supermarket,Vegetables and fruits chennai, buy Vegetables and fruits online,online Vegetables and fruits purchase,online vegetable store"/>
<meta name="description" content="Buy fresh Vegetables and fruits at online store of odisha-India. Online Supermarket includes fresh vegetable,fruits,greens."/>
</head>
<body>



<!--                   Navbar           --------------------------------------------------------------------------------- -->

<?php include "navbar.php"; ?>


<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>






    <!-- 🌿 Hero Section -->
<section class="hero-section d-flex align-items-center text-center text-white" style="background-image: url('img/slide1.jpg');">
  <div class="container">
    <h1 class="display-3 fw-bold animate-fade-in">Fresh Vegetables Daily 🌱</h1>
    <p class="lead mb-4 animate-fade-in-delay">Delivered directly to your doorstep</p>
    <a href="#products" class="btn btn-success btn-lg px-4 py-2 animate-fade-in-delay">Shop Now</a>
  </div>
</section>





<!---------------------------------end----------------------------------------->




<!-- ================= Vegetables ================= -->
<div class="container mt-5" id="vegetables">
  <h2 class="text-center mb-5 fw-bold text-success">🥕 Fresh Vegetables 🥕</h2>
  <div class="row">

  <?php 
  $veg = $conn->query("SELECT * FROM products WHERE category='Vegetable' ORDER BY id DESC");
  while($p = $veg->fetch_assoc()): ?>
  
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-lg border-0">
        <?php if(!empty($p['image']) && file_exists('uploads/'.$p['image'])): ?>
          <img src="uploads/<?php echo htmlspecialchars($p['image']); ?>" class="card-img-top" alt="">
        <?php else: ?>
          <img src="https://via.placeholder.com/400x300?text=No+Image" class="card-img-top" alt="">
        <?php endif; ?>

        <div class="card-body text-center">
          <h5 class="card-title fw-bold text-dark"><?php echo htmlspecialchars($p['name']); ?></h5>
          <p class="text-success fs-5 mb-3"><strong>₹ <?php echo number_format($p['price'],2); ?></strong></p>
          
          <form method="post" action="add_to_cart.php">
            <input type="hidden" name="product_id" value="<?php echo $p['id']; ?>">

            <div class="input-group justify-content-center mb-3" style="max-width: 180px; margin: 0 auto;">
              <input type="number" name="qty" value="0" min="0" class="form-control text-center border-success">
              <button class="btn btn-success" type="submit">Add to Cart</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  <?php endwhile; ?>
  </div>
</div>


<!-- ================= Fruits ================= -->
<div class="container mt-5" id="fruits">
  <h2 class="text-center mb-5 fw-bold text-danger">🍎 Fresh Fruits 🍎</h2>
  <div class="row">

  <?php 
  $fruit = $conn->query("SELECT * FROM products WHERE category='Fruit' ORDER BY id DESC");
  while($p = $fruit->fetch_assoc()): ?>
  
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-lg border-0">
        <?php if(!empty($p['image']) && file_exists('uploads/'.$p['image'])): ?>
          <img src="uploads/<?php echo htmlspecialchars($p['image']); ?>" class="card-img-top" alt="">
        <?php else: ?>
          <img src="https://via.placeholder.com/400x300?text=No+Image" class="card-img-top" alt="">
        <?php endif; ?>

        <div class="card-body text-center">
          <h5 class="card-title fw-bold text-dark"><?php echo htmlspecialchars($p['name']); ?></h5>
          <p class="text-danger fs-5 mb-3"><strong>₹ <?php echo number_format($p['price'],2); ?></strong></p>
          
          <form method="post" action="add_to_cart.php">
            <input type="hidden" name="product_id" value="<?php echo $p['id']; ?>">

            <div class="input-group justify-content-center mb-3" style="max-width: 180px; margin: 0 auto;">
              <input type="number" name="qty" value="0" min="0" class="form-control text-center border-danger">
              <button class="btn btn-danger" type="submit">Add to Cart</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  <?php endwhile; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<button id="top" class="top" title="Go to top" onclick="pageup();">Top</button>



<!-------farmer--------------->


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
          <img src="img/farmer/farmer2.jpg" class="card-img-top rounded-top-4" alt="Farmer 1">
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
          <img src="img/farmer/farmer1.jpeg" class="card-img-top rounded-top-4" alt="Farmer 2">
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
          <img src="img/farmer/farmer3.jpg"" class="card-img-top rounded-top-4" alt="Farmer 3">
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

<!-----------store location ------->


<section class="container my-5">
  <h2 class="text-center mb-4 text-success">📍 Our Store Locations</h2>

  <div class="row g-4">

    <!-- Location 1 -->
    <div class="col-md-6">
      <div class="card shadow border-0">
        <div class="card-body p-0">

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.11046901863!2d-122.41941558468137!3d37.77492927975902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064cb0f123b%3A0x6d9dfca2db7a1bf8!2sCity%20Vegetable%20Market!5e0!3m2!1sen!2sin!4v1708697449876"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>

        </div>
      </div>

      <div class="text-center mt-2">
        <h5 class="fw-bold">SabjiMandi Store - Main Market</h5>
        <p class="text-muted mb-1">Main Market, Near Bus Stand</p>
        <p class="text-muted">City, State - Pincode</p>
      </div>
    </div>

    <!-- Location 2 -->
    <div class="col-md-6">
      <div class="card shadow border-0">
        <div class="card-body p-0">

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.11046901863!2d-122.41941558468137!3d37.77492927975902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064cb0f123b%3A0x6d9dfca2db7a1bf8!2sCity%20Vegetable%20Market!5e0!3m2!1sen!2sin!4v1708697449876"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>

        </div>
      </div>

      <div class="text-center mt-2">
        <h5 class="fw-bold">SabjiMandi Store - Branch</h5>
        <p class="text-muted mb-1">Near Railway Station</p>
        <p class="text-muted">City, State - Pincode</p>
      </div>
    </div>

  </div>
</section>



<section class="container my-5">
  <h2 class="text-center mb-4 text-success">✨ Our Facilities</h2>

  <div class="row g-4">

    <!-- Facility 1 -->
    <div class="col-md-4">
      <div class="card text-center shadow border-0 p-4 h-100">
        <div class="display-5 mb-3">🚚</div>
        <h5 class="fw-bold">Fast Delivery</h5>
        <p class="text-muted">
          Get fresh vegetables delivered to your doorstep quickly and efficiently.
        </p>
      </div>
    </div>

    <!-- Facility 2 -->
    <div class="col-md-4">
      <div class="card text-center shadow border-0 p-4 h-100">
        <div class="display-5 mb-3">🛡️</div>
        <h5 class="fw-bold">Quality Assurance</h5>
        <p class="text-muted">
          We ensure all produce is fresh and directly sourced from farmers.
        </p>
      </div>
    </div>

    <!-- Facility 3 -->
    <div class="col-md-4">
      <div class="card text-center shadow border-0 p-4 h-100">
        <div class="display-5 mb-3">💰</div>
        <h5 class="fw-bold">Affordable Prices</h5>
        <p class="text-muted">
          No middlemen — best prices and value for your money.
        </p>
      </div>
    </div>

    <!-- Facility 4 -->
    <div class="col-md-4">
      <div class="card text-center shadow border-0 p-4 h-100">
        <div class="display-5 mb-3">📦</div>
        <h5 class="fw-bold">Easy Order & Pickup</h5>
        <p class="text-muted">
          Order online and pick up easily from your nearest store location.
        </p>
      </div>
    </div>

    <!-- Facility 5 -->
    <div class="col-md-4">
      <div class="card text-center shadow border-0 p-4 h-100">
        <div class="display-5 mb-3">🌾</div>
        <h5 class="fw-bold">Direct from Farmers</h5>
        <p class="text-muted">
          We work directly with farmers to support their livelihood.
        </p>
      </div>
    </div>

    <!-- Facility 6 -->
    <div class="col-md-4">
      <div class="card text-center shadow border-0 p-4 h-100">
        <div class="display-5 mb-3">🛒</div>
        <h5 class="fw-bold">Online Shopping</h5>
        <p class="text-muted">
          Shop from home — simple, fast, and convenient ordering process.
        </p>
      </div>
    </div>

  </div>
</section>


    <!---footer part--->


<footer class="footer-fresh mt-5">
  <div class="footer-wave"></div>

  <div class="container footer-content py-5">
    <div class="row gy-4">

      <!-- Brand & tagline -->
      <div class="col-lg-4 col-md-6">
        <h2 class="brand-logo">Sabji<span>Mandi</span></h2>
        <p class="brand-text">
          Fresh farm produce delivered directly from local farmers.
          Experience purity, trust and quality — every single day.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-heading">Quick Links</h5>
        <ul class="footer-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Fresh Vegetables</a></li>
          <li><a href="#">Seasonal Fruits</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Customer Support</h5>
        <ul class="footer-menu">
          <li><a href="#">Track Order</a></li>
          <li><a href="#">Return & Refund</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Stay Updated</h5>
        <p class="newsletter-text">Get deals & fresh stock alerts</p>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter email..." required>
          <button type="submit"><i class="fa fa-paper-plane"></i></button>
        </form>

        <div class="footer-social mt-3">
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-end text-center py-3">
    &copy; 2025 SabjiMandi — Crafted with ❤️ by <strong>Balaram</strong>
  </div>
</footer>




  <!-- ================= FOOTER STARTS ================= -->




<!-- FontAwesome (if not loaded already) -->



   
      <script>
     


    //pageup.....

    var mybutton = document.getElementById('top');
   
    window.onscroll = function() 
    {scrollFunction()};

function scrollFunction()
 {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function pageup()
 {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>



</body>
</html>
