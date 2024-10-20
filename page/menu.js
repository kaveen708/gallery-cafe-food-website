document.getElementById('searchBar').addEventListener('input', filterMenu);
document.getElementById('categoryFilter').addEventListener('change', filterMenu);

function filterMenu() {
    const searchQuery = document.getElementById('searchBar').value.toLowerCase();
    const selectedCategory = document.getElementById('categoryFilter').value;
    
    const menuItems = document.querySelectorAll('.menu_card');

    menuItems.forEach(item => {
        const itemName = item.querySelector('h2').textContent.toLowerCase();
        const itemCategory = item.querySelector('span').textContent.toLowerCase();

        const matchesSearch = itemName.includes(searchQuery);
        const matchesCategory = selectedCategory === 'all' || itemCategory === selectedCategory;

        if (matchesSearch && matchesCategory) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
}
