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
    <link rel="icon" type="image/x-icon" href="img/hytec.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <style>
    .list-group-item {
        border: none;
        text-align: center;
        background-color: red;
        color: white;
    }

    .sidebar-heading {
        text-align: center;
        background-color: red !important;
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

    .sidebar-heading {
        border: none !important;
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
        text-align: center;
        /* Align the content (in this case, the image) to the center */
    }

    #page-content img {
        display: block;
        /* Make the image a block element */
        margin: 0 auto;
        /* Center the image horizontally by setting auto margins */
    }
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light" id="sidebar-heading">
                <img src="img/hytec.png" alt="" height="100" width="200">

            </div>
            <div class="list-group list-group-flush">
                <!-- Your list items here -->
                <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center"
                    href="404.php" id="lists-link">
                    <i class="bx bx-list-ol list-icon"></i>
                    Lists
                </a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3 d-flex align-items-center"
                    href="document-trays.php">
                    <i class="bx bx-file file-icon"></i>
                    Document Trays
                </a>

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
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <div class="container-fluid" id="page-content">
                <img src="img/hytec-bg.jpg">
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> -->
    <script>
    // JavaScript code to load 404.php into iframe when Lists, Tasks, Projects, or Folders link is clicked
    document.querySelectorAll('.list-group-item[href="404.php"], .list-group-item[href="document-trays.php"]').forEach(
        function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default link behavior
                var href = this.getAttribute('href');

                // Create an iframe element
                var iframe = document.createElement('iframe');
                iframe.src = href;
                iframe.style.width = '100%';
                iframe.style.border = 'none';

                // Set the height of the iframe to match the height of the page-content div
                iframe.onload = function() {
                    var pageContentHeight = document.getElementById('page-content').scrollHeight;
                    iframe.style.height = pageContentHeight + 'px';
                };

                // Clear existing content and append the iframe
                document.getElementById('page-content').innerHTML = '';
                document.getElementById('page-content').appendChild(iframe);
            });
        });
    </script>


    <script>
    // JavaScript code to load document-trays.php content when Document Trays link is clicked
    document.querySelector('.list-group-item[href="document-trays.php"]').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior

        // Fetch document-trays.php content
        fetch('document-trays.php')
            .then(response => response.text())
            .then(data => {
                // Replace the content of the page-content div with the fetched content
                document.getElementById('page-content').innerHTML = data;

                // Scroll to the top of the page-content div
                document.getElementById('page-content').scrollIntoView();
            })
            .catch(error => {
                console.error('Error fetching document-trays.php:', error);
            });
    });
    </script>
</body>

</html>