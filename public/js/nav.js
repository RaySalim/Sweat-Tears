(function () {
  /* --- Mobile Menu --- */
  const toggle = document.getElementById('navbarToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  const overlay = document.getElementById('mobileMenuOverlay');
  const closeBtn = document.getElementById('mobileMenuClose');

  if (toggle && mobileMenu && overlay) {
    function openMenu() {
      mobileMenu.classList.add('open');
      overlay.classList.add('open');
      toggle.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      mobileMenu.classList.remove('open');
      overlay.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }

    toggle.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        closeMenu();
      }
    });
  }

  /* --- Shein-style Cart --- */
  const cartBtn = document.getElementById('cartFloatBtn');
  const cartDrawer = document.getElementById('cartDrawer');
  const cartOverlay = document.getElementById('cartOverlay');
  const cartClose = document.getElementById('cartClose');
  const cartItems = document.getElementById('cartItems');
  const cartCount = document.getElementById('cartCount');
  const cartSubtotal = document.getElementById('cartSubtotal');
  const cartCheckout = document.getElementById('cartCheckout');
  const addButtons = document.querySelectorAll('.add-to-cart');

  let cart = [];

  function formatPrice(price) {
    return '$' + price.toFixed(2);
  }

  function renderCart() {
    if (cart.length === 0) {
      cartItems.innerHTML = '<div class="cart-empty">Your crypt is empty</div>';
      cartCount.textContent = '0';
      cartSubtotal.textContent = formatPrice(0);
      return;
    }

    let html = '';
    let subtotal = 0;

    cart.forEach((item, index) => {
      subtotal += item.price * item.qty;
      html += `
        <div class="cart-item" data-index="${index}">
          <img src="${item.image}" alt="${item.name}" class="cart-item-img">
          <div class="cart-item-info">
            <div class="cart-item-name">${item.name}</div>
            <div class="cart-item-price">${formatPrice(item.price)}</div>
          </div>
          <div class="cart-item-controls">
            <button class="cart-qty-btn cart-qty-minus" data-index="${index}">&#8722;</button>
            <span class="cart-item-qty">${item.qty}</span>
            <button class="cart-qty-btn cart-qty-plus" data-index="${index}">&#43;</button>
            <button class="cart-remove" data-index="${index}">Remove</button>
          </div>
        </div>
      `;
    });

    cartItems.innerHTML = html;
    cartCount.textContent = cart.reduce((sum, item) => sum + item.qty, 0);
    cartSubtotal.textContent = formatPrice(subtotal);

    document.querySelectorAll('.cart-qty-minus').forEach(btn => {
      btn.addEventListener('click', function() {
        const idx = parseInt(this.getAttribute('data-index'));
        if (cart[idx].qty > 1) {
          cart[idx].qty--;
        } else {
          cart.splice(idx, 1);
        }
        renderCart();
      });
    });

    document.querySelectorAll('.cart-qty-plus').forEach(btn => {
      btn.addEventListener('click', function() {
        const idx = parseInt(this.getAttribute('data-index'));
        cart[idx].qty++;
        renderCart();
      });
    });

    document.querySelectorAll('.cart-remove').forEach(btn => {
      btn.addEventListener('click', function() {
        const idx = parseInt(this.getAttribute('data-index'));
        cart.splice(idx, 1);
        renderCart();
      });
    });
  }

  function openCart() {
    cartDrawer.classList.add('open');
    cartOverlay.classList.add('open');
  }

  function closeCart() {
    cartDrawer.classList.remove('open');
    cartOverlay.classList.remove('open');
  }

  addButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      const card = this.closest('.product-card');
      const product = {
        id: card.getAttribute('data-product'),
        name: card.getAttribute('data-name'),
        price: parseFloat(card.getAttribute('data-price')),
        image: card.getAttribute('data-image'),
        qty: 1
      };

      const existing = cart.find(item => item.id === product.id);
      if (existing) {
        existing.qty++;
      } else {
        cart.push(product);
      }

      renderCart();
      openCart();
    });
  });

  cartBtn.addEventListener('click', openCart);
  cartClose.addEventListener('click', closeCart);
  cartOverlay.addEventListener('click', closeCart);
  cartCheckout.addEventListener('click', function() {
    if (cart.length === 0) return;
    alert('Proceeding to checkout with ' + cart.reduce((sum, item) => sum + item.qty, 0) + ' item(s)!');
  });
})();
