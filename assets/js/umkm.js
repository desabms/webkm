
    $(document).ready(function() {
        $("#nama").keyup(function() {
            let namaLengkap = $(this).val();

            let namaUsername = namaLengkap.replace(/\s/g, '').toLowerCase();

            $('#username').val(namaUsername);
        });
    });
