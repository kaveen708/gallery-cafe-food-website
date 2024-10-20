<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food Item</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Add Food Item</h1>
    <form id="foodForm" enctype="multipart/form-data" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01" required><br>
        <label for="cuisinetype">Cuisine Type:</label><br>
        <input type="text" id="cuisinetype" name="cuisinetype" required><br>
        <label for="photo">Photo:</label><br>
        <input type="file" id="photo" name="photo" accept="image/*" required><br><br>
        <button type="submit">Add Food</button>
    </form>

    <h2>Food Items</h2>
    <table id="foodTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Cuisine Type</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <!-- Food items will be appended here -->
        </tbody>
    </table>

    <script>
        document.getElementById('foodForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            fetch('add_food.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    loadFoodItems();
                    this.reset();
                } else {
                    alert('Error: ' + data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        function loadFoodItems() {
            fetch('fetch_food.php')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        var tbody = document.querySelector('#foodTable tbody');
                        tbody.innerHTML = '';
                        data.foodItems.forEach(item => {
                            var tr = document.createElement('tr');
                            tr.innerHTML = `
                                <td>${item.name}</td>
                                <td>${item.price}</td>
                                <td>${item.cuisinetype}</td>
                                <td><img src="${item.photo}" width="100" height="100" alt="${item.name}"></td>
                            `;
                            tbody.appendChild(tr);
                        });
                    } else {
                        alert('Error fetching food items: ' + data.error);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        // Load food items on page load
        loadFoodItems();
    </script>
</body>
</html>
