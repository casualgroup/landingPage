<x-layout title="Contato">
  <div class="container py-3 my-4 border-top-0 border-bottom-0">
    <h1 class="p-4 fw-bold text-center">Contate-nos</h1>
    <div class="text-center">
    <p> Duvidas, marcações ou suporte? Preencha os campos abaixo para entrar em contato conosco.</p>
</div>
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">--}}
<div class="container py-3 my-4 border-top-0 border-bottom-0">
    <div class="contato shadow-lg mt-n9">
        <div class="row no-gutters">
            <div class="col-lg-5 contact-info gradient-brand-color p-5 order-lg-2">
                <h3 class="color--white mb-5">Informações de Contato</h3>

                <ul class="contact-info__list list-style--none position-relative z-index-101">
                    <li class="mb-4 pl-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                      </svg> contatocasualgroup@gmail.com
                    </li>
                    <li class="mb-4 pl-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                      </svg> +55 (81) 9-9690-2411
                    </li>
                </ul>

            </div>

            <div class="col-lg-7 contato p-5 order-lg-1">
                <form action="{{ route('mail.store') }}" class="contato form-validate" novalidate="novalidate" method="POST">
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Thiago" required>
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
                                <label class="required-field" for="mensagem">Mensagem</label>
                                <textarea class="form-control " id="mensagem" name="mensagem" rows="4" placeholder="Escreva aqui sua mensagem..." required></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">ENVIAR MENSAGEM</button>

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
