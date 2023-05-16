<?php include 'header.php'; ?>
<div class="page-content">

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kullanici Bilgileri</h4>
                    <form class="cmxform" id="signupForm" method="POST" action="islem.php">
                        <fieldset>
                            <div class="mb-12">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" class="form-control" name="kullanici_adi" type="text">
                            </div>
                            <div class="mb-12">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" class="form-control" name="kullanici_sifre" type="password">
                            </div>
                            <div class="mb-12">
                                <label for="confirm_password" class="form-label">Confirm password</label>
                                <input id="confirm_password" class="form-control" name="kullanici_sifre1" type="password">
                            </div>
                            <br>
                            <input class="btn btn-primary" type="submit" name="kullanici_ekle" value="Submit" onclick="checkPassword()">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
    <script>
        function checkPassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            if (password != confirmPassword) {
                alert("Şifreler eşleşmiyor!");
                return false;
            }

            return true;
        }
    </script>


<?php include 'footer.php'; ?>