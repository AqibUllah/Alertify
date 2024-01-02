<div class="alert alert-success {{ config('alertify.animation') }} ">
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <div class="left">
        @if(config('alertify.pulse'))
            <div class="pulse"></div>
        @endif
        @if(config('alertify.icons'))
            <img src="{{ asset('vendor/alertify/assets/icons/success.svg') }}" alt="">
        @endif
        <div>
            <span class="title">{{ $title }}</span><br>
            <span class="body">{{ $body }}</span>
        </div>
    </div>
    <button class="right close-icon">
        <img src="{{ asset('vendor/alertify/assets/icons/close.svg') }}" alt="">
    </button>
</div>
