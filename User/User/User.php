<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="admin.css">
    <title>User</title>
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
            <div class="box_0_element"><?php
		
        echo "<a href='../../MENU/deconnexion.php' >Se déconnecter</a>"."<br>";
        
        ?><br><br><a href="../Aide/aide.html" style="color:black;font-size:30px;text-decoration:none" title="Aide">Aide </a></div>
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../profiluser/profiluser.php">
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
                        
                        <a>
                            <image src= "detectmensonges.jpg" ></image>
                        </a>

                    </article>
                    
                                        
                </div>
                <!-- <div class="tick">
                    <lancer>
                        
                        <form method="post" action="#" name="form">
                            <input type="checkbox" name="CGU"> J'accepte les <a href="../CGU2/CGU.html" style="color:black" title="CGU">CGU </a> <br>
                        </form>
                        ​<a href="#" class="btn-v0"  onclick="verif()">Lancer le test</a>
                    </lancer>
                    
                </div>

                <script type="text/javascript">
                    function verif(){

                        // alert('yes')
                        
                        // if( $('input[name=CGU]').is(':checked') ){
                        //     alert("jQuery c'est super");
                        // } else {
                        //     alert("jQuery c'est autre chose");
                        // }

                        // if(document.getElementById(CGU).checked == true){
                        //     alert('CGU  acceptés !');
                        // }
                        // else{
                        //     alert('CGU non acceptés !');
                        // }

                        if (form.CGU.checked == false )
                            {
                            alert('Vous devez accepter les cgu pour lancer le test.');
                            // return false;
                            }
                        else
                            {
                                document.location.href="tick.html"
                            }
                            // return true;
                    }
                </script> -->
                
            </section>
        </div>
    </div>
    <footer>
        <div id="box_1">
            <div class="box_1_element"><a href="../CGU2/CGU.html" style="color:black" title="CGU">Consulter les CGU</a></div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="../mail/mailu.php">
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