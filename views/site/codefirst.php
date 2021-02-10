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
  exec("php -l ../views/site/codetest.php", $output, $result);
  if ($result == 0){
  echo "{$str} Код прошёл проверку";
  } else {
  echo "{$str} Код не прошёл проверку";
}
?>