@php
  $badgeCode = <<<'JSX'
<Badge label="Default" />
<Badge label="Info" variant="blue" />
<Badge label="Success" variant="green" icon={CheckCircle} />
<Badge label="Warning" variant="yellow" icon={AlertTriangle} />
<Badge label="Error" variant="red" icon={XCircle} />
JSX;

  $buttonCode = <<<'JSX'
<Button variant="primary">Primary</Button>
<Button variant="secondary">Secondary</Button>
<Button variant="outline">Outline</Button>
<Button variant="destructive">Destructive</Button>
JSX;

  $cardCode = <<<'JSX'
<Card>
  <Card.Header
    title="Order #1024"
    trailing={<Badge label="Paid" variant="green" />}
  />
  <Card.Body>Two items · RM 38.00</Card.Body>
  <Card.Footer>
    <Badge label="Delivered" variant="green" />
    <span className="text-xs text-neutral-400 ml-auto">Jun 23</span>
  </Card.Footer>
</Card>

<Card variant="dark">
  <Card.Header title="Dark card" />
  <Card.Body>Inverted surface variant.</Card.Body>
</Card>
JSX;

  $contentCode = <<<'JSX'
<ContentContainer>
  <SectionLabel>Profile</SectionLabel>
  <p>Page content goes here…</p>
</ContentContainer>
JSX;

  $sectionLabelCode = <<<'JSX'
<SectionLabel>Notifications</SectionLabel>
JSX;

  $segmentCode = <<<'JSX'
const [segment, setSegment] = useState('day');

<SegmentedControl
  options={[
    { label: 'Day', value: 'day' },
    { label: 'Week', value: 'week' },
    { label: 'Month', value: 'month' },
  ]}
  value={segment}
  onChange={setSegment}
/>
JSX;

  $sheetCode = <<<'JSX'
<SheetAction label="Edit" onClick={…} />
<SheetAction label="Share" onClick={…} />
<SheetAction label="Delete" danger onClick={…} />
JSX;

  $skeletonCode = <<<'JSX'
<div className="flex items-center gap-3">
  <Skeleton className="w-10 h-10" rounded="rounded-full" />
  <div className="flex-1 space-y-2">
    <Skeleton className="h-3 w-3/4" />
    <Skeleton className="h-3 w-1/2" />
  </div>
</div>
JSX;

  $slideshowCode = <<<'JSX'
<Slideshow
  autoLoop
  slides={[
    { image: '/a.jpg', title: 'Fresh deals', subtitle: 'Up to 40% off' },
    { image: '/b.jpg', title: 'New arrivals' },
    { image: '/c.jpg', title: 'Local favourites' },
  ]}
/>
JSX;

  $textInputCode = <<<'JSX'
const [name, setName] = useState('');

<TextInput label="Full name" placeholder="Jane Doe"
  value={name} onChange={(e) => setName(e.target.value)} />
<TextInput label="Password" type="password" placeholder="••••••••" />
JSX;

  $textAreaCode = <<<'JSX'
<TextArea label="Notes" rows={4}
  placeholder="Add delivery instructions…" />
JSX;

  $toggleCode = <<<'JSX'
