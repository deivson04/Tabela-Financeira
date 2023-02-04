
       @extends('layouts.app')
     
       @section('conteudo')
       <h1 class="title">Tabela Financeira</h1>
       <form action="/action_page.php">
           <div class="mb-3 mt-3">
             <label for="email" class="form-label">Email:</label>
             <input type="email" class="form-control" id="email" placeholder="digite seu email" name="email" required>
           </div>
           <div class="mb-3">
             <label for="pwd" class="form-label">Senha:</label>
             <input type="password" class="form-control" id="pwd" placeholder="digite sua senha" name="pswd" required>
           </div>
            
           <button type="submit" class="btn btn-primary">Entrar</button>
           
           <div class="conta">
           <a href="cadastro">Criar nova conta</a> 
           </div>

           <div class="senha">
            <a href="">Recuperar senha</a> 
            </div>
           
         </form>
           
       
       
       @endsection   
       
       
  



