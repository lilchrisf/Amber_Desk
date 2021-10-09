
<script>


    let timerInterval
    Swal.fire({
        titleText: {{$message}},
        backdrop: false,
        toast: true,
        customClass: {
            icon: 'info',
        },
        background: {{$background}},
        allowOutsideClick: true,
        showConfirmButton: false,

        timer: {{$duration}},
        timerProgressBar: true,
        position: 'bottom-right',
        willClose: () => {
            clearInterval(timerInterval)
        }
    })
</script>
