<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <style>
        * {
            margin:0;
            padding:0;
            box-sizing:border-box;  
            color:white;  
        } 

        body {
            background-image: url('{{ $backSrc }}');
            background-size: cover;
            background-repeat:no-repeat;
        }

        .bg {
            width:100%;
            height:100vh;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .container {
            width:1000px;
            margin:0 auto;
            padding: 50px 0;
        }

        .container h1{
            text-align: center; 
            
        }

        main {
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .box-image {
            width:600px;
            margin-top:50px;
            
        }

        .box-image img {
            width:100%;
            border: 2px solid white;
            transition: width 3s;
        }

        .box-image:hover {
            width:800px;
            cursor: pointer;
        }



    </style>
</head>
<body>
    <div class="bg">
        <div class="container">
            <h1>NON C'E' MOLTO DA DIRE ;)</h1>
            <main>
                <div class="box-image">
                    <img src="{{ $src }}" alt="foto-a-caso" />
                    
                </div>
            </main>
    
        </div>

    </div>
    

</body>
</html>