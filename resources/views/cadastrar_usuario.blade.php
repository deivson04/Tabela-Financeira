 
 @extends('layouts.app')

 @section('conteudo')
 <h1>Cadastro tabela Financeira</h1>
 <form action="/action_page.php">
     <div class="mb-3 mt-3">
       <label for="email" class="form-label">Email:</label>
       <input type="email" class="form-control" id="email" placeholder="digite seu email" name="email" required>
     </div>

     <div class="mb-3 mt-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="nome" class="form-control" id="nome" placeholder="digite seu nome" name="nome" required>
      </div>
     
     <div class="mb-3 mt-3">
        <label for="cpf" class="form-label">Cpf:</label>
        <input type="cpf" class="form-control" id="cpf" placeholder="digite seu cpf" name="cpf" required>
      </div>

     <div class="mb-3">
       <label for="senha" class="form-label">Senha:</label>
       <input type="senha" class="form-control" id="pwd" placeholder="digite sua senha" name="pswd" required>
     </div>

     <div class="mb-3">
        <label for="senha_repetida" class="form-label">Senha Novamente:</label>
        <input type="password" class="form-control" id="id_senha_repitida" placeholder="repita sua senha" name="pswd" required>
      </div>
      
     <button type="submit" class="btn btn-primary">Entrar</button>
     
     <div class="conta">
     <a href="/">Já sou cadastrado</a> 
     </div>
     
   </form>
     
 
 
 @endsection   
 
 




