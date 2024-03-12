<!DOCTYPE html>
<html lang="en">

<?php include "include/head.php" ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
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
                        <a href="index.php" class="nav-item nav-link">ទំព័រដើម</a>
                        <a href="about.php" class="nav-item nav-link">អំពីយើងខ្ញុំ</a>
                        <a href="team.php" class="nav-item nav-link">ក្រុមរបស់យើង</a>
                    </div>
                    <a style="font-family: 'battambang', cursive;  font-weight: 300;" href="contact.php" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5 ">ទំនាកទំនង</a>
                </div>
            </nav>

            <div class="container-xxl bg-secondary page-header">
                <div class="container text-center">
                    <h5 style="font-family: 'battambang', cursive;  font-weight: 300;" class="text-white animated zoomIn mb-3">ទំនាកទំនង</h5>
                    <nav aria-label="breadcrumb">
                        <ol style="font-family: 'battambang', cursive;  font-weight: 300;" class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">ទំព័រដើម</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">ទំព័រ</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">ទំនាកទំនង</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Quote Start -->
          <!-- Contact Start -->
          <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div style="font-family: 'battambang', cursive;  font-weight: 300;" class="d-inline-block border rounded-pill text-primary px-4 mb-3">ទំនាកទំនង</div>
                    <h5 style="font-family: 'battambang', cursive;  font-weight: 300;  line-height: 45px;" class="mb-5">ប្រសិនបើអ្នកមានសំណួរណាមួយ សូមទាក់ទងមកយើងខ្ញុំដោយសេរី</h5>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <p style="font-family: 'battambang', cursive;  font-weight: 300;  line-height: 28px;" class="text-center mb-4">ហេ! សូមផ្ញើអ៊ីមែលមកខ្ញុំដោយសេរី។ ខ្ញុំខំអស់ពីសមត្ថភាពដើម្បីឆ្លើយតបទាន់ពេលវេលា ប៉ុន្តែអ៊ីមែលដែលមិនមែនជាបន្ទាន់អាច ចំណាយពេលពីរបីថ្ងៃបន្ថែម។ អ្នកនឹងឃើញថាខ្ញុំពិតជាឆ្លើយតបនៅលើ Email ដូច្នេះប្រសិនបើអ្នកមានកម្មវិធីទាក់ទងនឹងការសរសេរកម្មវិធី សំណួរ នោះជាកន្លែងដ៏ល្អមួយដើម្បីចាប់ផ្តើម។.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <!-- Quote End -->
        
       <?php include "include/footer.php" ?>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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