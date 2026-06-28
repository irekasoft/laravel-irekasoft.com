@props(['rows' => []])

<div class="overflow-x-auto rounded-xl border border-charcoal/10">
  <table class="w-full border-collapse text-left text-sm">
    <thead>
      <tr class="bg-charcoal/[0.03] font-mono text-[11px] uppercase tracking-[0.1em] text-charcoal/40">
        <th class="px-4 py-2.5 font-medium">Prop</th>
        <th class="px-4 py-2.5 font-medium">Type</th>
        <th class="px-4 py-2.5 font-medium">Default</th>
        <th class="px-4 py-2.5 font-medium">Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rows as $r)
        <tr class="border-t border-charcoal/5 align-top">
          <td class="px-4 py-2.5">
            <code class="rounded bg-charcoal/5 px-1.5 py-0.5 font-mono text-[13px] text-ink">{{ $r['prop'] }}</code>
          </td>
          <td class="px-4 py-2.5 font-mono text-[12px] text-violet">{{ $r['type'] }}</td>
          <td class="px-4 py-2.5 font-mono text-[12px] text-charcoal/40">{{ $r['default'] ?? '—' }}</td>
          <td class="px-4 py-2.5 text-charcoal/70">{{ $r['description'] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
