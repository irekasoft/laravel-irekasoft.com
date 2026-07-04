<?php

namespace App\Http\Controllers;

use App\Support\IrekaUiRepository;

class IrekaUiController extends Controller {

  public function index(IrekaUiRepository $content) {
    return view('pages.ireka-ui.index', [
      'page' => $content->intro(),
      'components' => $content->componentCatalog(),
    ]);
  }

  public function gettingStarted(IrekaUiRepository $content) {
    return view('pages.ireka-ui.getting-started', [
      'page' => $content->doc('structure/getting-started.md'),
      'components' => $content->componentCatalog(),
    ]);
  }

  public function structure(IrekaUiRepository $content) {
    return view('pages.ireka-ui.structure', [
      'page' => $content->structure(),
      'components' => $content->componentCatalog(),
    ]);
  }

  public function navigation(IrekaUiRepository $content) {
    return $this->category($content, 'navigation');
  }

  public function modals(IrekaUiRepository $content) {
    return $this->category($content, 'modals');
  }

  public function overlays(IrekaUiRepository $content) {
    return $this->category($content, 'overlays');
  }

  public function layout(IrekaUiRepository $content) {
    return $this->category($content, 'layout');
  }

  private function category(IrekaUiRepository $content, string $key) {
    return view('pages.ireka-ui.category', [
      'category' => $content->guideCategory($key),
      'catalog' => $content->componentCatalog(),
    ]);
  }

  public function guide(IrekaUiRepository $content, string $category, string $guide) {
    $doc = $content->findGuide($category, $guide);

    if ($doc === null) {
      abort(404);
    }

    return view('pages.ireka-ui.guide', [
      'doc' => $doc,
      'catalog' => $content->componentCatalog(),
    ]);
  }

  public function components(IrekaUiRepository $content) {
    return view('pages.ireka-ui.components', [
      'page' => $content->componentOverview(),
      'catalog' => $content->componentCatalog(),
    ]);
  }

  public function component(IrekaUiRepository $content, string $component) {
    $doc = $content->findComponent($component);

    if ($doc === null) {
      abort(404);
    }

    return view('pages.ireka-ui.component', [
      'doc' => $doc,
      'catalog' => $content->componentCatalog(),
    ]);
  }
}
