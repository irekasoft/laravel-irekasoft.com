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

  public function structure(IrekaUiRepository $content) {
    return view('pages.ireka-ui.structure', [
      'page' => $content->structure(),
      'components' => $content->componentCatalog(),
    ]);
  }

  public function navigation(IrekaUiRepository $content) {
    return view('pages.ireka-ui.navigation', [
      'page' => $content->doc('navigation.md'),
      'components' => $content->componentCatalog(),
    ]);
  }

  public function modals(IrekaUiRepository $content) {
    return view('pages.ireka-ui.modals', [
      'page' => $content->doc('modals.md'),
      'components' => $content->componentCatalog(),
    ]);
  }

  public function overlays(IrekaUiRepository $content) {
    return view('pages.ireka-ui.overlays', [
      'page' => $content->doc('overlays.md'),
      'components' => $content->componentCatalog(),
    ]);
  }

  public function layout(IrekaUiRepository $content) {
    return view('pages.ireka-ui.layout', [
      'page' => $content->doc('layout.md'),
      'components' => $content->componentCatalog(),
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
