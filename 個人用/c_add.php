<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>ワクチン予約</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/starter-template/">



    <!-- Bootstrap core CSS -->
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    


    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

    <?php

    session_start();
    session_regenerate_id(true);
    // if (isset($_session['login']) == false)

        $mynum = $_SESSION['my_num'];
        $birth = $_SESSION['birth'];

    ?>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <div class="navbar-brand">

            </div>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="c_login.php">
                            <font color="white">←戻る</font>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="c_top.html">
                            <font color="white">ホーム</font>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">

        <div class="starter-template text-center py-5 px-3">
            <h1>連絡先を入力してください</h1>
            <br><br><br><br>
            <form method="post" action="c_site.php" id = "submit" onsubmit="return input_check()">
                <h1>名前(カナ)</h1>
                <h5><input type="text" name="name" placeholder="入力必須" id= "name"></h5>
                <br><br>
                <h1>電話(ハイフン不要)</h1>
                <h5><input type="text" name="tel" placeholder="入力必須" id="tel"></h5>
                <br><br>
                <h1>メールアドレス</h1>
                <h5><input type="text" name="mail" placeholder="入力必須" id="mail"></h5>
                <br><br>
                <h3><input type="submit" value="次へ"></h3>
            </form>
        </div>

    </main><!-- /.container -->


    <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script>


        function input_check(){

            let flg = true;

            const result_name = funck_name_check();
            const result_tel = funck_tel_check();
            const result_mail = funck_mail_check();

            flg = flg && result_name;
            flg = flg && result_tel;
            flg = flg && result_mail;

            return flg;

        }

        function  funck_name_check(){

            const name = document.querySelector('#name');

          if( name.value ==''){

                window.alert('名前(カナを入力してください)');
                return false;

            }else if(!name.value.match(/^[ァ-ヶー]*$/)){

                window.alert("名前(カナ)が不正です");
               return false;

            }else{

               // window.alert('name ok');
                return true;

            }
        }

        function  funck_tel_check(){


            const tel = document.querySelector('#tel');

            if(!tel.value.match(/^0\d{9,10}$/)){
                // 0から始まる9桁の数字
                window.alert("電話番号が正しくありません");
                return false;

            }else{

               // window.alert('tel ok');
                return true;

            }
        }
        
        function funck_mail_check(){

            const mail= document.querySelector('#mail');

            if(!mail.value.match(/.+@.+\..+/)){
                //「任意の文字1文字以上」「@」「任意の文字1文字以上」「.」「任意の文字1文字以上」
                window.alert("メールアドレスが不正です")
                return false;

            }else{               

               // window.alert('mail ok');
                return true;

            }
        }


    </script>


</body>

</html>