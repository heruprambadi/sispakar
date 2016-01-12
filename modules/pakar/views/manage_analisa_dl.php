
<table width="100%" border="1">
  <tr>
  	<th scope="col">No. </th>
    <th scope="col">Username</th>
    <th scope="col">Penyakit</th>
    <th scope="col">Solusi</th>
  </tr>
  <?php
foreach ($data as $d):
?>
  <tr>
  	<td align="left" valign="top"><?= $no.'.' ?></td>
    <td valign="top"><?= $d->username; ?></td>
    <?php
    $j = 0;
		for ($i=1; $i < 25; $i++) { 
			$sql = $this->db->select('*,count(sp_relasi_gejala.fk_id_analisa) count_id_analisa')
							 ->where('sp_relasi_gejala.fk_id_analisa',$d->id_analisa)
							 ->where('sp_relasi_gejala.fk_kd_gejala',$i)
							 ->get('sp_relasi_gejala')->result();

			foreach($sql as $dat){
				$t[$i] = $dat->count_id_analisa;
				$j = $j + $dat->count_id_analisa;
			}
		}
		$k1 = $t[1] + $t[2] + $t[3] + $t[8] + $t[9] + $t[10] + $t[11] + $t[12] + $t[13];
		$k2 = $t[4] + $t[5] + $t[10] + $t[15] + $t[17] + $t[19] + $t[20] + $t[23] + $t[24];
		$k3 = $t[3] + $t[5] + $t[8] + $t[13] + $t[14] + $t[21];
		$k4 = $t[5] + $t[6] + $t[14] + $t[16] + $t[16] + $t[18];
		if ($k1 >= 7) {
			$penyakit = 'Kolitis Shigelosis';
			echo '<td valign="top">'.$penyakit.'</td>';
		} elseif ($k2 >= 7) {
			$penyakit = 'Kolitis Tuberkulosa';
			echo '<td valign="top">'.$penyakit.'</td>';
		} elseif ($k3 >= 4) {
			$penyakit = 'Kolitis Pseudomembran';
			echo '<td valign="top">'.$penyakit.'</td>';
		} elseif ($k4 >= 4) {
			$penyakit = 'Kolitis Amebik';
			echo '<td valign="top">'.$penyakit.'</td>';
		} else {
			$penyakit = 'Silahkan Konsultasikan ke Dokter.';
			echo '<td valign="top">'.$penyakit.'</td>';
		}
    ?>
    <?php
    if ($penyakit == 'Kolitis Shigelosis') {
			echo '<td>- Dengan memberikan antibiotik seperti ampisilin 4x500 mg perhari,</br>
					- Kontrimoksazol 2x2 tablet perhari,</br>
					- Tetrasiklin 4x500 mg perhari selama 5 hari,</br>
					- Antibiotik lain seperti golongan kuinolon dan sefalosporingenerasi</br>&nbsp;&nbsp;III terutama pada pasien dengan gejala klinik yang berat,</br>
					- Kompres,</br>
					- Minum air putih banyak,</br>
					- Distraksi pengalihan.</td>';
		} elseif ($penyakit == 'Kolitis Tuberkulosa') {
			echo '<td>- INH 5-10 mg/kgBB atau 400 mg sekali sehari,</br>
					- Entambutol 15-25 mg/kgBB atau 900-1200 mg sekali sehari,</br>
					- Rifampisin 10 mg/kgBB atau 400-600 mg sekali sehari,</br>
					- Pirazinaimid 25-3 mg/kgBB atau 1,5-2 g sekali sehari,</br>
					- Makan makanan yang tinggi serat,</br>
					- Distraksi pengalihan,</br>
					- Meletakkan botol pada daerah yang nyeri,</br>
					- Meletakkan botol yang berisi air panas pada daerha yang nyeri.</td>';
		} elseif ($penyakit == 'Kolitis Pseudomembran') {
			echo '<td>- Meletakkan botol yang berisi air panas pada daerha yang nyeri,</br>
					- Metronidazol dengan dosis per oral 250-500 mg 4 x sehari selama 7-10 hari,</br>
					- Vankomisin dengan dosis per oral 125-500 mg 4x sehari selama s7-14 hari,</br>
					- Kolestiramin dengan dosis per oral 125-500 mg 4x sehari selama 5-10 hari,</br>
					- Memberikan kuman laktobasilus atau ragi (saccharomyces boulardi) selama beberapa minggu.</td>';
		} elseif ($penyakit == 'Kolitis Amebik') {
			echo '<td>- Meletakkan botol yang berisi air panas pada daerha yang nyeri,</br>
					- Metronidazol dengan dosis per oral 250-500 mg 4 x sehari selama 7-10 hari,</br>
					- Vankomisin dengan dosis per oral 125-500 mg 4x sehari selama s7-14 hari,</br>
					- Kolestiramin dengan dosis per oral 125-500 mg 4x sehari selama 5-10 hari,</br>
					- Memberikan kuman laktobasilus atau ragi (saccharomyces boulardi) selama beberapa minggu.</td>';
		} else {
			echo '<td>-</td>';
		}
    ?>
  </tr>
 <?php
 $no++;
 endforeach; ?>
</table>