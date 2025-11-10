const cartCount = document.getElementById('cart-count');
const addButtons = document.querySelectorAll('.add-cart');

let count = 0;

addButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        count++;
        cartCount.textContent = count;
        btn.textContent = 'Added!';
        btn.disabled = true;
        setTimeout(() => {
            btn.textContent = 'Add to Cart';
            btn.disabled = false;
        }, 1500);
    });
});