<Toggle defaultChecked />
<Toggle label="Notifications" defaultChecked />
<Toggle label="Dark mode" />
JSX;

  // Prop tables — defined here (not inline in attributes) so quotes in the
  // type unions don't trip up Blade's component-tag parser.
  $badgeProps = [
    ['prop' => 'label', 'type' => 'string', 'description' => 'Text shown inside the badge.'],
    ['prop' => 'variant', 'type' => "'default' | 'blue' | 'green' | 'red' | 'yellow'", 'default' => "'default'", 'description' => 'Color scheme.'],
    ['prop' => 'icon', 'type' => 'LucideIcon', 'description' => 'Optional icon component rendered before the label.'],
  ];

  $buttonProps = [
    ['prop' => 'children', 'type' => 'ReactNode', 'description' => 'Button label / content.'],
    ['prop' => 'variant', 'type' => "'primary' | 'secondary' | 'outline' | 'destructive'", 'default' => "'primary'", 'description' => 'Visual style.'],
    ['prop' => 'onClick', 'type' => '() => void', 'description' => 'Tap handler.'],
    ['prop' => 'className', 'type' => 'string', 'default' => "''", 'description' => 'Extra classes, merged onto the button.'],
  ];

  $cardProps = [
    ['prop' => 'variant', 'type' => "'default' | 'dark' | 'ghost'", 'default' => "'default'", 'description' => 'Surface style.'],
    ['prop' => 'onClick', 'type' => '() => void', 'description' => 'When set, the card renders as a button.'],
    ['prop' => 'className', 'type' => 'string', 'default' => "''", 'description' => 'Extra classes.'],
    ['prop' => 'children', 'type' => 'ReactNode', 'description' => 'Header / Body / Footer slots.'],
  ];

  $cardHeaderProps = [
    ['prop' => 'title', 'type' => 'string', 'description' => 'Header title text.'],
    ['prop' => 'image', 'type' => 'string', 'description' => 'Optional full-width image URL above the title.'],
    ['prop' => 'leading', 'type' => 'ReactNode', 'description' => 'Content before the title (e.g. an avatar).'],
    ['prop' => 'trailing', 'type' => 'ReactNode', 'description' => 'Content after the title (e.g. a badge or chevron).'],
  ];

  $contentProps = [
    ['prop' => 'children', 'type' => 'ReactNode', 'description' => 'Page content.'],
    ['prop' => 'full', 'type' => 'boolean', 'default' => 'false', 'description' => 'Use full width instead of the centered max-width column.'],
    ['prop' => 'noMargins', 'type' => 'boolean', 'default' => 'false', 'description' => 'Remove the default padding.'],
  ];

  $sectionLabelProps = [
    ['prop' => 'children', 'type' => 'ReactNode', 'description' => 'Label text.'],
  ];

  $segmentProps = [
    ['prop' => 'options', 'type' => 'string[] | { label, value }[]', 'default' => '[]', 'description' => 'The selectable segments.'],
    ['prop' => 'value', 'type' => 'string', 'description' => 'Currently selected value.'],
    ['prop' => 'onChange', 'type' => '(value) => void', 'description' => 'Called with the new value on tap.'],
  ];

  $sheetProps = [
    ['prop' => 'label', 'type' => 'string', 'description' => 'Row text.'],
    ['prop' => 'danger', 'type' => 'boolean', 'default' => 'false', 'description' => 'Render in destructive (red) style.'],
    ['prop' => 'onClick', 'type' => '() => void', 'description' => 'Tap handler.'],
  ];

  $skeletonProps = [
    ['prop' => 'className', 'type' => 'string', 'default' => "''", 'description' => 'Width / height utilities for the block.'],
    ['prop' => 'rounded', 'type' => 'string', 'default' => "'rounded-lg'", 'description' => 'Corner radius utility (e.g. rounded-full).'],
  ];

  $slideshowProps = [
    ['prop' => 'slides', 'type' => '{ image, title?, subtitle?, onPress? }[]', 'default' => '[]', 'description' => 'Slides to render. A tap (no drag) fires onPress.'],
    ['prop' => 'autoLoop', 'type' => 'boolean', 'default' => 'false', 'description' => 'Auto-advance and wrap around.'],
    ['prop' => 'height', 'type' => 'number | string', 'description' => 'Fixed slide height. Defaults to a 4:3 aspect ratio.'],
    ['prop' => 'highlightColor', 'type' => 'string', 'description' => 'Active pagination dot color.'],
    ['prop' => 'paddingX', 'type' => 'number', 'default' => '16', 'description' => 'Horizontal inset around the active slide.'],
  ];

  $textInputProps = [
    ['prop' => 'label', 'type' => 'string', 'description' => 'Optional field label.'],
    ['prop' => 'className', 'type' => 'string', 'default' => "''", 'description' => 'Extra classes on the input.'],
    ['prop' => '...props', 'type' => 'InputHTMLAttributes', 'description' => 'Forwarded to the underlying input (type, value, onChange, placeholder…).'],
  ];

  $textAreaProps = [
    ['prop' => 'label', 'type' => 'string', 'description' => 'Optional field label.'],
    ['prop' => 'rows', 'type' => 'number', 'default' => '3', 'description' => 'Visible text rows.'],
    ['prop' => 'className', 'type' => 'string', 'default' => "''", 'description' => 'Extra classes on the textarea.'],
    ['prop' => '...props', 'type' => 'TextareaHTMLAttributes', 'description' => 'Forwarded to the underlying textarea.'],
  ];

  $toggleProps = [
    ['prop' => 'label', 'type' => 'string', 'description' => 'Optional label; when present the switch is laid out as a row.'],
    ['prop' => 'defaultChecked', 'type' => 'boolean', 'default' => 'false', 'description' => 'Initial on/off state.'],
  ];
