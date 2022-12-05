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
  <script type="text/javascript" src="../script/view-details-script.js"></script>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dolphin CRM</title>
  <link rel="stylesheet" href="../contact-page-styles.css" />
</head>
<body>
  <div id = "dashboard-contact-panel">
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

                        <?php
                        $connection = new mysqli('localhost', 'root', '', 'dolphin_crm');
                        if ($connection -> connect_error){
                            die("Connection Failed: ". $connection -> connect_error);
                        }
                        $sql = "SELECT title, firstname, lastname, email, company, user_type from Contacts ";
                        $result = $connection -> query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td class='tableName'>" . $row["title"]. " " . $row["firstname"]. " " . $row["lastname"]. "</td>
                                        <td>" . $row["email"] . "</td>
                                        <td>" . $row["company"]. "</td>
                                        <td><div class='supportTag'>" . $row["user_type"] . "</div></td>
                                        <td class='viewButton'><button id='viewDetailsBtn' type='button'>View</button></td>
                                       </tr>";
                            }
                            echo "</table>";
                        }
                        $connection->close();
                        ?>
                    </table>
                </div>
            </div>
  </div>
</body>
</html>