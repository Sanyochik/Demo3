<?php 
use \yii\widgets\ActiveForm;
 ?>
                        <?php
                          $form = ActiveForm::begin(['class'=>'form-horizontal']);  
                        ?>
                          <textarea name="name" placeholder="Введите ваш код сюда"></textarea>
                          <div>
              <button type="submit">Проверить</button>
                          </div>
                        <?php
                          ActiveForm::end();
                        ?> 
<p>Результат:</p>
<?php
  file_put_contents("../views/site/codetest.php", $_POST['name']);
  exec("php -l ../views/site/codetest.php", $output, $result);
  if ($result == 0){
  echo " Код прошёл проверку";
  } else {
  echo " Код не прошёл проверку";
}
?>