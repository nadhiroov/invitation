<div class="sidebar sidebar-style-2">

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('assets/' . $_SESSION['picture']); ?>" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#">
                        <span>
                            <?= $_SESSION['fullname']; ?>
                            <span class="user-level"><?= $_SESSION['email']; ?></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?= @$menu_dashboard; ?>">
                    <a href="dashboard">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if ($_SESSION['permission'] == 1) : ?>
                    <li class="nav-item submenu <?= @$menu_user; ?>">
                        <a data-toggle="collapse" href="#web">
                            <i class="fas fa-users-cog"></i>
                            <p>User management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse <?= isset($menu_user) ? 'show' : ''; ?>" id="web">
                            <ul class="nav nav-collapse">
                                <li class="<?= @$sub_admin; ?>">
                                    <a href="admin">
                                        <span class="sub-item">Admin</span>
                                    </a>
                                </li>
                                <li class="<?= @$sub_user; ?>">
                                    <a href="user">
                                        <span class="sub-item">User</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php endif;  ?>

                <?php if ($_SESSION['permission'] == 2) : ?>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Fitur</h4>
                    </li>
                    <li class="nav-item submenu <?= @$menu_website; ?>">
                        <a data-toggle="collapse" href="#web">
                            <i class="fas fa-desktop"></i>
                            <p>Website</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse <?= isset($menu_website) ? 'show' : ''; ?>" id="web">
                            <ul class="nav nav-collapse ">
                                <li>
                                    <a href="../components/avatars.html">
                                        <span class="sub-item">Tampilan</span>
                                    </a>
                                </li>
                                <li class="<?= @$sub_pengaturan; ?>">
                                    <a href="pengaturan">
                                        <span class="sub-item">Pengaturan</span>
                                    </a>
                                </li>
                                <li class="nav-section">
                                    <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </span>
                                    <h4 class="text-section">Data website</h4>
                                </li>
                                <li class="<?= @$sub_mempelai; ?>">
                                    <a href="mempelai">
                                        <span class="sub-item">Mempelai</span>
                                    </a>
                                </li>
                                <li class="<?= @$sub_acara; ?>">
                                    <a href="acara">
                                        <span class="sub-item">Acara</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../components/notifications.html">
                                        <span class="sub-item">Galeri</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../components/sweetalert.html">
                                        <span class="sub-item">Cerita</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item submenu <?= @$menu_guest; ?>">
                        <a data-toggle="collapse" href="#invited">
                            <i class="fas fa-users"></i>
                            <p>Pengunjung</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse <?= isset($menu_guest) ? 'show' : ''; ?>" id="invited">
                            <ul class="nav nav-collapse">
                                <li class="<?= @$sub_nick; ?>">
                                    <a href="name">
                                        <span class="sub-item">Nama depan</span>
                                    </a>
                                </li>
                                <li class="<?= @$sub_guest; ?>">
                                    <a href="guest">
                                        <span class="sub-item">Tamu undangan</span>
                                    </a>
                                </li>
                                <li  class="<?= @$sub_saying; ?>">
                                    <a href="../components/buttons.html">
                                        <span class="sub-item">Ucapan</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php endif;  ?>
            </ul>
        </div>
    </div>
</div>