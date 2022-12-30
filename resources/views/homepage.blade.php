<!DOCTYPE html>
<html>

<head>
  <title>TTD QR</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" href="/css/homepage.css">
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
      <div class="w3-col s3">
        <a href="login/sigin.html" class="w3-button w3-block w3-black">LOGIN</a>
      </div>
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
        <img src="/images/qr.webp" style="width:30%;max-width:30%" class="w3-margin-top">
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
        <!-- free -->
        <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
          <h5>first</h5>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis itaque earum, natus qui quia, magni animi est provident blanditiis quam excepturi, vel iure. Veritatis molestiae libero ex ipsam saepe quia?</p><br>

          <h5>second</h5>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus saepe dolores rerum fugit mollitia, corrupti quibusdam delectus. Assumenda enim veniam, consequuntur optio incidunt animi aliquam cumque facilis accusamus ipsa.</p><br>
          <!-- //paid -->
          <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
            <h5>first</h5>
            <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis itaque earum, natus qui quia, magni animi est provident blanditiis quam excepturi, vel iure. Veritatis molestiae libero ex ipsam saepe quia?</p><br>

            <h5>second</h5>
            <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus saepe dolores rerum fugit mollitia, corrupti quibusdam delectus. Assumenda enim veniam, consequuntur optio incidunt animi aliquam cumque facilis accusamus ipsa.</p><br>

            <h5>third</h5>
            <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis itaque earum, natus qui quia, magni animi est provident blanditiis quam excepturi, vel iure. Veritatis molestiae libero ex ipsam saepe quia?</p><br>

            <h5>fourth</h5>
            <p class="w3-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus saepe dolores rerum fugit mollitia, corrupti quibusdam delectus. Assumenda enim veniam, consequuntur optio incidunt animi aliquam cumque facilis accusamus ipsa.</p><br>
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
    </script>

</body>

</html>