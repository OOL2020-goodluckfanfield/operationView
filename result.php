<head>
     <style type="text/css">
        body {
            margin: 50px;
        }
    </style>

  </head>

<?php
  echo "<p>操作対象：" . $_GET["machineName"] ."</p>";
  echo "<p>操作内容：" . $_GET["actionNum"] ."</p>";

  //intに変換
  $action = intval($_GET["actionNum"]);

  echo '<pre>';
    switch ($action){
        case 1:
            //Vagrantfileで $_GET["machineName"] を立ち上げ
            case1();
            break;
        
        case 2:
            //ansibleで $_GET["machineName"] のバックアップを実行 => $_GET["machineName"].bootができる、gitにpush
            case2();
            break;
            
        case 3:
            //ansibleで $_GET["machineName"] のリストアを実行
            case3();
            break;   
    }

    //コマンドは自身で
    function case1() {
       system('pwd');
    }

    function case2() {
        system('ls -l');
    }

    function case3() {
        system('df -h');
    }

?>
