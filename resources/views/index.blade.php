<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Tabela Financeira</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/tabelaFinanceira.css')}}" rel="stylesheet">
</head>
<body>
       
      <h1>Tabela Financeira</h1>
        <div class="container">
           
            <div class="col-md-4 col-md-offset-4">
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
                
            </div>
            
      
    
  
  <script src="js/bootstrap.bundle.min.js"></script> 
  <script src="{{asset('js/tabelaFinanceira.js')}}"></script> 
</body>
</html>

