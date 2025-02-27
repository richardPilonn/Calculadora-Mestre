<div class="d-flex justify-content-center align-items-center vh-100">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="w-50">

        <div class="card " style="border-radius: 10px">
            <div class="card-body" style="background-color: #ff914d; border-radius: 10px">
                <form wire:submit.prevent="store">

                    <div class="mt-4">
                        <div class="mb-4">
                            <h3 class="text-center" style="color: #fff2c0; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> <strong>Cadastre-se Já!</strong>
                            </h3>
                        </div>
                    </div>

                    <div class="ms-5">
                        <div class="me-5">
                            <div class="mb-3">
                                <label for="nome" class="form-label" style="color: #fff2c0">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    placeholder="Ex: Fernanda" wire:model.defer="nome">
                            </div>


                            <div class="mb-3">
                                <label for="email_educacional" style="color: #fff2c0">Email Educacional</label>
                                <input type="email" name="email_educacional" id="email_educacional"
                                    class="form-control" wire:model.defer="email_educacional"
                                    placeholder="Ex: fernanda@portalsesisp.org.br">
                            </div>

                            <div class="mb-3">
                                <label for="rm" style="color: #fff2c0">RM</label>
                                <input type="text" name="rm" id="rm" class="form-control"
                                    placeholder="****" wire:model.defer="rm">
                                   <p style="color: #fff2c0"> <i class="bi bi-4-circle-fill"> dígitos no máximo</i></p>


                            </div>

                            <div class="mt-4">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-center dg-secondary mb-2">
                                        <button type="submit" class="btn"
                                            style="background-color: #ff5306; color:#fff2c0">
                                            <strong>Cadastrar</strong></button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="mb-4">
                                    <p class="text-center" style="color: #fff2c0;">Cadastrar-se como
                                        <a href="" style="color: #ff5306"><strong>Administrador</strong></a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
