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
            <div class="box_0_element"><a href="../Aide/aide.html" style="color:black" title="Aide">Lombroso </a></div>
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../profiladmin/profiladmin.php">
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
                
                <div class="bottom">
                    <article>
                        
                        <p>
                            Image de fond
                            <br><br>
                            <?php
		
                            echo "<a href='../../MENU/deconnexion.php' >Se déconnecter</a>"."<br>";
                            
                            ?>
                        </p>
                    </article>
                    
                                        
                </div>
                <div class="tick">
                    <lancer>
                        
                        <form method="post" action="#" name="form">
                            <input type="text" name="iduser" placeholder="IdUser:"> <br><br>
                            <input type="checkbox" name="CGU"> J'accepte les <a href="../CGU2/CGU.html" style="color:black" title="CGU">CGU </a> <br>
                        </form>
                        ​<a href="#" class="btn-v0"  onclick="verif()">Lancer le test</a>
                    </lancer>
                    
                </div>

                <script type="text/javascript">
                    function verif(){

                        if (form.CGU.checked == false && form.iduser.value=="")
                            {
                            alert('Vous devez accepter les cgu et renseigner la case id pour lancer le test.');
                            }
                        else if (form.CGU.checked == false )
                            {
                            alert('Vous devez accepter les cgu pour lancer le test.');
                            }
                        else if (form.iduser.value=="")
                        {
                        alert('Vous devez renseigner la case id pour lancer le test.');
                        }
                        
                        else
                            {
                                document.location.href="tick.html"
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
                        <a href="../../User/mail/mail.php">
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