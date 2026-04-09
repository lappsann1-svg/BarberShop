<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Service | The Barber</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-white text-[#1a1a1a]">

    <nav class="p-6 md:p-8 flex justify-between items-center border-b border-gray-100 sticky top-0 bg-white/90 backdrop-blur-sm z-50">
        <a href="/" class="text-[10px] uppercase tracking-[0.3em] font-bold hover:opacity-50 transition">
            ← Back
        </a>
        <div class="text-xl font-bold tracking-tighter uppercase">
            <span class="serif italic">Aldi's</span> Barbershop
        </div>
        <div class="hidden md:block w-10"></div>
    </nav>

    <header class="py-16 md:py-24 px-8 text-center bg-[#fbfbfb]">
        <span class="text-[10px] uppercase tracking-[0.4em] text-gray-400 mb-4 block">Services & Treatments</span>
        <h1 class="serif text-5xl md:text-7xl mb-6 italic">Pilihan Potongan</h1>
        <div class="w-20 h-[1px] bg-black mx-auto"></div>
    </header>

    <main class="max-w-6xl mx-auto px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-24">
            
            <div class="group">
                <div class="relative overflow-hidden aspect-[4/3] mb-6 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&q=80&w=1000" 
                         alt="Classic Cut" 
                         class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition duration-700">
                    <div class="absolute top-4 right-4 bg-white px-3 py-1 text-[10px] font-bold tracking-widest uppercase">
                        Popular
                    </div>
                </div>
                <div class="flex justify-between items-baseline mb-4 border-b border-gray-100 pb-4">
                    <h3 class="serif text-3xl italic">The Executive Cut</h3>
                    <span class="font-bold text-xl">Rp 45.000</span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed mb-8">
                    Potongan rambut klasik yang disesuaikan dengan bentuk wajah. Termasuk cuci rambut, pijat kulit kepala, dan styling premium.
                </p>
                <a href="{{ route('aturjadwal.index') }}" 
                   class="inline-block w-full py-5 bg-black text-white text-[10px] uppercase tracking-[0.25em] font-bold hover:bg-[#222] transition-all duration-300 text-center leading-none">
                    Pilih & Atur Jadwal
                </a>
            </div>

            <div class="group">
                <div class="relative overflow-hidden aspect-[4/3] mb-6 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&q=80&w=1000" 
                         alt="Skin Fade" 
                         class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition duration-700">
                </div>
                <div class="flex justify-between items-baseline mb-4 border-b border-gray-100 pb-4">
                    <h3 class="serif text-3xl italic">Skin Fade Precision</h3>
                    <span class="font-bold text-xl">Rp 55.000</span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed mb-8">
                    Teknik fade modern yang sangat halus dari kulit hingga gradasi atas. Menggunakan kombinasi clipper dan razor.
                </p>
                <a href="{{ route('aturjadwal.index') }}" 
                   class="inline-block w-full py-5 bg-black text-white text-[10px] uppercase tracking-[0.25em] font-bold hover:bg-[#222] transition-all duration-300 text-center leading-none">
                    Pilih & Atur Jadwal
                </a>
            </div>

            <div class="group">
                <div class="relative overflow-hidden aspect-[4/3] mb-6 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1599351431247-f579338389b1?auto=format&fit=crop&q=80&w=1000" 
                         alt="Buzz Cut" 
                         class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition duration-700">
                </div>
                <div class="flex justify-between items-baseline mb-4 border-b border-gray-100 pb-4">
                    <h3 class="serif text-3xl italic">Buzz Cut & Line Up</h3>
                    <span class="font-bold text-xl">Rp 30.000</span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed mb-8">
                    Tampilan minimalis dan bersih. Fokus pada ketajaman garis rambut di bagian dahi dan samping.
                </p>
                <a href="{{ route('aturjadwal.index') }}" 
                   class="inline-block w-full py-5 bg-black text-white text-[10px] uppercase tracking-[0.25em] font-bold hover:bg-[#222] transition-all duration-300 text-center leading-none">
                    Pilih & Atur Jadwal
                </a>
            </div>

            <div class="group">
                <div class="relative overflow-hidden aspect-[4/3] mb-6 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1512690196236-d5a743f19a5a?auto=format&fit=crop&q=80&w=1000" 
                         alt="Long Hair" 
                         class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition duration-700">
                </div>
                <div class="flex justify-between items-baseline mb-4 border-b border-gray-100 pb-4">
                    <h3 class="serif text-3xl italic">Gentleman Trim</h3>
                    <span class="font-bold text-xl">Rp 45.000</span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed mb-8">
                    Hanya merapikan bagian ujung dan tekstur untuk rambut panjang agar tetap terlihat sehat dan beralur.
                </p>
                <a href="{{ route('aturjadwal.index') }}" 
                   class="inline-block w-full py-5 bg-black text-white text-[10px] uppercase tracking-[0.25em] font-bold hover:bg-[#222] transition-all duration-300 text-center leading-none">
                    Pilih & Atur Jadwal
                </a>
            </div>

        </div>
    </main>

    <footer class="bg-black text-white py-20 px-8 text-center mt-20">
        <p class="serif italic text-3xl mb-4">Butuh konsultasi gaya?</p>
        <p class="text-gray-400 text-xs uppercase tracking-widest">Hubungi kami melalui WhatsApp: +62 812 3456 789</p>
    </footer>

</body>
</html>