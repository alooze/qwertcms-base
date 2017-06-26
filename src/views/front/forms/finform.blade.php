{{ 
    Form::open([
        'route' => 'f.p.finmodel', 
        'class' => 'franchise__financial-form', 
        'id' => 'js-franchise__presentation-form',
        'method' => 'post'
    ]) 
}}
    {{ Form::hidden('form_id', '2') }}

    <img src="img/franchise/icons/finance-model-icon.png" alt="" class="img-responsive" width="98">
    <h2 class="franchise__financial-form-title">Финансовая Модель</h2>
    <p class="franchise__descr-secondary">Если вы хотите ознакомиться <br class="visible-xs">с финансовой моделью франшизы Autopark.ua,
                        <br class="hidden-xs"> оставьте свои контакты <br class="visible-xs">и мы свяжемся с вами, чтобы сделать
                        <br class="hidden-xs"> персонально для вас расчёт финансовой модели</p>
    <div class="franchise__financial-form-inner">
        <div class="form__input-wrap form__input-wrap--fr">
            {{ Form::text('name', old('name'), ['class' => 'form__input', 'placeholder' => 'Ваше имя']) }}
        </div>
        <div class="form__input-wrap form__input-wrap--fr">
            {{ Form::text('phone', old('phone'), ['class' => 'form__input', 'placeholder' => 'Телефон']) }}
        </div>
        <div class="form__input-wrap form__input-wrap--fr">
            {{ Form::text('email', old('email'), ['class' => 'form__input', 'placeholder' => 'E-mail', 'onkeypress' => 'validate(event)']) }}
        </div>
    </div>
    <div class="btn-annotation--pink-wrap btn-pink-wrap--fr-secondary">
        <button class="btn btn-annotation--pink btn-pink--fr-secondary">Получить презентацию</button>
    </div>
{{ Form::close() }}