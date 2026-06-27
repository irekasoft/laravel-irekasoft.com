<x-layouts.app :title="'Page not found'" :description="'The page you are looking for could not be found on iReka Soft.'">

  <section class="bg-paper flex flex-1 flex-col justify-center">
    <div class="mx-auto max-w-6xl px-6 py-24 md:py-32 text-center">
      <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-terracotta">404</p>
      <h1 class="mt-6 font-display font-semibold text-4xl md:text-5xl tracking-tight">
        Page not found
      </h1>
      <p class="mt-5 max-w-md mx-auto text-charcoal/70 leading-relaxed">
        The page you are looking for does not exist or may have been moved.
      </p>
      <a href="{{ route('home') }}"
        class="mt-8 inline-flex items-center justify-center font-mono text-[13px] uppercase tracking-wide bg-blue-500 text-white px-6 py-3 rounded-sm hover:bg-blue-600 transition-colors">
        <i class="bi bi-house mr-1"></i>
        Back to home
      </a>
    </div>
  </section>

</x-layouts.app>
