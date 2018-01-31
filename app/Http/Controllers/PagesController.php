<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    private $request;

    /**
     * PagesController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Show page.
     *
     * @param null $uri1
     * @param null $uri2
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPage($uri1 = null, $uri2 = null)
    {
        if (is_null($uri1) && is_null($uri2)) {
            // Home page
            return view('home');
        }

        if (is_null($uri2)) {
            // Show uri1
            return view('pages.' . strtolower($uri1));
        }

        // Show uri1 + uri2
        return view('pages.' . strtolower($uri1) . '.' . strtolower($uri2));
    }

}
