<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Aldi's Barbershop</title>
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
            
            <nav class="space-y-6 flex-1">
                <a href="#" class="block text-[10px] uppercase tracking-[0.2em] font-bold opacity-100">Dashboard</a>
                <a href="{{ route('bookings.index') }}" class="block text-[10px] uppercase tracking-[0.2em] font-bold opacity-50 hover:opacity-100 transition">Bookings</a>
                <a href="#" class="block text-[10px] uppercase tracking-[0.2em] font-bold opacity-50 hover:opacity-100 transition">Services</a>
                <a href="#" class="block text-[10px] uppercase tracking-[0.2em] font-bold opacity-50 hover:opacity-100 transition">Customers</a>
            </nav>

            <div class="border-t border-gray-800 pt-6">
                <a href="/" class="text-[9px] uppercase tracking-widest opacity-50 hover:opacity-100 transition">View Website →</a>
            </div>
        </aside>

        <main class="flex-1 ml-64 p-12">
            <header class="flex justify-between items-end mb-12">
                <div>
                    <span class="text-[10px] uppercase tracking-[0.3em] text-gray-400 block mb-2">Overview</span>
                    <h1 class="serif text-4xl italic">Recent Bookings</h1>
                </div>
                <div class="text-right">
                    <p class="text-[10px] uppercase tracking-widest font-bold">April 9, 2026</p>
                </div>
            </header>

            <div class="grid grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-6 border border-gray-100 shadow-sm">
                    <p class="text-[9px] uppercase tracking-widest text-gray-400 mb-2">Total Appointments</p>
                    <p class="text-2xl font-bold">128</p>
                </div>
                <div class="bg-white p-6 border border-gray-100 shadow-sm">
                    <p class="text-[9px] uppercase tracking-widest text-gray-400 mb-2">Pending</p>
                    <p class="text-2xl font-bold">12</p>
                </div>
                <div class="bg-white p-6 border border-gray-100 shadow-sm">
                    <p class="text-[9px] uppercase tracking-widest text-gray-400 mb-2">Revenue (MTD)</p>
                    <p class="text-2xl font-bold text-green-600">Rp 5.2M</p>
                </div>
            </div>

            <div class="bg-white border border-gray-100 shadow-sm overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-[#fbfbfb] border-b border-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Customer</th>
                            <th class="px-6 py-4 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Service</th>
                            <th class="px-6 py-4 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Schedule</th>
                            <th class="px-6 py-4 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">Status</th>
                            <th class="px-6 py-4 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <p class="text-xs font-bold tracking-tight uppercase">Bambang Pamungkas</p>
                                <p class="text-[10px] text-gray-400">+62 812 3344 ...</p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-[10px] bg-gray-100 px-2 py-1 uppercase tracking-widest font-semibold">Executive Cut</span>
                            </td>
                            <td class="px-6 py-4 text-xs tracking-tight">
                                10 Apr, 2026 <br> 14:00
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-yellow-400"></div>
                                    <span class="text-[9px] uppercase font-bold tracking-widest">Pending</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right space-x-3">
                                <button class="text-[9px] uppercase font-bold tracking-widest text-black underline">Approve</button>
                                <button class="text-[9px] uppercase font-bold tracking-widest text-red-400 hover:text-red-600">Cancel</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <p class="text-xs font-bold tracking-tight uppercase">Keanu Reeves</p>
                                <p class="text-[10px] text-gray-400">+62 899 1122 ...</p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-[10px] bg-gray-100 px-2 py-1 uppercase tracking-widest font-semibold">Skin Fade</span>
                            </td>
                            <td class="px-6 py-4 text-xs tracking-tight">
                                10 Apr, 2026 <br> 11:00
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 rounded-full bg-green-500"></div>
                                    <span class="text-[9px] uppercase font-bold tracking-widest text-green-600">Confirmed</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-[9px] uppercase font-bold tracking-widest text-gray-400">Done</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>