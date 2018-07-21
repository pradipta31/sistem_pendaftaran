<?php
 $testid=0;
$testid=$_REQUEST["q"];
//echo $testid;

$con = mysql_connect("localhost","root","","sistem_informasi_eksekutif");
                if (!$con)
                {
                    die('Could not connect: ' . mysql_error());
                }
                // Select Database
                mysql_select_db("mysql", $con) or die('Could not connect: ' . mysql_error());;

                                    $qMostPopularItem = "SELECT COUNT(*) peserta WHERE jenis_kelamin = 'pria'";

                                        $mpi = mysql_query($qMostPopularItem,$con) or die('Could not fetch MPI: ' . mysql_error());

                                      while($infoMPISW = mysql_fetch_assoc($mpi))
                                        {
                                                
                                                echo $infoMPISW['pdt_model_name'] ."',";
                                                echo $infoMPISW['count'],"],";

                                        }

                      ?>
