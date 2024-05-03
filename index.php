<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="hytec-logo.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>

    <style>
    .list-group-item {
        border: none;
        text-align: center;
        background-color: red;
        color: white;
    }

    .sidebar-heading {
        text-align: center;
        background-color: #ff0000 !important;
        color: white;
    }

    /* Override default Bootstrap button styles */
    #sidebarToggle {
        background-color: transparent;
        border: none;
        box-shadow: none;
        color: inherit;
    }

    /* Remove hover effect */
    #sidebarToggle:hover {
        background-color: transparent;
    }

    /* Adjust the size of the icon */
    #sidebarToggle i {
        font-size: 2rem;
        /* Adjust the size as needed */
    }


    #sidebar-wrapper {
        background-color: red !important;
    }

    #sidebar-wrapper .list-group-item-action:hover {
        background-color: white;
        color: black;
        /* Optionally, change text color on hover */
    }

    .nav-link .bx {
        font-size: 27px;
        /* Adjust the size as needed */
    }

    .icon-space {
        margin: 0 5px;
        /* Adjust the space as needed */
    }

    .circle-container {
        display: inline-block;
        width: 35px;
        /* Adjust the size of the circle */
        height: 35px;
        /* Adjust the size of the circle */
        border-radius: 50%;
        background-color: #ff0000;
        /* Circle background color */
        text-align: center;
        line-height: 45px;
        /* Center the icon vertically */
    }

    .circle-container i {
        color: white;
        /* Icon color */
    }



    #sidebar-heading {
        padding: 0px;
        /* Adjust padding as needed */
        margin-bottom: 0px;
        /* Adjust margin-bottom as needed */
        border-bottom: 1px solid black;
    }

    .list-icon {
        font-size: 25px;
        /* Adjust the font size as needed */
        margin-right: 10px;
        /* Adjust the margin as needed */
    }

    .file-icon {
        font-size: 25px;
        /* Adjust the font size as needed */
        margin-right: 10px;
        /* Adjust the margin as needed */
    }

    .tasks-icon {
        font-size: 25px;
        /* Adjust the font size as needed */
        margin-right: 10px;
        /* Adjust the margin as needed */
    }

    .projects-icon {
        font-size: 25px;
        /* Adjust the font size as needed */
        margin-right: 10px;
        /* Adjust the margin as needed */
    }

    .folders-icon {
        font-size: 25px;
        /* Adjust the font size as needed */
        margin-right: 10px;
        /* Adjust the margin as needed */
    }

    #page-content {
        max-height: 80vh !important;
        /* Set a maximum height for the content */
        overflow-y: auto !important;
        /* Enable vertical scrolling if content overflows */
        margin-bottom: 0;
        padding-bottom: 0;
        /* Align the content (in this case, the image) to the center */
    }

    #page-content img {
        display: block;
        /* Make the image a block element */
        margin: 0 auto;
        /* Center the image horizontally by setting auto margins */
    }

    #item {

        align-items: center;
    }

    .custom-margin-left-text {
        margin-left: 50px;
        /* Adjust the value as needed */
    }

    #sidebar-logo:hover {
        cursor: pointer;
    }

    #sidebar-heading {
        border-bottom: none;
        /* You can adjust the color and thickness as needed */
        padding-bottom: 5px;
        /* Optional: Add some space between the border and the content */
    }

    .us {
        font-size: 25px;
        /* Adjust the font size as needed */
        margin-right: 10px;
        /* Adjust the margin as needed */
        align-items: center;
    }
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading bg-light" id="sidebar-heading">
                <img src="img/sidebar-head.jpg" alt="" height="80" width="200" id="sidebar-logo">
            </div>

            <div class="list-group list-group-flush">
                <!-- Your list items here -->
                <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center"
                    href="404.php" id="lists-link">
                    <i class="bx bx-list-ol list-icon"></i>
                    Lists
                </a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center"
                    href="#" id="document-trays-link">
                    <i class="bx bx-file file-icon"></i> Document Trays
                </a>
                <div id="document-trays-list" style="display: none;">
                    <!-- Your document trays list here -->
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center"
                        id="item" href="document-trays.php">
                        <span class="custom-margin-left-text">Invoice</span>
                    </a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center "
                        id="item" href="#">
                        <span class="custom-margin-left-text">After Invoice</span>
                    </a>
                    <!-- Add more items as needed -->
                </div>

                <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center"
                    href="404.php">
                    <i class="bx bx-calendar-check tasks-icon"></i>
                    Tasks
                </a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center"
                    href="404.php">
                    <i class="bx bx-folder-open projects-icon"></i>
                    Projects
                </a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center"
                    href="404.php">
                    <i class="bx bxs-folder-open folders-icon"></i>
                    Folders
                </a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">
                        <i class="bx bx-list-ul"></i>
                    </button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <div class="dropdown">
                                    <a class="nav-link dropdown" href="#" role="button" id="navbarDropdown"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bxs-bell"></i>
                                        <span class="icon-space"></span>
                                        <div class="circle-container">
                                            <i class="bx bxs-user"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">
                                            <i class='bx bxs-user-circle us'></i>Hytec Power Inc</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item logout-link" href="login.php">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item logout-link" href="login.php">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <div class="container-fluid" id="page-content">
                <?php include("homepage.php");
                ?>
            </div>

        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".document-link").click(function(e) {
            e.preventDefault();
            var fileToInclude = $(this).data("file");
            // AJAX call to load the specified file into page-content
            $.ajax({
                url: fileToInclude,
                success: function(data) {
                    $("#page-content").html(data);
                },
                error: function() {
                    $("#page-content").html("<p>Error loading file.</p>");
                }
            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#document-trays-link").click(function(e) {
            e.preventDefault();
            $("#document-trays-list").toggle();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#document-trays-link").click(function(e) {
            e.preventDefault();
            // AJAX call to load document-trays.php into page-content
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("page-content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "document-trays.php", true);
            xhttp.send();
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const logoutLinks = document.querySelectorAll(".logout-link");

        logoutLinks.forEach(function(logoutLink) {
            logoutLink.addEventListener("click", function(event) {
                event.preventDefault();

                Swal.fire({
                    title: "Are you sure you want to Logout?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, logout"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to the logout page
                        window.location.href = logoutLink.href;
                    }
                });
            });
        });
    });
    </script>

    <!-- JavaScript to handle click event on the image -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarLogo = document.getElementById("sidebar-logo");

        sidebarLogo.addEventListener("click", function() {
            // AJAX call to load homepage.php
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("page-content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "homepage.php", true);
            xhttp.send();
        });
    });
    </script>



</body>

</html>