<?php
//    session_start();
//    if (!isset($_SESSION['token'])) {
//        header('Location: ../landing.html');
//    }

    $connection = new mysqli('localhost', 'root', '', 'dolphin_crm');
    if ($connection -> connect_error){
        die("Connection Failed: ". $connection -> connect_error);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * from Contacts WHERE id = $id";
        $result = $connection -> query($sql) -> fetch_assoc();
    }
    else {
        echo "<h1>Please check details and try again</h1>";
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dolphin CRM</title>
    <link rel="stylesheet" href="../contact-details.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script type="text/javascript" src="../script/view-details-script.js"></script>
</head>
<body>
<div class="branding">
    <img src="../images/dolphin.png" width="30px" alt="dolphin logo" />
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
            <p>Logout</p></div>
    </aside>
    <div>
        <div id="intro">
            <div>
                <img src="../images/user.png" width="70px" alt="profile picture" />
                <div>
                    <p><?php echo $result['title'] . ' ' . $result['firstname'] . ' ' . $result['lastname'] ?></p>
                    <p><?php echo $result['created_by'] ?> NULL</p>
                    <p><?php echo $result['created_at'] ?></p>
                </div>
            </div>
            <div id="functions">
                <button>Assign to me</button>
                <button>Switch to Sales Lead</button>
            </div>
        </div>
        <div id="details">
            <div class="email">
                <p>Email</p>
                <p><?php echo $result['email'] ?></p>
            </div>
            <div class="telephone">
                <p>Telephone</p>
                <p><?php echo $result['telephone'] ?></p>
            </div>
            <div class="company">
                <p>Company</p>
                <p><?php echo $result['company'] ?></p>
            </div>
            <div class="assigned">
                <p>Assigned To</p>
                <p><?php echo $result['assigned_to'] ?></p>
            </div>
        </div>
        <div id="notes">
            <h2>Notes</h2>
            <hr />
            <div class="note">
                <p class="author">John Doe</p>
                <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae
                    similique consequatur corrupti porro pariatur quidem laudantium
                    itaque in doloremque tenetur repellendus fuga consectetur aut
                    magni ullam quae alias, cum obcaecati?
                </p>
                <p class="date">Lorem ipsum dolor sit amet.</p>
            </div>

            <div id="add-note">
                <p>Add a note about NAME</p>
                <textarea
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                        placeholder="Enter details here"
                ></textarea>
                <button>Add Note</button>
            </div>
        </div>
    </div>
</main>
</body>
</html>