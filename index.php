<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Shop - Bootstrap</title>

  <!-- Bootstrap CSS (comment out to see plain HTML) -->
  <link href="./dist/styles.css" rel="stylesheet">
  <!-- modal styles moved to styles.css -->
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Neth shopping</a>
      <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.html">🛒 Cart</a></li>
          <li class="nav-item">
            <button class="btn btn-sm btn-outline-light nav-link" id="navLoginBtn" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <!-- HERO -->
  <header class="site-hero text-center text-white py-5">
    <div class="container">
      <h1 class="display-4">Welcome to Neth Shop</h1>
      <p class="lead">Discover premium products for your business and lifestyle</p>
    </div>
  </header>

  <!-- PRODUCTS -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Featured Products</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <a href="./products/product-chair.html"><img src="https://luxestylefurniture.b-cdn.net/wp-content/uploads/2020/04/princess-chair-12.jpg" class="card-img-top" alt="Product 1"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="./products/product-chair.html" class="text-decoration-none text-dark">Elegant Chair</a></h5>
              <p class="card-text">₱1599</p>
              <a href="./products/product-chair.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="product-chair">Add to Cart</a>
            </div>
          </div>
        </div>
        <!-- LOGIN SUCCESS MODAL -->
        <div class="modal fade" id="loginSuccessModal" tabindex="-1" aria-labelledby="loginSuccessModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h5 class="modal-title" id="loginSuccessModalLabel">Signed in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="mb-0">You are now signed in.</p>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Continue</button>
              </div>
            </div>
          </div>
        </div>
            <!-- SIGNUP SUCCESS MODAL -->
            <div class="modal fade" id="signupSuccessModal" tabindex="-1" aria-labelledby="signupSuccessModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header border-0">
                    <h5 class="modal-title" id="signupSuccessModalLabel">Account created</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="mb-0">Your account was created and you are now signed in.</p>
                  </div>
                  <div class="modal-footer border-0">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Continue</button>
                  </div>
                </div>
              </div>
            </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="./products/product-lamp.html"><img src="https://m.media-amazon.com/images/I/614-174yhNL.jpg" class="card-img-top" alt="Product 2"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="./products/product-lamp.html" class="text-decoration-none text-dark">Smart Lamp</a></h5>
              <p class="card-text">₱599</p>
              <a href="./products/product-lamp.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="product-lamp">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="./products/product-desk.html"><img src="https://images-na.ssl-images-amazon.com/images/I/71ARqBJvP2L.jpg" class="card-img-top" alt="Product 3"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="./products/product-desk.html" class="text-decoration-none text-dark">Modern Desk</a></h5>
              <p class="card-text">₱1699</p>
              <a href="./products/product-desk.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="product-desk">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-17.html"><img src="https://mac-center.com/cdn/shop/files/IMG-18067790_m_jpeg_1.jpg?v=1757469315&width=823" class="card-img-top" alt="iPhone 17"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-17.html" class="text-decoration-none text-dark">iPhone 17</a></h5>
              <p class="card-text">₱59,999</p>
              <a href="products/iphone-17.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-17">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-17-pro.html"><img src="https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MGFE4?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=SU45U0x1Zzd6NlVGYWYvUXhvNEtzZ2tuVHYzMERCZURia3c5SzJFOTlPaGdZcXdkeU9XZTMrVDRCWlZ6enByUHlhcTd5b0ljRE5iZzJrb0NudTJaMmc" class="card-img-top" alt="iPhone 17 Pro"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-17-pro.html" class="text-decoration-none text-dark">iPhone 17 Pro</a></h5>
              <p class="card-text">₱69,999</p>
              <a href="products/iphone-17-pro.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-17-pro">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-17-pro-max.html"><img src="https://www.mobileana.com/wp-content/uploads/2025/06/Apple-iPhone-17-Pro-Max-Cosmic-Orange.webp" class="card-img-top" alt="iPhone 17 Pro Max"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-17-pro-max.html" class="text-decoration-none text-dark">iPhone 17 Pro Max</a></h5>
              <p class="card-text">₱79,999</p>
              <a href="products/iphone-17-pro-max.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-17-pro-max">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-17-air.html"><img src="https://external-preview.redd.it/iphone-17-air-could-be-available-in-4-new-color-options-v0-zEiC39zCXnUTXjppWKfX4DxXRnwsbFOgZcHSdW4UepI.jpeg?width=1080&crop=smart&auto=webp&s=123b768744d824e2a09fd1f70f3a84f6ad01bcc2" class="card-img-top" alt="iPhone 17 Air"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-17-air.html" class="text-decoration-none text-dark">iPhone 17 Air</a></h5>
              <p class="card-text">₱75,999</p>
              <a href="products/iphone-17-air.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-17-air">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-16.html"><img src="https://powermaccenter.com/cdn/shop/files/iPhone_16_Ultramarine_PDP_Image_Position_1__en-WW_a8875719-4998-4212-841b-e33a7b589f26.jpg?v=1726235824" class="card-img-top" alt="iPhone 16"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-16.html" class="text-decoration-none text-dark">iPhone 16</a></h5>
              <p class="card-text">₱59,999</p>
              <a href="products/iphone-16.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-16">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-16-pro.html"><img src="https://i0.wp.com/www.icenter-iraq.com/wp-content/uploads/2024/09/iPhone_16_Pro_Desert_Titanium_PDP_Image_Position_1__en-ME-scaled.jpg" class="card-img-top" alt="iPhone 16 Pro"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-16-pro.html" class="text-decoration-none text-dark">iPhone 16 Pro</a></h5>
              <p class="card-text">₱69,999</p>
              <a href="products/iphone-16-pro.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-16-pro">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-16-pro-max.html"><img src="https://istore.ph/cdn/shop/files/iPhone_16_Pro_Max_Black_Titanium_PDP_Image_Position_1a_Black_Titanium_Color__ROSA-EN.jpg?v=1728460045" class="card-img-top" alt="iPhone 16 Pro Max"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-16-pro-max.html" class="text-decoration-none text-dark">iPhone 16 Pro Max</a></h5>
              <p class="card-text">₱79,999</p>
              <a href="products/iphone-16-pro-max.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-16-pro-max">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-15.html"><img src="https://m.media-amazon.com/images/I/71d7rfSl0wL.jpg" class="card-img-top" alt="iPhone 15"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-15.html" class="text-decoration-none text-dark">iPhone 15</a></h5>
              <p class="card-text">₱49,999</p>
              <a href="products/iphone-15.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-15">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-15-pro.html"><img src="https://www.smappliance.com/cdn/shop/files/10176925_69d90ab4-e32e-4451-84cd-e45c31becbf0.jpg?v=1730348965" class="card-img-top" alt="iPhone 15 Pro"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-15-pro.html" class="text-decoration-none text-dark">iPhone 15 Pro</a></h5>
              <p class="card-text">₱59,999</p>
              <a href="products/iphone-15-pro.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-15-pro">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/iphone-15-pro-max.html"><img src="https://www.imagineonline.store/cdn/shop/files/iPhone_15_Pro_Max_Blue_Titanium_PDP_Image_Position-1__en-IN.jpg?v=1694758834&width=1445" class="card-img-top" alt="iPhone 15 Pro Max"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/iphone-15-pro-max.html" class="text-decoration-none text-dark">iPhone 15 Pro Max</a></h5>
              <p class="card-text">₱69,999</p>
              <div class="card-actions mt-2">
                <a href="products/iphone-15-pro-max.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
                <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="iphone-15-pro-max">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/rk61-keyboard.html"><img src="https://ecommerce.datablitz.com.ph/cdn/shop/files/RK61_-1.jpg?v=1723028954" class="card-img-top" alt="RK61 Mechanical Keyboard"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/rk61-keyboard.html" class="text-decoration-none text-dark">RK61 Mechanical Keyboard</a></h5>
              <p class="card-text">₱5,999</p>
              <div class="card-actions mt-2">
                <a href="products/rk61-keyboard.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
                <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="rk61-keyboard">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <a href="products/logitech-g304.html"><img src="https://www.itech.ph/wp-content/uploads/2020/09/LOGITECH-G304-LIGHTSPEED-WIRELESS-GAMING-MOUSE-WHITE.png" class="card-img-top" alt="Logitech G304"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="products/logitech-g304.html" class="text-decoration-none text-dark">Logitech G304 Lightspeed Wireless Gaming Mouse [White]</a></h5>
              <p class="card-text">₱3,999</p>
              <a href="products/logitech-g304.html" class="btn btn-outline-secondary w-100 mb-2">View</a>
              <a href="#" class="btn btn-primary w-100 add-to-cart" data-product-id="logitech-g304">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
     


  </section>

  <!-- FOOTER -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© 2025 E-Shop</p>
  </footer>

