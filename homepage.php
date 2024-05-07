<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,500;0,700;1,500&display=swap">
    <style>
    .whole-page {
        display: flex;
        flex-direction: column;
    }

    .search-container {
        margin: 30px;
        padding: 0;
        height: 100%;
        display: flex;
        justify-content: center;
    }

    input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 15px;
        border-color: #d8d4d4;
        border-radius: 3px;
        width: 300px;
        background-color: #eeeeee;
        border-bottom: 2px solid #cccccc;
        border-top: 2px solid #cccccc;
        border-left: 2px solid #cccccc;
    }

    .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 18px;
        border: none;
        cursor: pointer;
        border-radius: 1px;
        border-bottom: 1px solid #cccccc;
        flex-shrink: 1;
    }

    .search-container button:hover {
        background: #ccc;
    }

    .welcome-container {
        background-color: #e74747;
        color: white;
        width: 650px;
        height: auto;
        align-self: center;
        border-radius: 6px;

        margin-top: 5px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .box-text {
        padding-top: 24px;
        padding-left: 20px;
        font-size: 14px;
    }

    .box-text h4 {
        font-size: 15px;
    }

    /*Table csS*/

    table {
        width: 50%;
        margin: 0 auto;
    }

    table,
    th,
    td {
        border: none !important;
    }

    td {
        padding: 10px;
        text-align: center;
    }

    th {
        padding: 8px;
    }

    button {
        background-color: red;
        color: black;
    }

    .recent-container {
        width: 100%;
        display: flex;
        align-items: left;
        text-align: left;
        flex-direction: column;
    }

    .recent {
        margin-left: 85px;
        text-align: left;
    }

    .recent-container tr td {
        text-align: left;
    }

    .recent-container h4 {
        margin-left: 250px;
        text-align: left;
    }

    ul {
        list-style: none;
    }
    </style>
</head>

<body>
    <div class="whole-page">
        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="Find document" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div class="welcome-container">
            <div class="box-text">
                <h4>Welcome back, People!</h4><br>
                <p>Let's start with a productive day.</p>
            </div>
            <div class="folder-image">
                <img src="folder.png" widht="50px" height="175px">
            </div>
        </div>


        <div class="recent-container">

            <div class="recent">
                <h4>Recent Items</h4>
            </div>
            <table>

                <tr>
                    <th>Folder name</th>
                </tr>
                <tr>
                    <td>De Lorenzo</td>
                    <td>04/30/2024 3:00pm</td>
                    <td>Downloads</td>
                </tr>
                <tr>
                    <td>K and H</td>
                    <td>04/30/2024 3:00pm</td>
                    <td>Downloads</td>
                </tr>
                <tr>
                    <td>Amatrol</td>
                    <td>04/30/2024 3:00pm</td>
                    <td>Downloads</td>
                </tr>
                <tr>
                    <td>FAYA Lab</td>
                    <td>04/30/2024 3:00pm</td>
                    <td>Downloads</td>
                </tr>
            </table>
        </div>
    </div>

    </div>



</body>

</html>