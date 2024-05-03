<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Friendly Sidebar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.0/viewer.min.css">
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    /* Content area */
    .content {
        padding: 20px;
        display: none;
    }

    .content.active {
        display: block;
    }

    /* Upload Files page styling */
    #upload h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #020101;
        /* Adjusted heading color */
    }

    #departmentSelect {
        padding: 8px;
        font-size: 16px;
        margin-bottom: 20px;
    }

    #fileInput {
        margin-bottom: 20px;
    }

    #upload button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #upload button:hover {
        background-color: #45a049;
    }

    /* Adjusted styling for document list and preview area */
    .section {
        margin-top: 30px;
    }

    #documentList {
        width: 100%;
        border-collapse: collapse;
    }

    #documentList th,
    #documentList td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    #documentList th {
        background-color: #f2f2f2;
    }

    #documentList td:last-child {
        text-align: center;
    }



    /* History Log table styling */
    #historyLog {
        width: 50%;
        /* Occupy half of the screen width */
        max-height: 60vh;
        /* Adjusted max-height for better visibility */
        border-collapse: collapse;
        overflow-y: auto;
        /* Enable vertical scrolling */
        box-sizing: border-box;
        border-right: 2px solid #ddd;
        /* Slightly thicker border for separation */
        float: left;
        table-layout: fixed;
        /* Ensure fixed table layout */
    }

    #historyLog th,
    #historyLog td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        white-space: nowrap;
        /* Prevent wrapping of file names */
        overflow: hidden;
        /* Hide overflowing content */
        text-overflow: ellipsis;
        /* Show ellipsis for overflowed content */
    }

    #historyLog th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    /* Preview area styling */
    #preview {
        width: 50%;
        /* Occupy half of the screen width */
        height: 60vh;
        /* Adjusted height for better visibility */
        overflow-y: auto;
        /* Enable vertical scrolling */
        box-sizing: border-box;
        border-left: 2px solid #ddd;
        /* Slightly thicker border for separation */
        float: right;
    }

    /* Modal styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6);
        /* Darker overlay for better focus */
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border-radius: 5px;
        /* Added border-radius for smoother corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Added box shadow for depth */
        width: 60%;
        max-width: 500px;
    }

    .close {
        color: #aaa;
        font-size: 24px;
        font-weight: bold;
        position: absolute;
        top: 10px;
        right: 15px;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #333;
        /* Adjusted hover color for better contrast */
    }

    tr:hover {
        cursor: pointer;
    }
    </style>
</head>

<body>
    <section id="upload" class="content active">
        <h2>Upload Files</h2>
        <select id="departmentSelect" onchange="changeDepartment()">
            <option value="accounting">Accounting Department</option>
            <option value="mechanical">Mechanical Department</option>
            <option value="IT">IT Department</option>
            <option value="electrical">Electrical Department</option>
        </select>
        <a href="#" onclick="showAddDepartmentModal()"><i class="fas fa-plus-circle"></i> Add Department</a>
        <br><br>
        <div id="addDepartmentModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Add Department</h2>
                <form id="addDepartmentForm">
                    <label for="departmentName">Department Name:</label>
                    <input type="text" id="departmentName" name="departmentName" required>
                    <br><br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <input type="file" id="fileInput">
        <button onclick="uploadFile()">Upload</button>
        <div id="documentList"></div>
        <table id="historyLog">
            <thead>
                <tr>
                    <th>Document</th>
                    <th>Uploaded at</th>
                    <th>Size</th>
                    <th>Action</th> <!-- New column header for Action -->
                </tr>
            </thead>
            <tbody id="historyLogBody"></tbody>
        </table>
        <div class="section">
            <h2>Preview Document</h2>
            <!-- Container for displaying the document -->
            <div id="preview"></div>
        </div>
    </section>

    <section id="private-folder" class="content">
        <h2>Private Folder</h2>
        <p>This is the page where you can access your private folder.</p>
    </section>

    <section id="account" class="content">
        <h2>Account</h2>
        <p>This is the page where you can manage your account settings.</p>
    </section>


</body>

</html>