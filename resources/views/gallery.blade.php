@extends('layouts.app')

@section('title', 'Gallery | Blood Sweat & Tears')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="section-title" style="margin-bottom: 3rem;">Our <span style="color: var(--accent);">Gallery</span></h1>
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
                        <p class="desc">Everyday tissue with a bold crimson finish.</p>
                        <div class="price">$4.99</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
                <article class="product-card blood-border gothic-frame" data-product="2" data-name="Midnight Ultra" data-price="6.99" data-image="https://placehold.co/300x240/0a0a0a/8b0000?text=Midnight+Ultra">
                    <div class="blood-drips"></div>
                    <div class="coffin-corners">
                        <div class="coffin-corner tl"></div>
                        <div class="coffin-corner tr"></div>
                        <div class="coffin-corner bl"></div>
                        <div class="coffin-corner br"></div>
                    </div>
                    <img src="https://placehold.co/300x240/0a0a0a/8b0000?text=Midnight+Ultra" alt="Midnight Ultra" class="product-card-image">
                    <div class="product-card-content">
                        <h3>Midnight Ultra</h3>
                        <p class="desc">Extra strong for the darkest nights.</p>
                        <div class="price">$6.99</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
                <article class="product-card blood-border gothic-frame" data-product="3" data-name="Coffin Pack" data-price="3.49" data-image="https://placehold.co/300x240/0a0a0a/8b0000?text=Coffin+Pack">
                    <div class="blood-drips"></div>
                    <div class="coffin-corners">
                        <div class="coffin-corner tl"></div>
                        <div class="coffin-corner tr"></div>
                        <div class="coffin-corner bl"></div>
                        <div class="coffin-corner br"></div>
                    </div>
                    <img src="https://placehold.co/300x240/0a0a0a/8b0000?text=Coffin+Pack" alt="Coffin Pack" class="product-card-image">
                    <div class="product-card-content">
                        <h3>Coffin Pack</h3>
                        <p class="desc">Travel size for the wandering soul.</p>
                        <div class="price">$3.49</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
                <article class="product-card blood-border gothic-frame" data-product="4" data-name="Night Veil" data-price="5.49" data-image="https://placehold.co/300x240/0a0a0a/8b0000?text=Night+Veil">
                    <div class="blood-drips"></div>
                    <div class="coffin-corners">
                        <div class="coffin-corner tl"></div>
                        <div class="coffin-corner tr"></div>
                        <div class="coffin-corner bl"></div>
                        <div class="coffin-corner br"></div>
                    </div>
                    <img src="https://placehold.co/300x240/0a0a0a/8b0000?text=Night+Veil" alt="Night Veil" class="product-card-image">
                    <div class="product-card-content">
                        <h3>Night Veil</h3>
                        <p class="desc">Ultra-thin, ultra-discreet.</p>
                        <div class="price">$5.49</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
                <article class="product-card blood-border gothic-frame" data-product="5" data-name="Eclipse Box" data-price="8.99" data-image="https://placehold.co/300x240/0a0a0a/8b0000?text=Eclipse+Box">
                    <div class="blood-drips"></div>
                    <div class="coffin-corners">
                        <div class="coffin-corner tl"></div>
                        <div class="coffin-corner tr"></div>
                        <div class="coffin-corner bl"></div>
                        <div class="coffin-corner br"></div>
                    </div>
                    <img src="https://placehold.co/300x240/0a0a0a/8b0000?text=Eclipse+Box" alt="Eclipse Box" class="product-card-image">
                    <div class="product-card-content">
                        <h3>Eclipse Box</h3>
                        <p class="desc">Limited edition collector's pack.</p>
                        <div class="price">$8.99</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
                <article class="product-card blood-border gothic-frame" data-product="6" data-name="Shadow Soft" data-price="4.49" data-image="https://placehold.co/300x240/0a0a0a/8b0000?text=Shadow+Soft">
                    <div class="blood-drips"></div>
                    <div class="coffin-corners">
                        <div class="coffin-corner tl"></div>
                        <div class="coffin-corner tr"></div>
                        <div class="coffin-corner bl"></div>
                        <div class="coffin-corner br"></div>
                    </div>
                    <img src="https://placehold.co/300x240/0a0a0a/8b0000?text=Shadow+Soft" alt="Shadow Soft" class="product-card-image">
                    <div class="product-card-content">
                        <h3>Shadow Soft</h3>
                        <p class="desc">Whisper-soft for sensitive skin.</p>
                        <div class="price">$4.49</div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
