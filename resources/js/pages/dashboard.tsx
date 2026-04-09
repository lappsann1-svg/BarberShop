import { Head } from '@inertiajs/react';
import { dashboard } from '@/routes';
import { Scissors, User, CalendarDays, Clock } from 'lucide-react'; // Pastikan sudah install lucide-react

export default function BookingBarber() {
    return (
        <>
            <Head title="Booking Barber" />
            
            <div className="flex h-full flex-1 flex-col gap-6 overflow-x-auto rounded-xl p-6">
                
                {/* Bagian Atas: Pilihan Cepat */}
                <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                    {/* Kartu Layanan */}
                    <div className="group relative overflow-hidden rounded-xl border border-sidebar-border/70 bg-white p-5 transition-all hover:shadow-md dark:bg-neutral-900">
                        <div className="flex items-center gap-4">
                            <div className="rounded-lg bg-blue-100 p-3 text-blue-600 dark:bg-blue-900/30">
                                <Scissors size={24} />
                            </div>
                            <div>
                                <h3 className="font-semibold">Layanan</h3>
                                <p className="text-sm text-neutral-500">Pilih jenis potongan</p>
                            </div>
                        </div>
                    </div>

                    {/* Kartu Barber */}
                    <div className="group relative overflow-hidden rounded-xl border border-sidebar-border/70 bg-white p-5 transition-all hover:shadow-md dark:bg-neutral-900">
                        <div className="flex items-center gap-4">
                            <div className="rounded-lg bg-amber-100 p-3 text-amber-600 dark:bg-amber-900/30">
                                <User size={24} />
                            </div>
                            <div>
                                <h3 className="font-semibold">Barberman</h3>
                                <p className="text-sm text-neutral-500">Pilih tukang cukur</p>
                            </div>
                        </div>
                    </div>

                    {/* Kartu Jadwal */}
                    <div className="group relative overflow-hidden rounded-xl border border-sidebar-border/70 bg-white p-5 transition-all hover:shadow-md dark:bg-neutral-900">
                        <div className="flex items-center gap-4">
                            <div className="rounded-lg bg-emerald-100 p-3 text-emerald-600 dark:bg-emerald-900/30">
                                <CalendarDays size={24} />
                            </div>
                            <div>
                                <h3 className="font-semibold">Waktu</h3>
                                <p className="text-sm text-neutral-500">Tentukan jam & tanggal</p>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Bagian Utama: Form Booking */}
                <div className="relative min-h-[60vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 bg-white p-6 dark:bg-neutral-900">
                    <h2 className="mb-6 text-xl font-bold">Detail Reservasi</h2>
                    
                    <div className="grid gap-6 md:grid-cols-2">
                        <div className="space-y-4">
                            <div>
                                <label className="block text-sm font-medium mb-1">Nama Lengkap</label>
                                <input type="text" className="w-full rounded-lg border-neutral-300 bg-transparent p-2.5 focus:border-blue-500 focus:ring-blue-500" placeholder="Contoh: Budi Santoso" />
                            </div>
                            
                            <div>
                                <label className="block text-sm font-medium mb-1">Nomor WhatsApp</label>
                                <input type="tel" className="w-full rounded-lg border-neutral-300 bg-transparent p-2.5 focus:border-blue-500 focus:ring-blue-500" placeholder="0812xxxx" />
                            </div>
                        </div>

                        <div className="space-y-4">
                            <div className="rounded-xl bg-neutral-50 p-4 dark:bg-neutral-800/50">
                                <h4 className="mb-2 font-medium">Ringkasan Pesanan</h4>
                                <ul className="space-y-2 text-sm text-neutral-600 dark:text-neutral-400">
                                    <li className="flex justify-between"><span>Haircut + Wash</span> <span>Rp 50.000</span></li>
                                    <li className="flex justify-between"><span>Biaya Admin</span> <span>Free</span></li>
                                    <hr className="border-neutral-200 dark:border-neutral-700" />
                                    <li className="flex justify-between font-bold text-neutral-900 dark:text-white"><span>Total</span> <span>Rp 50.000</span></li>
                                </ul>
                            </div>
                            
                            <button className="w-full rounded-lg bg-neutral-900 py-3 font-bold text-white transition-all hover:bg-neutral-800 dark:bg-white dark:text-neutral-900">
                                Konfirmasi Booking Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

// Bagian Breadcrumbs tetap dipertahankan namun diubah namanya
BookingBarber.layout = {
    breadcrumbs: [
        {
            title: 'Booking',
            href: dashboard(),
        },
    ],
};