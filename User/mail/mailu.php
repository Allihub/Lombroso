<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="mail.css">
    <title>Mail</title>
</head>

<body>
<!-- <a href="page_8.html" class="change_page"></a> -->

<div class="content">
    <header>
        <div id="box_0">
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../User/User.php">
                            <image src= "logo-alex_Plan de travail 1.png" title="Menu"></image>
                        </a>
                   </li>
                </ul>
                
            </div>
            <div class="box_0_element"><a href="../Aide/aide.html" style="color:black;font-size:30px;text-decoration:none" title="Aide">Aide </a></div>
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../profiluser/profiluser.html">
                            <image src= "user.png" title="Profil"></image>
                        </a>
                   </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="under_header">
        
        <div class="aside_nav">
            <section>
                
                <div class="titre">
                    <h2> 
                        Compléter votre mail pour l'administrateur ci-dessous :
                    </h2>
                </div>
                <div class="entree">
                    <form action='enregistrementemailu.php' method='POST' name='form'>
                    
                        <input type ="text" name="cemail" id="cemail" placeholder="Ecrire votre mail ici"><br> 
                        <input type="submit" name="submit" id="submit" value ='LOGIN' onclick='verif()'>
                   
                    </form>
                </div>
               <script type="text/javascript">
                function verif(){
                    if(form.cemail.value==''){
                        alert('Veuillez saisir votre adresse e-mail');
                    }
                }

               </script>
            </section>
        </div>
    </div>
    <footer>
        <div id="box_1">
            <div class="box_1_element"><a href="../CGU2/CGU.html" style="color:black" title="CGU">Consulter les CGU</a></div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="mailu.php">
                            <image src= "email.png" title="Mail"></image>
                        </a>
                   </li>
                </ul>
            </div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="../FAQ/FAQ.php">
                            <image src= "help.png" title="FAQ"></image>
                        </a>
                   </li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<!-- <a href="page_10.html" class="change_page"></a> -->
</body>
</html>