<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule | The Barber</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .serif { font-family: 'Playfair Display', serif; }

        /* Custom selection for time slots */
        .time-slot:checked + label {
            background-color: #000000;
            color: #ffffff;
            border-color: #000000;
        }
    </style>
</head>
<body class="bg-white text-[#1a1a1a]">

    <nav class="p-8 flex justify-between items-center border-b border-gray-100 sticky top-0 bg-white/90 backdrop-blur-sm z-50">
        <a href="{{ route('listpotongan.index') }}" class="text-[10px] uppercase tracking-[0.3em] font-bold hover:opacity-50 transition">← Back to Services</a>
        <div class="text-xl font-bold tracking-tighter uppercase">
            <span class="serif italic">Aldi's</span> Barbershop
        </div>
        <div class="w-20"></div>
    </nav>

    <main class="max-w-4xl mx-auto px-8 py-16">
        <header class="text-center mb-16">
            <h1 class="serif text-4xl md:text-5xl italic mb-4">Book Appointment</h1>
            <p class="uppercase tracking-[0.2em] text-[10px] text-gray-500">The Executive Cut • Rp 45.000</p>
        </header>

        <form action="#" class="space-y-16">
            
            <section>
                <h2 class="text-[10px] uppercase tracking-[0.3em] font-bold mb-8 border-b pb-4">1. Select Barber</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    
                    <label class="cursor-pointer group">
                        <input type="radio" name="barber" class="hidden peer" checked>
                        <div class="relative border border-gray-100 p-5 text-center peer-checked:border-black peer-checked:shadow-sm transition-all duration-300">
                            <div class="w-16 h-16 bg-gray-100 rounded-full mx-auto mb-3 overflow-hidden border border-gray-50">
                                <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?auto=format&fit=crop&q=80&w=200" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition duration-500">
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-widest">Any Barber</p>
                            <p class="text-[8px] text-gray-400 uppercase mt-1">Best Available</p>
                        </div>
                    </label>

                    <label class="cursor-pointer group">
                        <input type="radio" name="barber" class="hidden peer">
                        <div class="relative border border-gray-100 p-5 text-center peer-checked:border-black peer-checked:shadow-sm transition-all duration-300">
                            <div class="absolute top-4 right-4 w-2 h-2 bg-green-500 rounded-full shadow-[0_0_8px_rgba(34,197,94,0.6)]"></div>
                            
                            <div class="w-16 h-16 bg-gray-100 rounded-full mx-auto mb-3 overflow-hidden border border-gray-50">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=200" class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition duration-500">
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-black">Marcus</p>
                            <p class="text-[8px] text-green-600 font-bold uppercase mt-1 tracking-tighter">Ready Now</p>
                        </div>
                    </label>

                    <label class="cursor-not-allowed group opacity-60">
                        <input type="radio" name="barber" class="hidden peer" disabled>
                        <div class="relative border border-gray-50 p-5 text-center transition-all duration-300">
                            <div class="absolute top-4 right-4 w-2 h-2 bg-gray-300 rounded-full"></div>
                            
                            <div class="w-16 h-16 bg-gray-100 rounded-full mx-auto mb-3 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1599351431247-f579338389b1?auto=format&fit=crop&q=80&w=200" class="object-cover w-full h-full grayscale">
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Andre</p>
                            <p class="text-[8px] text-gray-400 uppercase mt-1 tracking-tighter">In Session</p>
                        </div>
                    </label>

                </div>
            </section>

            <section>
                <h2 class="text-[10px] uppercase tracking-[0.3em] font-bold mb-8 border-b pb-4">2. Select Date</h2>
                <div class="relative max-w-xs">
                    <input type="date" class="w-full border-b border-gray-200 py-3 focus:outline-none focus:border-black text-xs uppercase tracking-widest transition bg-transparent cursor-pointer">
                </div>
            </section>

            <section>
                <h2 class="text-[10px] uppercase tracking-[0.3em] font-bold mb-8 border-b pb-4">3. Available Times</h2>
                <div class="grid grid-cols-3 md:grid-cols-6 gap-3">
                    <div class="relative">
                        <input type="radio" name="time" id="t1" value="10:00" class="hidden time-slot" checked>
                        <label for="t1" class="block border border-gray-100 py-4 text-center text-[10px] tracking-widest cursor-pointer hover:border-black transition-all duration-300">10:00</label>
                    </div>
                    <div class="relative">
                        <input type="radio" name="time" id="t2" value="11:00" class="hidden time-slot">
                        <label for="t2" class="block border border-gray-100 py-4 text-center text-[10px] tracking-widest cursor-pointer hover:border-black transition-all duration-300">11:00</label>
                    </div>
                    <div class="relative">
                        <input type="radio" name="time" id="t3" value="13:00" class="hidden time-slot">
                        <label for="t3" class="block border border-gray-100 py-4 text-center text-[10px] tracking-widest cursor-pointer hover:border-black transition-all duration-300">13:00</label>
                    </div>
                    <div class="relative">
                        <input type="radio" name="time" id="t4" value="14:00" class="hidden time-slot">
                        <label for="t4" class="block border border-gray-100 py-4 text-center text-[10px] tracking-widest cursor-pointer hover:border-black transition-all duration-300">14:00</label>
                    </div>
                    <div class="relative">
                        <input type="radio" name="time" id="t5" value="15:00" class="hidden time-slot">
                        <label for="t5" class="block border border-gray-100 py-4 text-center text-[10px] tracking-widest cursor-pointer hover:border-black transition-all duration-300">15:00</label>
                    </div>
                    <div class="relative">
                        <input type="radio" name="time" id="t6" value="16:00" class="hidden time-slot">
                        <label for="t6" class="block border border-gray-100 py-4 text-center text-[10px] tracking-widest cursor-pointer hover:border-black transition-all duration-300">16:00</label>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-[10px] uppercase tracking-[0.3em] font-bold mb-8 border-b pb-4">4. Personal Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-[9px] uppercase tracking-widest text-gray-400">Full Name</label>
                        <input type="text" placeholder="JANE DOE" required
                               class="w-full border-b border-gray-200 py-3 focus:outline-none focus:border-black text-xs tracking-widest transition placeholder:text-gray-200 bg-transparent">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[9px] uppercase tracking-widest text-gray-400">Email Address</label>
                        <input type="email" placeholder="JANE@EXAMPLE.COM" required
                               class="w-full border-b border-gray-200 py-3 focus:outline-none focus:border-black text-xs tracking-widest transition placeholder:text-gray-200 bg-transparent">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[9px] uppercase tracking-widest text-gray-400">Phone Number</label>
                        <input type="tel" placeholder="+62 ..." required
                               class="w-full border-b border-gray-200 py-3 focus:outline-none focus:border-black text-xs tracking-widest transition placeholder:text-gray-200 bg-transparent">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[9px] uppercase tracking-widest text-gray-400">Special Notes</label>
                        <input type="text" placeholder="ANY REQUESTS?" 
                               class="w-full border-b border-gray-200 py-3 focus:outline-none focus:border-black text-xs tracking-widest transition placeholder:text-gray-200 bg-transparent">
                    </div>
                </div>
                
                <div class="mt-10 flex items-start gap-3">
                    <input type="checkbox" id="terms" class="mt-1 accent-black" required>
                    <label for="terms" class="text-[9px] text-gray-400 uppercase tracking-widest leading-relaxed cursor-pointer select-none">
                        I agree to the cancellation policy and will arrive 10 minutes before the session.
                    </label>
                </div>
            </section>

            <div class="pt-8 border-t border-gray-50">
                <button type="submit" class="w-full bg-black text-white py-6 text-[11px] font-bold uppercase tracking-[0.4em] hover:bg-neutral-800 transition-all duration-300 shadow-xl active:scale-[0.98]">
                    Confirm Appointment
                </button>
                <p class="text-center text-gray-400 text-[9px] mt-8 uppercase tracking-[0.2em]">Confirmation will be sent to your email.</p>
            </div>
        </form>
    </main>

    <footer class="py-16 border-t border-gray-50 text-center">
        <div class="serif italic text-xl mb-4">Aldi's Barbershop</div>
        <p class="text-[9px] text-gray-300 uppercase tracking-widest">&copy; 2026 The Barber Shop. Quality Over Everything.</p>
    </footer>

</body>
</html>