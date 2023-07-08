<?php

namespace App\Http\Controllers;

use App\Models\subkriteria;
use App\Models\kriteria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $kriteria = kriteria::sum('bobot');
    
            $bobot1 = 0.25/$kriteria;
            $bobot2 = 0.25/$kriteria;
            $bobot3 = 0.25/$kriteria;
            $bobot4 = 0.25/$kriteria;
            $widget1 = [
                'kriterias' => $bobot1,
            ];
            $widget2 = [
                'kriterias' => $bobot2,
            ];
            $widget3 = [
                'kriterias' => $bobot3,
            ];
            $widget4 = [
                'kriterias' => $bobot4,
            ];
    
    
            $subkriteria = subkriteria::get();
            $data = subkriteria::orderby('nama', 'asc')->get();
    
            $minC1 = subkriteria::min('C1');
            $maxC1 = subkriteria::max('C1');
            $minC2 = subkriteria::min('C2');
            $maxC2 = subkriteria::max('C2');
            $minC3 = subkriteria::min('C3');
            $maxC3 = subkriteria::max('C3');
            $minC4 = subkriteria::min('C4');
            $maxC4 = subkriteria::max('C4');
    
            $C1min =[
                'subkriterias' => $minC1,
            ];
            $C1max =[
                'subkriterias' => $maxC1,
            ];
            $C2min =[
                'subkriterias' => $minC2,
            ];
            $C2max =[
                'subkriterias' => $maxC2,
            ];
            $C3min =[
                'subkriterias' => $minC3,
            ];
            $C3max =[
                'subkriterias' => $maxC3,
            ];
            $C4min =[
                'subkriterias' => $minC4,
            ];
            $C4max =[
                'subkriterias' => $maxC4,
            ];
    
            $hasil = $minC1/$maxC1;
            $hasil1 =[
                'subkriterias' => $hasil,
            ];
    
            return view('admin.home', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max'));
    }
        
}