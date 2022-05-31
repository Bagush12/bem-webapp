@include('apps.layouts.Heads')
  {{-- Navigation Bar --}}
  @include('apps.layouts.NavigationBar')
  {{--  Hero SEction --}}
  @include('apps.layouts.HeroSection')
  {{-- Main Application --}}
  <main id="main">
    {{-- About Section --}}
    @include('apps.layouts.AboutSection')
    
    {{-- @include('apps.layouts.ServiceSection')
    
    @include('apps.layouts.PortfolioSection')
    
    @include('apps.layouts.FaqSection')
    
    @include('apps.layouts.TeamSection')
    
    @include('apps.layouts.ClientSection')
    
    @include('apps.layouts.ContactSection')   --}}
  </main>
  {{-- Footer Section --}}
  @include('apps.layouts.FooterSection')
@include('apps.layouts.FootJsVendor')