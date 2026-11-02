@extends('layouts.app')

@section('title', 'Contact | Blood Sweat & Tears')

@section('content')
    <section class="contact-section">
        <div class="container">
            <h1 style="font-size: 3rem; margin-bottom: 1rem; color: var(--accent); text-shadow: 3px 3px 0 #000; text-align: center;">Contact <span style="color: var(--accent);">Sweat & Tears</span></h1>
            <p style="font-size: 1.2rem; color: var(--text-muted); margin-bottom: 1.5rem; text-align: center;">
                Let us be your support system! Contact us anytime you need to boost your self esteem!
            </p>
            <p style="font-size: 1.2rem; color: var(--text-muted); margin-bottom: 2.5rem; text-align: center;">
                Ring us at 20-04-0610-2308!<br>or visit our store! <a href="/" style="color: var(--accent); text-decoration: underline;">click here!</a>
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
