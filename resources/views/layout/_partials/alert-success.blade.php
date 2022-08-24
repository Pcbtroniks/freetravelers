<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('success'))

<script>

    Swal.fire(
        {
            title: 'Buen Trabajo!',
            text: "{{session()->get('success')}}",
            icon: 'success',
            timer: 3000
        }
        )

</script>

@endif