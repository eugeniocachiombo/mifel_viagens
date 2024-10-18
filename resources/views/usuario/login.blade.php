@include('inclusao.head')
<style>
    body{
        background: #cbcbcc;
    }
</style>

<div class="container-scroller" >
    <div class="container d-flex justify-content-center align-items-center page-body-wrapper">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"><i class="fas fa-user pe-2"></i> Login</h4>
                <p class="card-description">
                  Informe os seus dados
                </p>
                <form class="forms-sample">

                  <div class="form-group">
                    <label for="email"><i class="fas fa-user pe-2"></i>Email ou Telefone</label>
                    <input type="email" class="form-control" id="emailtelefone" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="senha"><i class="fas fa-key pe-2"></i> Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Senha">
                  </div>

                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                      Lembrar-me
                    </label>
                  </div>
                  <d class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary me-2" style="width: 250px">Logar</button>
                  </d>
                </form>
              </div>

              <div class="card-footer text-center" >
               <i class="fas fa-user-plus"></i> <a href="{{route("usuario.cadastrar")}}" style="text-decoration: none">Criar uma conta</a>
              </div>
            </div>
          </div>
    </div>
</div>

@include('inclusao.foot')