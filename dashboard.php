<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        @font-face {
            font-family: 'blasphemous';
            src: url('Fonts/blasphemous.ttf');
        }

        body {
            background-color: black;
            margin: auto;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            min-height: 100vh;
            background-image: url("Background/8.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: absolute;
            backdrop-filter: blur(10px);
        }

        .header {
            text-shadow: 2px 2px 4px #000;
            background-color: rgba(26, 23, 27, 0.7);
            padding: 15px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 20px 0px;
            border-radius: 5px;
        }

        .navigation-wrapper {
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }

        .nav {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav li a {
            color: black;
            text-decoration: none;
            padding: 10px;
        }

        .nav a:hover {
            background-color: hsla(0, 50%, 99%, 0.3);
            border-radius: 10px;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 10px;
            overflow-y: auto;
        }

        .container p {
            text-shadow: 2px 2px 4px #000;
            background-color: rgba(26, 23, 27, 0.7);
            margin: 0 10px 10px 0;
            border-radius: 5px;
            padding: 10px;
        }

        .visit-shop {
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-size: 30px;
        }

        article {
            text-shadow: 2px 2px 4px #000;
            background-color: rgba(26, 23, 27, 0.7);
            padding: 10px;
            margin: 10px 0 10px 0;
            margin-right: 10px;
            border-radius: 5px;
            height: auto;
            overflow-y: auto;
            scroll-behavior: smooth;
        }

        .call {
            height: 90vh;
            margin-top: 2px;
            padding: 20px;
            font-size: 18px;
            background-color: rgba(26, 23, 27, 0.7);
            border-radius: 5px;
        }

        .call .DivContent {
            display: flex;
            padding: 20px;
        }

        .container {
            display: flex;
            flex: 1;
            height: 100%;
        }

        aside {
            text-shadow: 2px 2px 4px #000;
            border-radius: 5px;
            background-color: rgba(26, 23, 27, 0.7);
            color: rgb(0, 0, 0);
            width: 200px;
            padding: 20px;
            order: -1;
            overflow-y: auto;
            margin: 20px;
            margin-top: 10px;
        }

        aside ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        aside ul :last-child a {
            margin-top: 10px;
        }

        aside li {
            margin: 10px 0;
        }

        aside a {
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 5px;
        }

        aside a:hover {
            background-color: hsla(0, 50%, 99%, 0.3);
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            aside {
                width: 150px;
            }
            .visit-shop {
                font-size: 24px;
            }
            .call {
                padding: 5px;
            }
            .nav {
                gap: 10px;
            }
            .header {
                padding: 5px;
            }
        }

        @media (max-width: 480px) {
            aside {
                width: 100px;
                position: absolute;
                left: -200px;
                transition: left 0.3s;
            }
            aside:hover {
                left: 0;
            }
            .container {
                flex-direction: column;
            }
            .call {
                width: 100%;
                padding: 5px;
            }
            .nav {
                flex-direction: column;
                align-items: flex-start;
            }
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        .tab-content {
            background-color: rgba(26, 23, 27, 0.7);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.4);
        }

        .user-header,
        .user-roles-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .search-input {
            padding: 8px 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
            background-color: #222;
            color: white;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            background-color: #ffffffff;
            color: black;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: hsla(0, 50%, 99%, 0.3);
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border-radius: 8px;
        }

        .roles-table {
            width: 100%;
            border-collapse: collapse;
            color: white;
            min-width: 600px;
        }

        .roles-table th,
        .roles-table td {
            padding: 12px 10px;
            border-bottom: 1px solid #555;
            text-align: left;
        }

        .roles-table th {
            background-color: #333;
            color: #ffffffff;
        }

        .roles-table td {
            background-color: rgba(255, 255, 255, 0.03);
        }

        @media (max-width: 600px) {
            .user-header,
            .user-roles-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-input {
                margin-bottom: 10px;
                width: 100%;
            }
        }

        ::-webkit-scrollbar {
            width: 0px;
        }

        #addRoleModal,
        #addUserModal {
            background-color: rgba(0, 0, 0, 0.95);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.6);
        }

        #addRoleModal h4,
        #addUserModal h4 {
            margin-bottom: 15px;
            color: #ffffffff;
            font-size: 20px;
        }

        #addRoleModal label,
        #addUserModal label {
            display: block;
            margin-bottom: 5px;
            color: white;
            font-weight: 500;
        }

        #addRoleModal input,
        #addRoleModal textarea,
        #addUserModal input {
            padding: 10px;
            width: 96%;
            border: 1px solid #444;
            background-color: rgba(255, 255, 255, 0.05);
            color: white;
            border-radius: 4px;
            margin-bottom: 15px;
            transition: border 0.2s;
        }

        #addRoleModal input:focus,
        #addRoleModal textarea:focus,
        #addUserModal input:focus {
            background-color: hsla(0, 50%, 99%, 0.3);
            outline: none;
        }

        #addRoleModal .btn,
        #addUserModal .btn {
            padding: 8px 16px;
            background-color: #ffffffff;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-right: 10px;
        }

        #addRoleModal .btn:hover,
        #addUserModal .btn:hover {
            background-color: hsla(0, 50%, 99%, 0.3);
        }

        #addRoleModal .btn:last-child,
        #addUserModal .btn:last-child {
            background-color: #666;
            color: white;
        }

        #addRoleModal .btn:last-child:hover,
        #addUserModal .btn:last-child:hover {
            background-color: #555;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        #addUserModal {
            background-color: rgba(0, 0, 0, 0.95);
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.6);
            z-index: 1000;
        }

        #addUserModal input {
            padding: 8px;
            width: 97%;
            border: 1px solid #444;
            background-color: rgba(255, 255, 255, 0.05);
            color: white;
            border-radius: 4px;
            margin-bottom: 15px;
        }


        .action-btn {
            padding: 6px 12px;
            margin: 2px;
            border: none;
            border-radius: 4px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-btn.edit {
            background-color: #29b6f6;
            color: white;
        }

        .action-btn.edit:hover {
            background-color: #0288d1;
        }

        .action-btn.delete {
            background-color: #ef5350;
            color: white;
        }

        .action-btn.delete:hover {
            background-color: #c62828;
        }

            /* Style the tab */
            .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #363636ff;
            }


            .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            }


            .tab button:hover {
            background-color: #ddd;
            }

            .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            }

            .tabcontent {
            animation: fadeEffect 1s;
            }

            @keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
            }

    </style>
