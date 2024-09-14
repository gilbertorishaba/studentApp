@extends('layouts.main')
@section('content')
    <!-- <marquee behavior="" direction="services">Shaping the future of technology with code </marquee> -->
    <header>
        <div class="logo">
            <img src="{{ asset('images/gilbo.jpg') }}" alt="">
        </div>
        {{-- nav --}}
        @include('layouts.nav')

        {{-- nav --}}
    </header>

    <section= id="home">
        <h1>Welcome to Gilbert's Portfolio</h1>
        <p>Hello! I'm Gilbert Mugabo Orishaba, a passionate software developer.</p>
        </section>


        <section id="projects">
            <h2>Projects</h2>
            <div class="project">
                <h3>point of sale Application</h3>
                <p>This is an application that processes batch of sales on supermarkets counters and
                    eases shopping as it digitally displays prices of each prices of productsss
                </p>
            </div>
            <div class="project">
                <h3>Web based Clock</h3>
                <p>This is like a normal watch running on browsers.Developed with a combination of HTML, CSS,
                    Javasript,its worth it to explore it! </p>
            </div>
            <div class="project">
                <h3>Gadgets and Electronic Project</h3>
                <p>This an online store for all available gadgets used, refurbished and brandnew gadgets and electronics
                    that match the first growing tech era. Do ur shopping today and experience technology on your palm,
                    lap or desk. Come support our hardwork</p>
            </div>

        </section>

        <section id="contact">
            <h2>Contact</h2>
            <form id="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send</button>
            </form>
        </section>

        <footer>
            <p>&copy;Gilbo@2024</p>

        </footer>
    @endsection
