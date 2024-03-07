<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BizConsult - Consulting HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="m-0">CVDMRR</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div style="font-family: 'battambang', cursive;  font-weight: 300;" class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link ">ទំព័រដើម</a>
                        <a href="about.php" class="nav-item nav-link active">អំពីយើងខ្ញុំ</a>
                        <a href="team.php" class="nav-item nav-link">ក្រុមរបស់យើង</a>
                    </div>
                    <a style="font-family: 'battambang', cursive;  font-weight: 300;" href="contact.php" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">ទំនាកទំនង</a>
                </div>
            </nav>

            <div class="container-xxl bg-secondary page-header">
                <div class="container text-center">
                    <h1 style="font-family: 'battambang', cursive;  font-weight: 300;" class="text-white animated zoomIn mb-3">អំពីយើងខ្ញុំ</h1>
                    <nav aria-label="breadcrumb">
                        <ol style="font-family: 'battambang', cursive;  font-weight: 300;" class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">ទំព័រដើម</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">ទំព័រ</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">អំពីយើងខ្ញុំ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <?php include "include/about.php" ?>
        <!-- About End -->
        

        <!-- Footer Start -->
        <?php include "include/footer.php" ?>
        <!-- Back to Top -->
        <a href="navbar" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>