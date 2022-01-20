<?php
/**
 * @var \CodeIgniter\View\View $this
 * @var string $path
 * @var bool $logged_in
 * @var string $appName
 */

$logged_in = (function_exists('logged_in') && logged_in());
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary"
     id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand text-white ms-lg-5" href="<?= base_url() ?>">
            <img class="my-3 img-fluid"
                 src="<?= base_url('/assets/img/logos/logo.png') ?>"
                 alt="<?= $appName?>" width="253" height="50">
        </a>
        <?php if ($logged_in) : ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-lg-5 fs-3 text-primary" id="mainNav">
                <ul class="navbar-nav ms-lg-auto me-auto me-lg-0 mb-2 mb-lg-0 d-flex flex-sm-row flex-column">
                    <li class="nav-item me-3 ms-auto me-sm-auto">
                        <a href="<?= base_url() ?>" class="nav-link <?= $path == '/' ? ' active' : ''; ?>">Home<i
                                    class="far fa-search-location ms-2"></i></a>
                    </li>
                    <li class="nav-item dropdown ms-auto me-3 me-sm-auto">
                        <a class="nav-link dropdown-toggle <?= array_search($path,['my-account']) !== false ? ' active' : ''; ?>" data-bs-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fas fa-user-tie ms-2"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end link-primary">
                            <a class="text-decoration-none<?= $path == 'my-account' ? ' nav-link' : ''; ?>"
                               href="<?= base_url('/my-account') ?>">
                                <li class="dropdown-item<?= $path == 'my-account' ? ' active' : ''; ?>">My Account</li>
                            </a>
                            <a class="text-decoration-none" href="<?= base_url('/logout') ?>">
                                <li class="dropdown-item">Logout</li>
                            </a>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php else: ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-lg-5 " id="mainNav">
                <ul class="navbar-nav ms-lg-auto text-center">
                    <li class="nav-item me-lg-3">
                        <a href="<?=base_url('/register')?>">
                        <button class="btn btn-outline-light" >
                            Join For Free
                        </button>
                        </a>
                    </li>
                    <li class="nav-item mt-1 mt-lg-0">
                        <a href="<?=base_url('/login')?>">
                            <button class="btn btn-outline-light">
                                Login
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</nav>