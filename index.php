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
            })
            .catch(error => {
                console.error('Error fetching document-trays.php:', error);
            });
    });
    </script>
    <script>
    // Array to store uploaded documents
    const uploadedDocuments = [];

    // Function to upload a file
    function uploadFile() {
        const fileInput = document.getElementById('fileInput');
        const files = fileInput.files;
        const department = document.getElementById('departmentSelect').value; // Get selected department

        if (files.length === 0) {
            alert('Please select a file.');
            return;
        }

        const file = files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const fileName = file.name;
            const fileContent = e.target.result;
            const fileSize = file.size;
            const uploadTime = new Date().toLocaleString();

            // Store document information with department
            const documentInfo = {
                fileName: fileName,
                fileContent: fileContent,
                fileSize: fileSize,
                uploadTime: uploadTime,
                department: department // Add department information
            };

            // Add document to uploadedDocuments array
            uploadedDocuments.push(documentInfo);

            // Add document to history log if it matches the current department
            if (department === documentInfo.department) {
                addToHistoryLog(documentInfo);
            }
        };

        reader.readAsDataURL(file);
    }

    // Function to add entry to history log
    function addToHistoryLog(documentInfo) {
        const historyLogBody = document.getElementById('historyLogBody');

        const newRow = historyLogBody.insertRow();

        const cell1 = newRow.insertCell(0);
        cell1.textContent = documentInfo.fileName;

        const cell2 = newRow.insertCell(1);
        cell2.textContent = documentInfo.uploadTime;

        const cell3 = newRow.insertCell(2);
        // Convert file size to human-readable format (KB)
        const fileSizeInKB = (documentInfo.fileSize / 1024).toFixed(2); // Convert to KB
        cell3.textContent = fileSizeInKB + ' KB'; // Display in KB

        // Add delete button
        const cell4 = newRow.insertCell(3);
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.addEventListener('click', function(event) {
            event.stopPropagation(); // Stop event propagation
            deleteDocument(newRow, documentInfo);
        });
        cell4.appendChild(deleteButton);

        // Add click event listener to preview the file
        newRow.addEventListener('click', function() {
            previewDocument(documentInfo);
        });
    }

    // Function to delete document from history log
    function deleteDocument(row, documentInfo) {
        const index = uploadedDocuments.findIndex(doc => doc.fileName === documentInfo.fileName);
        if (index !== -1) {
            uploadedDocuments.splice(index, 1);
            row.remove();
        }
    }

    // Function to preview document based on its type
    function previewDocument(documentInfo) {
        const fileType = getFileType(documentInfo.fileName);
        const preview = document.getElementById('preview');

        // Display close button
        preview.innerHTML = '<button onclick="closePreview()">Close</button>';

        switch (fileType) {
            case 'image':
                displayImage(documentInfo.fileContent, documentInfo.fileName, preview);
                break;
            case 'pdf':
                displayPdf(documentInfo.fileContent, preview);
                break;
            case 'docx':
            case 'pptx':
            case 'xlsx':
                displayViewerJsPreview(documentInfo.fileContent, preview);
                break;
            default:
                alert('Preview not available for this file type.');
        }
    }

    // Function to close the document preview
    function closePreview() {
        const preview = document.getElementById('preview');
        preview.innerHTML = ''; // Clear the content of the preview element
    }

    // Function to determine file type based on extension
    function getFileType(fileName) {
        const extension = fileName.split('.').pop().toLowerCase();
        if (['jpg', 'jpeg', 'png', 'gif', 'bmp'].includes(extension)) {
            return 'image';
        } else if (extension === 'pdf') {
            return 'pdf';
        } else if (['docx', 'pptx', 'xlsx'].includes(extension)) {
            return extension;
        } else {
            return 'other';
        }
    }

    // Function to display Viewer.js preview for docx, pptx, and xlsx files
    function displayViewerJsPreview(fileContent, preview) {
        // Load the document using Viewer.js
        const viewer = new Viewer(preview, {
            inline: true,
            viewed() {
                // Adjust viewer size after the document is viewed
                viewer.viewerElement.style.height = '80vh';
            }
        });
        // Load the document content
        viewer.load(fileContent);
    }

    // Function to display image in preview
    function displayImage(fileContent, fileName, preview) {
        preview.innerHTML += `<img src="${fileContent}" alt="${fileName}" style="max-width: 100%; max-height: 80vh;">`;
    }

    // Function to display PDF in preview
    function displayPdf(fileContent, preview) {
        preview.innerHTML += `<embed src="${fileContent}" type="application/pdf" style="width: 100%; height: 80vh;">`;
    }

    // Function to change department
    function changeDepartment() {
        const department = document.getElementById('departmentSelect').value;
        const historyLogBody = document.getElementById('historyLogBody');
        // Clear history log
        historyLogBody.innerHTML = '';
        // Display documents for the selected department
        uploadedDocuments.forEach(doc => {
            if (doc.department === department) {
                addToHistoryLog(doc);
            }
        });
        // Clear preview
        const preview = document.getElementById('preview');
        preview.innerHTML = '';
    }

    // Function to show content based on navigation
    function showContent(id) {
        // Hide all content sections
        var contentSections = document.querySelectorAll('.content');
        contentSections.forEach(function(section) {
            section.classList.remove('active');
        });

        // Show the selected content section
        var selectedSection = document.getElementById(id);
        selectedSection.classList.add('active');
    }


    // Function to show add department modal
    function showAddDepartmentModal() {
        const modal = document.getElementById('addDepartmentModal');
        modal.style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        const modal = document.getElementById('addDepartmentModal');
        modal.style.display = 'none';
    }

    // Function to handle form submission for adding department
    document.getElementById('addDepartmentForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        const departmentName = document.getElementById('departmentName').value.trim();

        if (departmentName === '') {
            alert('Please enter a department name.');
            return;
        }

        // Add department as an option to the dropdown
        const departmentSelect = document.getElementById('departmentSelect');
        const option = document.createElement('option');
        option.value = departmentName.toLowerCase().replace(/\s+/g,
            '-'); // Convert to lowercase and replace spaces with dashes
        option.textContent = departmentName;
        departmentSelect.appendChild(option);


        // Close the modal
        closeModal();
    });

    function addToHistoryLog(documentInfo) {
        const historyLogBody = document.getElementById('historyLogBody');

        const newRow = historyLogBody.insertRow();

        const cell1 = newRow.insertCell(0);
        cell1.textContent = documentInfo.fileName;

        const cell2 = newRow.insertCell(1);
        cell2.textContent = documentInfo.uploadTime;

        const cell3 = newRow.insertCell(2);
        // Convert file size to human-readable format (KB)
        const fileSizeInKB = (documentInfo.fileSize / 1024).toFixed(2); // Convert to KB
        cell3.textContent = fileSizeInKB + ' KB'; // Display in KB

        // Add download link
        const cell4 = newRow.insertCell(3);
        const downloadLink = document.createElement('a');
        downloadLink.textContent = 'Download';
        downloadLink.href = documentInfo.fileContent; // Set the href to the file content (assuming it's a URL)
        downloadLink.download = documentInfo.fileName; // Set the download attribute to the file name
        cell4.appendChild(downloadLink);

        // Add delete button
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.addEventListener('click', function(event) {
            event.stopPropagation(); // Stop event propagation
            deleteDocument(newRow, documentInfo);
        });
        cell4.appendChild(deleteButton);

        // Add click event listener to preview the file
        newRow.addEventListener('click', function() {
            previewDocument(documentInfo);
        });
    }
    </script>

</body>

</html>