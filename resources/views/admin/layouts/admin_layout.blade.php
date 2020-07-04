
{{-- header --}}
@include('admin.includes.header')
{{-- navbar --}}
@include('admin.includes.navbar')
{{-- sidebar --}}
@include('admin.includes.sidebar')
{{-- main content --}}
<div class="content-wrapper">
<section class="content">
    <div class="row">
    @yield('admin_main')
     </div>
</section>
</div>
{{-- footer --}}
@include('admin.includes.footer')
{{-- footer links --}}
@include('admin.includes.footer_links')



