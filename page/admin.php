<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
        }
        #sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 20px;
            height: 100vh;
        }
        #content {
            flex: 1;
            padding: 20px;
        }
        .hidden {
            display: none;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
        }
    </style>
    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(function(section) {
                section.classList.add('hidden');
            });

            // Show the selected section
            document.getElementById(sectionId).classList.remove('hidden');
        }
    </script>
</head>
<body>
    <div id="sidebar">
        <h1>Admin Panel</h1>
        <button onclick="showSection('dashboard')">Dashboard</button>
        <button onclick="showSection('user-management')"><a href="adding_user.php" class="action">Adding Users</a></button>
        <button onclick="showSection('foods')"><a href="add_fooding.php" class="action">Food Adding</a></button>
        <button onclick="showSection('reservations')"><a href="reservation1.php" class="action">Reservation</a></button>
    </div>
    <div id="content">
        <div id="dashboard" class="section">
    
            
            <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallerycafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get total number of user
$userCountResult = $conn->query("SELECT COUNT(*) AS user FROM user");
$userCount = $userCountResult->fetch_assoc()['user'];

// Get total number of food
$foodCountResult = $conn->query("SELECT COUNT(*) AS food FROM food");
$foodCount = $foodCountResult->fetch_assoc()['food'];

// Get total number of reservations
$reservationCountResult = $conn->query("SELECT COUNT(*) AS reservations FROM reservation");
$reservationCount = $reservationCountResult->fetch_assoc()['reservations'];

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <h1>Dashboard</h1>
    <div class="dashboard">
        <div class="dashboard-item">
            <h2>Total user</h2>
            <p><?php echo $userCount; ?></p>
        </div>
        <div class="dashboard-item">
            <h2>Total food</h2>
            <p><?php echo $foodCount; ?></p>
        </div>
        <div class="dashboard-item">
            <h2>Total reservation</h2>
            <p><?php echo $reservationCount; ?></p>
        </div>
    </div>
</body>
</html>

            
            
        </div>
        <div id="user-management" class="section hidden">
            <h2>User Management</h2>
            <div id="add-user-form" class="hidden">
                <h3>Add User</h3>
                <form id="user-form">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <label for="role">Role:</label>
                    <select id="role" name="role" required>
                        <option value="admin">Admin</option>
                        <option value="staff">Operational Staff</option>
                        <option value="customer">Customer</option>
                    </select>
                    <br>
                    <button type="submit">Add User</button>
                </form>
            </div>
            <div id="user-management" class="section hidden">
    <h2>User Management</h2>
    <div id="add-user-form" class="hidden">
        <h3>Add User</h3>
        <form id="user-form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="staff">Operational Staff</option>
                <option value="customer">Customer</option>
            </select>
            <button type="submit">Add User</button>
        </form>
    </div>
    <h3>User List</h3>
    <input type="text" id="search-users" placeholder="Search users...">
    <div id="user-table">
        <!-- Dynamic user table goes here -->
    </div>
</div>

        </div>
        <div id="foods" class="section hidden">
            <h2>Foods</h2>
            <a href="add_fooding.php" class="action">Adding Food</a>
            <p>Manage food items here.</p>
            <div id="foods" class="section hidden">
    <h2>Foods Management</h2>
    <button onclick="showFoodForm()">Add Food Item</button>
    <div id="add-food-form" class="hidden">
        <h3>Add Food Item</h3>
        <form id="food-form">
            <label for="food-name">Name:</label>
            <input type="text" id="food-name" name="food-name" required>
            <label for="food-description">Description:</label>
            <textarea id="food-description" name="food-description" required></textarea>
            <label for="food-price">Price:</label>
            <input type="number" id="food-price" name="food-price" step="0.01" required>
            <label for="food-image">Image URL:</label>
            <input type="text" id="food-image" name="food-image" required>
            <label for="food-category">Category:</label>
            <select id="food-category" name="food-category" required>
                <option value="appetizer">Appetizer</option>
                <option value="main-course">Main Course</option>
                <option value="dessert">Dessert</option>
                <option value="beverage">Beverage</option>
            </select>
            <button type="submit">Add Food Item</button>
            
        </form>
    </div>
    <h3>Food List</h3>
    <input type="text" id="search-foods" placeholder="Search foods...">
    <div id="food-table">
        <!-- Dynamic food table goes here -->
    </div>
</div>


        </div>
        <div id="reservations" class="section hidden">
            <h2>Reservations</h2>
            <p>View and manage reservations here.</p>
            <div id="reservations" class="section hidden">
    <h2>Reservations Management</h2>
    <h3>Reservation List</h3>
    <input type="text" id="search-reservations" placeholder="Search reservations...">
    <div id="reservation-table">
        <!-- Dynamic reservation table goes here -->
    </div>
    <div id="reservation-details" class="hidden">
        <h3>Reservation Details</h3>
        <!-- Detailed reservation view goes here -->
        <button onclick="confirmReservation()">Confirm Reservation</button>
        <button onclick="modifyReservation()">Modify Reservation</button>
        <button onclick="cancelReservation()">Cancel Reservation</button>
    </div>
</div>

        </div>
    </div>
    <script src="admin.js"></script>
</body>
</html>
