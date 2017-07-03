@component('mail::message')
# Добрый день

Из формы {{ $usedForm->name }} получены данные.

@component('mail::panel')
@foreach ($formData as $fld => $val)
@if ($fld == 'form_id') 
@elseif ($fld == 'name')
<p>Имя: {{ $val }}</p>
@elseif ($fld == 'phone')
<p>Телефон: {{ $val }}</p>
@elseif ($fld == 'email')
<p>Email: {{ $val }}</p>
@endif
@endforeach
@endcomponent

@component('mail::button', ['url' => route('f.start')])
Перейти на сайт
@endcomponent

Хорошего дня,<br>
{{ config('app.name') }}
@endcomponent
