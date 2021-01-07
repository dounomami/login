<?php
    mb_internal_encoding("utf8");

    session_start();

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
                <div class="logauto">
                    <a href="log_out.php">ログアウト</a>
                </div>
        </header>
        <main>
            <div class="confirm">
                 <h1>会員情報</h1>
                <form action="mypage_update.php" method="post">
                    <div class="contents">
                        <?php echo "こんにちは！ ".$_SESSION['name']."さん"; ?>
                    </div>
                    <div class="contents2">
                        <img src = "<?php echo $_SESSION['picture']; ?>">
                    </div>
                    <div class="contents3">
                        <p>氏名： <input type="text" size="30" value="<?php echo $_SESSION['name'];?>" name="name"> </p>
                        <p>メール： <input type="text" size="30" value="<?php echo $_SESSION['mail'];?>" name="mail">
                        </p>
                        <p>パスワード： <input type="text" size="30" value="<?php echo $_SESSION['password'];?>" name="password">
                        </p>
                        <input type="hidden" value="<?php echo rand(1,10);?>" name="from_mypage_hensyu">
                    </div>
                    <div class="contents4">
                        <textarea rows="5" cols="15" name="comments"><?php echo $_SESSION['comments'];?></textarea>
                    </div>
                    <div class="hensyubutton">
                        <input type="submit" class="button" value="この内容に変更する">
                    </div>
                </form>
            </div>
        </main>
        <footer>@ 2018 InterNous.inc. All rights reserved</footer>
    </body>
</html>