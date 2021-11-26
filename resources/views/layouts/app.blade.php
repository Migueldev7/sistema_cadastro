<html>
    <head>
        
        <title>Cadastro de Produtos</title>
        <meta name="crsf-token" content="{{csrf_token()}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <Style>
            body{
                padding: 20px;

            }
            .navbar{
                margin-bottom: 20px; 
            }
        </Style>
    </head>
<body>
    
    <div class="container">

        <main role="main">
            @component('navbar', ["current" => $current])
            @endcomponent
                
           
            @hasSection ('body')

            @yield('body')
            
            @endif            
        </main>
        @hasSection ('javascript')
        @yield('javascripy')
        @endif
        
</body>
</html>