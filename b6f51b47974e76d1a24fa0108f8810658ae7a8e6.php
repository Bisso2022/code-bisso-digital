<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
   @import  url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');
        #l1{
            color: #2292F2 !important;
        }
        .container h5{
            text-align: center;
            font-family: 'Lato', sans-serif;
            font-size: 25px;
            color: #2292F2 !important;
        }
        .container .p{
            text-align: center;
            font-family: 'Lato', sans-serif;
            font-size: 17px;
            color: #2292F2 !important;
        }
        .container p{
            text-align: center;
            font-family: 'Lato', sans-serif;
            font-size: 18px;
        }
        .container .p1{
            text-align: left;
            font-family: 'Lato', sans-serif;
            font-size: 18px;
            text-decoration: underline;
            color: #2292F2 !important;
        }
        .div1{
            border: 1px solid #2292F2;
            font-family: 'Lato', sans-serif;
        }
        .div1 ul li{
            list-style-type: none;
            margin-top: 5px;
            margin-bottom: 2px;
            text-transform: capitalize;
            font-size: 17px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h5>BISSO DIGITAL</h5>
            <p class="p">Agence web de création de sites web, applications web, mobiles et desktop.</p>
            <hr>
           <?php if(isset($nom) && !empty($nom)): ?>
           <div class="col-md-12">
                <p>Récaputulatif des informations pour la demandes de devis</p>
                <hr>
                <p class="p1">1-Informations sur le client</p>
                <div class="div1">
                    <ul>
                        <li>Nom client : <?php echo e($nom); ?></li>
                        <li>Prénom client : <?php echo e($prenom); ?></li>
                        <li>Téléphone client :  <?php echo e($telephone); ?></li>
                        <li>Email client : <?php echo e($email); ?></li>
                        <li>Ville client : <?php echo e($ville); ?></li>
                        <li>Code postal : <?php echo e($code); ?></li>
                        <li>Adresse client : <?php echo e($adresse); ?></li>
                    </ul>
                </div><br>
                <p class="p1">2-Informations sur la societé</p>
                <div class="div1">
                    <ul>
                        <li>Nom societé : <?php echo e($societe); ?></li>
                        <li>Site web societé : <?php echo e($site); ?></li>
                    </ul>
                </div>
                <br>
                <p class="p1">3-Informations sur le projet</p>
                <div class="div1">
                    <ul>
                        <li>Budget projet : <?php echo e($prix); ?> dhs</li>
                        <li>Date projet : <?php echo e($date_p); ?></li>
                    </ul>
                </div>
            </div>
            <?php else: ?>
            <h5>Contenu indisponible.</h5>
           <?php endif; ?>
        </div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\agenceweb\resources\views/devis_pdf.blade.php ENDPATH**/ ?>