</body>
</html>

<!-- CONTACT MODAL -->
<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="loginModalLabel">Sign in to NETH SHOP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="loginForm">
          <div class="mb-3">
            <label for="loginUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="loginUsername" name="username" autocomplete="username" required>
          </div>
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="loginPassword" name="password" autocomplete="current-password" required>
          </div>
        </form>
      </div>
      <div class="modal-footer border-0 d-flex justify-content-between align-items-center">
        <div>
          <a href="#" class="small modal-note" data-bs-toggle="modal" data-bs-target="#signupModal">No account yet?</a>
        </div>
        <div>
          <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
          <button type="submit" form="loginForm" class="btn btn-primary">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SIGNUP MODAL (demo) -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="signupModalLabel">Create an account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="signupForm">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="signupFirstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="signupFirstName" name="firstName" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="signupLastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="signupLastName" name="lastName" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="signupAddress" class="form-label">Address (City / Province / Barangay)</label>
            <input type="text" class="form-control" id="signupAddress" name="address" placeholder="City / Barangay / Province" required>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="signupEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="signupEmail" name="email" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="signupContact" class="form-label">Contact</label>
              <input type="tel" class="form-control" id="signupContact" name="contact" placeholder="0917-xxx-xxxx" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="signupPassword" class="form-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="signupPassword" name="password" required aria-describedby="signupPasswordToggle">
                <button class="btn btn-outline-secondary password-toggle" type="button" id="signupPasswordToggle" data-target="signupPassword" aria-label="Show password">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                </button>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="signupPasswordConfirm" class="form-label">Retype password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="signupPasswordConfirm" name="passwordConfirm" required aria-describedby="signupPasswordConfirmToggle">
                <button class="btn btn-outline-secondary password-toggle" type="button" id="signupPasswordConfirmToggle" data-target="signupPasswordConfirm" aria-label="Show password">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                </button>
              </div>
            </div>
          </div>
            <div class="mb-3">
              <label for="passwordStrength" class="form-label">Password Strength</label>
              <div id="passwordStrength" class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer border-0 d-flex justify-content-between align-items-center">
        <div class="small text-muted">By creating an account you agree to our terms.</div>
        <div>
          <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
          <button type="submit" form="signupForm" class="btn btn-primary">Create account</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- login-ui is loaded below with other scripts -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="contactForm">
          <div class="mb-3">
            <label for="contactName" class="form-label">Name</label>
            <input type="text" class="form-control" id="contactName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="contactEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="contactEmail" name="email" required>
          </div>
          <div class="mb-3">
            <label for="contactMessage" class="form-label">Message</label>
            <textarea class="form-control" id="contactMessage" name="message" rows="4" required></textarea>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- comfirmation modal -->
<!-- jQuery and jQuery Validation -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<div class="modal fade" id="contactSuccessModal" tabindex="-1" aria-labelledby="contactSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content text-center p-3">
      <div class="modal-body">
        <div class="mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-success">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h5 id="contactSuccessModalLabel" class="mb-1">Message sent</h5>
        <p class="small text-muted mb-0">Thanks — we will get back to you shortly.</p>
      </div>
    </div>
  </div>
</div>





<script src="./javascript/toast.js"></script>
<script src="./javascript/contact-modal.js"></script>
<script src="./javascript/cart.js"></script>
<script src="./javascript/products.js"></script>
<script src="./javascript/login-ui.js"></script>



<!-- Product view modal (used by main product grid) -->
<div class="modal fade" id="productViewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row g-3">
          <div class="col-md-6"><img id="pvImage" src="" alt="" class="img-fluid"></div>
          <div class="col-md-6">
            <h4 id="pvTitle"></h4>
            <p id="pvPrice" class="lead"></p>
            <p id="pvDesc"></p>
            <div class="d-flex gap-2 mt-3">
              <button id="pvAddBtn" class="btn btn-primary">Add to Cart</button>
              <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>