<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
           <img src="<?= url('img/logo.jpg') ?>" style="height:80px;">
        </a>

        <ul class="nav col-6 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?= route('home') ?>" class="nav-link px-2 link-secondary">Home</a></li>
         
        </ul>

        <ul class="nav col-6 col-lg-auto  mb-md-0" style="display: contents;">
           @guest
           <li><a href="<?= route('login') ?>" class="nav-link px-2 link-dark">Login</a></li>
           <li><a href="<?= route('register') ?>" class="nav-link px-2 link-dark">Register</a></li>
           @endguest

           @auth
           <li><a href="<?= route('dashboard') ?>" class="nav-link px-2 link-dark">Hello, <?= @session('userInfo')->name ?></a></li>
           <li><a href="<?= route('logout') ?>" class="nav-link px-2 link-dark">Logout</a></li>
           @endauth

         </ul> 
      </div>
    </div>
  </header>


