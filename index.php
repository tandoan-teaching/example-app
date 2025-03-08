<?php
// test git
// khi tải web, đầu tiên tải các biến global trước tiên
include_once 'app/config/globals.php';

include_once $GLOBALS['UI'] . 'templates/header.html';

// controller admin
include_once $GLOBALS['CONTROLLERS'] . 'admin_controller.php';

?>

<!-- nav -->
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Example App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- content -->

<div class="container">
    <?php

    $c_tutorials_type_get_all = c_tutorials_type_get_all();
    foreach ($c_tutorials_type_get_all as $tutorials_type) {
        echo '<div class="d-flex p-2 bg-success mt-5 text-white fs-4 p-2">' . $tutorials_type['type_name'] . '  : ' . $tutorials_type['description'] . '</div>';

        // tutorials cua tung type
        $where = "type_id='" . $tutorials_type['type_id'] . "'";
        $tutorial_get_where = tutorial_get_where($where);
        if (!empty($tutorial_get_where)) {
            foreach ($tutorial_get_where as $tutorial_item) {
                echo '<div class="d-flex p-2 mt-1">' . $tutorial_item['title'] . '</div>';
            }
        }
    }

    ?>

</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2>updating...</h2>
            </div>
        </div>
    </div>
</section>

<?php
// footer
include_once $GLOBALS['UI'] . 'templates/footer.html';