@endphp

<x-ireka-ui.shell
  title="Components — ireka-ui"
  description="Live reference for every ireka-ui component, with previews, copyable code and full prop tables."
  active="components"
  :components="$components">

  {{-- Page header --}}
  <p class="font-mono text-[11px] uppercase tracking-[0.16em] text-charcoal/40">Reference</p>
  <h1 class="mt-3 font-display text-4xl font-semibold tracking-tight text-ink">Components</h1>
  <p class="mt-5 max-w-2xl text-lg leading-relaxed text-charcoal/70">
    Every component in ireka-ui, with a live preview, the source to copy, and its full prop list.
    Components are plain React functions — style overrides go through
    <code class="rounded bg-charcoal/5 px-1 py-0.5 font-mono text-[13px] text-ink">className</code>.
  </p>

  {{-- Jump chips --}}
  <div class="mt-6 flex flex-wrap gap-2">
    @foreach ($components as $c)
      <a href="#{{ $c['id'] }}"
        class="rounded-full border border-charcoal/15 px-2.5 py-1 text-xs text-charcoal/70 transition-colors hover:border-charcoal/40 hover:text-ink">
        {{ $c['name'] }}
      </a>
    @endforeach
  </div>

  <div class="mt-12 space-y-2">

    {{-- Badge --}}
    <x-ireka-ui.section id="badge" title="Badge"
      lead="Small inline label for status, categories or counts. Five color variants and an optional leading icon.">
      <x-ireka-ui.demo :code="$badgeCode">
        <div class="flex flex-wrap justify-center gap-2">
          <span class="inline-flex items-center gap-1 rounded-full bg-neutral-100 px-2.5 py-0.5 text-xs font-medium text-neutral-700">Default</span>
          <span class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-700">Info</span>
          <span class="inline-flex items-center gap-1 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-700"><i class="bi bi-check-circle-fill text-[10px]"></i>Success</span>
          <span class="inline-flex items-center gap-1 rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-700"><i class="bi bi-exclamation-triangle-fill text-[10px]"></i>Warning</span>
          <span class="inline-flex items-center gap-1 rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-700"><i class="bi bi-x-circle-fill text-[10px]"></i>Error</span>
          <span class="inline-flex items-center gap-1 rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-700"><i class="bi bi-star-fill text-[10px]"></i>Featured</span>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$badgeProps" />
    </x-ireka-ui.section>

    {{-- Button --}}
    <x-ireka-ui.section id="button" title="Button"
      lead="Full-width primary action with four variants. Renders a native button element.">
      <x-ireka-ui.demo :code="$buttonCode">
        <div class="space-y-2">
          <button class="w-full rounded-xl bg-neutral-900 py-2.5 text-sm font-medium text-white">Primary</button>
          <button class="w-full rounded-xl bg-neutral-100 py-2.5 text-sm font-medium text-neutral-800">Secondary</button>
          <button class="w-full rounded-xl border border-neutral-300 py-2.5 text-sm font-medium text-neutral-700">Outline</button>
          <button class="w-full rounded-xl bg-red-500 py-2.5 text-sm font-medium text-white">Destructive</button>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$buttonProps" />
    </x-ireka-ui.section>

    {{-- Card --}}
    <x-ireka-ui.section id="card" title="Card"
      lead="A rounded surface composed from Card.Header, Card.Body and Card.Footer. Pass onClick to make the whole card tappable.">
      <x-ireka-ui.demo :code="$cardCode">
        <div class="space-y-3">
          <div class="w-full overflow-hidden rounded-2xl border border-neutral-200 bg-white text-left">
            <div class="flex items-center gap-3 px-4 pt-3 pb-2">
              <p class="flex-1 truncate text-sm font-semibold text-neutral-900">Order #1024</p>
              <span class="inline-flex items-center gap-1 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-700">Paid</span>
            </div>
            <div class="px-4 py-3 text-sm text-neutral-600">Two items · RM 38.00</div>
            <div class="flex items-center gap-2 border-t border-neutral-100 px-4 py-3">
              <span class="inline-flex items-center gap-1 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-700">Delivered</span>
              <span class="ml-auto text-xs text-neutral-400">Jun 23</span>
            </div>
          </div>
          <div class="w-full overflow-hidden rounded-2xl bg-neutral-900 text-left">
            <div class="flex items-center gap-3 px-4 pt-3 pb-2">
              <p class="flex-1 truncate text-sm font-semibold text-white">Dark card</p>
            </div>
            <div class="px-4 py-3 text-sm text-neutral-300">Inverted surface variant.</div>
          </div>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Card props</h3>
      <x-ireka-ui.props :rows="$cardProps" />
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Card.Header props</h3>
      <x-ireka-ui.props :rows="$cardHeaderProps" />
    </x-ireka-ui.section>

    {{-- ContentContainer --}}
    <x-ireka-ui.section id="content-container" title="ContentContainer"
      lead="Scrollable page body. Fills the remaining height, scrolls vertically, and centers content to a comfortable reading width unless told otherwise.">
      <x-ireka-ui.demo :code="$contentCode">
        <div class="flex h-40 flex-col overflow-hidden rounded-xl border border-neutral-200 bg-white">
          <div class="flex-1 overflow-y-auto p-4">
            <div class="mx-auto max-w-lg">
              <p class="mb-2 text-xs font-semibold uppercase tracking-wider text-neutral-400">Profile</p>
              <p class="text-sm text-neutral-600">
                Content scrolls inside this region while the surrounding chrome stays put. Centered to
                <code class="font-mono text-[12px]">max-w-lg</code> by default.
              </p>
            </div>
          </div>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$contentProps" />
    </x-ireka-ui.section>

    {{-- SectionLabel --}}
    <x-ireka-ui.section id="section-label" title="SectionLabel"
      lead="Uppercase caption used to title a group of controls.">
      <x-ireka-ui.demo :code="$sectionLabelCode">
        <div class="w-full">
          <p class="mb-2 text-xs font-semibold uppercase tracking-wider text-neutral-400">Notifications</p>
          <div class="rounded-xl border border-neutral-200 px-4 py-3 text-sm text-neutral-600">
            Grouped content sits below the label.
          </div>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$sectionLabelProps" />
    </x-ireka-ui.section>

    {{-- SegmentedControl --}}
    <x-ireka-ui.section id="segmented-control" title="SegmentedControl"
      lead="iOS-style single-select switch. Options can be plain strings or { label, value } objects.">
      <x-ireka-ui.demo :code="$segmentCode">
        <div class="flex gap-1 rounded-xl bg-neutral-100 p-1">
          <button class="flex-1 rounded-lg bg-white py-1.5 text-sm font-medium text-neutral-900 shadow-sm">Day</button>
          <button class="flex-1 rounded-lg py-1.5 text-sm font-medium text-neutral-500">Week</button>
          <button class="flex-1 rounded-lg py-1.5 text-sm font-medium text-neutral-500">Month</button>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$segmentProps" />
    </x-ireka-ui.section>

    {{-- SheetAction --}}
    <x-ireka-ui.section id="sheet-action" title="SheetAction"
      lead="Full-width tappable row for action sheets and dropdown menus. Set danger for destructive actions.">
      <x-ireka-ui.demo :code="$sheetCode">
        <div class="w-full rounded-xl border border-neutral-200 bg-white p-1.5">
          <button class="w-full rounded-xl px-3 py-2.5 text-left text-sm text-neutral-800 hover:bg-neutral-50">Edit</button>
          <button class="w-full rounded-xl px-3 py-2.5 text-left text-sm text-neutral-800 hover:bg-neutral-50">Share</button>
          <button class="w-full rounded-xl px-3 py-2.5 text-left text-sm text-red-600 hover:bg-neutral-50">Delete</button>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$sheetProps" />
    </x-ireka-ui.section>

    {{-- Skeleton --}}
    <x-ireka-ui.section id="skeleton" title="Skeleton"
      lead="Animated placeholder block for loading states. Size it with utility classes.">
      <x-ireka-ui.demo :code="$skeletonCode">
        <div class="w-full space-y-3 rounded-xl border border-neutral-200 bg-white p-4">
          <div class="flex items-center gap-3">
            <div class="h-10 w-10 animate-pulse rounded-full bg-neutral-200"></div>
            <div class="flex-1 space-y-2">
              <div class="h-3 w-3/4 animate-pulse rounded-lg bg-neutral-200"></div>
              <div class="h-3 w-1/2 animate-pulse rounded-lg bg-neutral-200"></div>
            </div>
          </div>
          <div class="h-3 w-full animate-pulse rounded-lg bg-neutral-200"></div>
          <div class="h-24 w-full animate-pulse rounded-lg bg-neutral-200"></div>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$skeletonProps" />
    </x-ireka-ui.section>

    {{-- Slideshow --}}
    <x-ireka-ui.section id="slideshow" title="Slideshow"
      lead="Swipeable, paginated image carousel with drag, snap, dots and optional auto-advance.">
      <x-ireka-ui.demo :code="$slideshowCode">
        <div class="w-full">
          <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-neutral-200">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600&q=80" alt="" class="h-full w-full object-cover" />
            <div class="absolute inset-x-0 bottom-0 rounded-b-2xl bg-black/40 px-4 py-3 backdrop-blur-sm">
              <p class="text-sm font-semibold text-white">Fresh deals</p>
              <p class="mt-0.5 text-xs text-white/70">Up to 40% off</p>
            </div>
          </div>
          <div class="mt-2.5 flex justify-center gap-1.5">
            <span class="h-2 w-5 rounded-full bg-emerald-500"></span>
            <span class="h-2 w-2 rounded-full bg-neutral-300"></span>
            <span class="h-2 w-2 rounded-full bg-neutral-300"></span>
          </div>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$slideshowProps" />
    </x-ireka-ui.section>

    {{-- TextInput --}}
    <x-ireka-ui.section id="text-input" title="TextInput"
      lead="Labeled single-line field. Any extra props (type, placeholder, value…) pass straight through to the input.">
      <x-ireka-ui.demo :code="$textInputCode">
        <div class="w-full space-y-3">
          <div class="flex flex-col gap-1.5">
            <label class="text-xs font-medium text-neutral-500">Full name</label>
            <input type="text" placeholder="Jane Doe" class="w-full rounded-xl border border-neutral-200 bg-white px-3 py-2.5 text-base focus:border-transparent focus:outline-none focus:ring-2 focus:ring-neutral-900" />
          </div>
          <div class="flex flex-col gap-1.5">
            <label class="text-xs font-medium text-neutral-500">Password</label>
            <input type="password" placeholder="••••••••" class="w-full rounded-xl border border-neutral-200 bg-white px-3 py-2.5 text-base focus:border-transparent focus:outline-none focus:ring-2 focus:ring-neutral-900" />
          </div>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$textInputProps" />
    </x-ireka-ui.section>

    {{-- TextArea --}}
    <x-ireka-ui.section id="text-area" title="TextArea"
      lead="Labeled multi-line field. Same pass-through behaviour as TextInput, plus a rows prop.">
      <x-ireka-ui.demo :code="$textAreaCode">
        <div class="w-full">
          <div class="flex flex-col gap-1.5">
            <label class="text-xs font-medium text-neutral-500">Notes</label>
            <textarea rows="4" placeholder="Add delivery instructions…" class="w-full resize-none rounded-xl border border-neutral-200 bg-white px-3 py-2.5 text-base focus:border-transparent focus:outline-none focus:ring-2 focus:ring-neutral-900"></textarea>
          </div>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$textAreaProps" />
    </x-ireka-ui.section>

    {{-- Toggle --}}
    <x-ireka-ui.section id="toggle" title="Toggle"
      lead="On/off switch. Renders standalone, or as a labeled row when given a label.">
      <x-ireka-ui.demo :code="$toggleCode">
        <div class="w-full space-y-3">
          <div class="flex justify-center">
            <span class="relative inline-block h-6 w-11 shrink-0 rounded-full" style="background-color:#171717;">
              <span class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow" style="transform:translateX(20px);"></span>
            </span>
          </div>
          <div class="space-y-3 rounded-xl border border-neutral-200 px-4 py-3">
            <div class="flex items-center justify-between">
              <span class="text-sm text-neutral-700">Notifications</span>
              <span class="relative inline-block h-6 w-11 shrink-0 rounded-full" style="background-color:#171717;">
                <span class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow" style="transform:translateX(20px);"></span>
              </span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm text-neutral-700">Dark mode</span>
              <span class="relative inline-block h-6 w-11 shrink-0 rounded-full" style="background-color:#e5e5e5;">
                <span class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow"></span>
              </span>
            </div>
          </div>
        </div>
      </x-ireka-ui.demo>
      <h3 class="pt-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Props</h3>
      <x-ireka-ui.props :rows="$toggleProps" />
    </x-ireka-ui.section>

  </div>

  <div class="mt-4 border-t border-charcoal/10 pt-6 font-mono text-[11px] uppercase tracking-[0.12em] text-charcoal/40">
    ireka-ui · {{ count($components) }} components · built by iReka Soft
  </div>

</x-ireka-ui.shell>
