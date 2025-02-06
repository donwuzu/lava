<header class="header" >
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <!-- Contact -->
                    <ul class="top-link">
                        <li><a href="/register">Register</a></li>
                        <li><a href="/login">Log In</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+254 1234 56789</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:this@yourmail.com">this@yourmail.com</a></li>
                    </ul>
                    <!-- End Top Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                     
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li><a href="/" class="nav-link">Home</a></li>
                                    <li><a href="/about" class="nav-link">About</a></li>
                                    
                                    <li><a href="/contact" class="nav-link">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->


                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const links = document.querySelectorAll(".nav-link");
                                const currentPath = window.location.pathname;
                        
                                links.forEach(link => {
                                    if (link.getAttribute("href") === currentPath) {
                                        link.parentElement.classList.add("active");
                                    } else {
                                        link.parentElement.classList.remove("active");
                                    }
                                });
                            });
                        </script>


                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="/career-form" class="btn">Submit CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>