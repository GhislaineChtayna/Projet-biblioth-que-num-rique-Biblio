<?php
require_once ('bddconnect.php');

if (isset($_POST['submit'])) 

{
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = hash('sha512',$_POST['mot de passe']);


    if (!empty($_POST['email']) AND !empty($_POST['mot de passe']))

        {

            if(filter_var($email,FILTER_VALIDATE_EMAIL))

            {
                $reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE email=?");
                $reqmail->execute(array($email));
                $mailexist = $reqmail->rowCount();

            if ($mailexist==0)

            {

                $longueurKey = 15;
                $key="";
                for($i=1;$i<$longueurKey;$i++){
                    $key .=mt_rand(0,9);
                }


                $insert=$bdd->prepare('INSERT INTO membres (nom,email,mot de passe,confirmkey) VALUES(?,?,?,?,?)');
                $insert->execute(array($name,$email,$motdepasse,$key));

                //confirmation inscription par mail

                $header="MIME-Version:1.0\r\n ";
                $header.='From:"Lucide Sapiens International"<lucidesapiens@livehost.fr>'. "\n";
                $header.='Content-Type:text/html; charset="utf-8" '. "\n"; 
                $header.='Content-Transfer-Encoding: 8bit'; 

                $message='

                <html>
                <body>

                <div align="center">

                Bonjour '.$name.' et bienvenue sur MON SITE WEB. Vous avez créé un compte sur notre site. 
                
                </div>

                </body> ';

                mail($email,"Confirmation de compte", $message, $header); 

                //$msg= "Votre compte a bien été créé!<a href=\"Se connecter.php\"> Connecter vous à votre compte.></a>";
                $msg= "Votre compte a bien été créé !</a>";

            } 


            else

            {
                $msg="Ce mail est déjà pris par un utilisateur"; 

            }


            }

             else

             {

                 $msg="Adresse non valide";

             }

        }


        else

        {
            $msg="Choisissez un autre nom"; 
        }

        }

        else 

         {
             $msg="Tous les champs doivent être complétés"; 

        }   

?>