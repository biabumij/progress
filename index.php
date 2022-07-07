<!DOCTYPE html>
<html lang="en">

<head>
	<title>PROGRESS</title>
	<meta charset="UTF-8">
	<link href="assets/images/favicon.ico" rel="icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<style type="text/css">
	body {
  	color: black;
	}
	blink {
	-webkit-animation: 2s linear infinite kedip; /* for Safari 4.0 - 8.0 */
	animation: 2s linear infinite kedip;
	}
	/* for Safari 4.0 - 8.0 */
	@-webkit-keyframes kedip { 
	0% {
		visibility: hidden;
	}
	50% {
		visibility: hidden;
	}
	100% {
		visibility: visible;
	}
	}
	@keyframes kedip {
	0% {
		visibility: hidden;
	}
	50% {
		visibility: hidden;
	}
	100% {
		visibility: visible;
	}
	}
</style>
<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>

<body>

	<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1" style="text-transform: uppercase;">
		<center>
			<h3><b>Monitoring Progress Pengerjaan Sistem <br />
				<blink>
					<?php
					$hari = date('l');
					/*$new = date('l, F d, Y', strtotime($Today));*/
					if ($hari=="Sunday") {
					echo "Minggu";
					}elseif ($hari=="Monday") {
					echo "Senin";
					}elseif ($hari=="Tuesday") {
					echo "Selasa";
					}elseif ($hari=="Wednesday") {
					echo "Rabu";
					}elseif ($hari=="Thursday") {
					echo("Kamis");
					}elseif ($hari=="Friday") {
					echo "Jum'at";
					}elseif ($hari=="Saturday") {
					echo "Sabtu";
					}
					?>,

					<?php
					$tgl =date('d');
					echo $tgl;
					$bulan =date('F');
					if ($bulan=="January") {
					echo " Januari ";
					}elseif ($bulan=="February") {
					echo " Februari ";
					}elseif ($bulan=="March") {
					echo " Maret ";
					}elseif ($bulan=="April") {
					echo " April ";
					}elseif ($bulan=="May") {
					echo " Mei ";
					}elseif ($bulan=="June") {
					echo " Juni ";
					}elseif ($bulan=="July") {
					echo " Juli ";
					}elseif ($bulan=="August") {
					echo " Agustus ";
					}elseif ($bulan=="September") {
					echo " September ";
					}elseif ($bulan=="October") {
					echo " Oktober ";
					}elseif ($bulan=="November") {
					echo " November ";
					}elseif ($bulan=="December") {
					echo " Desember ";
					}
					$tahun=date('Y');
					echo $tahun;
					?>
				</blink>
				</b>
			</h3>
		</center>
		<div id="monitoring"></div>
		<span></span>
		<div class="flex-col-c p-t-50 p-b-50">
			
		

		</div>
	</div>



	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			// Set Endtime here
			// Endtime must be > current time
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 1,
			endtimeHours: 0,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: ""
			// ex:  timeZone: "America/New_York", can be empty
			// go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script type="text/javascript">

		$(document).ready(function () {



			//Disable mouse right click

			$("body").on("contextmenu", function (e) {

				return false;

			});

			//Disable cut copy paste

			$('body').bind('cut copy paste', function (e) {

				e.preventDefault();

			});

		});


		let graphv = [];
		
		graphv[0] = ['&bull; SC - Perubahan BBM Solar Laporan Laba Rugi (*VIC) - 007/PPS/VII/2022', 0];
		graphv[1] = ['&bull; TEMEF - Pemindahan Surat Jalan Penjualan (*END) - 15/PPS/VII/2022', 0];
		graphv[2] = ['&bull; SC & TEMEF - Perbaikan Query SQL Lap. Sales Order, Pesanan Pembelian, Daftar Tagihan', 80];
		graphv[3] = ['&bull; TEMEF - RAP', 15];
		graphv[4] = ['&bull; TEMEF - Pembuatan Menu Pergerakan Bahan Jadi (Stok) & Evaluasi', 80,];
		graphv[5] = ['&bull; SC - Pembuatan Grafik Dashboard Harga Jual - Bahan Jadi', 100];
		graphv[6] = ['&bull; SC & TEMEF - Perbaikan Query SQL Laporan Hutang & Piutang', 100];
		graphv[7] = ['&bull; SC & TEMEF - Grafik Dashboard Laba Rugi', 100,];
		graphv[8] = ['&bull; TEMEF - Revisi TTD TEMEF (*END) - 13/PPS/VI/2022', 100,];
		graphv[9] = ['&bull; SC - Revisi TTD SC (*RIF) -  031/BBJ/SC-KEU/06/2021', 100];
		graphv[10] = ['&bull; SC - Revisi Pergerakan Bahan Jadi SC, Jika Tidak Ada Produksi', 100,];
		graphv[11] = ['&bull; TEMEF - Perbaikan Judul Pemakaian Alat & Output Biaya (*END) - 08/PPS/V/2022', 100,];
		graphv[12] = ['&bull; TEMEF - Perbaikan Judul Biaya & TTD (*DEB) - 12/PPS/VI/2022', 100,];
		graphv[13] = ['&bull; SC - Import Database SC to jurnal.id (*DEB)', 100];
		graphv[14] = ['&bull; SC & TEMEF - Tanda Warning jika (Minus)', 100];

		

		function graph_it_percentage(g, g_width, g_element) {
			let output = '<table border="0" cellspacing="0" cellpadding="8" width="auto" style="font-weight: bold;">',
				calwidth_percentage = 0;

			for (i = 0; i < g.length; i++) {
				calwidth_percentage = g_width * (parseInt(g[i][1]) / 100);

				output += `<tr><td width="800">${g[i][0]}</td><td><svg xmlns="http://www.w3.org/2000/svg" width="${calwidth_percentage}" height="10"><g class="bar" fill="#e69500"><rect width="${calwidth_percentage}" height="10"></rect></g></svg> ${g[i][1]}%</td></tr>`;
			}

			output += '</table>';

			g_element.innerHTML = output;
		}

		graph_it_percentage(graphv, 200, document.getElementById('monitoring')); // 200 is the maximum width of the graph, in pixels
		

	</script>

</body>

</html>