<?php

// PagesController.php

class PagesController {

    public function home() 
    {
        view('pages.home');
    }

    public function about() 
    {
        view('pages.about');
    }

    public function contacte()
    {
        view('pages.contacte');
        dump($_POST);
    }

}