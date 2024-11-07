<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
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

    function startTimer() {
        $(".modal").modal('hide');
        $("#time-container-outer-div").show();

        // Check if there is a saved timer in localStorage
        let savedTime = localStorage.getItem('remainingTime');
        let timer = savedTime !== null ? parseInt(savedTime) : 600; // Use saved time or the default duration
        let minutes, seconds;

        // Update the timer every second
        const interval = setInterval(function() {
            // Calculate minutes and seconds
            minutes = Math.floor(timer / 60);
            seconds = timer % 60;

            // Display with leading zero if needed
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            document.getElementById('minutes').textContent = minutes;
            document.getElementById('seconds').textContent = seconds;

            // Store the remaining time in localStorage
            localStorage.setItem('remainingTime', timer);

            // Decrement the timer
            if (--timer < 0) {
                clearInterval(interval); // Stop the timer
                localStorage.removeItem('remainingTime'); // Clear saved time when timer ends
                hideTimer();
            }
        }, 1000);
    }

    function hideTimer() {
        $("#time-container-outer-div").hide();
        $(".modal").modal('hide');

        $(".bg-video").hide();
        var video = $("#bg-1").show()[0];
        video.muted = false;
        video.play();
        video.playbackRate = 0.9;
        $("#study-material-modal").modal('show');
        $("#timer-box-div").hide();
        timeLeft = 600;
        $("#scene-1-start-button-div").hide();
        $("#scene-1-titles").hide();
    }
    // Check if there is a saved timer in localStorage and start the timer
    if (localStorage.getItem('remainingTime')) {
        startTimer(parseInt(localStorage.getItem('remainingTime')));
    }
</script>
