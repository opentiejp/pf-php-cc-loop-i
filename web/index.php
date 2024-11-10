<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>8-19｜課題(中級)</title>
    <!--
    <link rel="stylesheet" href="practice_loop_intermediate.css">
    -->
    <style type="text/css">
      html {
        background-color: #ffffff;
      }
      html * {
        box-sizing: border-box;
      }
      p {
        text-align: center;
        font-size: 24px;
        margin: 0;
      }
      table {
        width: 60%;
        margin: 0 auto;
        padding: 0;
        border: solid 1px #000000;
      }
      tr { 
        padding: 0;
        margin: 0;
      }
      td {        
        padding: 3px;
        margin: 0;
        border: solid 1px #000000;        
      }      
    </style>
  </head>
  <body>
    <p>九九表</p>
    <table>
  <?php
    for ($i = 1; $i <= 9; $i++) {
  ?>
      <tr>
  <?php
      for ($j = 1; $j <= 9; $j++) {
  ?>
        <td 
        <?php
          if ($i % 2 === $j % 2) {
            print 'style="background-color: #dddddd;"';
          }
        ?>
        > <?php print $j . '*' . $i . '=' . $j*$i; ?> </td>
  <?php
      }
  ?>
      </tr>
  <?php
    }
  ?>  
    </table>
  </body>
</html>