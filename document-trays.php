<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Card Addition</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- PDF.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <style>
    /* Custom CSS for horizontal alignment */
    .card-container {
        display: flex;
        flex-wrap: wrap;
    }

    .card {
        margin-right: 15px;
        /* Add margin between cards */
        margin-bottom: 15px;
    }

    .custom-search-bar {
        width: 400px;
        /* Adjust the width as needed */
    }

    .card-container {
        margin-left: 30px;
        margin-top: 30px;
    }

    .navbar {
        padding-bottom: 30px;
    }

    /* Custom CSS for horizontal alignment */


    .custom-search-bar {
        width: 100%;
        max-width: 400px;
    }

    @media (min-width: 576px) {
        .custom-search-bar {
            width: 300px;
        }
    }

    @media (min-width: 768px) {
        .custom-search-bar {
            width: 300px;
        }
    }

    @media (min-width: 992px) {
        .custom-search-bar {
            width: 500px;
        }
    }

    @media (min-width: 1200px) {
        .custom-search-bar {
            width: 600px;
        }
    }

    .btn {
        margin-left: 20px;
    }

    h2 {
        margin: 30px;
    }

    /* Adjust margin for dropdown */
    .dropdown {
        margin-left: 10px;
    }

    /* .modal {
        margin-top: 90px;
    } */

    .modal-dialog {
        top: 1.5%;
        left: 5%;
        transform: translate(-50%, -50%);
        max-width: 90%;
        margin: 0;
        /* Set a maximum width for the modal */
    }

    .modal-content {
        width: 100%;
        /* Set the content width to 100% */
    }

    .modal-body {
        max-width: 100%;
        /* Ensure the body width can expand */
    }

    .embed-responsive {
        overflow: auto;
        /* Allow scrolling if content overflows */
    }

    .card-body .bx.bxs-file-pdf {
        font-size: 200px;
        /* Adjust the size as needed */
        margin-bottom: 5px;
        margin-left: 25px;
        /* Optional: Add some space between the icon and the file name */
    }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <form class="d-flex" role="search">
                <input class="form-control me-2 custom-search-bar" type="search" placeholder="Search"
                    aria-label="Search">
                <label for="fileInput" class="btn btn-success" title="Upload File"><i
                        class='bx bxs-file-plus'></i></label>
                <input type="file" id="fileInput" class="custom-file-input" style="display: none;">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-menu-alt-left'></i> View
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <h2> Files </h2>
    <div class="card-container">

    </div> <!-- Container for cards -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">File Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <embed id="previewFile" type="application/pdf" width="100%" height="600px" />
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function initializeDocumentTraysPage() {
        // Your JavaScript code for document-trays.php
        // This code will be executed when document-trays.php is loaded into page-content
        // Include any event listeners or other functionality here
        $(document).ready(function() {
            // Your document-trays specific JavaScript code here
        });
    }
    // Call the function after content is loaded
    initializeDocumentTraysPage();
    </script>
    <script>
    $(document).ready(function() {
        $("#fileInput").change(function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                var fileContent = e.target.result;
                var fileName = file.name;
                var fileSize = (file.size / 1024).toFixed(2) + ' KB';

                // Check if the file is a PDF
                if (file.type === "application/pdf") {
                    // Create a new card for the PDF file
                    var newCard = `
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class='bx bxs-file-pdf pdf-icon'></i> <!-- PDF icon -->
                        <h5 class="card-title">${fileName}</h5>
                        <p class="card-text">${fileSize}</p>
                        <input type="hidden" class="pdf-content" value="${fileContent}">
                    </div>
                </div>
            `;
                    $(".card-container").append(newCard);
                } else { // Display image for other file types
                    var imageUrl = fileContent;
                    var newCard = `
                <div class="card" style="width: 18rem;">
                    <img src="${imageUrl}" class="card-img-top file-image" alt="${fileName}">
                    <div class="card-body">
                        <h5 class="card-title">${fileName}</h5>
                        <p class="card-text">${fileSize}</p>
                    </div>
                </div>
            `;
                    $(".card-container").append(newCard);
                }
            };
            reader.readAsDataURL(file);
        });

        // Show the modal when clicking the PDF file name or icon
        $(".card-container").on('click', '.card-title, .pdf-icon', function() {
            var fileName = $(this).closest('.card').find('.card-title').text();
            var fileContent = $(this).closest('.card').find('.pdf-content').val();
            $('#modalTitle').text(fileName);
            $('#previewFile').attr('src', fileContent);
            $('#exampleModal').modal('show');
        });

        // Show the modal when clicking the image file
        $(".card-container").on('click', '.file-image', function() {
            var fileName = $(this).closest('.card').find('.card-title').text();
            var fileContent = $(this).attr('src');
            $('#modalTitle').text(fileName);
            $('#previewFile').attr('src', fileContent);
            $('#exampleModal').modal('show');
        });
    });
    </script>


</body>

</html>