</head>
<body>
    <nav class="header">
        <div class="navigation-wrapper">
            <ul class="nav">
                <li><a href="">Home</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <aside aria-label="Sidebar">
            <nav aria-label="Secondary navigation">
                <ul>
                    <li><a href="https://example.com/shop" target="_blank" class="visit-shop">Visit Shop</a></li>
                    <li><a href="#manageUsers">Manage Users</a></li>
                    <li><a href="#manageProducts">Manage Products</a></li>
                    <li><a href="#manageOrders">Manage Orders</a></li>
                    <li><a href="#viewReport">View Reports</a></li>
                    <li><a href="#shopSettings">Shop Settings</a></li>
                    <li><a href="login.php">Sign Out</a></li>
                </ul>
            </nav>
        </aside>





        <main>
            <p>Dashboard Overview</p>
            <article>
                <div class="containerColor">
                    <section id="manageUsers">
                        <div class="call">
                            <h2 style="color: #fffafaff;">Manage Users</h2>



                                <div class="tab">
                                    <button class="tablinks" onclick="callTab(event, 'userstab')">Users</button>
                                    <button class="tablinks" onclick="callTab(event, 'rolestab')">Roles</button>
                                </div>

                            <div class="tabcontent" id="userstab">
                                <div class="user-header">
                                    <h3 style="color: #fffafaff;">All Users</h3>
                                    <div>
                                        <input type="text" placeholder="Search users..." class="search-input">
                                        <button class="btn add-user-btn" onclick="showModals()">+ Add User</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="roles-table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Joined</th>
                                                <th>Role</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require 'db.php';
                                            $query = "SELECT users.*, roles.name AS role_name FROM users LEFT JOIN roles ON users.role_id = roles.id";
                                            $result = $conn->query($query);

                                            if ($result && $result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . htmlspecialchars($row['firstname'] . ' ' . $row['lastname']) . "</td>";
                                                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                                    echo "<td>" . htmlspecialchars($row['cell']) . "</td>";
                                                    echo "<td>" . (isset($row['created_at']) ? htmlspecialchars($row['created_at']) : '-') . "</td>";
                                                    echo "<td>" . (isset($row['role_name']) ? htmlspecialchars($row['role_name']) : '-') . "</td>";
                                                    echo '<td>
                                                            <button class="action-btn edit" onclick="location.href=\'edit_user.php?id=' . $row['id'] . '\'">Edit</button>
                                                            <button class="action-btn delete" onclick="if(confirm(\'Delete this user?\')) location.href=\'delete_user.php?id=' . $row['id'] . '\'">Delete</button>
                                                        </td>';
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo '<tr><td colspan="6" style="text-align:center; color:#777;">No users found.</td></tr>';
                                            }
                                            ?>
