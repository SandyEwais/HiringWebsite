@if (session()->has('message'))
    <div x-data={show:true} x-init="setTimeout(() => show =false,3000)" x-show="show" class="fixed bottom-0 left-0 transform bg-white text-amber-600 px-48 py-3">
        <p>{{ session('message') }}</p>
    </div>
@endif