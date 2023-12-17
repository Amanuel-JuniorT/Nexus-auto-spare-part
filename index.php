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
          <button>LOG-IN</button>
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
      <?php function display($class)
      { ?>
        <div class="products">
          <div class="product_content <?php echo $class; ?>">
            <div class="product_img"></div>
            <div class="product_description">
              <h5>$ 215</h5>
              <h1>BRAKE PADS</h1>
              <p>Essential for safe breaking, these wear out over time and need regular replacements.</p>
            </div>
            <div class="buttons">
              <a href="">Add To Cart</a>
              <a href="">Detail</a>
            </div>
          </div>
        </div>
      <?php }
      for ($i = 1; $i <= 9; $i++) {
        display("content$i");
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
<script src="script/scriptHome.js"></script>

</html>