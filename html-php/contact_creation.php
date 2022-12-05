<?php
session_start();

if (!isset($_SESSION['token'])) {
    header('Location: ../landing.html');
}

$connection = new mysqli('localhost', 'root', '', 'dolphin_crm');
if ($connection -> connect_error){
    die("Connection Failed: ". $connection -> connect_error);
}
$sql = "SELECT firstname, lastname from Users where user_role='Member' ";
$result = $connection -> query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dolphin CRM</title>
        <link rel="stylesheet" href="../contact_creation.css" />
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    </head>
  <body>
      <div id = "contact-creation-panel">
          <div class="data-entry">
              <div class="contactCreationHeader">
                  <h2>New Contact</h2>
              </div>

              <div class="formContainer">

                  <form action="../php/newContact-dB.php" name="add-contact" id="add-contact" method="post">
                      <div class="input-item">
                        <label for="title">Title</label>
                        <select name="title" id="title">
                          <option value="Mr.">Mr.</option>
                          <option value="Mrs.">Mrs.</option>
                          <option value="Ms.">Ms.</option>
                          <option value="Dr.">Dr.</option>
                          <option value="Prof.">Prof.</option>
                        </select>
                      </div>
                      <div class="input-item">
                        <label for="fname">First Name</label>
                        <input type="text" placeholder="Jane" name="fname">
                      </div>
                      <div class="input-item">
                        <label for="lname">Last Name</label>
                        <input type="text" placeholder="Doe" name="lname">
                      </div>
                      <div class="input-item">
                        <label for="email">Email</label>
                        <input type="email" placeholder="something@example.com" name="email">
                      </div>
                      <div class="input-item">
                        <label for="telephone">Telephone</label>
                        <input type="text" placeholder="876-999-1234" name="telephone">
                      </div>
                      <div class="input-item">
                        <label for="company">Company</label>
                        <input type="text" placeholder="" name="company">
                      </div>
                      <div class="input-item">
                        <label for="usertype">Type</label>
                        <select name="usertype" id="usertype">
                            <option value="SALES LEAD">Sales Lead</option>
                            <option value="SUPPORT">Support</option>
                        </select>
                      </div>
                      <div class="input-item">
                        <label for="assignedto">Assigned To</label>
                          <select name="assignedto" id="assignedto">
                          <?php
                          if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                  echo "<option value=$row[id]>$row[firstname] $row[lastname]</option>";
                              }
                          }
                          $connection->close();
                          ?>
                          </select>
                      </div>
                        <div class="saveContainer">
                            <button>Save</button>
                        </div>
                  </form>

              </div>
          </div>
      </div>
  </body>
</html>