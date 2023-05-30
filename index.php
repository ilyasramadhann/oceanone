<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rosario:ital,wght@0,300;0,600;0,700;1,300;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rosarivo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <title>Ocean One</title>
</head>
<body>
    <!-- Section 1 -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand-img" href="#">
                <img src="assets/logo.png" id="nav-logo" alt="logo">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active nav-home" aria-current="page" href="#">Actions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active nav-portfolio" href="#">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active nav-social" href="#">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active nav-contact" href="#">Explore</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-5 fw-bold">Act Against Plastic Pollution</h1>
            <p>Don't Let Our Oceans Drown in Plastic Waste.<br>Join the Fight for a Cleaner Tomorrow</p>
            <button class="btn btn-primary btn-md" onclick="alert('Taking Action!')" type="button">TAKE ACTION</button>
        </div>
    </div>
    <!-- Section 2 -->
    <div class="container section-2" id="featured-3">
        <h2 class="pb-2 border-bottom">OFFSET YOUR<br>PLASTIC FOOTPRINT</h2>
        <div class="row g-4 row-cols-1 row-cols-lg-3">
          <div class="d-flex flex-column bd-highlight">
            <h4 class="title">ALIGN</h4>
            <p id="p-display">66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.</p>
            <div class="d-flex justify-content-between">
                <a class="btn btn-primary btn-md" href="#featured-3" onclick="changeDisplay()">EDIT</a>
                <a class="btn btn-primary btn-md" href="#">LEARN MORE</a>
            </div>
          </div>
          <div class="d-flex flex-column bd-highlight kickstart">
            <h4 class="title">KICKSTART</h4>
            <p id="kickstart">Ocean One are a turnkey solution to begin the journey of reducing your business's environmental footprint or going plastic neutral.</p>
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary btn-md" href="#">START ACTION</a>
            </div>
          </div>
          <div class="d-flex flex-column bd-highlight">
            <h4 class="title">AMPIFLY</h4>
            <p>Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT</p><br>
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary btn-md" href="#">SEE HOW</a>
            </div>
          </div>
        </div>
      </div>

    <!-- Section 3 -->
    <div class="section-3">
        <div class="container">
            <h2 class="pb-2 border-bottom">MAKE YOUR IMPACT</h2>
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/trash.png" class="trophy" width="90" height="90" alt="">
                    <p class="fw-normal">COMMIT TO REMOVING A SPECIFIC AMOUNT</p>
                </div>
                <div class="col-lg-4">
                    <img src="assets/dollar.png" class="trophy" width="90" height="90" alt="">
                    <p class="fw-normal">TIE REMOVAL TO PRODUCT SALES</p>
                </div>
                <div class="col-lg-4">
                    <img src="assets/trophy.png" class="trophy" width="90" height="90" alt="">
                    <p class="fw-normal">INCENTIVIZE COMMUNITY ACTION</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4 -->
    <div class="section-4">
        <?php
        include 'conn.php';
        $data = mysqli_query($conn, "select id, judul, subjudul from title_section");
        foreach ($data as $value) {
            if ($value['id']==1) {
                echo "<h6>".$value['judul']."</h6>";
                echo "<h2>".$value['subjudul']."</h2>";
            }
        }
        ?>
        <div class="d-flex bd-highlight align-items-center" id="section-4">
            <div class="flex-fill" id="box">
                <?php
                include 'conn.php';
                $data = mysqli_query($conn, "select id, gambar from ocean_one");
                foreach ($data as $value) {
                    if ($value['id']==1) {
                        echo "<img src='data:image/jpg;base64," . base64_encode($value['gambar']) . "' alt='Gambar'>";
                    }
                }
                ?>
            </div>
            <div class="left flex-fill" id="box">
                <?php
                include 'conn.php';
                $data = mysqli_query($conn, "select id, judul, deskripsi from ocean_one");
                foreach ($data as $value) {
                    if ($value['id']==1) {
                        echo "<h4>".$value['judul']."</h4>";
                        echo "<p>".$value['deskripsi']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="d-flex bd-highlight align-items-center" id="section-4">
            <div class="right flex-fill" id="box">
                <?php
                include 'conn.php';
                $data = mysqli_query($conn, "select id, judul, deskripsi from ocean_one");
                foreach ($data as $value) {
                    if ($value['id']==2) {
                        echo "<h4>".$value['judul']."</h4>";
                        echo "<p>".$value['deskripsi']."</p>";
                    }
                }
                ?>
            </div>
            <div class="flex-fill" id="box">
                <?php
                include 'conn.php';
                $data = mysqli_query($conn, "select id, gambar from ocean_one");
                foreach ($data as $value) {
                    if ($value['id']==2) {
                        echo "<img src='data:image/jpg;base64," . base64_encode($value['gambar']) . "' alt='Gambar'>";
                    }
                }
                ?>
            </div>
        </div>

        <?php
        include 'conn.php';
        $data = mysqli_query($conn, "select id, judul, subjudul from title_section");
        foreach ($data as $value) {
            if ($value['id']==2) {
                echo "<h6>".$value['judul']."</h6>";
                echo "<h2>".$value['subjudul']."</h2>";
            }
        }
        ?>
        <div class="d-flex bd-highlight align-items-center" id="section-4">
        <div class="flex-fill" id="box">
                <?php
                include 'conn.php';
                $data = mysqli_query($conn, "select id, gambar from ocean_one");
                foreach ($data as $value) {
                    if ($value['id']==3) {
                        echo "<img src='data:image/jpg;base64," . base64_encode($value['gambar']) . "' alt='Gambar'>";
                    }
                }
                ?>
            </div>
            <div class="left flex-fill" id="box">
                <?php
                include 'conn.php';
                $data = mysqli_query($conn, "select id, judul, deskripsi from ocean_one");
                foreach ($data as $value) {
                    if ($value['id']==3) {
                        echo "<h4>".$value['judul']."</h4>";
                        echo "<p>".$value['deskripsi']."</p>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="d-flex bd-highlight align-items-center" id="section-4">
            <div class="right flex-fill" id="box">
                <?php
                include 'conn.php';
                $data = mysqli_query($conn, "select id, judul, deskripsi from ocean_one");
                foreach ($data as $value) {
                    if ($value['id']==4) {
                        echo "<h4>".$value['judul']."</h4>";
                        echo "<p>".$value['deskripsi']."</p>";
                    }
                }
                ?>
            </div>
            <div class="flex-fill" id="box">
                <?php
                include 'conn.php';
                $data = mysqli_query($conn, "select id, gambar from ocean_one");
                foreach ($data as $value) {
                    if ($value['id']==4) {
                        echo "<img src='data:image/jpg;base64," . base64_encode($value['gambar']) . "' alt='Gambar'>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="section-5">
        <div class="container">
            <h2 class="pb-2 border-bottom text-center">GET IN TOUCH</h2>
        </div>
        <div class="d-flex bd-highlight align-items-center" id="section-5">
            <div class="flex-fill" id="box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1738741194085!2d110.37492487390165!3d-7.77137937708817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sUniversitas%20Gadjah%20Mada!5e0!3m2!1sid!2sid!4v1683216072382!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="flex-fill" id="box">
                <form onsubmit="return false">
                    <div class="form-group">
                        <input class="name form-control" type="text" placeholder="Name" id="name">
                        <input class="email form-control" type="email" placeholder="Email" id="email">
                        <textarea class="message form-control" type="text" rows="3" id="message" placeholder="Write Your Message Here ..."></textarea>
                        <button type="submit" class="btn btn-primary" onclick="printOutput()">SEND</button>

                        <h4><span id="caption"></span></h4>
                        <div class="hasil"><span id="hasil-name"></span><span class="span" id="sname"></span></div>
                        <div class="hasil"><span id="hasil-email"></span><span class="span" id="semail"></span></div>
                        <div class="hasil"><span id="hasil-message"></span><span class="span" id="smessage"></span></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex bd-highlight justify-content-start">
                        <a class="footer-img" href="#">
                            <img src="assets/logo.png" alt="logo" width="40">
                        </a>
                        <span>OCEAN ONE</span>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex bd-highlight justify-content-end">
                        <a href="">Newsletter</a>
                        <a href="">Privacy Policy</a>
                        <a href="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
      </footer>
    <!-- Happy code -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/custom.js"></script>
</body>
</html>