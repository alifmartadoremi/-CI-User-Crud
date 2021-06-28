<!DOCTYPE html>
<!-- Author : kvda-creator -->
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="./assets/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="./assets/fontawesome/css/all.css"/>
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
                <li><a class="place-items itemlink">Dashboard</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="container">
                <a href="<?php echo base_url(); ?>c_user/add_user" class="btn btn-success">Add</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($user){
                            foreach($user as $a){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $a['id'] ?></th>
                            <td><?php echo $a['nama_depan'] ?></td>
                            <td><?php echo $a['nama_belakang'] ?></td>
                            <td><?php echo $a['nama_lengkap'] ?></td>
                            <td>
                                <a href="" class="btn btn-info">Edit</a>
                                <a href="" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus?');">Delete</a>
                            </td>
                        </tr><?php } }?>
                    </tbody>
                </table>
            </div> 
        </div>  
    </div> 
</body>
</html>