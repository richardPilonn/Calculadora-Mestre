<div class="d-flex justify-content-center align-items-center vh-100">


    <div class="w-50">


        @if (session()->has('success'))
            <div class="alert alert-dismissible fade show" role="alert"
                style="background-color: #ffe0b2; color:#ff5306; border-color: #ff5306">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <style>
            h3 {
                -webkit-text-stroke: 1px rgb(0, 0, 0);
                font-size: 36px;
                color: #fff2c0;
                text-shadow:
                    3px 3px 0 #000,
                    -1px -1px 0 #000,
                    1px -1px 0 #000,
                    -1px 1px 0 #000,
                    1px 1px 0 #000;
            }
        </style>

        <div class="card " style="border-radius: 10px">
            <div class="card-body" style="background-color: #ff914d; border-radius: 10px">
                <form wire:submit.prevent="adminCadastrarAluno">

                    <div class="mt-4">
                        <div class="mb-4">
                            <h3 class="text-center"
                                style="color: #fff2c0; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                <strong>Cadastrar Novo Aluno</strong>
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
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn"
                                            style="background-color: #ff5306; color:#fff2c0">
                                            <strong>Cadastrar</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
