<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="Explore unique handmade paper crafts, clay art, and fabric creations at Sampada's Handicraft. Each product is crafted with tradition and passion." />
  <meta name="keywords"
    content="handicrafts, handmade, paper craft, clay art, fabric art, traditional Indian art, decor" />
  <meta name="author" content="Sampada's Handicraft" />

  <title>Paper-art - Sampada's Handicraft | Handmade Art You’ll Love</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="icon" type="image/png" href="../product images/tablogo.png" />
  <style>
    body {
      background-color: #fdf6f0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      color: #7f5539;
    }

    nav.navbar {
      background: #fff8f0;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      border-radius: 0 0 20px 20px;
      transition: background 0.3s ease;
    }

    .navbar-nav .nav-link {
      padding: 10px 18px;
      margin: 0 6px;
      color: #7f5539 !important;
      font-weight: 500;
      border-radius: 12px;
      transition: background-color 0.3s, color 0.3s;
    }

    .navbar-nav .nav-link:hover {
      background-color: #f2d0a7;
      color: #4a2c1d !important;
    }

    .navbar-nav .nav-link.active {
      background-color: #e6bd8e;
      color: #fff !important;
      font-weight: 600;
    }

    .navbar-brand {
      font-size: 1.6rem;
      color: #a05a2c !important;
      font-weight: 700;
      transition: color 0.3s;
    }

    .navbar-brand:hover {
      color: #7f3b14 !important;
    }

    .category-header {
      text-align: center;
      padding: 3rem 1rem 2rem;
      background: #f5e6d3;
      border-radius: 0 0 40px 40px;
      margin-bottom: 2rem;
      color: #6f4e37;
    }

    .product-card {
      height: 100%;
      display: flex;
      flex-direction: column;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
      background: #fff;
      cursor: pointer;
    }

    .product-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgb(0 0 0 / 0.15);
    }

    .product-img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-bottom: 1px solid #e5cdb3;
    }

    .product-info {
      padding: 1rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .product-title {
      font-weight: 700;
      font-size: 1.3rem;
      margin-bottom: 0.5rem;
    }

    .product-description {
      font-weight: 500;
      height: 90px;
      color: #a07a53;
      font-size: 1rem;
      margin-bottom: 0.5rem;
    }

    .product-price {
      font-weight: 700;
      font-size: 1.1rem;
      color: #4a3c23;
    }

    .add-to-cart {
      background-color: #e6bd8e;
      color: #4a2c1d;
      border: none;
      padding: 0.6rem 1rem;
      font-weight: 600;
      border-radius: 12px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .add-to-cart:hover {
      background-color: #d9a773;
      color: #fff;
    }

    footer {
      text-align: center;
      padding: 1rem 0;
      background: #f5e6d3;
      margin-top: 3rem;
      color: #7f5539;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="../Index.html">
        <img src="../product images/logo.png" alt="Sampada's Handicraft Logo" width="40" height="40" class="me-2"
          style="border-radius: 8px" />
        Sampada's Handicraft
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="../Index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Paper-craft.html">Paper Craft</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Clay-art.html">Clay Art</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Fabric-art.html">Fabric Arts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.html">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.html">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="category-header">
    <h1>Paper Craft</h1>
    <p>
      Explore beautifully crafted paper art pieces that add charm and
      creativity to your space.
    </p>
  </header>

  <main class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper1.png" alt="Flower Poloride " class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Poloride Flower Frame</h2>
            <p class="product-description">
              Simple folded and tricky prepared flower embedded in the
              poloride.
            </p>
            <p class="product-price">$55.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->
      <?php 
      include("../conn.php");

      if(isset($_POST["submit"])){
        
        $product_name = $_POST['product_name'];
        $product_details =$_POST['product_detail'];
        $price=$_POST['price'];

        $sql = 'INSERT INTO `cart` (`name`,`info`,`price`) VALUES (?,?,?)';
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss",$product_name,$product_details,$price );
        $exec = mysqli_stmt_execute($stmt);
      }
      
      ?>
      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper2.png" alt="Origami Lotus " class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Origami Lotus</h2>
            <p class="product-description">
              Delicate folded paper Lotus can used multi-purpose
            </p>
            <p class="product-price">$55.00</p>
            <form action="" method="post">
            <input type="hidden" name="product_name" value="Origami Lotus">
            <input type="hidden" name="product_detail" value="Delicate folded paper Lotus can used multi-purpose">
            <input type="hidden" name="price" value="55.00">


            <button type="submit" name="submit" class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>

            </form>
            

          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper3.png" alt="bouqet" class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Origami Mini bouqet</h2>
            <p class="product-description">
              Cute pink & white flowered combination bouqet in mini size.
            </p>
            <p class="product-price">$55.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper4.png" alt="Bouqet " class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Origami Mini Bouqet</h2>
            <p class="product-description">
              Cute brown, yellow & white flowered combination bouqet in mini size.
            </p>
            <p class="product-price">$55.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper5.png" alt="Gift Card" class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Rose with knot Gift Card</h2>
            <p class="product-description">
              Cute pink, babypink & beige flowered combination bouqet gift card in mini size.
            </p>
            <p class="product-price">$65.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper6.webp" alt="Super Hero" class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Paper Crafted Super Hero</h2>
            <p class="product-description">
              Here is the one for boys the paper caft super Hero.
            </p>
            <p class="product-price">$55.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper7.jpg" alt="fish Tank" class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Decorative Fish Tank</h2>
            <p class="product-description">
              Golden fish in the p
            </p>
            <p class="product-price">$55.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper8.jpg" alt="gift card " class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Gift Card</h2>
            <p class="product-description">
              A Beautiful and lovely gift carf of the loved ones.
            </p>
            <p class="product-price">$55.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper10.jpg" alt="gift card" class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Hearty Heard Gift Card</h2>
            <p class="product-description">
              A big heart having multiple small hearts to express your love for your loved ones.
            </p>
            <p class="product-price">$55.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

      <div class="col-md-4">
        <div class="product-card">
          <img src="../product images/Paper Art/paper1.png" alt="Flower Poloride " class="product-img" />
          <div class="product-info">
            <h2 class="product-title">Poloride Flower Frame</h2>
            <p class="product-description">
              Simple folded and tricky prepared flower embedded in the
              poloride.
            </p>
            <p class="product-price">$55.00</p>
            <button class="btn btn-outline-primary w-100 add-to-cart" data-title="Multicolor Handwoven Cotton Fabric"
              data-price="55.00">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
      <!-- Add more products here if needed -->

    </div>
  </main>

  <footer class="mt-5 pt-5 pb-4 text-light" style="background-color: #7f5539">
    <div class="container">
      <div class="row">
        <!-- About Section -->
        <div class="col-md-4 mb-4">
          <h5 class="-uppercase mb-3">About Us</h5>
          <p style="color: #fdf6f0">
            Sampada's Handicraft brings you beautiful, handcrafted treasures
            made with love. We specialize in paper crafts, clay art, and
            fabric creations rooted in traditional techniques with a modern
            touch.
          </p>
        </div>

        <!-- Quick Links -->
        <div class="col-md-2 mb-4">
          <h5 class="text-uppercase mb-3">Quick Links</h5>
          <ul class="list-unstyled" style="color: #fdf6f0">
            <li>
              <a href="Index.html" class="text-decoration-none text-light">Home</a>
            </li>
            <li>
              <a href="pages/Paper-craft.html" class="text-decoration-none text-light">Paper Craft</a>
            </li>
            <li>
              <a href="pages/Clay-art.html" class="text-decoration-none text-light">Clay Art</a>
            </li>
            <li>
              <a href="pages/Fabric-art.html" class="text-decoration-none text-light">Fabric Arts</a>
            </li>
            <li>
              <a href="pages/cart.html" class="text-decoration-none text-light">Cart</a>
            </li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="col-md-3 mb-4">
          <h5 class="text-uppercase mb-3">Contact</h5>
          <p style="color: #fdf6f0">
            📍 Nanded, Maharashtra, India<br />
            📞 +91-98765-43210<br />
            📧
            <a href="mailto:contact@sampadashandicraft.com" class="text-light">contact@sampadashandicraft.com</a>
          </p>
        </div>

        <!-- Social Media -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold text-uppercase mb-3">Follow Us</h5>
          <a href="#" class="text-light me-3" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-light me-3" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-light me-3" aria-label="Pinterest"><i class="bi bi-pinterest"></i></a>
          <a href="#" class="text-light" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <hr style="border-color: #f2d0a7" />

      <div class="text-center" style="color: #fdf6f0">
        &copy; 2025 Sampada's Handicraft. All rights reserved.
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>