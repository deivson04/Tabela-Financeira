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
        
        <div class="container">
          
        @yield('conteudo')
        
        
        </div>   
            
    
  
  <script src="js/bootstrap.bundle.min.js"></script> 
  <script src="{{asset('js/tabelaFinanceira.js')}}"></script> 

</body>
</html>

