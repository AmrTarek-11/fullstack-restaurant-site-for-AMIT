<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styleofthemenu.css') }}">
</head>

<body>

    <div class="menu">

        <div class="one">
            <div class="oneup">
                <h1>Our Menu</h1>
                <p>We consider all the drivers of change gives you the components you need to change to create a truly
                    happens.</p>
            </div>
            <div class="onedown">
                <!-- Filter Buttons -->

                <form method="GET" action="{{ route('menu.index') }}" class="filters">
                    <button class="{{ $category == 'all' ? 'active' : 'onedownbutton' }}" type="submit" name="category"
                        value="all">ALL</button>
                    <button class="{{ $category == 'breakfast' ? 'active' : 'onedownbutton' }}" type="submit"
                        name="category" value="breakfast">breakfast</button>
                    <button class="{{ $category == 'main dish' ? 'active' : 'onedownbutton' }}" type="submit"
                        name="category" value="main dish">main dish</button>
                    <button class="{{ $category == 'drinks' ? 'active' : 'onedownbutton' }}" type="submit"
                        name="category" value="drinks">drinks</button>
                    <button class="{{ $category == 'desserts' ? 'active' : 'onedownbutton' }}" type="submit"
                        name="category" value="desserts">desserts</button>

                </form>

            </div>
        </div>
        <div class="two">




            <!-- Menu Grid -->
            <div class="menu-grid">
                @forelse ($menuItems as $item)
                    <div class="menu-card">
                        {{-- <img src="{{ asset('images/'.$item->image_path) }}" alt="{{ $item->name }}"> --}}
                          <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->name }}">

                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->description }}</p>
                        <span>${{ $item->price }}</span>
                    </div>
                @empty
                    <p>No items found in this category.</p>
                @endforelse
            </div>

        </div>

    </div>
    <div class="three">
        <div class="threecenter">
            <div class="threecenterleft">
                <h1>You can order through apps</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et aliquid quod eius cumque dolorem eaque
                    sapiente, commodi, rem nulla voluptatum eligendi? Ex, illum quidem in at qui natus voluptatum
                    expedita.</p>
            </div>
            <div class="threecenterright">
                <div class="threecenterright1">
                    <div class="shakl"><img src="{{asset('images/shakl1.png')}}" alt=""></div>
                    <div class="shakl"><img src="{{asset('images/shakl2.png')}}" alt=""></div>
                    <div class="shakl"><img src="{{asset('images/shakl3.png')}}" alt=""></div>

                </div>

                <div class="threecenterright2">


                    <div class="shakl"><img src="{{asset('images/shakl4.png')}}" alt=""></div>
                    <div class="shakl"><img src="{{asset('images/shakl5.png')}}" alt=""></div>
                    <div class="shakl"><img src="{{asset('images/shakl6.png')}}" alt=""></div>

                </div>

                <div class="threecenterright3">

                    <div class="shakl"><img src="{{asset('images/shakl7.png')}}" alt=""></div>
                    <div class="shakl"><img src="{{asset('images/shakl8.png')}}" alt=""></div>
                    <div class="shakl"><img src="{{asset('images/shakl9.png')}}" alt=""></div>

                </div>

            </div>
        </div>
    </div>








</body>

</html>
