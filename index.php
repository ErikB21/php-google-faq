<!--  
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di 
queste domande e risposte con PHP. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Google Faq</title>
</head>
<body>
    <!-- header -->
    <header class="container-fluid p-0 border-bottom position-sticky">

        <div class="row justify-content-between">
            <div class="col-6 d-flex align-items-center">
                <div class="logo">
                    <img src="image/pngegg.png" alt="Google">
                </div>
                <span class="fs-3 text-secondary">Privacy e termini</span>
            </div>

            <div class="col-6 d-flex align-items-center justify-content-end">
                <div class="eb_grid mx-1 d-flex align-items-center justify-content-center">
                    <img src="image/view_app_grid_icon_181213.svg" alt="">
                </div>
                <div class="eb_grid_2 d-flex align-items-center justify-content-center mx-1">
                    <img src="image/robot02_90810.png" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <ul class="d-flex align-items-center">
                <?php
                    $lists =['Introduzione','Norme sulla privacy','Termini di servizio','Tecnologie','Domande frequenti'];
                    foreach($lists as $list){
                        echo "<li class='list-unstyled px-3'>" . $list . "</li>";
                    }
                ?>
            </ul>
        </div>
    </header>

    <main>
        
    </main>

    <footer></footer>
</body>
</html>