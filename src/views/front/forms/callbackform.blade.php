<h2 class="modal-window__title modal-window__title--order">Заказ звонка</h2>
<p class="modal-window__descr modal-window__descr--order">
                    Заказ звонка <br class="visible-xs"> возможен круглосуточно.
                    <br> Менеджер перезвонит Вам <br class="visible-xs"> с 10:00 до 19:00
                    <br> по киевскому времени.</p>
{{ 
    Form::open([
        'route' => 'f.p.callback', 
        'class' => 'modal-window__form', 
        'id' => 'js-modal-form--call',
        'method' => 'post'
    ]) 
}}

    {{ Form::hidden('form_id', '1') }}
    <div class="form__input-wrap form__input-wrap--modal">
        {{ Form::text('name', '', ['class' => 'form__input', 'placeholder' => 'Имя']) }}
        
    </div>
    <div class="form__input-wrap form__input-wrap--modal">
        {{ Form::tel('phone', '', ['class' => 'form__input', 'placeholder' => 'Номер телефона']) }}
        
    </div>
    <div class="text-align">
        <button class="btn btn--primary form__submit">Отправить</button>
    </div>
{{ Form::close() }}