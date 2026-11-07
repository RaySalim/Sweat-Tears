@extends('layouts.app')

@section('title', 'Home | Blood Sweat & Tears')

@section('content')
    <!-- Hero Section -->
    <section class="hero blood-border">
        <div class="blood-drips"></div>
        <div class="hero-container">
            <h1>Blood <span style="color: var(--accent); text-shadow: 4px 4px 0 #000;">Sweat & Tears</span></h1>
            <p class="hero-tagline">Tissue as dark as your soul. Soft enough for a vampire's tears. Sealed in sunlight-proof coffins.</p>
            <a href="/gallery" class="hero-btn">Shop Tissues</a>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Featured <span style="color: var(--accent);">Products</span></h2>
            <div class="product-grid">
                <article class="product-card blood-border gothic-frame" data-product="1" data-name="Crimson Soft" data-price="4.99" data-image="https://placehold.co/300x240/0a0a0a/8b0000?text=Crimson+Soft">
                    <div class="blood-drips"></div>
                    <div class="coffin-corners">
                        <div class="coffin-corner tl"></div>
                        <div class="coffin-corner tr"></div>
                        <div class="coffin-corner bl"></div>
                        <div class="coffin-corner br"></div>
                    </div>
                    <img src="https://placehold.co/300x240/0a0a0a/8b0000?text=Crimson+Soft" alt="Crimson Soft" class="product-card-image">
                    <div class="product-card-content">
                        <h3>Crimson Soft</h3>
                        <p class="desc">Everyday tissue for the night.</p>
                        <div class="price">$4.99</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
                <article class="product-card blood-border gothic-frame" data-product="2" data-name="Midnight Ultra" data-price="6.99" data-image="https://placehold.co/300x240/0a0000/ff0000?text=Midnight+Ultra">
                    <div class="blood-drips"></div>
                    <div class="coffin-corners">
                        <div class="coffin-corner tl"></div>
                        <div class="coffin-corner tr"></div>
                        <div class="coffin-corner bl"></div>
                        <div class="coffin-corner br"></div>
                    </div>
                    <img src="https://placehold.co/300x240/0a0000/ff0000?text=Midnight+Ultra" alt="Midnight Ultra" class="product-card-image">
                    <div class="product-card-content">
                        <h3>Midnight Ultra</h3>
                        <p class="desc">Extra strong for darkest nights.</p>
                        <div class="price">$6.99</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
                <article class="product-card blood-border gothic-frame" data-product="3" data-name="Coffin Pack" data-price="3.49" data-image="https://placehold.co/300x240/0a0000/ff0000?text=Coffin+Pack">
                    <div class="blood-drips"></div>
                    <div class="coffin-corners">
                        <div class="coffin-corner tl"></div>
                        <div class="coffin-corner tr"></div>
                        <div class="coffin-corner bl"></div>
                        <div class="coffin-corner br"></div>
                    </div>
                    <img src="https://placehold.co/300x240/0a0000/ff0000?text=Coffin+Pack" alt="Coffin Pack" class="product-card-image">
                    <div class="product-card-content">
                        <h3>Coffin Pack</h3>
                        <p class="desc">Travel size for wandering souls.</p>
                        <div class="price">$3.49</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="/gallery" class="hero-btn">View Full Gallery</a>
            </div>
        </div>
    </section>

    <!-- About Preview -->
    <section class="about-section blood-border gothic-frame">
        <div class="blood-drips"></div>
        <div class="coffin-corners">
            <div class="coffin-corner tl"></div>
            <div class="coffin-corner tr"></div>
            <div class="coffin-corner bl"></div>
            <div class="coffin-corner br"></div>
        </div>
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2>About <span style="color: var(--accent);">Blood Sweat & Tears</span></h2>
                    <p>Tissues as your number one supporter throughout your blood, sweat, and tears. Crafted for creatures of the night who demand quality without compromise.</p>
                    <p>Every sheet is engineered to be ultra-absorbent, gentle on pale skin, and sealed in sunlight-proof packaging.</p>
                </div>
                <div class="about-image">
                    <img src="https://placehold.co/400x320/0a0a0a/8b0000?text=About+Sweat+%26+Tears" alt="About Sweat & Tears">
                </div>
            </div>
        </div>
    </section>
@endsection
