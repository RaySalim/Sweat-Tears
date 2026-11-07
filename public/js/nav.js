(function () {
  /* --- Shein-style Cart --- */
  const cartBtn = document.getElementById('cartFloatBtn');
  const cartDrawer = document.getElementById('cartDrawer');
  const cartOverlay = document.getElementById('cartOverlay');
  const cartClose = document.getElementById('cartClose');
  const cartItems = document.getElementById('cartItems');
  const cartCount = document.getElementById('cartCount');
  const cartSubtotal = document.getElementById('cartSubtotal');
  const cartTotal = document.getElementById('cartTotal');
  const cartItemCount = document.getElementById('cartItemCount');
  const cartCheckout = document.getElementById('cartCheckout');

  /* Payment modal elements */
  const paymentModal = document.getElementById('paymentModal');
  const paymentModalOverlay = document.getElementById('paymentModalOverlay');
  const paymentModalClose = document.getElementById('paymentModalClose');
  const paymentModalCancel = document.getElementById('paymentModalCancel');
  const paymentModalConfirm = document.getElementById('paymentModalConfirm');
  let selectedModalPayment = 'card';
  const addButtons = document.querySelectorAll('.add-to-cart');

  let cart = [];
  let selectedPayment = 'card';
  let selectedDelivery = 'standard';

  const deliveryPrices = {
    standard: 4.99,
    express: 9.99,
    pickup: 0,
    bat: 13.99
  };

  function formatPrice(price) {
    return '$' + price.toFixed(2);
  }

  function renderCart() {
    if (cart.length === 0) {
      cartItems.innerHTML = '<div class="cart-empty">Your crypt is empty</div>';
      cartCount.textContent = '0';
      cartSubtotal.textContent = formatPrice(0);
      if (cartTotal) cartTotal.textContent = formatPrice(0);
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

    const deliveryCost = deliveryPrices[selectedDelivery] || 0;
    const total = subtotal + deliveryCost;

    cartItems.innerHTML = html;
    cartCount.textContent = cart.reduce((sum, item) => sum + item.qty, 0);
    cartSubtotal.textContent = formatPrice(subtotal);
    if (cartItemCount) cartItemCount.textContent = '(' + cart.reduce((sum, item) => sum + item.qty, 0) + ')';
    if (cartTotal) cartTotal.textContent = formatPrice(total);

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

  document.querySelectorAll('input[name="payment"]').forEach(radio => {
    radio.addEventListener('change', function() {
      selectedPayment = this.value;
    });
  });

  document.querySelectorAll('input[name="delivery"]').forEach(radio => {
    radio.addEventListener('change', function() {
      selectedDelivery = this.value;
      renderCart();
    });
  });

  document.querySelectorAll('input[name="modalPayment"]').forEach(radio => {
    radio.addEventListener('change', function() {
      selectedModalPayment = this.value;
    });
  });

  function openPaymentModal() {
    paymentModal.classList.add('open');
    paymentModalOverlay.classList.add('open');
  }

  function closePaymentModal() {
    paymentModal.classList.remove('open');
    paymentModalOverlay.classList.remove('open');
  }

  cartCheckout.addEventListener('click', function() {
    if (cart.length === 0) return;
    closeCart();
    openPaymentModal();
  });

  paymentModalClose.addEventListener('click', closePaymentModal);
  paymentModalCancel.addEventListener('click', closePaymentModal);
  paymentModalOverlay.addEventListener('click', closePaymentModal);

  paymentModalConfirm.addEventListener('click', function() {
    if (cart.length === 0) {
      closePaymentModal();
      return;
    }
    const paymentLabel = selectedModalPayment === 'card' ? 'Credit/Debit Card' : 'Cash on Delivery';
    const deliveryLabel = selectedDelivery === 'standard' ? 'Standard Delivery' : selectedDelivery === 'express' ? 'Express (Midnight)' : selectedDelivery === 'pickup' ? 'Coffin Pickup' : 'Delivery by Bat 🦇';
    const itemCount = cart.reduce((sum, item) => sum + item.qty, 0);

    closePaymentModal();
    cart = [];
    renderCart();

    /* Count Batty thanks the customer and proceeds with bat delivery */
    openAiChat();
    addAiMessage('Thank you for your order, darling! ' + itemCount + ' tissue coffin' + (itemCount > 1 ? 's' : '') + ' has been placed via ' + paymentLabel + '. I shall personally deliver them by bat to your dark realm right away! 🦇🩸', 'ai-bot');

    setTimeout(() => {
      const destSelect = document.getElementById('batDestination');
      if (destSelect && batForm) {
        batForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
        destSelect.value = selectedDelivery === 'bat' ? 'Transylvania' : '';
        addAiMessage('I am now flying your tissue coffin by bat to your destination. Please fill in the recipient details above and I will deliver it straight to your crypt!', 'ai-bot');
      }
    }, 2000);
  });

  /* --- Bat Delivery Form --- */
  const batForm = document.getElementById('batDeliveryForm');
  const batStatus = document.getElementById('batStatus');
  const batStatusText = document.getElementById('batStatusText');
  const batCarrier = document.querySelector('.bat-carrier');
  const batBooFull = document.getElementById('batBooFull');
  const deliveryNotification = document.getElementById('deliveryNotification');
  const deliveryNotificationOverlay = document.querySelector('.delivery-notification-overlay');
  const deliveryClose = document.getElementById('deliveryClose');
  const deliveryMessage = document.getElementById('deliveryMessage');

  if (batForm) {
    batForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const destination = this.destination.value;
      const recipient = this.recipient.value;
      const note = this.note.value || '(no message)';

      batStatusText.textContent = `Flying to ${destination} for ${recipient}...`;
      batStatus.classList.add('show');

      if (batCarrier) {
        batCarrier.classList.add('flying-away');
        batCarrier.classList.remove('returned', 'turnaround', 'spinning');
      }
      if (batBooFull) batBooFull.classList.remove('show');
      if (deliveryNotification) deliveryNotification.classList.remove('show');
      if (deliveryNotificationOverlay) deliveryNotificationOverlay.classList.remove('show');

      setTimeout(() => {
        batStatusText.textContent = `Delivered! ${recipient}'s tissue coffin has arrived in ${destination}. ${note}`;
      }, 2600);

      setTimeout(() => {
        if (batCarrier) {
          batCarrier.classList.remove('flying-away');
          batCarrier.classList.add('returning');
        }
      }, 3600);

      setTimeout(() => {
        if (batCarrier) {
          batCarrier.classList.remove('returning');
          batCarrier.classList.add('returned', 'turnaround', 'spinning');
        }
        if (batBooFull) batBooFull.classList.add('show');
      }, 6000);

      setTimeout(() => {
        if (batCarrier) {
          batCarrier.classList.remove('turnaround', 'spinning');
          batCarrier.classList.add('returned');
        }
        if (batBooFull) batBooFull.classList.remove('show');
        if (deliveryMessage) deliveryMessage.textContent = `${recipient} received the tissue coffin in ${destination}. ${note}`;
        if (deliveryNotification) deliveryNotification.classList.add('show');
        if (deliveryNotificationOverlay) deliveryNotificationOverlay.classList.add('show');
        setTimeout(() => {
          batStatus.classList.remove('show');
          batForm.reset();
        }, 1500);
      }, 10000);
    });
  }

  if (deliveryClose) {
    deliveryClose.addEventListener('click', () => {
      if (deliveryNotification) deliveryNotification.classList.remove('show');
      if (deliveryNotificationOverlay) deliveryNotificationOverlay.classList.remove('show');
    });
  }
  if (deliveryNotificationOverlay) {
    deliveryNotificationOverlay.addEventListener('click', () => {
      if (deliveryNotification) deliveryNotification.classList.remove('show');
      if (deliveryNotificationOverlay) deliveryNotificationOverlay.classList.remove('show');
    });
  }

  /* --- Blood Drips Generator --- */
  function generateBloodDrips(container, count, side) {
    if (!container) return;
    container.innerHTML = '';
    const rect = container.getBoundingClientRect();
    const width = rect.width || 400;
    for (let i = 0; i < count; i++) {
      const drip = document.createElement('div');
      drip.className = `blood-drip ${side}`;
      drip.style.left = (Math.random() * Math.max(0, width - 20)) + 'px';
      drip.style.animationDelay = (Math.random() * 2.5) + 's';
      drip.style.animationDuration = (2 + Math.random() * 1.5) + 's';
      const dripSize = 10 + Math.random() * 14;
      drip.style.width = dripSize + 'px';
      container.appendChild(drip);
    }
  }

  function initBloodDrips() {
    document.querySelectorAll('.blood-drips').forEach(container => {
      const parent = container.parentElement;
      const isBottom = container.classList.contains('drips-bottom');
      generateBloodDrips(container, isBottom ? 8 : 10, isBottom ? 'bottom' : 'top');

      if (!isBottom) {
        const bottomClone = document.createElement('div');
        bottomClone.className = 'blood-drips drips-bottom';
        parent.appendChild(bottomClone);
        generateBloodDrips(bottomClone, 8, 'bottom');
      }
    });
  }

  initBloodDrips();

  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(initBloodDrips, 150);
  });

  /* --- AI Assistant Bat (Count Batty) --- */
  const aiBatBtn = document.getElementById('aiBatBtn');
  const aiChatWindow = document.getElementById('aiChatWindow');
  const aiChatClose = document.getElementById('aiChatClose');
  const aiChatMessages = document.getElementById('aiChatMessages');
  const aiChatInput = document.getElementById('aiChatInput');
  const aiChatSend = document.getElementById('aiChatSend');
  const aiBadge = document.getElementById('aiBadge');

  let aiChatOpen = false;

  /* Idle timer placeholder (bat flight removed) */
  let idleTimer;

  function startIdleTimer() {
    clearTimeout(idleTimer);
    idleTimer = setTimeout(() => {
      // No flying bat element - kept for future use
    }, 10000);
  }

  function stopIdleTimer() {
    clearTimeout(idleTimer);
  }

  function resetIdleTimer() {
    stopIdleTimer();
    startIdleTimer();
  }

  startIdleTimer();

  const aiResponses = {
    greeting: ['Good evening, darling!', 'Welcome to the crypt!', 'Hail, night creature!'],
    tissues: ['Our finest tissue coffins are ready for you, my handsome friend.', 'Each sheet is sealed in sunlight-proof packaging. Very chic.', 'Crimson Soft for everyday elegance, Midnight Ultra for the boldest nights.'],
    delivery: ['I shall personally fly your order by bat to any dark realm!', 'Bat delivery is swift, silent, and very dashing.', 'Your tissue coffin will arrive by moonlit wing.'],
    contact: ['Reach us at hello@bloodsweatandtears.com or call 20-04-0610-2308.', 'We reside in Transylvania, Night Vale. Very exclusive.'],
    default: ['How dashing of you to ask!', 'I am at your service, my gorgeous patron.', 'Let me know what dark desire you seek.'],
    bye: ['Farewell, until the next full moon!', 'Sleep well in your coffin, darling.'],
    help: ['I can show you our tissue collection, arrange bat delivery, or share our contact details. Just ask!']
  };

  function getAiResponse(message) {
    const msg = message.toLowerCase();
    if (msg.includes('hi') || msg.includes('hello') || msg.includes('evening')) return randomFrom(aiResponses.greeting);
    if (msg.includes('tissue') || msg.includes('product') || msg.includes('buy') || msg.includes('shop')) return randomFrom(aiResponses.tissues);
    if (msg.includes('delivery') || msg.includes('bat')) return randomFrom(aiResponses.delivery);
    if (msg.includes('contact') || msg.includes('email') || msg.includes('phone')) return randomFrom(aiResponses.contact);
    if (msg.includes('bye') || msg.includes('goodbye') || msg.includes('farewell')) return randomFrom(aiResponses.bye);
    if (msg.includes('help') || msg.includes('what can')) return randomFrom(aiResponses.help);
    return randomFrom(aiResponses.default);
  }

  function randomFrom(arr) { return arr[Math.floor(Math.random() * arr.length)]; }

  function addAiMessage(text, sender = 'ai-bot') {
    const div = document.createElement('div');
    div.className = `ai-message ${sender}`;
    div.textContent = text;
    aiChatMessages.appendChild(div);
    aiChatMessages.scrollTop = aiChatMessages.scrollHeight;
  }

  function addAiTyping() {
    const div = document.createElement('div');
    div.className = 'ai-message ai-bot ai-typing';
    div.innerHTML = '<span></span><span></span><span></span>';
    div.id = 'aiTyping';
    aiChatMessages.appendChild(div);
    aiChatMessages.scrollTop = aiChatMessages.scrollHeight;
  }

  function removeAiTyping() {
    const typing = document.getElementById('aiTyping');
    if (typing) typing.remove();
  }

  function openAiChat() {
    aiChatWindow.classList.add('open');
    aiChatOpen = true;
    aiBatBtn.classList.remove('flying-around');
    aiBatBtn.classList.add('returning', 'at-spot');
    aiBatBtn.style.transform = 'translate(0, 0) rotate(-8deg) scale(1)';
  }

  function closeAiChat() {
    aiChatWindow.classList.remove('open');
    aiChatOpen = false;
    aiBatBtn.classList.remove('flying-around', 'returning');
    aiBatBtn.classList.add('at-spot');
    aiBatBtn.style.transform = 'translate(0, 0) rotate(-8deg) scale(1)';
    resetIdleTimer();
  }

  function handleAiSend() {
    const text = aiChatInput.value.trim();
    if (!text) return;
    addAiMessage(text, 'ai-user');
    aiChatInput.value = '';
    addAiTyping();
    setTimeout(() => {
      removeAiTyping();
      addAiMessage(getAiResponse(text), 'ai-bot');
    }, 1500);
  }

  aiBatBtn.addEventListener('click', () => {
    resetIdleTimer();
    if (aiChatOpen) closeAiChat(); else openAiChat();
  });

  aiChatClose.addEventListener('click', () => {
    resetIdleTimer();
    closeAiChat();
  });

  aiChatSend.addEventListener('click', () => {
    resetIdleTimer();
    handleAiSend();
  });

  aiChatInput.addEventListener('keydown', (e) => {
    resetIdleTimer();
    if (e.key === 'Enter') handleAiSend();
  });

  aiChatInput.addEventListener('input', resetIdleTimer);

  /* Reset idle timer on any page interaction */
  document.addEventListener('mousemove', resetIdleTimer);
  document.addEventListener('keydown', resetIdleTimer);
  document.addEventListener('click', resetIdleTimer);
  document.addEventListener('scroll', resetIdleTimer);

  window.sendAiSuggestion = function (text) {
    resetIdleTimer();
    aiChatInput.value = text;
    handleAiSend();
    if (!aiChatOpen) openAiChat();
  };
})();
