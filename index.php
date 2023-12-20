<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleHeader.css">
  <link rel="stylesheet" href="css/styleMain.css">
  <title>Home</title>
</head>

<body>
  <div class="register_bg">
    <img src="images/Cancel.png" alt="">
    <div class="page">
      <div class="signup_page">
        <h1>Create Account</h1>
        <form action="">
          <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
          </div>
          <div class="email">
            <label for="regemail">E-Mail</label>
            <input type="email" name="email" id="regemail">
          </div>
          <div class="password">
            <label for="regpassword">Password</label>
            <input type="password" name="password" id="regpassword">
          </div>
          <input type="submit" value="SIGN UP">
        </form>
        <!-- <div class="or"></div> -->
        <div class="medias">
          <img src="images/Facebook.png" alt="">
          <img src="images/LinkedIn.png" alt="">
          <img src="images/Google.png" alt="">
        </div>
        <p>Already a user? <strong class="switch-to-login">Log in</strong></p>

      </div>

      <div class="login_page">
        <h1>Sign In</h1>
        <form action="">
          <div class="email">
            <label for="email">User Name</label>
            <input type="email" name="email" id="email">
          </div>
          <div class="password">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
          </div>
          <input type="submit" value="LOG IN">
        </form>
        <!-- <div class="or"></div> -->
        <div class="medias">
          <img src="images/Facebook.png" alt="">
          <img src="images/LinkedIn.png" alt="">
          <img src="images/Google.png" alt="">
        </div>
        <p>Don't have an account? <strong class="switch-to-signup">Sign Up</strong></p>

      </div>


    </div>

  </div>




  <!-- ------------------------------------------------------------------------------- -->

  <header>
    <nav>
      <div class="logo">
        Nexus
      </div>
      <div class="right">
        <ul class="tabs">
          <li><a href="" class="home">Home</a></li>
          <li><a href="">Product</a></li>
          <li><a href="">Service</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
        <div class="account">
          <button onclick="display()">LOG-IN</button>
          <button>SIGN-UP</button>
        </div>

      </div>
    </nav>
  </header>
  <main>
    <section class="intro">
      <div class="intro_contents">
        <div class="introduction">
          <h1>Welcome to <br>
            Nexus Auto Spare Parts.</h1>
          <p>
            Where Every Turn Leads to Reliability and Precision. <br>Find Your Perfect Fit Today.
          </p>
          <button class="shop_now">
            SHOP NOW
          </button>
        </div>
      </div>
      <div class="image">
        <div>
          <!-- <img src="images/ezgif-2-94d6e7ecd4-removebg-preview.png" alt=""> -->
        </div>
      </div>
    </section>

    <section class="search_section">
      <div class="catagories">
        <p>All Catagories</p>
        <span></span>
        <ul class="catagory_lists">
          <li>Parts</li>
          <li>Parts</li>
          <li>Parts</li>
          <li>Parts</li>
          <li>Parts</li>
        </ul>
      </div>
      <div class="search_bar">
        <input type="text" name="" id="" placeholder="Search">
        <button>Search</button>
      </div>
    </section>


    <section class="discount_section">
      <div class="slide">
        <div class="discount_collection">

          <?php function display_discount($num)
          { ?>
            <div class="discounts <?php echo "discount$num" ?>">
              <div class="discount_descriptions">
                <h1>Up to 30% off</h1>
                <p>Hello</p>
              </div>
            </div>
          <?php }
          for ($i = 1; $i <= 6; $i++) {
            display_discount($i);
          }
          ?>


        </div>
      </div>
    </section>

    <section class="product_home">
      <?php function display($class, $price, $part, $description)
      { ?>
        <div class="products">
          <div class="product_content <?php echo $class; ?>">
            <div class="product_img"></div>
            <div class="product_description">
              <h5>$ <?php echo $price; ?></h5>
              <h1><?php echo $part; ?></h1>
              <p><?php echo $description; ?></p>
            </div>
            <div class="buttons">
              <a href="">Add To Cart</a>
              <a href="">Detail</a>
            </div>
          </div>
        </div>
      <?php }

      include 'PHP/products.php';
      $current = [];
      foreach ($parts as $val) {
        array_push($current, $val);
      }

      function picker(&$arr, $i)
      {
        $pickedIndex = array_rand($arr, 1);
        $pickedPrice = $arr[$pickedIndex]['price'];
        $pickedPart = $arr[$pickedIndex]['part'];
        $pickedDescription = $arr[$pickedIndex]['info'];
        $spliced = array_splice($arr, $pickedIndex, 1);
        display("content$i", $pickedPrice, $pickedPart, $pickedDescription);
      }


      for ($i = 1; $i <= 9 && $i <= sizeof($parts); $i++) {
        picker($current, $i);
      }

      ?>

    </section>
  </main>

</body>
<script>
  // let tabs = document.querySelector('.tabs');
  // let links = tabs.querySelectorAll('li');

  // console.log(links)

  // links.forEach(link=>{
  //   link.addEventListener('click', ()=>{
  //     removeActiveClasses();
  //     link.classList.add('active');
  //   })
  // })

  // function removeActiveClasses() {
  //   links.forEach(link => {
  //       link.classList.remove('active')
  //   })
  // }
</script>
<script src="/script/scriptHome.js <?= filemtime('scriptHome.js') ?>" defer></script>
<script>
  const login = document.querySelector('.login'),
    signup = document.querySelector('.signup'),
    loginPage = document.querySelector('.login_page'),
    signupPage = document.querySelector('.signup_page'),
    register_bg = document.querySelector('.register_bg'),
    close_register = register_bg.querySelector('img'),
    toLogin = document.querySelector('.switch-to-login'),
    toSignup = document.querySelector('.switch-to-signup');

  function display() {
    register_bg.classList.add('active');
    loginPage.classList.add('active');
  }
</script>


</html>