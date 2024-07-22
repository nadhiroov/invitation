<aside class="left-sidebar with-vertical">
    <div><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="../main/index.html" class="text-nowrap logo-img">
                <img src="<?= base_url(); ?>cms/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                <img src="<?= base_url(); ?>cms/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-x"></i>
            </a>
        </div>


        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <?php if ($_SESSION['permission'] == 1) : ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="" id="get-url" aria-expanded="false">
                            <span>
                                <i class="ti ti-aperture"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-chart-donut-3"></i>
                            </span>
                            <span class="hide-menu">User management</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../main/blog-posts.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Admin</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">User</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif;  ?>

                <?php if ($_SESSION['permission'] == 2) : ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="" id="get-url" aria-expanded="false">
                            <span>
                                <i class="ti ti-aperture"></i>
                            </span>
                            <span class="hide-menu">Landing Page</span>
                        </a>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Fitur -->
                    <!-- ---------------------------------- -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Fitur</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-chart-donut-3"></i>
                            </span>
                            <span class="hide-menu">Website</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../main/blog-posts.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Tampilan</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Pengaturan</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Data website</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Mempelai</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Acara</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Gallery</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Cerita</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-chart-donut-3"></i>
                            </span>
                            <span class="hide-menu">Pengunjung</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../main/blog-posts.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Nama depan</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Tamu undangan</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../main/blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Ucapan</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif;  ?>

            </ul>
        </nav>

        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="<?= base_url('assets/' . $_SESSION['picture']); ?>" class=" rounded-circle" width="40" height="40" alt="modernize-img" />
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold"><?= $_SESSION['fullname']; ?></h6>
                    <span class="fs-2"><?= $_SESSION['email']; ?></span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>

        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
    </div>
</aside>