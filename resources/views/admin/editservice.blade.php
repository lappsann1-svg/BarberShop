<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service | Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#fbfbfb] text-[#1a1a1a]">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-black text-white p-8 flex flex-col fixed h-full">
            <div class="text-xl font-bold tracking-tighter uppercase mb-12">
                <span class="serif italic text-2xl">A.</span> Admin
            </div>
            <nav class="space-y-6 flex-1 text-[10px] uppercase tracking-[0.2em] font-bold">
                <a href="{{ route('admin.dashboard') }}" class="block opacity-50 hover:opacity-100 transition">Dashboard</a>
                <a href="{{ route('bookings.index') }}" class="block opacity-50 hover:opacity-100 transition">Bookings</a>
                <a href="{{ route('services.index') }}" class="block opacity-100">Services</a>
                <a href="{{ route('customers.index') }}" class="block opacity-50 hover:opacity-100 transition">Customers</a>
            </nav>
        </aside>

        <main class="flex-1 ml-64 p-12">
            <header class="flex justify-between items-end mb-12 border-b border-gray-100 pb-8">
                <div>
                    <span class="text-[10px] uppercase tracking-[0.3em] text-gray-400 block mb-2">Service Editor</span>
                    <h1 class="serif text-4xl italic">Edit: The Executive Cut</h1>
                </div>
                <a href="{{ route('services.index') }}" class="text-[10px] uppercase tracking-widest font-bold hover:underline">← Cancel & Return</a>
            </header>

            <div class="max-w-2xl bg-white border border-gray-100 p-10 shadow-sm">
                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-10">
                    <div class="flex items-center gap-8 pb-8 border-b border-gray-50">
                        <div class="w-32 h-32 bg-gray-100 grayscale overflow-hidden border border-gray-100">
                            <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&q=80&w=300" class="object-cover w-full h-full">
                        </div>
                        <div class="space-y-3 flex-1">
                            <label class="text-[9px] uppercase tracking-widest text-gray-400 block">Replace Photo</label>
                            <input type="file" class="text-[10px] text-gray-400 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-[9px] file:uppercase file:tracking-widest file:font-bold file:bg-black file:text-white hover:file:bg-neutral-800 cursor-pointer">
                            <p class="text-[8px] text-gray-300 italic uppercase tracking-tighter">*Leave empty to keep current photo</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-[9px] uppercase tracking-widest text-gray-400">Service Name</label>
                            <input type="text" value="THE EXECUTIVE CUT" class="w-full border-b border-gray-100 py-3 focus:outline-none focus:border-black text-[11px] tracking-widest transition bg-transparent uppercase font-medium">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[9px] uppercase tracking-widest text-gray-400">Price (RP)</label>
                            <input type="number" value="45000" class="w-full border-b border-gray-100 py-3 focus:outline-none focus:border-black text-[11px] tracking-widest transition bg-transparent font-medium">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[9px] uppercase tracking-widest text-gray-400">Description</label>
                        <textarea rows="4" class="w-full border border-gray-100 p-4 focus:outline-none focus:border-black text-[11px] tracking-widest transition bg-transparent uppercase leading-relaxed">CLASSIC CUT AND STYLING TAILORED TO YOUR FACE SHAPE. INCLUDES HAIR WASH, HEAD MASSAGE, AND PREMIUM STYLING PRODUCTS.</textarea>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full bg-black text-white py-5 text-[10px] font-bold uppercase tracking-[0.4em] hover:bg-neutral-800 transition shadow-xl">
                            Update Service Details
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

</body>
</html>