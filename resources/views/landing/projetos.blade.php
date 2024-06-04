<x-layout title="Nossos Projetos">
  <div class="container">
    <h1 class="p-4 fw-bold text-center">Projetos Lançados</h1>

    <div class="p-4 col align-content-center">
      <div class="row container justify-content-evenly">
        <div class="col-3">
          <img src="{{ asset('img/LilW_Logo.png') }}" alt="Logo do Lil Weather" class="img-fluid p-2">
        </div>
        <div class="col-6">
          <x-projectLayout titulo="LiL Weather"
                           description="Lil Weather é um dos nossos aplicativos feitos. Ele é um programa de previsão do tempo que visa a simplicidade e agencia do cliente. Você poderá ver as previsões da sua cidade preferida junto com a previsão da semana dela. Junto com isso, sua interface mudará para combinar com o clima da cidade em questão."
                           redirect="https://github.com/LongDayJ/Lil-Weather-App"
          ></x-projectLayout>
        </div>
      </div>
    </div>

    <div class="p-4 col align-content-center">
      <div class="row container justify-content-evenly">
        <div class="col-6">
          <x-projectLayout titulo="SpaceP"
                           description="SpaceP também é um dos nossos aplicativos. Este aplicativo foi feito pensando em quem que descobrir um pouca mais do nosso universo. Nele você terá um lindo vislumbre do espaço sideral. Neste programa você poderá ver as fotos tiradas pelos telescópios da NASA e disponibilizada por ela. Fotos lindas e perfeitas para papeis de parede e quadros."
                           redirect="https://github.com/kazmath/spacep_mobile"
          ></x-projectLayout>
        </div>
        <div class="col-3">
          <img src="{{ asset('img/SpaceP.png') }}" alt="Logo do SpaceP" class="img-fluid p-2">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h1 class="text-center p-4 fw-bold">Projetos em Desenvolvimento</h1>

    <div class="p-4 col align-content-center">
      <div class="row container justify-content-evenly">
        <div class="col-3">
          <img src="{{ asset('img/ControleTotalLogo.png') }}" alt="Logo do Controle Total" class="img-fluid p-2">
        </div>
        <div class="col-6">
          <x-projectLayout titulo="Controle Total"
                           description="Controle total é o nosso produto mais recente e ainda está em desenvolvimento. Ele é planejado auxilio para clinicas de saúde e no gerenciamento de consultas e estoque. Este aplicativo vem modulado para com que você possa escolher so as funcionalidades e possui um sistema de lembrete para lembrar clientes de suas consultas."
          ></x-projectLayout>
        </div>
      </div>
    </div>
  </div>
</x-layout>
