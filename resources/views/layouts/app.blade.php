<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blood Sweat & Tears')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Eerie fog background -->
    <div class="bg-fog">
        <div class="fog-layer"></div>
        <div class="fog-layer" style="animation-duration: 55s; animation-delay: -12s;"></div>
    </div>
    <!-- Flying bats -->
    <div class="bat" style="width: 40px; height: 20px; top: 10%; left: 5%; animation-duration: 6s; animation-delay: 0s;">🦇</div>
    <div class="bat" style="width: 55px; height: 28px; top: 28%; left: 85%; animation-duration: 9s; animation-delay: -2s;">🦇</div>
    <div class="bat" style="width: 35px; height: 18px; top: 52%; left: 12%; animation-duration: 7s; animation-delay: -5s;">🦇</div>
    <div class="bat" style="width: 48px; height: 24px; top: 70%; left: 90%; animation-duration: 8s; animation-delay: -8s;">🦇</div>
    <div class="bat" style="width: 42px; height: 21px; top: 18%; left: 60%; animation-duration: 10s; animation-delay: -3s;">🦇</div>

    <!-- Sticky Gothic Navbar -->
    <header class="site-header">
        <nav class="navbar" role="navigation" aria-label="Main navigation">
            <a href="/" class="navbar-brand">
                Blood <span class="brand-accent">Sweat &amp; Tears</span>
            </a>

            <ul class="navbar-links">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="#bat-delivery">Bat Delivery</a></li>
            </ul>

        <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle navigation menu" aria-expanded="false">
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
        </button>
    </nav>
    </header>

    <main class="site-main">
        @yield('content')
    </main>

    <!-- Bat Delivery Section -->
    <section class="bat-delivery blood-border gothic-frame" id="bat-delivery">
        <div class="blood-drips" id="batDeliveryDrips"></div>
        <div class="coffin-corners">
            <div class="coffin-corner tl"></div>
            <div class="coffin-corner tr"></div>
            <div class="coffin-corner bl"></div>
            <div class="coffin-corner br"></div>
        </div>
        <div class="container">
            <div class="bat-delivery-header">
                <h2>Delivery by Bat</h2>
                <p>We fly your tissue coffin through any dark world of vampire &mdash; Transylvania, Night Vale, or Castle Dracula &mdash; straight to your crypt.</p>
            </div>

            <div class="bat-world">
                <div class="bat-world-moon"></div>
                <div class="bat-carrier">
                    <div class="bat-world-bat">🦇</div>
                    <div class="bat-coffin"></div>
                    <div class="bat-boo" id="batBoo">BOO!</div>
                </div>
            </div>

            <form class="bat-delivery-form blood-border" id="batDeliveryForm" novalidate>
                <h3>Send a Tissue Coffin</h3>
                <label for="batDestination">Destination (any dark world)</label>
                <select id="batDestination" name="destination" required>
                    <option value="">Choose a dark realm...</option>
                    <option value="Transylvania">Transylvania, Night Vale</option>
                    <option value="Castle Dracula">Castle Dracula, The Carpathians</option>
                    <option value="The Crypt District">The Crypt District, Midnight City</option>
                    <option value="Hollow Hollow">Hollow Hollow, The Bleeding Woods</option>
                    <option value="Nocturne Spire">Nocturne Spire, Shadowfen</option>
                </select>
                <label for="batRecipient">Recipient Name</label>
                <input type="text" id="batRecipient" name="recipient" placeholder="e.g. Lord Vladimir" required>
                <label for="batNote">Sealing Note (written in blood)</label>
                <input type="text" id="batNote" name="note" placeholder="Optional message for the vampiric recipient">
                <button type="submit" class="bat-send-btn">Send by Bat 🦇</button>
            </form>
        </div>
    </section>

    <div class="bat-status" id="batStatus">
        <span>🦇</span>
        <span id="batStatusText">Your tissue coffin is airborne!</span>
    </div>

    <div class="bat-boo-full" id="batBooFull">BOO!</div>

    <div class="delivery-notification" id="deliveryNotification">
        <div class="delivery-notification-content">
            <span class="delivery-icon">🦇</span>
            <h3 class="delivery-title">Delivery Received</h3>
            <p class="delivery-message" id="deliveryMessage">Your tissue coffin has been received.</p>
            <button class="delivery-close" id="deliveryClose">&times;</button>
        </div>
    </div>
    <div class="delivery-notification-overlay"></div>

    <!-- Gothic Footer -->
    <footer class="site-footer blood-border gothic-frame">
        <div class="blood-drips"></div>
        <div class="footer-container">
            <div class="footer-brand">
                <a href="/" class="footer-logo">
                    Blood <span class="brand-accent">Sweat &amp; Tears</span>
                </a>
                <p class="footer-tagline">Tissue for the night &mdash; soft enough for a vampire&rsquo;s tears.</p>
            </div>

            <div class="footer-links">
                <h4 class="footer-heading">Navigate</h4>
                <ul class="footer-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="#bat-delivery">Bat Delivery</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h4 class="footer-heading">Contact</h4>
                <ul class="footer-list">
                    <li>hello@bloodsweatandtears.com</li>
                    <li>20-04-0610-2308</li>
                    <li>Transylvania, Night Vale</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Blood Sweat & Tears. All rights reserved.</p>
        </div>
    </footer>

    <!-- AI Assistant Bat Character -->
    <div class="ai-assistant">
        <button class="ai-bat-btn" id="aiBatBtn" aria-label="Vampire Assistant">
            <span>🦇</span>
            <span class="ai-bat-badge" id="aiBadge">!</span>
        </button>
    </div>

    <div class="ai-chat-window" id="aiChatWindow">
        <div class="ai-chat-header">
            <div class="ai-bat-avatar">🦇</div>
            <div>
                <h3>Count Batty</h3>
                <p>Your Handsome Vampire Assistant</p>
            </div>
            <button class="ai-chat-close" id="aiChatClose">&times;</button>
        </div>
        <div class="ai-chat-messages" id="aiChatMessages">
            <div class="ai-message ai-bot">
                Good evening, darling! I'm Count Batty, your handsome vampire assistant. How may I help you find the perfect tissue coffin tonight?
            </div>
        </div>
        <div class="ai-suggestions">
            <button class="ai-suggestion" onclick="sendAiSuggestion('Show me tissue products')">Show Tissues</button>
            <button class="ai-suggestion" onclick="sendAiSuggestion('Delivery by bat')">Bat Delivery</button>
            <button class="ai-suggestion" onclick="sendAiSuggestion('Contact us')">Contact Us</button>
        </div>
        <div class="ai-chat-input">
            <input type="text" id="aiChatInput" placeholder="Ask Count Batty...">
            <button id="aiChatSend">Send</button>
        </div>
    </div>

    <!-- Shein-style Floating Cart Button -->
    <button class="cart-float-btn" id="cartFloatBtn" aria-label="Shopping Cart">
        <span class="cart-icon">&#128722;</span>
        <span class="cart-count" id="cartCount">0</span>
    </button>

    <!-- Shein-style Cart Drawer -->
    <div class="cart-drawer" id="cartDrawer">
        <div class="cart-drawer-overlay" id="cartOverlay"></div>
        <div class="cart-drawer-panel blood-border gothic-frame">
            <div class="blood-drips"></div>
            <div class="cart-header">
                <h2 id="cartHeaderTitle">Shopping Cart <span id="cartItemCount">(0)</span></h2>
                <button class="cart-close" id="cartClose">&times;</button>
            </div>
            <div class="cart-items" id="cartItems">
                <div class="cart-empty">
                    <span class="cart-empty-icon">🛍</span>
                    <p>Your cart is empty</p>
                    <p class="cart-empty-hint">Add some tissues to get started</p>
                </div>
            </div>
            <!-- Sticky bottom checkout bar (Shein/Shopee style) -->
            <div class="cart-bottom-bar">
                <div class="cart-subtotal">
                    <span>Subtotal:</span>
                    <span class="subtotal-value" id="cartSubtotal">$0.00</span>
                </div>
                <button class="cart-checkout" id="cartCheckout">Checkout</button>
            </div>
        </div>
    </div>

    <!-- Payment Popup Modal -->
    <div class="payment-modal" id="paymentModal">
        <div class="payment-modal-overlay" id="paymentModalOverlay"></div>
        <div class="payment-modal-panel blood-border gothic-frame">
            <div class="blood-drips"></div>
            <div class="payment-modal-header">
                <h2>Select Payment</h2>
                <button class="payment-modal-close" id="paymentModalClose">&times;</button>
            </div>
            <div class="payment-modal-body">
                <div class="payment-option-modal">
                    <input type="radio" name="modalPayment" value="card" id="payCard" checked>
                    <label for="payCard">
                        <span class="modal-payment-icon">💳</span>
                        <span class="modal-payment-label">Credit / Debit Card</span>
                        <span class="modal-payment-desc">Pay securely with your card</span>
                    </label>
                </div>
                <div class="payment-option-modal">
                    <input type="radio" name="modalPayment" value="cash" id="payCash">
                    <label for="payCash">
                        <span class="modal-payment-icon">💵</span>
                        <span class="modal-payment-label">Cash on Delivery</span>
                        <span class="modal-payment-desc">Pay cash when your coffin arrives</span>
                    </label>
                </div>
            </div>
            <div class="payment-modal-footer">
                <button class="payment-modal-cancel" id="paymentModalCancel">Cancel</button>
                <button class="payment-modal-confirm" id="paymentModalConfirm">Confirm Order</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>
