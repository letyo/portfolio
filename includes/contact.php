<!--
Bekéri a form tag-ben lévő adatokat, majd kiszedi belőle a gonosz karaktereket ill. átalakítja őket, majd leellenőrzi h valós lehet-e az email cím, és ha minden rendben elküldi az $admin_email-re formázva és kiírja h el lett küldve, ha vmi nincs rendben (vmi nincs kitöltve ill. az email cím nem lehet valós), akkor hibát ír ki, de az adatokat, amiket beírtak, visszatölti a megfelelő szövegdobozokba
A security.php fájl kell hozzá!
-->

<?php

    include_once "security.php";

    $subject = $comment = $name = $email = $email_err = $emp = $success = "";
    $suc = false;

?>


<?php

    //the email address where the email will be sent
    $admin_email = "hetyey.g@gmail.com";
    
    //check the entered data
    if (isset($_POST['subject'])) {
        $subject = check_text($_POST['subject']);
    }
    if (isset($_POST['comment'])) {
        $comment = check_text($_POST['comment']);
    }
    if (isset($_POST['name'])) {
        $name = check_text($_POST['name']);
    }
    if (isset($_POST['email'])) {
        $email = check_email($_POST['email']);
    }

    if (valid_email($email) == false && !empty($email)) {
        $email_err = $email_error[$l];
    }

    //the format of the message
    $message = "From: \nname: " . $name . "\nemail: " . $email . "\n\nMessage:\n" . $comment;
    
    if (!empty($subject) && !empty($comment) && !empty($name) && !empty($email) && empty($email_err)) {
        mail($admin_email, $subject, $message, "From: ". $email);
        $success = $successful[$l];
        $suc = true;
    } elseif (empty($subject) || empty($comment) || empty($name) || empty($email)) {
        $emp = $empty[$l];
    }

?>

    <form method="POST" action="<?php echo 'index.php?lang=' . $l . '&tab=contact_form'; ?>">
        <table>
<?php
            if (isset($_POST['submit'])) {
                //the errors and success
?>
                <tr>
                    <td colspan="2"><?php echo $success; ?></td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo $email_err; ?></td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo $emp;; ?></td>
                </tr>        
<?php       
            }
?>
            <!--the input form-->
            <tr>
                <td>
                    <p><?php echo $labels["name"][$l]; ?></p>
                    <input type="text" name="name" placeholder="<?php echo $placeholder['name'][$l]; ?>" size="40" value="<?php if (isset($name) && $suc == false) {echo $name;} ?>">
                </td>
                <td>
                    <input type="submit" name="submit" value="<?php echo $labels['button'][$l]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <p><?php echo $labels["email"][$l]; ?></p>
                    <input type="text" name="email" placeholder="<?php echo $placeholder['email'][$l]; ?>" size="40" value="<?php if (isset($email) && $suc == false) {echo $email;} ?>">
                </td>
                <td>
                    <p><?php echo $labels["subject"][$l]; ?></p>
                    <input type="text" name="subject" placeholder="<?php echo $placeholder['subject'][$l]; ?>" size="40" value="<?php if (isset($subject) && $suc == false) {echo $subject;} ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p><?php echo $labels["message"][$l]; ?></p>
                    <textarea name="comment" rows="20" cols="64" placeholder="<?php echo $placeholder['message'][$l]; ?>"><?php if (isset($comment) && $suc == false) {echo $comment;} ?></textarea>
                </td>
            </tr>
        </table>
    </form>