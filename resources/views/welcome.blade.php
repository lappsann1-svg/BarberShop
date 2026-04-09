<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grooming Essentials | Inspired by Blind Barber</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .serif { font-family: 'Playfair Display', serif; }
        .nav-link { @apply text-xs uppercase tracking-widest hover:opacity-50 transition; }
    </style>
</head>
<body class="bg-[#f9f9f9] text-[#1a1a1a]">

    <div class="bg-black text-white text-[10px] py-2 tracking-[0.2em] text-center uppercase">
        Free Shipping on Orders Over $50
    </div>

    <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 px-8 py-6 flex justify-between items-center">
        <div class="flex gap-6 items-center">
            <a href="#" class="nav-link">Shop</a>
            <a href="#" class="nav-link">Barbershops</a>
            <a href="#" class="nav-link">Journal</a>
        </div>
        
        <div class="absolute left-1/2 -translate-x-1/2 text-2xl font-bold tracking-tighter uppercase">
            <span class="serif italic">Aldi's</span> Barbershop
        </div>

        <div class="flex gap-6 items-center">
            <a href="#" class="nav-link">Search</a>
            <a href="#" class="nav-link">Account</a>
            <a href="#" class="nav-link">Cart (0)</a>
        </div>
    </nav>

    <header class="relative h-[80vh] bg-gray-200 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center grayscale hover:grayscale-0 transition duration-700"></div>
        
        <div class="relative z-10 text-center text-white">
            <h1 class="serif text-6xl md:text-8xl mb-6">Stay Sharp.</h1>
            <p class="uppercase tracking-[0.3em] text-sm mb-8">Professional Grooming for the Modern Man</p>
            <a href="{{ route('listpotongan.index') }}" class="bg-white text-black px-10 py-4 text-xs uppercase tracking-widest font-bold hover:bg-black hover:text-white transition">
                Book Now!
            </a>
        </div>
    </header>

    <section class="max-w-7xl mx-auto px-8 py-24">
        <div class="flex justify-between items-end mb-12">
            <h2 class="serif text-4xl">Best Sellers</h2>
            <a href="#" class="border-b border-black pb-1 text-xs uppercase tracking-widest">View All</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="group cursor-pointer">
                <div class="aspect-[4/5] bg-gray-100 mb-4 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1590156221122-c4462101450b?auto=format&fit=crop&q=80&w=1000" class="object-cover w-full h-full group-hover:scale-105 transition duration-500">
                </div>
                <h3 class="uppercase text-xs tracking-widest font-bold mb-1">60 Proof Pomade</h3>
                <p class="text-gray-500 text-sm mb-2 italic">Medium Hold • Satin Finish</p>
                <p class="text-sm font-bold">$18.00</p>
            </div>

            <div class="group cursor-pointer">
                <div class="aspect-[4/5] bg-gray-100 mb-4 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1626285861696-9f0bf5a49c6d?auto=format&fit=crop&q=80&w=1000" class="object-cover w-full h-full group-hover:scale-105 transition duration-500">
                </div>
                <h3 class="uppercase text-xs tracking-widest font-bold mb-1">Bryce Harper Beard Oil</h3>
                <p class="text-gray-500 text-sm mb-2 italic">Cedar & Sandalwood</p>
                <p class="text-sm font-bold">$22.00</p>
            </div>

            <div class="group cursor-pointer">
                <div class="aspect-[4/5] bg-gray-100 mb-4 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1532710093739-9470acff878f?auto=format&fit=crop&q=80&w=1000" class="object-cover w-full h-full group-hover:scale-105 transition duration-500">
                </div>
                <h3 class="uppercase text-xs tracking-widest font-bold mb-1">Daily Face Wash</h3>
                <p class="text-gray-500 text-sm mb-2 italic">Juniper Berry • Cooling</p>
                <p class="text-sm font-bold">$16.00</p>
            </div>
        </div>
    </section>

    <footer class="bg-black text-white py-20 px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div>
                <h4 class="serif text-2xl mb-6 italic">Aldi's Barbershop</h4>
                <p class="text-gray-400 text-xs leading-relaxed tracking-wide">
                    More than just grooming. A lifestyle dedicated to the craft of looking and feeling your best.
                </p>
            </div>
            <div>
                <h5 class="text-[10px] uppercase tracking-[0.2em] mb-6 text-gray-500">Shop</h5>
                <ul class="text-xs space-y-4 uppercase tracking-widest">
                    <li><a href="#" class="hover:text-gray-400">Hair</a></li>
                    <li><a href="#" class="hover:text-gray-400">Beard</a></li>
                    <li><a href="#" class="hover:text-gray-400">Skincare</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-[10px] uppercase tracking-[0.2em] mb-6 text-gray-500">Support</h5>
                <ul class="text-xs space-y-4 uppercase tracking-widest">
                    <li><a href="#" class="hover:text-gray-400">Shipping</a></li>
                    <li><a href="#" class="hover:text-gray-400">Returns</a></li>
                    <li><a href="#" class="hover:text-gray-400">Contact</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-[10px] uppercase tracking-[0.2em] mb-6 text-gray-500">Newsletter</h5>
                <input type="email" placeholder="ENTER EMAIL" class="bg-transparent border-b border-gray-700 w-full py-2 text-xs focus:outline-none focus:border-white transition">
            </div>
        </div>
    </footer>

</body>
</html>