<?php 
use \yii\widgets\ActiveForm;
 ?>
     <div class="container-fluid mt-5">
          <div class="row">
              <div class="col-12 col-md-8 mx-auto">
                   <div class="row text-center">
                      <div class="text-center col-12">
                        <h2>Вставьте код</h2>
                      </div>
					  <div class="text-center col-20">
                        <?php
                          $form = ActiveForm::begin(['class'=>'form-horizontal']);  
                        ?>
                          <textarea rows="200" cols="200" class="form-control" name="name" placeholder="Введите ваш код сюда" aria-describedby="messageHelp" style="margin-top: 0px; margin-bottom: 0px; height: 335px;"><?= $_SESSION['name'];?></textarea>
                          <div>
							<button type="submit" class="btn btn-secondary btn-lg">Проверить</button>
                          </div>

                        <?php
                          ActiveForm::end();

                        ?> 
                       </div>
                    </div>
             </div>
           </div>
      </div>
<p>Результат:</p>
<?php
  exec("php -l ../views/site/codetest.php", $output, $result);
  if ($result == 0){
  echo "{$str} Код прошёл проверку";
  } else {
  echo "{$str} Код не прошёл проверку";
}
?>