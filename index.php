<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css">
    <title>Comnet İnvite Page Generator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center" style="padding-bottom: 50px;">Comnet Davet Kodu Page Generator</h1>
            <h3  class="text-center" style="padding-bottom: 50px;">Alttaki alana davet kodunuzu girin</h3>
            <form method="get">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Invite Code</span>
                <input type="text" name="invite_code" class="form-control" placeholder="Davet Kodu" aria-label="Davet Kodu" aria-describedby="addon-wrapping">
            </div>
            <input type="submit" class="btn btn-success" style="margin-left: 25%; margin-top: 50px; width: 50%;" value="Oluştur">
            </form>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
<script>
    addEventListener('submit', function(e){
        e.preventDefault();
        var invitecode = document.querySelector('input[name="invite_code"]').value;
        if(invitecode == ""){
            Swal.fire({
                icon: 'error',
                title: 'Hata',
                text: 'Davet kodu boş olamaz!',
                confirmButtonText: 'Tamam',
                confirmButtonColor: 'green'
            });
        }else{
            window.location.href = "page.php?invite_code="+invitecode;
        }
    });
</script>
</html>