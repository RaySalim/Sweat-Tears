@extends('layouts.app')

@section('title', 'Contact | Blood Sweat & Tears')

@section('content')
    <section class="contact-section">
        <div class="container">
            <h1 style="font-size: 3rem; margin-bottom: 1rem; color: var(--accent); text-shadow: 3px 3px 0 #000;">Contact <span style="color: var(--accent);">Blood Sweat & Tears</span></h1>
            <p style="font-size: 1.2rem; color: var(--text-muted); margin-bottom: 2.5rem;">
                Let us be your support system. Contact us anytime you need to boost your self-esteem.
            </p>

            <div class="contact-details" style="justify-content: center; gap: 3rem; flex-wrap: wrap;">
                <div class="contact-item" style="text-align: center;">
                    <strong style="color: var(--accent);">Email</strong>
                    <br>
                    <span>hello@bloodsweatandtears.com</span>
                </div>
                <div class="contact-item" style="text-align: center;">
                    <strong style="color: var(--accent);">Phone</strong>
                    <br>
                    <span>20-04-0610-2308</span>
                </div>
                <div class="contact-item" style="text-align: center;">
                    <strong style="color: var(--accent);">Location</strong>
                    <br>
                    <span>Transylvania, Night Vale</span>
                </div>
            </div>
        </div>
    </section>
@endsection
