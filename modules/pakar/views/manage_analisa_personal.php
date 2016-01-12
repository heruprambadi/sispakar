<div id="__section-content" class="span12"><link rel="stylesheet" type="text/css" href="http://localhost/sispakar/assets/grocery_crud/themes/flexigrid/css/flexigrid.css"><script type="text/javascript" src="http://localhost/sispakar/assets/grocery_crud/themes/flexigrid/js/jquery.form.js"></script><script type="text/javascript" src="http://localhost/sispakar/assets/grocery_crud/themes/flexigrid/js/flexigrid-edit.js"></script><script type="text/javascript" src="http://localhost/sispakar/assets/grocery_crud/js/jquery_plugins/jquery.noty.js"></script><script type="text/javascript" src="http://localhost/sispakar/assets/grocery_crud/js/jquery_plugins/config/jquery.noty.config.js"></script><div class="flexigrid crud-form" style="width: 100%;" data-unique-hash="74d2675cc69815bf6a8ae3f023a69d37">
	<div class="mDiv">
		<div class="ftitle">
			<div class="ftitle-left">
				Record Analisa			</div>
			<div class="clear"></div>
		</div>
		<div title="Minimize/Maximize" class="ptogtitle">
			<span></span>
		</div>
	</div>
	<div id="main-table-box">
		<form action="" method="post" id="crudForm" autocomplete="off" enctype="multipart/form-data" accept-charset="utf-8">
			<?php foreach ($data as $d): ?>
			<div class="form-div">
				<div class="form-field-box odd" id="username_field_box">
					<div class="form-display-as-box" id="username_display_as_box">Nama Lengkap :</div>
					<div class="form-input-box" id="username_input_box">
						<div id="field-username" class="readonly_label"><?= $d->real_name; ?></div>
					</div>
					<div class="clear"></div>
				</div>


				<div class="form-field-box odd" id="username_field_box">
					<div class="form-display-as-box" id="username_display_as_box">Alamat :</div>
					<div class="form-input-box" id="username_input_box">
						<div id="field-username" class="readonly_label"><?= $d->alamat; ?></div>
					</div>
					<div class="clear"></div>
				</div>


				<div class="form-field-box odd" id="username_field_box">
					<div class="form-display-as-box" id="username_display_as_box">Pekerjaan :</div>
					<div class="form-input-box" id="username_input_box">
						<div id="field-username" class="readonly_label"><?= $d->pekerjaan; ?></div>
					</div>
					<div class="clear"></div>
				</div>


				<div class="form-field-box even" id="username_field_box">
					<div class="form-display-as-box" id="username_display_as_box">Penyakit :</div>
					<div class="form-input-box" id="username_input_box">
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
								echo '<div id="field-username" class="readonly_label">'.$penyakit.'</div>';
							} elseif ($k2 >= 7) {
								$penyakit = 'Kolitis Tuberkulosa';
								echo '<div id="field-username" class="readonly_label">'.$penyakit.'</div>';
							} elseif ($k3 >= 4) {
								$penyakit = 'Kolitis Pseudomembran';
								echo '<div id="field-username" class="readonly_label">'.$penyakit.'</div>';
							} elseif ($k4 >= 4) {
								$penyakit = 'Kolitis Amebik';
								echo '<div id="field-username" class="readonly_label">'.$penyakit.'</div>';
							} else {
								$penyakit = 'Silahkan Konsultasikan ke Dokter.';
								echo '<div id="field-username" class="readonly_label">'.$penyakit.'</div>';
							}
					    ?>
					</div>
					<div class="clear"></div>
				</div>


				<div class="form-field-box odd" id="username_field_box">
					<div class="form-display-as-box" id="username_display_as_box">Solusi :</div>
					<div class="form-input-box" id="username_input_box">
						<?php
			    if ($penyakit == 'Kolitis Shigelosis') {
						echo '<div id="field-username" class="readonly_label">- Dengan memberikan antibiotik seperti ampisilin 4x500 mg perhari,</br>
								- Kontrimoksazol 2x2 tablet perhari,</br>
								- Tetrasiklin 4x500 mg perhari selama 5 hari,</br>
								- Antibiotik lain seperti golongan kuinolon dan sefalosporingenerasi</br>&nbsp;&nbsp;III terutama pada pasien dengan gejala klinik yang berat,</br>
								- Kompres,</br>
								- Minum air putih banyak,</br>
								- Distraksi pengalihan.</div>';
					} elseif ($penyakit == 'Kolitis Tuberkulosa') {
						echo '<div id="field-username" class="readonly_label">- INH 5-10 mg/kgBB atau 400 mg sekali sehari,</br>
								- Entambutol 15-25 mg/kgBB atau 900-1200 mg sekali sehari,</br>
								- Rifampisin 10 mg/kgBB atau 400-600 mg sekali sehari,</br>
								- Pirazinaimid 25-3 mg/kgBB atau 1,5-2 g sekali sehari,</br>
								- Makan makanan yang tinggi serat,</br>
								- Distraksi pengalihan,</br>
								- Meletakkan botol pada daerah yang nyeri,</br>
								- Meletakkan botol yang berisi air panas pada daerha yang nyeri.</div>';
					} elseif ($penyakit == 'Kolitis Pseudomembran') {
						echo '<div id="field-username" class="readonly_label">- Meletakkan botol yang berisi air panas pada daerha yang nyeri,</br>
								- Metronidazol dengan dosis per oral 250-500 mg 4 x sehari selama 7-10 hari,</br>
								- Vankomisin dengan dosis per oral 125-500 mg 4x sehari selama s7-14 hari,</br>
								- Kolestiramin dengan dosis per oral 125-500 mg 4x sehari selama 5-10 hari,</br>
								- Memberikan kuman laktobasilus atau ragi (saccharomyces boulardi) selama beberapa minggu.</div>';
					} elseif ($penyakit == 'Kolitis Amebik') {
						echo '<div id="field-username" class="readonly_label">- Meletakkan botol yang berisi air panas pada daerha yang nyeri,</br>
								- Metronidazol dengan dosis per oral 250-500 mg 4 x sehari selama 7-10 hari,</br>
								- Vankomisin dengan dosis per oral 125-500 mg 4x sehari selama s7-14 hari,</br>
								- Kolestiramin dengan dosis per oral 125-500 mg 4x sehari selama 5-10 hari,</br>
								- Memberikan kuman laktobasilus atau ragi (saccharomyces boulardi) selama beberapa minggu.</div>';
					} else {
						echo '<div id="field-username" class="readonly_label">-</div>';
					}
			    ?>
					</div>
					<div class="clear"></div>
				</div></div>
				<div class="pDiv">
					<div class="form-button-box">
						<input type="button" value="Back to list" class="btn btn-large back-to-list" id="cancel-button">
					</div>
					<div class="form-button-box">
						<div class="small-loading" id="FormLoading">Loading, updating changes...</div>
					</div>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	</div>
	 <?php endforeach; ?>
	<script>
	var validation_url = '<?= site_url("index.php/pakar/manage_analisa/index/update_validation/11") ?>';
	var list_url = '<?= site_url("index.php/pakar/manage_analisa/index") ?>';

	var message_alert_edit_form = "The data you had change may not be saved.\nAre you sure you want to go back to list?";
	var message_update_error = "An error has occurred on saving.";
</script>
<script type="text/javascript">
var js_date_format = 'dd/mm/yy';
</script>
<script type="text/javascript">
	var default_javascript_path = '<?= site_url("assets/grocery_crud/js") ?>';
	var default_css_path = '<?= site_url("assets/grocery_crud/css") ?>';
	var default_texteditor_path = '<?= site_url("assets/grocery_crud/texteditor") ?>';
	var default_theme_path = '<?= site_url("assets/grocery_crud/themes") ?>';
	var base_url = '<?= site_url("") ?>';

</script>
</div>