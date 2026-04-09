<aside class="w-64 bg-black text-white p-8 flex flex-col fixed h-full">
    <div class="text-xl font-bold tracking-tighter uppercase mb-12">
        <span class="serif italic text-2xl"></span> Admin
    </div>
    
    <nav class="space-y-6 flex-1">
        <a href="{{ route('admin.dashboard') }}" class="block text-[10px] uppercase tracking-[0.2em] font-bold {{ request()->is('admin/dashboard') ? 'opacity-100' : 'opacity-50 hover:opacity-100' }}">Dashboard</a>
        
        <a href="/admin/bookings" class="block text-[10px] uppercase tracking-[0.2em] font-bold {{ request()->is('admin/bookings') ? 'opacity-100' : 'opacity-50 hover:opacity-100' }}">Bookings</a>
        
        <a href="/admin/services" class="block text-[10px] uppercase tracking-[0.2em] font-bold {{ request()->is('admin/services') ? 'opacity-100' : 'opacity-50 hover:opacity-100' }}">Services</a>
        
        <a href="/admin/customers" class="block text-[10px] uppercase tracking-[0.2em] font-bold {{ request()->is('admin/customers') ? 'opacity-100' : 'opacity-50 hover:opacity-100' }}">Customers</a>
    </nav>
</aside>