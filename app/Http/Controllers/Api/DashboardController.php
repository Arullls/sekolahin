<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return response()->json([
            'name' => $user->name,
            'role' => $user->role, // guru / siswa
            'ujian_aktif' => [
                'mapel' => 'Matematika',
                'waktu' => '10.00 - 11.00',
                'status' => 'Belum Diikuti', // atau Sudah Selesai
            ],
        ]);
    }
}
