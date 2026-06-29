<x-ireka-ui.shell
  :title="$page['section']['title'] . ' — ireka-ui'"
  :description="$page['description']"
  active="structure"
  :components="$components">

  <x-ireka-ui.markdown-section :section="$page['section']" heading="h1" />

</x-ireka-ui.shell>
