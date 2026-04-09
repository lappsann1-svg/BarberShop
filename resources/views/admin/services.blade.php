<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Services | Admin</title>
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
                    <span class="text-[10px] uppercase tracking-[0.3em] text-gray-400 block mb-2">Management</span>
                    <h1 class="serif text-4xl italic">Barber Services</h1>
                </div>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-1">
                    <div class="bg-white border border-gray-100 p-8 shadow-sm sticky top-12">
                        <h2 class="text-[11px] font-bold uppercase tracking-[0.2em] mb-8 border-b pb-4">Add New Service</h2>
                        
                        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-[9px] uppercase tracking-widest text-gray-400">Service Photo</label>
                                <input type="file" class="w-full text-[10px] text-gray-400 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-[9px] file:uppercase file:tracking-widest file:font-bold file:bg-black file:text-white hover:file:bg-neutral-800 cursor-pointer">
                            </div>

                            <div class="space-y-2">
                                <label class="text-[9px] uppercase tracking-widest text-gray-400">Service Name</label>
                                <input type="text" placeholder="E.G. SKIN FADE" class="w-full border-b border-gray-100 py-3 focus:outline-none focus:border-black text-[11px] tracking-widest transition bg-transparent placeholder:text-gray-200 uppercase font-medium">
                            </div>

                            <div class="space-y-2">
                                <label class="text-[9px] uppercase tracking-widest text-gray-400">Price (RP)</label>
                                <input type="number" placeholder="50000" class="w-full border-b border-gray-100 py-3 focus:outline-none focus:border-black text-[11px] tracking-widest transition bg-transparent placeholder:text-gray-200">
                            </div>

                            <div class="space-y-2">
                                <label class="text-[9px] uppercase tracking-widest text-gray-400">Description</label>
                                <textarea rows="3" placeholder="DESCRIBE THE SERVICE..." class="w-full border border-gray-100 p-3 focus:outline-none focus:border-black text-[11px] tracking-widest transition bg-transparent placeholder:text-gray-200 uppercase"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-black text-white py-4 text-[10px] font-bold uppercase tracking-[0.3em] hover:bg-neutral-800 transition shadow-lg">
                                Save Service
                            </button>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="bg-white border border-gray-100 shadow-sm">
                        <table class="w-full text-left">
                            <thead class="bg-[#fbfbfb] border-b border-gray-100">
                                <tr>
                                    <th class="px-8 py-5 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Service</th>
                                    <th class="px-8 py-5 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Price</th>
                                    <th class="px-8 py-5 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr class="hover:bg-gray-50 transition duration-300">
                                    <td class="px-8 py-6 flex items-center gap-4">
                                        <div class="w-12 h-12 bg-gray-100 grayscale overflow-hidden">
                                            <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&q=80&w=150" class="object-cover w-full h-full">
                                        </div>
                                        <div>
                                            <p class="text-[11px] font-bold uppercase tracking-tight">The Executive Cut</p>
                                            <p class="text-[9px] text-gray-400 line-clamp-1 max-w-[200px]">CLASSIC CUT AND STYLING...</p>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <p class="text-[11px] font-bold uppercase tracking-tight text-gray-500">Rp 45.000</p>
                                    </td>
                                    <td class="px-8 py-6 text-right space-x-4">
                                        <a href="{{ route('services.edit', ['id' => 1]) }}" class="text-[9px] uppercase font-bold tracking-widest text-black hover:underline">
                                            Edit
                                        </a>
                                        
                                        <button class="text-[9px] uppercase font-bold tracking-widest text-red-400 hover:text-red-600 transition">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>