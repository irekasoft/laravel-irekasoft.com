<?php

namespace App\Http\Controllers;

class PageController extends Controller {
  public function home() {
    return view('pages.home');
  }

  public function about() {
    return view('pages.about');
  }

  public function aboutHijazi() {
    return view('pages.about.hijazi');
  }

  public function products() {
    return view('pages.products');
  }

  public function services() {
    return view('pages.services');
  }

  public function portfolio() {
    return view('pages.portfolio', [
      'projects' => config('portfolio.projects'),
    ]);
  }

  public function contact() {
    return view('pages.contact');
  }
}
