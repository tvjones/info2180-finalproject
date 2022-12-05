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
      <script type="text/javascript" src="/info2180-project2/script/dashboard.js"></script>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Dolphin CRM</title>
      <link rel="stylesheet" href="/info2180-project2/users_page.css" />
  </head>
  <body>
    <div id = "dashboard-user-panel">
      <div class="data-entry">
        <div class="userHeader">
            <h2>Users</h2>
            <div id="addUserButton">Add User</div>
        </div>
          <div class="tableContainer">
            <table class="usersTable">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Created</th>
                </tr>
                <?php
                $connection = new mysqli('localhost', 'root', '', 'dolphin_crm');
                if ($connection -> connect_error){
                    die("Connection Failed: ". $connection -> connect_error);
                }
                $sql = "SELECT firstname, lastname, email, user_role, created_at from Users ";
                $result = $connection -> query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                            <td class='tableName'>" . $row["firstname"]. " " . $row["lastname"]. "</td>
                                            <td>" . $row["email"] . "</td>
                                            <td>" . $row["user_role"]. "</td>
                                            <td>" . $row["created_at"]. "</td>
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