@component('mail::message')
    # کد فعالسازی حساب شما در سایت ال ام اس

    این کد به دلیل ثبت نام شما در وبسایت ال ام اس برایتان ارسال شده.اگر ثبت نامی از طرف شما در وبسایت
    ال ام اس صورت نگرفته این ایمیل را نادیده بگیرید.

    @component('mail::panel')
        کد فعالسازی شما : {{$code}}
    @endcomponent

    با تشکر,<br>
    {{ config('app.name') }}
@endcomponent
