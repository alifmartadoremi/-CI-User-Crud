<!DOCTYPE html>
<!-- Author : kvda-creator -->
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/fontawesome/css/all.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - User</title>
</head>
<body>
    <div class="wrapper">
        <div class="barAtas">
            
        </div>
        <div class="barKiri">
            <header>
                <i class="fa-3x fas fa-users" style="padding-top:10px;padding-left:20px;"><a style="text-decoration: none;color:black;width:100px;" routerLink="/">User</a></i>
            </header>
            <ul>
                <li><a class="place-items itemlink" href="<?php echo base_url(); ?>">Dashboard</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="container">
                <form name="userinput"  action="<?php echo base_url(); ?>c_user/save_user" method="POST">
                    <div class="form-group row">
                        <label for="firstname" class="col-sm-2 col-form-label">Nama Depan</label>
                        <div class="col-sm-10">
                        <input type="firstname" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-2 col-form-label">Nama Belakang</label>
                        <div class="col-sm-10">
                        <input type="lastname" class="form-control" name="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                        <input type="fullname" class="form-control" name="fullname" placeholder="Full Name">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="L" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Laki-laki
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="P">
                            <label class="form-check-label" for="gridRadios2">
                                Perempuan
                            </label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <textarea type="alamat" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                        <input type="phone" class="form-control" name="phone" placeholder="Nomor Telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary"></input>
                        </div>
                    </div>
                </form>
            </div> 
        </div>  
    </div> 
</body>
</html>