<x-layouts.app :title="'Contact'" :description="'Get in touch with iReka Soft — email, WhatsApp, or find us in Cyberjaya, Malaysia.'">

  <x-page-hero
    :image="asset('images/heroes/contact.jpg')"    
  >
    <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">Contact</p>
    <h1 class="mt-6 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl">
      We'd like to hear from you.
    </h1>
    <p class="mt-5 max-w-xl text-paper/70 leading-relaxed">
      Questions about iReka Soft, a feature request, a bug report, or a project to discuss —
      all welcome.
    </p>

    <div class="mt-8 flex flex-col sm:flex-row flex-wrap gap-4 items-stretch sm:items-center">
      <a class="inline-flex items-center justify-center font-mono text-[13px] uppercase tracking-wide bg-green-500 text-white px-6 py-3 rounded-sm hover:bg-green-600 transition-colors"
        href="https://wa.me/601135859242?text=Hello%20from%20irekasoft.com" target="_blank" rel="noopener">
        <i class="bi bi-whatsapp mr-1"></i>
        Send a WhatsApp message
      </a>
      <a href="https://irekaweb.com/enquiry" target="_blank" rel="noopener"
        class="inline-flex items-center justify-center font-mono text-[13px] uppercase tracking-wide bg-blue-500 text-white px-6 py-3 rounded-sm hover:bg-blue-600 transition-colors">
        <i class="bi bi-cursor mr-1"></i>
        Send enquiry 
      </a>
    </div>
  </x-page-hero>

  <section class="bg-paper">
    <div class="mx-auto max-w-6xl px-6 py-4 md:py-10 grid gap-8 md:grid-cols-3">
      <div>
        <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4">Direct</p>
        <ul class="space-y-3 text-lg font-display">
          <li><a href="mailto:irekasoft@gmail.com"
              class="hover:text-terracotta transition-colors">irekasoft@gmail.com</a></li>
          <li><a href="https://wa.me/601135859242?text=Hello%20from%20irekasoft.com" target="_blank" rel="noopener"
              class="hover:text-terracotta transition-colors">+60 11-3585 9242</a></li>
        </ul>
      </div>

      <div>
        <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4">Social</p>
        <ul class="space-y-3 text-sm">
          <li><a href="https://facebook.com/irekasoft" target="_blank" rel="noopener"
              class="hover:text-terracotta transition-colors">Facebook</a></li>
          <li><a href="https://instagram.com/irekasoft" target="_blank" rel="noopener"
              class="hover:text-terracotta transition-colors">Instagram</a></li>
          <li><a href="https://www.linkedin.com/company/ireka-soft" target="_blank" rel="noopener"
              class="hover:text-terracotta transition-colors">LinkedIn</a></li>
          <li><a href="https://github.com/irekasoft" target="_blank" rel="noopener"
              class="hover:text-terracotta transition-colors">GitHub</a></li>
          <li><a href="https://irekasoft.blogspot.com" target="_blank" rel="noopener"
              class="hover:text-terracotta transition-colors">Blogspot</a></li>
        </ul>

      </div>

      <div>
        <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4">Office</p>
        <p class="text-sm text-charcoal/70 leading-relaxed">
          Tinkerscape, Rekascape<br>
          3730, Persiaran Apec<br>
          Cyberjaya, Selangor<br>
          Malaysia
        </p>
      </div>
    </div>
  </section>

</x-layouts.app>
