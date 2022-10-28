<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/stylemenu.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="<?php echo e(asset('css/css_dashbord/style_dashboard.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/css_dashbord/style_content.css')); ?>" rel="stylesheet">
    <title>BISSO-DIGITAL</title>
    <script src="https://use.fontawesome.com/158065d95b.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="icon" type="image/x-icon" href="<?php echo e(URL::asset('css/image_site/img_icon.png')); ?>">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
                <img src="<?php echo e(URL::asset('css/image_site/logo (3).png')); ?>" alt="bisso digital logo" width="100%" height="44">
            </div>
            <div class="list-group list-group-flush">
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="fa fa-tachometer fs-5 me-2" aria-hidden="true"></i> Dashboard
                </a>
                <a href="<?php echo e(route('message')); ?>">
                    <i class="fa fa-commenting-o fs-5 me-2" aria-hidden="true"></i> Messages
                </a>
                <a href="<?php echo e(route('devis')); ?>">
                    <i class="fa fa-balance-scale fs-5 me-2" aria-hidden="true"></i> Devis 
                </a>
                <a href="<?php echo e(route('commande')); ?>">
                    <i class="fa fa-shopping-cart fs-5 me-2" aria-hidden="true"></i> Commandes 
                </a>
                <a href="<?php echo e(route('membres')); ?>">
                    <i class="fa fa-users fs-5 me-2" aria-hidden="true"></i> Utilisateurs
                </a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 px-2">
                <div class="container">
                    <div class="d-flex align-items-center " style="color: #2292F2;">
                        <i class="fa fa-bars fs-4 me-2" id="menu-toggle" aria-hidden="true"></i>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo e(Auth::user()->role); ?> <?php echo e(Auth::user()->name); ?>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> Profil</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li> <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                    </div>
                </nav>
            <div class='container' id="mere">
                
            <?php echo $__env->yieldContent('content'); ?>
           </div>
        </div>
        
    </div>
    <!-- /#page-content-wrapper -->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
        
    </script>
</body>

</html><?php /**PATH C:\laragon\www\agenceweb\resources\views/home.blade.php ENDPATH**/ ?>