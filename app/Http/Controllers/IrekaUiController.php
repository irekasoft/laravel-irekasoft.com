<?php

namespace App\Http\Controllers;

use App\Support\IrekaUiRepository;

class IrekaUiController extends Controller {

  /**
   * The Ireka UI component catalogue. Drives both the sidebar navigation
   * and the on-page sections so the two never drift apart.
   */
  public const COMPONENTS = [
    ['id' => 'badge',             'name' => 'Badge',             'summary' => 'Compact status and category labels.'],
    ['id' => 'button',            'name' => 'Button',            'summary' => 'Primary tap target with four variants.'],
    ['id' => 'card',              'name' => 'Card',              'summary' => 'Grouped surface with header, body and footer slots.'],
    ['id' => 'content-container', 'name' => 'ContentContainer',  'summary' => 'Scrollable, centered page body.'],
    ['id' => 'section-label',     'name' => 'SectionLabel',      'summary' => 'Uppercase heading for a group of controls.'],
    ['id' => 'segmented-control', 'name' => 'SegmentedControl',  'summary' => 'iOS-style single-select switcher.'],
    ['id' => 'sheet-action',      'name' => 'SheetAction',       'summary' => 'Full-width row action for sheets and menus.'],
    ['id' => 'skeleton',          'name' => 'Skeleton',          'summary' => 'Animated placeholder for loading state.'],
    ['id' => 'slideshow',         'name' => 'Slideshow',         'summary' => 'Swipeable, paginated image carousel.'],
    ['id' => 'text-input',        'name' => 'TextInput',         'summary' => 'Labeled single-line text field.'],
    ['id' => 'text-area',         'name' => 'TextArea',          'summary' => 'Labeled multi-line text field.'],
    ['id' => 'toggle',            'name' => 'Toggle',            'summary' => 'On/off switch, optionally with a label.'],
  ];

  public function index(IrekaUiRepository $content) {
    return view('pages.ireka-ui.index', [
      'page' => $content->intro(),
      'components' => self::COMPONENTS,
    ]);
  }

  public function structure(IrekaUiRepository $content) {
    return view('pages.ireka-ui.structure', [
      'page' => $content->structure(),
      'components' => self::COMPONENTS,
    ]);
  }

  public function navigation(IrekaUiRepository $content) {
    return view('pages.ireka-ui.navigation', [
      'page' => $content->doc('navigation.md'),
      'components' => self::COMPONENTS,
    ]);
  }

  public function modals(IrekaUiRepository $content) {
    return view('pages.ireka-ui.modals', [
      'page' => $content->doc('modals.md'),
      'components' => self::COMPONENTS,
    ]);
  }

  public function overlays(IrekaUiRepository $content) {
    return view('pages.ireka-ui.overlays', [
      'page' => $content->doc('overlays.md'),
      'components' => self::COMPONENTS,
    ]);
  }

  public function layout(IrekaUiRepository $content) {
    return view('pages.ireka-ui.layout', [
      'page' => $content->doc('layout.md'),
      'components' => self::COMPONENTS,
    ]);
  }

  public function components() {
    return view('pages.ireka-ui.components', [
      'components' => self::COMPONENTS,
    ]);
  }
}
