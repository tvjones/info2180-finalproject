<?php
    session_start();
    if (!isset($_SESSION['token'])) {
        header('Location: ../landing.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script type="text/javascript" src="../script/dashboard.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dolphin CRM</title>
    <link rel="stylesheet" href="../dashboard.css" />
</head>
<body>
<div class="branding">
    <img src="../images/dolphin.png" width="30px" alt="dolphin logo">
    <p>Dolphin CRM</p>
</div>
<main>
    <aside>
        <div>
            <img src="../images/home.png" width="30px" height="30px" alt="home" />
            <p>Home</p>
        </div>
        <div>
            <img src="../images/user.png" alt="" width="30px" height="30px" />
            <p>New Contact</p>
        </div>
        <div>
            <img src="../images/group.png" width="30px" height="30px" alt="" />
            <p>Users</p>
        </div>

        <hr />
        <div>
            <img src="../images/logout.png" width="30px" height="30px" alt="">
            <p id="logoutBtn">Logout</p></div>
    </aside>
      <div class="data-entry">
        <div class="dashHeader">
            <h2>Dashboard</h2>
            <div id="addContactButton">Add Contact</div>
        </div>
        
        <div class="tableContainer">
            <div class="filterRow">
                <img src="../images/filter_icon.svg" height="24px">
                <span>Filter By:</span>
                <span class="selected">All</span>
                <span>Sales Lead</span>
                <span>Support</span>
                <span>Assigned to Me</span>
            </div>
            <table class="contactsTable">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Company</th>
                  <th>Type</th>
                  <th></th>
                </tr>
                <tr>
                  <td class="tableName">Ms. Jan Levinson</td>
                  <td>Maria Anders</td>
                  <td>Germany</td>
                  <td><div class="salesTag">SALES LEAD</div></td>
                  <td class="viewButton">View</td>
                </tr>
                <tr>
                  <td class="tableName">Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                  <td><div class="supportTag">SUPPORT</div></td>
                  <td class="viewButton">View</td>
                </tr>
                <tr>
                    <td class="tableName">Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                    <td><div class="supportTag">SUPPORT</div></td>
                    <td class="viewButton">View</td>
                  </tr>
                  <tr>
                    <td class="tableName">Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                    <td><div class="salesTag">SALES LEAD</div></td>
                    <td class="viewButton">View</td>
                  </tr>
              </table>
        </div>
      </div>
    </main>
  </body>
</html>