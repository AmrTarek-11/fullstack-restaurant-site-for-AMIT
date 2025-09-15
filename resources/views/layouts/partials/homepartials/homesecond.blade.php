<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/homecss/styleofthehomesecond.css') }}    ">
</head>

<body>
    <section class="menu-section">
        <div class="menu-container">
            <h2 class="section-title">Browse Our Menu</h2>

            <div class="menu-grid">
                <!-- Breakfast -->
                <div class="menu-card">
                    <div class="icon">
                        <img src="{{ asset('images/breakfast.png') }}" alt="Breakfast">
                    </div>
                    <h5>Breakfast</h5>
                    <p>In the new era of technology we look in the future with certainty and pride for our life.</p>
                    <a href="{{ route('menu.index', ['category' => 'breakfast']) }}" class="explore-link">Explore
                        Menu</a>
                </div>

                <!-- Main Dishes -->
                <div class="menu-card">
                    <div class="icon">
                        <img src="{{ asset('images/maindish.png') }}" alt="Main Dishes">
                    </div>
                    <h5>Main Dishes</h5>
                    <p>In the new era of technology we look in the future with certainty and pride for our life.</p>
                    <a href="{{ route('menu.index', ['category' => 'main dish']) }}" class="explore-link">Explore
                        Menu</a>
                </div>

                <!-- Drinks -->
                <div class="menu-card">
                    <div class="icon">
                        <img src="{{ asset('images/drink.png') }}" alt="Drinks">
                    </div>
                    <h5>Drinks</h5>
                    <p>In the new era of technology we look in the future with certainty and pride for our life.</p>
                    <a href="{{ route('menu.index', ['category' => 'drinks']) }}" class="explore-link">Explore Menu</a>
                </div>

                <!-- Desserts -->
                <div class="menu-card">
                    <div class="icon">
                        <img src="{{ asset('images/dessert.png') }}" alt="Desserts">
                    </div>
                    <h5>Desserts</h5>
                    <p>In the new era of technology we look in the future with certainty and pride for our life.</p>
                    <a href="{{ route('menu.index', ['category' => 'desserts']) }}" class="explore-link">Explore
                        Menu</a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
