<!-- preloader -->
<div class="preloader">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- preloader end -->


<!-- header area -->
<header class="header">
    <!-- top header -->
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrap">
                <div class="header-top-left">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <a href="mailto:besttaxexpress@gmail.com">
                                    <i class="far fa-envelopes"></i>
                                    besttaxexpress@gmail.com
                                </a>
                            </li>
                            <li><a href="tel:+16462534798"><i class="far fa-phone-volume"></i> (646) 253-4798</a>
                            </li>
                            <li><a href="#"><i class="far fa-alarm-clock"></i> Sun - Fri (07AM - 08PM)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-social">
                        <span>Follow Us: </span>
                        <a href="https://www.facebook.com/profile.php?id=61570184069606"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.twitter.com/besttaxexpress"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/besttaxexpress"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@BestTaxExpressInc"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.tiktok.com/@besttaxexpress"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header end -->

    <!-- navbar -->
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="home">
                    <img alt="logo" src="assets/img/logo/logo-custom-dark.png">
                </a>
                <div class="mobile-menu-right">
                    <div class="search-btn">
                        <button class="nav-right-link search-box-outer" type="button"><i class="far fa-search"></i>
                        </button>
                    </div>
                    <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                            data-bs-target="#main_nav" data-bs-toggle="collapse" type="button">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <?php
                    // Get the current script name or URL
                    $currentPage = basename($_SERVER['REQUEST_URI'], ".php");
                    ?>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'home') ? 'active' : ''; ?>" href="home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo (in_array($currentPage, ['tax-services', 'accounting-services', 'bookkeeping', 'new-business-startup', 'audit-review-compilation', 'financial-planning', 'part-time-cfo', 'cash-flow-management', 'bank-loan-assistance'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown" href="#">What We Do</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item <?php echo ($currentPage == 'tax-services') ? 'active' : ''; ?>" href="tax-services">TAX</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'accounting-services') ? 'active' : ''; ?>" href="accounting-services">ACCOUNTING SERVICES</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'bookkeeping') ? 'active' : ''; ?>" href="bookkeeping">BOOKKEEPING</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'new-business-startup') ? 'active' : ''; ?>" href="new-business-startup">NEW BUSINESS STARTUP</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'audit-review-compilation') ? 'active' : ''; ?>" href="audit-review-compilation">AUDIT-REVIEW-COMPILATION</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'financial-planning') ? 'active' : ''; ?>" href="financial-planning">FINANCIAL PLANNING</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'part-time-cfo') ? 'active' : ''; ?>" href="part-time-cfo">PART-TIME CFO</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'cash-flow-management') ? 'active' : ''; ?>" href="cash-flow-management">CASH FLOW MANAGEMENT</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'bank-loan-assistance') ? 'active' : ''; ?>" href="bank-loan-assistance">BANK LOAN ASSISTANCE</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo (in_array($currentPage, ['individuals', 'e-commerce', 'franchise-businesses', 'restaurant-hospitality', 'sports-and-entertainment', 'digital-assets', 'retail-wholesale', 'real-estate', 'cannabis', 'healthcare', 'law-firms', '501-c-3-nonprofits'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown" href="#">We Serve</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item <?php echo ($currentPage == 'individuals') ? 'active' : ''; ?>" href="individuals">Individuals</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'e-commerce') ? 'active' : ''; ?>" href="e-commerce">E-Commerce</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'franchise-businesses') ? 'active' : ''; ?>" href="franchise-businesses">Franchise Businesses</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'restaurant-hospitality') ? 'active' : ''; ?>" href="restaurant-hospitality">Restaurant/Hospitality</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'sports-and-entertainment') ? 'active' : ''; ?>" href="sports-and-entertainment">Sports and Entertainment</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'digital-assets') ? 'active' : ''; ?>" href="digital-assets">Digital Assets</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'retail-wholesale') ? 'active' : ''; ?>" href="retail-wholesale">Retail/Wholesale</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'real-estate') ? 'active' : ''; ?>" href="real-estate">Real Estate</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'cannabis') ? 'active' : ''; ?>" href="cannabis">Cannabis</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'healthcare') ? 'active' : ''; ?>" href="healthcare">Healthcare</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'law-firms') ? 'active' : ''; ?>" href="law-firms">Law Firms</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == '501-c-3-nonprofits') ? 'active' : ''; ?>" href="501-c-3-nonprofits">501 (c) (3) Nonprofits</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo (in_array($currentPage, ['about-us', 'why-choose-a-cpa', 'client-reviews'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown" href="#">About</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item <?php echo ($currentPage == 'about-us') ? 'active' : ''; ?>" href="about-us">About Us</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'why-choose-a-cpa') ? 'active' : ''; ?>" href="why-choose-a-cpa">Why Choose A CPA?</a></li>
                                <li><a class="dropdown-item <?php echo ($currentPage == 'client-reviews') ? 'active' : ''; ?>" href="client-reviews">Client Reviews</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'make-a-payment') ? 'active' : ''; ?>" href="make-a-payment">Make a Payment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'pricing') ? 'active' : ''; ?>" href="pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>" href="contact">Contact</a>
                        </li>
                    </ul>
                    <div class="nav-right">
                        <div class="sidebar-btn">
                            <button class="nav-right-link" type="button"><i class="far fa-bars-sort"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end-->
</header>
<!-- header area end -->

<!-- sidebar-popup -->
<div class="sidebar-popup">
    <div class="sidebar-wrapper">
        <div class="sidebar-content">
            <button class="close-sidebar-popup" type="button"><i class="far fa-xmark"></i></button>
            <div class="sidebar-logo">
                <img alt="" src="assets/img/logo/logo-custom-dark.png">
            </div>
            <div class="sidebar-about">
                <h4>About Us</h4>
                <p>There are many variations of passages available sure there majority have suffered alteration in
                    some form by inject humour or randomised words which don't look even slightly believable.</p>
            </div>
            <div class="sidebar-contact">
                <h4>Contact Info</h4>
                <ul>
                    <li>
                        <h6>Email</h6>
                        <a href="mailto:besttaxexpress@gmail.com">
                            <i class="far fa-envelope"></i>besttaxexpress@gmail.com
                        </a>
                    </li>
                    <li>
                        <h6>Phone</h6>
                        <a href="tel:+16462534798"><i class="far fa-phone"></i>(646) 253-4798</a>
                    </li>
                    <li>
                        <h6>Address</h6>
                        <a href="#"><i class="far fa-location-dot"></i>
                            168-29 Hillside Ave. 2nd floor, Suit-2 Jamaica, NY 11432
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-social">
                <h4>Follow Us</h4>
                <a href="https://www.facebook.com/profile.php?id=61570184069606"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/besttaxexpress"><i class="fab fa-x-twitter"></i></a>
                <a href="https://www.instagram.com/besttaxexpress"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@BestTaxExpressInc"><i class="fab fa-youtube"></i></a>
                <a href="https://www.tiktok.com/@besttaxexpress"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- sidebar-popup end -->