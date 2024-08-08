<?php
include "../koneksi.php";

if(isset($_POST['login'])){
                                            $username = $_POST['username'];
                                            $password = ($_POST['password']);

                                                $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username'");
                                            $cek = mysqli_num_rows($data);
                                            //var
                                            $password = password_hash($password, PASSWORD_DEFAULT);
                                            $password = !md5($password)
                                            
                                            ($cek > 0 ){
                                                $_SESSION['user'] = mysqli_fetch_array($data);
                                                echo '<script>alert("Selamat Datang, Login Berhasil"); location.href="index.php"</script>';
                                            }else{
                                                echo '<script>alert("Maaf, Login Username/Password Salah")</script>';

                                            }
                                    }
                                    ?>
                                    <!-- $2a$12@XqDbat.RejV5JDYExW9ZuO2L1KNMC3oo,mD5SdWHCf05ddesRN/6e -->