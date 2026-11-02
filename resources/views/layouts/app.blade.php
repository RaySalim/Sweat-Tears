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
            </ul>

            <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle navigation menu" aria-expanded="false">
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
            </button>
        </nav>

        <div class="mobile-menu" id="mobileMenu">
            <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close menu">&times;</button>
            <ul class="mobile-menu-links">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <main class="site-main">
        @yield('content')
    </main>

    <!-- Gothic Footer -->
    <footer class="site-footer">
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

    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

    <!-- Shein-style Floating Cart Button -->
    <button class="cart-float-btn" id="cartFloatBtn" aria-label="Shopping Cart">
        <span class="cart-icon">&#128722;</span>
        <span class="cart-count" id="cartCount">0</span>
    </button>

    <!-- Shein-style Cart Drawer -->
    <div class="cart-drawer" id="cartDrawer">
        <div class="cart-drawer-overlay" id="cartOverlay"></div>
        <div class="cart-drawer-panel">
            <div class="cart-header">
                <h2>Shopping Cart</h2>
                <button class="cart-close" id="cartClose">&times;</button>
            </div>
            <div class="cart-items" id="cartItems">
                <div class="cart-empty">Your crypt is empty</div>
            </div>
            <div class="cart-footer">
                <div class="cart-subtotal">
                    <span>Subtotal:</span>
                    <span class="subtotal-value" id="cartSubtotal">$0.00</span>
                </div>
                <button class="cart-checkout" id="cartCheckout">Checkout</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>
