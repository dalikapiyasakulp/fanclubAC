<?php

    include_once('functions.php');
    $artistdata = new artist();
    $userwork = new workmusic();

?>

<html>
    <head>
        <title>Profile Card</title>
        <link rel="stylesheet" href="color.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    </head>
    <body>
        <header>
            <center><a href="#" class="logo">FANCLUB</a></center>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#"class="active" >Artist</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="#"  >Profile</a></li>
            </ul>
        </header>
        <section>
        <?php
        if (isset($_GET['ID_artist'])){

        }
        $ID_artist = $_GET['ID_artist'];
        $sql = $artistdata->getUserInfo($ID_artist);
            $row = mysqli_fetch_array($sql)
        ?>
            <div>
                <img src="image/cloud.png" id="clouds">
            </div>
            <div class="student-profile py-4">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow-sm">
                        <?php echo '<img class="profile_img" src="data:image/png;base64,'. base64_encode($row['pic_soloartist']).'" alt="student dp">'; ?>
                            <div class="card-header bg-transparent text-center">
                                <!-- <?php echo '<img class="profile_img" src="data:image/png;base64,'. base64_encode($row['pic_soloartist']).'" alt="student dp">'; ?> -->
                                <h3><?php echo '', $row['name_soloartist']; ?></h3>
                                <h6><?php echo 'สังกัด ', $row['affiliation_soloartist']; ?></h6>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-header bg-transparent border-0">
                                <?php
                            if (isset($_GET['ID_artist'])){
                                }
                            $ID_artist = $_GET['ID_artist'];
                            $sql = $artistdata->getUserInfo($ID_artist);
                            $row = mysqli_fetch_array($sql)
                            ?>
                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>ข้อมูลศิลปิน</h3>
                            </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                            <tr>
                                <th width="30%">ID</th>
                                <td width="2%">:</td>
                                <td><?php echo $row['ID_artist'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">ชื่อ</th>
                                <td width="2%">:</td>
                                <td><?php echo $row['fname_soloartist'];?></td>
                            </tr>
                           <tr>
                                <th width="30%">นามสกุล</th>
                                <td width="2%">:</td>
                                <td><?php echo $row['lname_soloartist'];?></td>
                            </tr> 
                            <tr>
                                <th width="30%">เพศ</th>
                                <td width="2%">:</td>
                                <td><?php echo $row['sex_soloartist'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">วันที่ DEBUT</th>
                                <td width="2%">:</td>
                                <td><?php echo $row['datadebut_soloartist'];?></td>
                            </tr>
                            
                            </table>
                        </div>
                    </div>
                    <div style="height: 26px"></div>
                    <div class="card shadow-sm">
                        <!-- ผลงาน -->
                        <?php
                            if (isset($_GET['ID_artist'])){
                                }
                            $ID_artist = $_GET['ID_artist'];
                            $sqlwork = $userwork->getUserInfoworkmu($ID_artist);
                            $rowwork = mysqli_fetch_array($sqlwork);
                            
                            ?>
                        <?php
                            if ($rowwork != null){
                                
                                
                                ?>

                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>ผลงานเพลง</h3>
                        </div>
                        <div class="card-header bg-transparent text-center">
                                <?php echo '<img class="profile_img" src="data:image/png;base64,'. base64_encode($rowwork['pic_at']).'" alt="student dp">'; ?>
                                <h3><?php echo 'อัลบั้ม', $rowwork['name_album_at']; ?></h3>
                    
                                <h6><?php echo 'เพลง ', $rowwork['name_music_at']; ?></h6>
                            </div>
                        </div>
                        <?php }
                    ?>
                    <?php
                        if ($rowwork == null){?>
                            <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>ผลงานเพลง</h3>
                        </div>
                        <div class="card-header bg-transparent text-center">
                        <h3><?php echo 'ไม่มีผลงานเพลง'; ?></h3>
                        
                        <?php
                        }
                    ?>    
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <?php
                
        
    ?>
</html>