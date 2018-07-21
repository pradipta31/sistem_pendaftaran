<?php
        //===============================================
        //  PHP FOR PIE CHART REASONS FOR CANCELLATION
        //===============================================
        $koneksi = mysqli_connect('localhost','root','','sistem_informasi_eksekutif');
        $SQL3 = "SELECT * peserta WHERE jenis_kelamin =  'pria' ORDER BY jenis_kelamin";
        $result9 = mysqli_query($koneksi,$SQL3);
        $data9 = array();
        while ($row = mysqli_fetch_array($result9)) {
           $data9[] = $row['reasonForCancellation'];
        }
        $result10 = mysqli_query($koneksi,$SQL3);
        $data10 = array();
        while ($row = mysqli_fetch_array($result10)) {
           $data10[] = $row['reason_count'];
        }
        ?>
    <!--
            ============================================
              JS FOR PIE CHART REASON FOR CANCELLATION
            ============================================
        -->
        <script type="text/javascript">
        $(function () {
            var chart;
            $(document).ready(function() {
                chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'graph3',
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'REASONS FOR CANCELLATION'
                    },
                    tooltip: {
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                connectorColor: '#000000',
                                formatter: function() {
                                    return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                                }
                            }
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'cancellations',
                        data: [
                                ['<?php echo join($data9, "','") ?>',  <?php echo join(',', $data10);  ?>],
                              ]
                    }]
                });
            });
        });
        </script>
