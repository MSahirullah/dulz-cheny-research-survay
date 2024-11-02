<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.4.1/flowbite.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.2.4/dist/flasher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>


<script>
    function showLoading(desc = '', btn = false, btnId = '', btnText = '', dataId = '') {
        var backdrop = $('#loading-backdrop');
        $('#loading-backdrop .backdrop-desc').html(desc);
        $('#loading-backdrop .backdrop-btn').hide();
        if (btn) {
            $('#loading-backdrop .backdrop-btn').show();
            $('#loading-backdrop .backdrop-btn button').attr('id', btnId);
            $('#loading-backdrop .backdrop-btn button').text(btnText);
            $('#loading-backdrop .backdrop-btn button').attr('data-id', dataId);

        }
        backdrop.show();
        backdrop.addClass('show');
    }

    function hideLoading() {
        var backdrop = $('#loading-backdrop');
        $('#loading-backdrop .backdrop-desc').html('');

        $('#loading-backdrop .backdrop-btn').hide();
        $('#loading-backdrop .backdrop-btn button').attr('id', '');
        $('#loading-backdrop .backdrop-btn button').attr('data-id', '');
        $('#loading-backdrop .backdrop-btn button').text('');

        backdrop.removeClass('show');
        backdrop.hide();
    }
    hideLoading();

    new Typewriter('.backdrop-text', {
        strings: ['Loading... ⌛', 'Loading... ⌛'],
        autoStart: true,
        loop: true,
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function displayValidationErrors(errors) {
        $.each(errors, function(key, value) {
            var error = '';
            $.each(value, function(index, errorMessage) {
                error = error + errorMessage + ' '
            });
            $(".error_" + key).text(error);
            $(".error_" + key).closest('.form-group').addClass(
                'border--red');
        });
    }
</script>
