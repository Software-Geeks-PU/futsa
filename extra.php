 <!-- <nav>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="">
                        <?php
                        echo "<h5>";
                        echo "$u_name";
                        echo "</h5>";
                        $query= "SELECT name ,time FROM booktable where name='".$_SESSION['u_name']."'";
                        $data=mysqli_query($conn,$query);
                        $total=mysqli_num_rows($query);
                        if ($total!==0){
                        while ($result = mysqli_fetch_assoc($data)){
                        echo "<table style=\"color:white;
                        margin-left:0px;
                        border-radius:0px;
                        font-size:15px;\"
                        >
                        <tr>
                        <td>".$result['time']."</td>
                        </tr>
                        </table>";
                            }
                        }
                    ?>
                    </a>
                </div>


                <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
                </script>
                <script>
                <!--
                function timedRefresh(timeoutPeriod) {
                    setTimeout("location.reload(true);", timeoutPeriod);
                }
                //   
                -->
 </script>
 <nav> -->