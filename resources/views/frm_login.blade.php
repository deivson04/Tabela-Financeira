
       @extends('layouts.app')
     
       @section('conteudo')
       
       <form action="/action_page.php">
           <div class="mb-3 mt-3">
             <label for="email" class="form-label">Email:</label>
             <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
           </div>
           <div class="mb-3">
             <label for="pwd" class="form-label">Password:</label>
             <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
           </div>
            
           <button type="submit" class="btn btn-primary">Submit</button>
           
           <div class="conta">
           <a href="cadastro">Criar nova conta</a> 
           </div>
           
         </form>
           
       
       
       @endsection   
       
       
  


