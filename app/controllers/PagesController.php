<?php

namespace App\Controllers;

/**
 * Class PagesController
 */
class PagesController
{
    /**
     * Show the home page.
     *
     * @return string return page view
     */
    public function home(): string
    {
        return view('index');
    }

    /**
     * Show the about page.
     *
     * @return mixed return page view
     */
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     *
     * @return mixed return page view
     */
    public function contact()
    {
        return view('contact');
    }
}
