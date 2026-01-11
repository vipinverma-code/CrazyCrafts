@extends('layouts.app')

@section('content')
    <!-- PAGE HEADER -->
    <section class="contact-hero">
        <div class="container text-center">
            <h1>Get in Touch</h1>
            <p>
                Have a question about an order, a custom request, or just want to say hello?
                We'd love to hear from you.
            </p>
        </div>
    </section>

    <div class="container my-5">
        <div class="row g-4">

            <!-- LEFT SIDE -->
            <div class="col-lg-5">

                <!-- CONTACT INFO -->
                <div class="contact-card mb-4">
                    <h4>Contact Information</h4>

                    <div class="info-row">
                        <span class="icon">📍</span>
                        <div>
                            <strong>Our Studio</strong>
                            <p>123 Craft Lane, Civil Lines<br>Jaipur, Rajasthan 302001</p>
                        </div>
                    </div>

                    <div class="info-row">
                        <span class="icon">📞</span>
                        <div>
                            <strong>Phone</strong>
                            <p>+91 98765 43210</p>
                        </div>
                    </div>

                    <div class="info-row">
                        <span class="icon">✉️</span>
                        <div>
                            <strong>Email</strong>
                            <p>hello@kriticrafts.com</p>
                        </div>
                    </div>
                </div>

                <!-- WHOLESALE -->
                <div class="wholesale-card">
                    <h5>Wholesale Inquiries</h5>
                    <p>
                        Are you a retailer interested in stocking our products?
                        We offer special pricing for bulk orders.
                    </p>
                    <a href="#" class="wholesale-link">Contact our sales team →</a>
                </div>

            </div>

            <!-- RIGHT SIDE FORM -->
            <div class="col-lg-7 d-flex">
                <div class="contact-form-card w-100">
                    <h4>Send us a Message</h4>

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="your@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter your mobile number"
                                pattern="[0-9]{10}" required>

                        </div>

                        <div class="mb-2">
                            <label>Message</label>
                            <textarea name="message" rows="5" class="form-control" placeholder="How can we help you?" required></textarea>
                        </div>

                        <button type="submit" class="send-btn w-100">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- TOAST -->
    <div id="contactToast" class="contact-toast">
        Message sent successfully ✔️
    </div>

    @if (session('success'))
        <script>
            window.onload = function() {
                const toast = document.getElementById('contactToast');
                toast.classList.add('show');
                setTimeout(() => toast.classList.remove('show'), 3500);
            }
        </script>
    @endif
@endsection

@push('styles')
    <style>
        :root {
            --primary: #357185;
            --secondary: #ece0c4;
            --accent: #9fb8b6;
            --dark: #1f2c2f;
        }

        /* HERO */
        .contact-hero {
            background: linear-gradient(to right, var(--secondary), #fff);
            padding: 70px 15px;
            text-align: center;
            border-radius: 0 0 50px 50px;
        }

        .contact-hero h1 {
            font-size: 42px;
            font-weight: 800;
            color: var(--dark);
        }

        .contact-hero p {
            max-width: 650px;
            margin: 10px auto 0;
            color: #555;
        }

        /* CARDS */



        .contact-card,
        .contact-form-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .contact-card h4,
        .contact-form-card h4 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* INFO ROW */
        .info-row {
            display: flex;
            gap: 15px;
            margin-bottom: 18px;
        }

        .info-row .icon {
            width: 42px;
            height: 42px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* WHOLESALE */
        .wholesale-card {
            background: var(--secondary);
            border-radius: 20px;
            padding: 22px;
        }

        .wholesale-link {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
        }

        /* BUTTON */
        .send-btn {
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px;
            font-weight: 600;
            margin-top: auto;
            padding: 14px;
            font-size: 16px;

        }

        /* TOAST */
        .contact-toast {
            position: fixed;
            right: 25px;
            bottom: 85px;
            background: #1f2c2f;
            color: #fff;
            padding: 12px 20px;
            border-radius: 30px;
            opacity: 0;
            transform: translateY(20px);
            transition: .4s ease;
            z-index: 9999;
        }

        .contact-toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* RESPONSIVE */
        @media(max-width:768px) {
            .contact-hero h1 {
                font-size: 30px;
            }

            .contact-hero p {
                font-size: 14px;
            }
        }
    </style>
@endpush
