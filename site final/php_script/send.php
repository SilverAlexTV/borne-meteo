    <?php
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $msg = $_POST['subject'];
    $sender = $_POST['email'];
    $mail = 'alexandre.leclerc63@gmail.com'; // Déclaration de l'adresse de destination.
    if(filter_var($sender, FILTER_VALIDATE_EMAIL))
    {
        header('Location: ../accueil/contact.php?send=Votre message a bien été envoyé !');
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
        {
            $passage_ligne = "\r\n";
        }
        else
        {
            $passage_ligne = "\n";
        }
        //=====Déclaration des messages au format texte et au format HTML.
        $message_txt = $sender . ' Message de ' . $fname . ' ' . $lname . ' : ' . $msg;
        $message_html = "<html><head></head><body>$sender<br>Message de $fname $lname :<br>$msg</body></html>";
        //==========
        
        //=====Création de la boundary
        $boundary = "-----=".md5(rand());
        //==========
        
        //=====Définition du sujet.
        $sujet = $_POST['object'];
        //=========
        
        //=====Création du header de l'e-mail.
        $header = "From: \"Borne météo\"<bornemeteolafayette@gmail.com>".$passage_ligne;
        $header.= "Reply-to: \"Borne météo\" <bornemeteolafayette@gmail.com>".$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        //==========
        
        //=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format texte.
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format HTML
        $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        //==========
        
        //=====Envoi de l'e-mail.
        mail($mail,$sujet,$message,$header);
        //==========
    }
    else
    {
        header('Location: ../accueil/contact.php?error=Email mal formuler : exemple@exemple.com');
    }
    ?>