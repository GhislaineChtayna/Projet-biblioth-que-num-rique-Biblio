<?php
     // Plusieurs destinataires
     $to  = 'marianne@studi.com, francois@studi.com, layla@studi.com'; // notez la virgule

     // Sujet
     $subject = 'Mail de rappel';

     // message
     $message = '
     <html>
      <head>
       <title>Mail de rappel</title>
      </head>
      <body>
       <p>Les livres ci-dessous n\'ont pas été rapportés à temps, merci de les rendre rapidement ou de contacter le responsable du prêt.</p>
       <table>
        <tr>
         <th>Les Misérables, Victor Hugo </th><th>15</th><th>Juin</th><th>2022</th>
        </tr>
        <tr>
         <td>Le temps des merveilles, Jean Markale</td><td>3</td><td>Juin</td><td>2022</td>
        </tr>
        <tr>
         <td>Celle qui devint le soleil, Shelley Parker-Chan</td><td>26</td><td>Mai</td><td>2022</td>
        </tr>
       </table>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: Marianne <marianne@studi.com>, François <francois@studi.com>, Layla <layla@studi.com>';
     $headers[] = 'From: Biblio <Biblio@studi.com>';
     $headers[] = 'Cc: Biblio_archive@studi.com';
     $headers[] = 'Bcc: Biblio_verif@studi.com';

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));
?>


