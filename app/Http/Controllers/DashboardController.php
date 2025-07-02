<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Playstation;
use App\Models\Pembayaran;
use App\Models\Transaksi;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Jumlah pelanggan
        $jumlahPelanggan = Pelanggan::count();
        // Jumlah playstation
        $jumlahPlaystation = Playstation::count();
        // Total pemasukan
        $totalPemasukan = Pembayaran::sum('jumlah_bayar');
        // Rata-rata durasi sewa (dalam hari) - Oracle compatible
        $rataRataDurasi = Transaksi::selectRaw('AVG(TRUNC(tanggal_kembali) - TRUNC(tanggal_pinjam)) as avg_durasi')->value('avg_durasi');
        $rataRataDurasi = $rataRataDurasi ? round($rataRataDurasi) : 0;
        // Pelanggan baru (semua, urut terbaru)
        $pelangganBaru = Pelanggan::orderBy('created_at', 'desc')->get();
        // Histori pembayaran (ambil 20 terakhir, bisa diubah sesuai kebutuhan scroll)
        $historiPembayaran = Pembayaran::orderBy('tanggal_pembayaran', 'desc')->take(20)->get();

        // Statistik pelanggan baru per bulan (12 bulan terakhir) - Kompatibel MySQL & Oracle
        $bulanArr = [];
        $dataArr = [];
        // Ambil 12 bulan terakhir
        for ($i = 11; $i >= 0; $i--) {
            $bulan = Carbon::now()->subMonths($i);
            $bulanArr[] = $bulan->format('M Y');
            $dataArr[] = Pelanggan::whereYear('created_at', $bulan->year)
                ->whereMonth('created_at', $bulan->month)
                ->count();
        }
        $pelangganPerBulan = [
            'labels' => $bulanArr,
            'data' => $dataArr,
        ];

        // Ranking pelanggan yang paling sering menyewa (top 10)
        $rankingPelanggan = \App\Models\Pelanggan::select('nama')
            ->selectRaw('COUNT(transaksis.id) as total_sewa')
            ->leftJoin('transaksis', 'pelanggans.id', '=', 'transaksis.id_pelanggan')
            ->groupBy('pelanggans.id', 'nama')
            ->orderByDesc('total_sewa')
            ->take(10)
            ->get();

        // Notifikasi pelanggan baru (ambil 5 terbaru)
        $notifikasi = $pelangganBaru->take(5)->map(function($p){
            return [
                'icon' => 'fa-user-plus',
                'pesan' => 'Pelanggan baru: ' . $p->nama,
                'waktu' => $p->created_at ? $p->created_at->diffForHumans() : '-',
            ];
        })->toArray();

        return view('home', compact(
            'jumlahPelanggan',
            'jumlahPlaystation',
            'totalPemasukan',
            'rataRataDurasi',
            'pelangganBaru',
            'historiPembayaran',
            'pelangganPerBulan',
            'rankingPelanggan',
            'notifikasi'
        ));
    }
}
