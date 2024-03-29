<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Signature;
use App\Models\SystemAlert;
use Illuminate\Contracts\Support\Renderable;
use Spatie\Activitylog\Models\Activity;

/**
 * Class HomeController
 * ----
 * Controllers that handles the application home pages.
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', '2fa', 'forbid-banned-user', 'portal:application'])->only(['index']);
        $this->middleware(['auth', '2fa', 'forbid-banned-user', 'portal:kiosk'])->only(['kiosk']);
    }

    /**
     * Get the first page of the application.
     *
     * @param  Pages     $page          The database model entity that holds all the dynamic pages for the application.
     * @param  Signature $signatures    Database model class for all the petition signatures
     * @return Renderable
     */
    public function welcome(Pages $page, Signature $signatures): Renderable
    {
        $petition = $page->where('identifier', 'petition')->firstOrFail();
        $signaturesCount = $signatures->count();

        return view('welcome', compact('petition', 'signaturesCount'));
    }

    /**
     * Method for the dashboard page from the kiosk management.
     *
     * @return Renderable
     */
    public function kiosk(): Renderable
    {
        $logs = Activity::latest()->take(7)->get();
        $alerts = SystemAlert::latest()->take(7)->get();

        return view('kiosk', compact('logs', 'alerts'));
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('home');
    }
}
