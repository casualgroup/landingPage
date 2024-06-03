<div class="container-xxl">
    <div class="col-12">
      <h1 class="fw-bold text-center">{{ $titulo }}</h1>
    </div>
  <div class="col-12">
    <p class="text-center">{{ $description }}</p>
  </div>
  @isset($redirect)
  <div class="col-12">
    <div class="container justify-content-end">
    <a href="{{ $redirect }}" target="_blank" class="btn btn-dark">Saiba Mais</a>
    </div>
  </div>
  @endisset
</div>
