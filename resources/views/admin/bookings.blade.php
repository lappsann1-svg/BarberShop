<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings | Admin</title>
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
                <a href="/admin/dashboard" class="block opacity-50 hover:opacity-100 transition">Dashboard</a>
                <a href="/admin/bookings" class="block opacity-100">Bookings</a>
                <a href="/admin/services" class="block opacity-50 hover:opacity-100 transition">Services</a>
                <a href="/admin/customers" class="block opacity-50 hover:opacity-100 transition">Customers</a>
            </nav>
        </aside>

        <main class="flex-1 ml-64 p-12">
            <header class="flex justify-between items-end mb-12 border-b border-gray-100 pb-8">
                <div>
                    <span class="text-[10px] uppercase tracking-[0.3em] text-gray-400 block mb-2">Management</span>
                    <h1 class="serif text-4xl italic">Client Appointments</h1>
                </div>
                <div class="flex gap-4">
                    <button class="text-[9px] uppercase tracking-widest font-bold border-b-2 border-black pb-1">All</button>
                    <button class="text-[9px] uppercase tracking-widest font-bold text-gray-400 hover:text-black transition pb-1">Pending</button>
                    <button class="text-[9px] uppercase tracking-widest font-bold text-gray-400 hover:text-black transition pb-1">Confirmed</button>
                </div>
            </header>

            <div class="bg-white border border-gray-100 shadow-sm overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-[#fbfbfb] border-b border-gray-100">
                        <tr>
                            <th class="px-8 py-5 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Date & Time</th>
                            <th class="px-8 py-5 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Customer</th>
                            <th class="px-8 py-5 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Barber</th>
                            <th class="px-8 py-5 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Service</th>
                            <th class="px-8 py-5 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr class="hover:bg-gray-50 transition duration-300">
                            <td class="px-8 py-6">
                                <p class="text-[11px] font-bold uppercase tracking-tight">April 10, 2026</p>
                                <p class="text-[10px] text-gray-400">14:00 PM</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-[11px] font-bold uppercase tracking-tight">Bambang Pamungkas</p>
                                <p class="text-[10px] text-gray-400">bambang@mail.com</p>
                            </td>
                            <td class="px-8 py-6">
                                <span class="text-[10px] font-bold uppercase tracking-widest text-black">Marcus</span>
                            </td>
                            <td class="px-8 py-6">
                                <span class="text-[9px] bg-gray-100 px-3 py-1.5 uppercase tracking-widest font-semibold border border-gray-200">The Executive Cut</span>
                            </td>
                            <td class="px-8 py-6 text-right space-x-4">
                                <button class="text-[9px] uppercase font-bold tracking-widest text-green-600 hover:underline">Confirm</button>
                                <button class="text-[9px] uppercase font-bold tracking-widest text-red-400 hover:text-red-600 transition">Cancel</button>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>

            <section class="mt-12 bg-white border border-gray-100 p-8 shadow-sm">
                <header class="mb-10">
                    <h2 class="serif text-3xl italic">Barber Status</h2>
                    <p class="text-[10px] text-gray-400 uppercase tracking-[0.2em] mt-2">Aktifkan status "Ready" agar pelanggan bisa melakukan booking</p>
                </header>
            
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="border border-gray-100 p-6 flex items-center justify-between hover:border-black transition duration-300">
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150" 
                                     class="w-12 h-12 rounded-full object-cover grayscale border border-gray-50">
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-widest">Marcus</p>
                                <p class="text-[9px] text-green-600 font-bold uppercase">Ready to Cut</p>
                            </div>
                        </div>
                        
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-black after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-full"></div>
                        </label>
                    </div>
            
                    <div class="border border-gray-100 p-6 flex items-center justify-between hover:border-black transition duration-300">
                        <div class="flex items-center gap-4 opacity-50">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1599351431247-f579338389b1?auto=format&fit=crop&q=80&w=150" 
                                     class="w-12 h-12 rounded-full object-cover grayscale">
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-gray-300 border-2 border-white rounded-full"></div>
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Andre</p>
                                <p class="text-[9px] text-gray-400 font-bold uppercase tracking-tighter">In a Session / Off</p>
                            </div>
                        </div>
                        
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-black after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-full"></div>
                        </label>
                    </div>
                </div>
            </section>
            
            <div class="mt-8 flex justify-center gap-4">
                <button class="text-[10px] uppercase tracking-widest opacity-30 cursor-not-allowed">← Newer</button>
                <button class="text-[10px] uppercase tracking-widest hover:underline transition">Older →</button>
            </div>
        </main>
    </div>

</body>
</html>