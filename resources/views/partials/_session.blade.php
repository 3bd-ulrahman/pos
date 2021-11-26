@if (session('success'))

    @php
        $dir = (App::getLocale() == 'ar') ? 'topRight' : 'topLeft';
    @endphp
    <script>
        new Noty({
            type: 'success',
            // layout: 'topRight',
            layout: '<?php echo $dir; ?>',
            text: "{{ session('success') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>

@endif
