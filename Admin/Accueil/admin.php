<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>

<body>
<!-- <a href="page_8.html" class="change_page"></a> -->

<div class="content">
    <header>
        <div id="box_0">
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="admin.php">
                            <image src= "logo-alex_Plan de travail 1.png" title="Menu"></image>
                        </a>
                   </li>
                </ul>
                
            </div>
            <div class="box_0_element"><?php
		
        echo "<a href='../../MENU/deconnexion.php' >Se déconnecter</a>"."<br>";
        
        ?><br><br><a href="../Aide/aide.html" style="color:black;font-size:30px;text-decoration:none" title="Aide">Aide </a></div>
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../profiladmin/profil.php">
                            <image src= "user.png" ></image>
                        </a>
                   </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="under_header">
        
        <div class="aside_nav">
            <section>
                
                <div class="bottom">
                    <article>
                        
                        <a>
                            <image src= "detectmensonges.jpg" title="Profil"></image>
                        </a>

                    </article>
                    
                                        
                </div>
                <div class="tick">
                    <lancer>
                        
                        <form method="get" action="test_email.php" name="form">
                            <input type="email" name="email" id="email" placeholder="Email du testé:"> <br><br>
                            <input type="checkbox" name="CGU"> J'accepte les <a href="../CGU2/CGU.html" style="color:black" title="CGU">CGU </a> <br> <br>
                            
                            <input type="submit" value="Lancer le test" class="btn-v0" onclick="return verif()">
                        </form>
                        <!-- <a href="#" class="btn-v0"  onclick="verif()">Lancer le test</a> -->
                        ​
                        
                    </lancer>
                    
                </div>

                <script type="text/javascript">
                    function verif(){

                        if (form.CGU.checked == false && form.email.value=="")
                            {
                            alert('Vous devez accepter les cgu et renseigner la case email pour lancer le test.');
                            // document.location.href="admin.php";
                            return false;
                            }
                        else if (form.CGU.checked == false )
                            {
                            alert('Vous devez accepter les cgu pour lancer le test.');
                            return false;
                            }
                        else if (form.email.value=="")
                        {
                        alert('Vous devez renseigner la case email pour lancer le test.');
                        return false;
                        }
                        
                        else
                            {
                                // document.location.href="tick.php"
                                return true;
                            }


                        // if(document.getElementById(CGU).checked == true){
                        //     alert('CGU  acceptés !');
                        // }
                        // else{
                        //     alert('CGU non acceptés !');
                        // }
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
                        <a href="../mail/mail.php">
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