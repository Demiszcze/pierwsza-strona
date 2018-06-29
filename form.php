    <?php
        $to      = 'diana.serafin83@gmail.com';
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $subject = 'Nowa wiadomość od ' . $name . ' (' . $email . ')';
        $message = $_POST['message'];
        $headers = 'From: ' . $name . ' (' . $email . ')';
        $headers .= 'Content-Type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
        echo '<h2>Dziękujemy za wysłanie wiadomości</h2>';
    ?>
    <form action="form.php" method="POST"> 
        <label for="name">Imię</label> 
        <input type="text" name="name" id="name" required/> 
        <label for="email">E-mail</label> 
        <input type="email" name="email" id="email" required/> 
        <label for="message">Wiadomość</label> 
        <textarea name="message" id="message" rows="3" required/>
    </textarea> 
    <input type="submit" name="submit" value="Wyślij"> 
    <input type="reset" name="submit" value="Usuń dane"> 
</form>
    