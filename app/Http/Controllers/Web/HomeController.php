<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */
class HomeController extends Controller
{
    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $areas = Area::orderBy('name')->get();

        return view('welcome', compact('areas'));
    }

    public function checkEligibility(Request $request)
    {
        $userArea = Area::where('name', $request->area)->first();
        $gombe = Area::where('name', 'Gombe')->first();

        if (!$userArea || !$gombe) {
            return response()->json([
                'error' => 'Commune inconnue'
            ], 404);
        }

        $distance = distanceKm(
            $userArea->latitude,
            $userArea->longitude,
            $gombe->latitude,
            $gombe->longitude
        );

        return response()->json([
            'area' => $userArea->nom,
            'distance_km' => round($distance, 2)
        ]);
    }

    //
}
