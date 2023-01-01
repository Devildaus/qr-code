<!DOCTYPE html>
<html>

<head>
  <title>TTD QR</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    /* Hide the dropdown menu by default */
    .w3-dropdown-content {
      display: none;
    }

    /* Show the dropdown menu when the button is clicked */
    .w3-dropdown-click:hover .w3-dropdown-content {
      display: block;
    }
  </style>
</head>

<body>

  <!-- Links (sit on top) -->
  <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
      <div class="w3-col s3">
        <a href="#" class="w3-button w3-block w3-black">HOME</a>
      </div>
      <div class="w3-col s3">
        <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
      </div>
      <div class="w3-col s3">
        <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
      </div>
      @auth
      <div class="w3-dropdown-click">
        <button class="w3-button">Welcome back, {{ auth()->user()->name }}</button>
        <div id="myDropdown" class="w3-dropdown-content w3-bar-block w3-card">
          <a class="w3-dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a>
          <hr class="dropdown-divider">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="w3-dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
          </form>
        </div>
      </div>
      @else
      <div class="w3-col s3">
        <a href="/login" class="w3-button w3-block w3-black">LOGIN</a>
      </div>
      @endauth
    </div>
  </div>

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">Protect your document with signed online</span>
    </div>
    <div class="w3-display-middle w3-center">
      <span class="w3-text-black w3-padding-large w3-hide-small" ; style="font-size:90px; text-shadow: rgb(255, 255, 255) -1px -2px 0.5em;  font-family:serif; text-shadow: 10px 10px 20px rgb(0, 0, 0);" ;>TTD Online</span>
    </div>
  </header>

  <!-- Add a background color and large text to the whole page -->
  <div class="w3-sand w3-grayscale w3-large">

    <!-- About Container -->
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THIS SITE</span></h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis est consequatur nulla similique unde accusamus esse eum doloremque porro natus commodi a corrupti, iusto voluptate laboriosam, mollitia beatae recusandae voluptates.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, sapiente aut. Atque nostrum explicabo at, neque impedit incidunt adipisci doloribus nulla delectus tempore! Recusandae perferendis sapiente nisi hic enim et!</p>
        <div class="w3-panel w3-leftbar w3-light-grey">
          <p><i>"(1) Setiap Orang berhak menggunakan jasa Penyelenggara Sertifikasi Elektronik untuk pembuatan Tanda Tangan Elektronik. (2) Penyelenggara Sertifikasi Elektronik harus memastikan keterkaitan suatu Tanda Tangan Elektronik dengan pemiliknya.</i></p>
          <p>UU No 11 Tahun 2008</p>
        </div>
        <img src="images/qr.webp" style="width:30%;max-width:30%" class="w3-margin-top">
      </div>
    </div>

    <!-- Menu Container -->
    <div class="w3-container" id="menu">
      <div class="w3-content" style="max-width:700px">

        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHAT YOU GET</span></h5>

        <div class="w3-row w3-center w3-card w3-padding">
          <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
            <div class="w3-col s6 tablink">FREE</div>
          </a>
          <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
            <div class="w3-col s6 tablink">PAID</div>
          </a>
        </div>

        <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
          <h5>pertama</h5>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi velit magnam nostrum ipsa nisi inventore necessitatibus reprehenderit, minus veniam dolorum, facilis cum quae voluptatibus repudiandae, natus aliquid. Iste, totam numquam?</p><br>

          <h5>kedua</h5>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolor veritatis, nam quasi debitis minima minus mollitia eos quidem totam voluptates optio dicta possimus doloremque distinctio atque dolorem ipsum aliquid!</p><br>
        </div>

        <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
          <h5>pertama</h5>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolorem inventore eaque ab, quisquam maiores perspiciatis perferendis quibusdam modi impedit sequi fugiat ratione officiis distinctio illo omnis maxime qui laudantium.</p><br>

          <h5>kedua</h5>
          <p class="w3-text-grey">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore modi illo alias ad blanditiis magni quos suscipit non dignissimos, molestias minima fuga quam, nisi totam culpa beatae error dolore pariatur!</p><br>

          <h5>ketiga</h5>
          <p class="w3-text-grey">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit architecto sint exercitationem illo harum, iusto repellendus quibusdam aliquid cupiditate eveniet in, cum rem veritatis dolore. Eveniet quo aperiam facilis a.</p><br>

          <h5>keempat</h5>
          <p class="w3-text-grey">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit architecto sint exercitationem illo harum, iusto repellendus quibusdam aliquid cupiditate eveniet in, cum rem veritatis dolore. Eveniet quo aperiam facilis a.</p><br>

          <h5>kelima</h5>
          <p class="w3-text-grey">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit architecto sint exercitationem illo harum, iusto repellendus quibusdam aliquid cupiditate eveniet in, cum rem veritatis dolore. Eveniet quo aperiam facilis a.</p>
        </div>

      </div>
    </div>

    <!-- Contact/Area Container -->
    <div class="w3-container" id="where" style="padding-bottom:32px;">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">APA LAGI YANG KAMU TUNGGU</span></h5>
      </div>
    </div>

    <!-- End page content -->
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    <a href="https://www.instagram.com/14_daus/">Powered By Firdaus</a>
  </footer>

  <script>
    // Tabbed Menu
    function openMenu(evt, menuName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("menu");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
      }
      document.getElementById(menuName).style.display = "block";
      evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }
    document.getElementById("myLink").click();

    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.w3-button')) {
        var dropdowns = document.getElementsByClassName("w3-dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>