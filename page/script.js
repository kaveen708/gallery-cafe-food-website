document.getElementById('add-user-form').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;
    
    const response = await fetch('/backend/user.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username, password, role })
    });

    if (response.ok) {
        alert('User added successfully');
        loadUsers();
        document.getElementById('user-form').style.display = 'none';
    } else {
        alert('Error adding user');
    }
});

async function loadUsers() {
    const response = await fetch('/backend/user.php');
    const users = await response.json();
    
    const usersTable = document.getElementById('users-table');
    usersTable.innerHTML = `
        <tr>
            <th>Username</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    `;

    users.forEach(user => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${user.username}</td>
            <td>${user.role}</td>
            <td>
                <button onclick="editUser('${user.id}')">Edit</button>
                <button onclick="deleteUser('${user.id}')">Delete</button>
            </td>
        `;
        usersTable.appendChild(row);
    });
}

async function deleteUser(id) {
    const response = await fetch(`/backend/user.php`, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id })
    });

    if (response.ok) {
        alert('User deleted successfully');
        loadUsers();
    } else {
        alert('Error deleting user');
    }
}

function showUserForm() {
    var form = document.getElementById('user-form');
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
}

document.addEventListener('DOMContentLoaded', loadUsers);


document.addEventListener('DOMContentLoaded', function() {
    const searchBar = document.getElementById('searchBar');
    const categoryFilter = document.getElementById('categoryFilter');
    const foodItems = document.getElementById('foodItems').getElementsByClassName('food-item');

    searchBar.addEventListener('input', filterItems);
    categoryFilter.addEventListener('change', filterItems);

    function filterItems() {
        const searchText = searchBar.value.toLowerCase();
        const selectedCategory = categoryFilter.value;

        Array.from(foodItems).forEach(item => {
            const itemText = item.textContent.toLowerCase();
            const itemCategory = item.getAttribute('data-category');

            if ((itemText.includes(searchText) || searchText === '') && 
                (itemCategory === selectedCategory || selectedCategory === 'all')) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
});

