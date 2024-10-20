document.addEventListener('DOMContentLoaded', () => {
    const cart = [];
    const cartItemsContainer = document.getElementById('cartItems');
    const cartTotalElement = document.getElementById('cartTotal');
    const floatingCart = document.querySelector('.floating-cart');

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const itemName = button.getAttribute('data-item');
            const itemPrice = parseFloat(button.getAttribute('data-price'));

            // Add item to cart
            const existingItem = cart.find(item => item.name === itemName);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ name: itemName, price: itemPrice, quantity: 1 });
            }

            updateCart();
        });
    });

    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            const cartItemElement = document.createElement('div');
            cartItemElement.classList.add('cart-item');
            cartItemElement.innerHTML = `
                <p>${item.name} $${item.price.toFixed(2)} x ${item.quantity}</p>
                <p>${itemTotal.toFixed(2)}</p>
            `;
            cartItemsContainer.appendChild(cartItemElement);
        });

        cartTotalElement.textContent = `$${total.toFixed(2)}`;
        floatingCart.style.display = 'block'; // Show cart
    }

    document.getElementById('checkoutBtn').addEventListener('click', () => {
        // Handle checkout process
        alert('Proceed to checkout');
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const searchBar = document.getElementById('searchBar');
    const categoryFilter = document.getElementById('categoryFilter');
    const menuItems = document.querySelectorAll('.menu_card');

    function filterMenu() {
        const searchText = searchBar.value.toLowerCase();
        const selectedCategory = categoryFilter.value;

        menuItems.forEach(item => {
            const itemName = item.querySelector('.menu_text h2').textContent.toLowerCase();
            const itemCategory = item.getAttribute('data-category');
            
            const matchesSearch = itemName.includes(searchText);
            const matchesCategory = selectedCategory === 'all' || itemCategory === selectedCategory;

            if (matchesSearch && matchesCategory) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }

    searchBar.addEventListener('input', filterMenu);
    categoryFilter.addEventListener('change', filterMenu);

    // Initial filter
    filterMenu();
});
