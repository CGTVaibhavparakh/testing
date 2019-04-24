<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Register';
?>
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <?php $form = ActiveForm::begin(
              	[
              		'id' => 'form-signup',
              		'options' => ['class' => 'user']
              	]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-user']) ?>

                <?= $form->field($model, 'email')->textInput(['class' => 'form-control form-control-user']) ?>

                <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-user']) ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
              	<?= Html::a('Already have an account? Login', ['site/login'], ['class' => 'small']) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>