</tbody>
                                    </table>
                                </div>
                            </div>


        
                            <div class="tabcontent" id="rolestab">
                                <div class="user-roles-header">
                                    <h3 style="color: #fffafaff;">User Roles</h3>
                                    <button class="btn add-role-btn" onclick="showModal()">+ Add Role</button>
                                </div>
                                <table class="roles-table">
                                    <thead>
                                        <tr><th>Role Name</th><th>Description</th><th>Actions</th></tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require 'db.php';
                                        $query = "SELECT * FROM roles";
                                        $result = $conn->query($query);

                                        if ($result && $result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                                echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                                                echo '<td>
                                                        <button class="action-btn edit" onclick="location.href=\'edit_roles.php?id=' . $row['id'] . '\'">Edit</button>
                                                        <button class="action-btn delete" onclick="if(confirm(\'Delete this role?\')) location.href=\'delete_roles.php?id=' . $row['id'] . '\'">Delete</button>
                                                    </td>';
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo '<tr><td colspan="3" style="text-align:center; color:#777;">No roles found.</td></tr>';
                                        }
                                        ?>
</tbody>
                                </table>
                            </div>




                        </div>
                    </section>





                    <section id="manageProducts">
                        <div class="call">
                            <h2 style="color: #fffafaff;">Manage Products</h2>
                        </div>
                    </section>

                </div>
            </article>
        </main>
    </div>


    <!-- Add User Modal -->
<div id="addUserModalWrapper" class="modal-overlay" style="display: none;">
    <div id="addUserModal">
        <h4 style="color: white;">Add New User</h4>
        <form method="POST" action="dashboard_process.php">
            <input type="hidden" name="register" value="1"> 
            <label>First Name:</label>
            <input type="text" name="firstname" required>
            <label>Last Name:</label>
            <input type="text" name="lastname" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Phone:</label>
            <input type="tel" name="phone" required> 
            <label>Password:</label>
            <input type="password" name="password" required> 
            <label>Role:</label>
            <select name="role_id">
                <option value="1">Admin</option>
                <option value="2">Customer</option>
            </select>
            <button type="submit" class="btn">Save User</button>
            <button type="button" class="btn" style="background-color: #666; color: white;" onclick="hideUserModal()">Cancel</button>
        </form>
    </div>
</div>


    

    <!-- Add Role Modal -->
    <div id="addRoleModalWrapper" class="modal-overlay" style="display: none;">
        <div id="addRoleModal">
            <h4 style="color: white;">Add Role</h4>
            <form method="POST" action="add_roles.php">
                <label>Role Name:</label>
                <input type="text" name="roleName" required>
                <label>Description:</label>
                <input type="text" name="description" required>
                <button type="submit" class="btn">Save Role</button>
                <button type="button" class="btn" style="background-color: #666; color: white;" onclick="hideModal()">Cancel</button>
            </form>
        </div>
    </div>


    <script>
        function showTab(tab) {
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(tabContent => tabContent.classList.remove('active'));

            document.querySelector('.tab-button[onclick="showTab(\'' + tab + '\')"]').classList.add('active');
            document.getElementById(tab + '-tab').classList.add('active');
        }

        function showModals() {
            document.getElementById("addUserModalWrapper").style.display = "flex";
        }

        function hideUserModal() {
            document.getElementById("addUserModalWrapper").style.display = "none";
        }

        function showModal() {
            document.getElementById("addRoleModalWrapper").style.display = "flex";
        }

        function hideModal() {
            document.getElementById("addRoleModalWrapper").style.display = "none";
        }



        function callTab(evt, cityName) {
  
  var i, tabcontent, tablinks;

  
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>
</body>
</html>

