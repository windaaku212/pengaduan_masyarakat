<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.component.head')
</head>

<body class="index-page">

@include('frontend.component.header')

  <main class="main">

@include('frontend.component.herosection')

@include('frontend.component.clientssection')

  </main>

@include('frontend.component.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

@include('frontend.component.script')
</body>

</html>