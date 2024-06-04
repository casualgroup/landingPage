<x-layout title="Contato">
  <div class="container">
    <h1 class="p-4 fw-bold text-center">Contate-nos</h1>
    <div style="text-align:center">
    <p> Duvidas, marcações ou suporte? Preencha os campos abaixo para entrar em contato conosco.</p>
</div>
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">--}}
<div class="container">
    <div class="contato shadow-lg mt-n9">
        <div class="row no-gutters">
            <div class="col-lg-5 contact-info gradient-brand-color p-5 order-lg-2">
                <h3 class="color--white mb-5">Informações de Contato</h3>

                <ul class="contact-info__list list-style--none position-relative z-index-101">
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-envelope"></i></span> .... contatocasualgroup@gmail.com
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-phone"></i></span> .... 3523-9045
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> .... R. Pedro Ribeiro, 85 - Universitario
                        <br> Vitoria de Santo Antao - PE
                        <br> 55612-285


                    </li>
                </ul>

            </div>

            <div class="col-lg-7 contato p-5 order-lg-1">
                <form action="#" class="contato form-validate" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="Nome">Nome</label>
                                <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Ex: Thiago" required>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="" for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Ex: casualGroup@gmail.com" required>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="Mensagem">Mensagem</label>
                                <textarea class="form-control " id="Mensagem" name="Mensagem" rows="4" placeholder="Escreva aqui sua mensagem..." required></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">ENVIAR MENSAGEM</button>
                          <a href="mailto:casualGroup@gmail.com?subject=Assunto - " class="btn btn-dark">ENVIAR MENSAGEM</a>

                            <p> *Ao enviar uma mensagem, você concorda com termos e condições impostas pela plataforma de mensagem utilizada </p>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
  </div>
</x-layout>
