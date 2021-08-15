<?php
    session_start();
    require 'language.php';

    if (!isset($_POST['submit'])) {
        // set default language
        $used_lang = $indonesia;
        $_SESSION['isLangEng'] = FALSE;
    } else {
        // change language when the user click the button 
        if ($_SESSION['isLangEng']) {
            $used_lang = $indonesia;
            $_SESSION['isLangEng'] = FALSE;
        } else {
            $used_lang = $english;
            $_SESSION['isLangEng'] = TRUE;
        }
    }
?>

<p><?php echo $used_lang["text"]; ?></p>

<br><br>
<form action="" method="POST">
    <input type="submit" name="submit" value="<?php echo $used_lang["langUpper"]; ?>">
</form>
