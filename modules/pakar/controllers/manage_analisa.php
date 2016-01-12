<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Manage_Analisa
 *
 * @author No-CMS Module Generator
 */
class Manage_Analisa extends CMS_Priv_Strict_Controller {

	protected $URL_MAP = array();
	private $k1;
	private $k2;
	private $k3;
	private $k4;

	public function index(){

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// initialize groceryCRUD
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $crud = $this->new_crud();
        $crud->unset_jquery();
        $crud->unset_print();
        $crud->unset_read();
        $crud->custom_export_url = '/pakar/manage_analisa/download';
        $crud->add_action('Smileys', base_url().'assets/grocery_crud/themes/flexigrid/css/images/magnifier.png', 'pakar/manage_analisa/lihat');

        // set model
        $crud->set_model($this->cms_module_path().'/grocerycrud_analisa_model');

        // adjust groceryCRUD's language to No-CMS's language
        $crud->set_language($this->cms_language());

        // table name
        $crud->set_table($this->cms_complete_table_name('analisa'));

        // set subject
        $crud->set_subject('Analisa');

        // displayed columns on list
        $crud->columns('username','penyakit', 'solusi');
        // displayed columns on edit operation
        $crud->edit_fields('username','kd_gejala');
        // displayed columns on add operation
        $crud->add_fields('username','kd_gejala');

        $user_name = $this->cms_ci_session('cms_user_name');
        $crud->field_type('username', 'hidden', $user_name);
        $crud->where('username', $user_name);

        // caption of each columns
        $crud->display_as('username','Username');
        $crud->display_as('kd_gejala','Gejala');

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// HINT: Put set relation (lookup) codes here
		// (documentation: http://www.grocerycrud.com/documentation/options_functions/set_relation)
		// eg:
		// 		$crud->set_relation( $field_name , $related_table, $related_title_field , $where , $order_by );
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// HINT: Put set relation_n_n (detail many to many) codes here
		// (documentation: http://www.grocerycrud.com/documentation/options_functions/set_relation_n_n)
		// eg:
		// 		$crud->set_relation_n_n( $field_name, $relation_table, $selection_table, $primary_key_alias_to_this_table,
		// 			$primary_key_alias_to_selection_table , $title_field_selection_table, $priority_field_relation );
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$crud->set_relation_n_n('kd_gejala',
		    $this->cms_complete_table_name('relasi_gejala'),
		    $this->cms_complete_table_name('gejala'),
			'fk_id_analisa', 'fk_kd_gejala',
			'nm_gejala', 'urutan');

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// HINT: Put custom field type here
		// (documentation: http://www.grocerycrud.com/documentation/options_functions/field_type)
		// eg:
		// 		$crud->field_type( $field_name , $field_type, $value  );
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////



        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// HINT: Put callback here
		// (documentation: httm://www.grocerycrud.com/documentation/options_functions)
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$crud->callback_before_insert(array($this,'before_insert'));
		$crud->callback_before_update(array($this,'before_update'));
		$crud->callback_before_delete(array($this,'before_delete'));
		$crud->callback_after_insert(array($this,'after_insert'));
		$crud->callback_after_update(array($this,'after_update'));
		$crud->callback_after_delete(array($this,'after_delete'));
		$crud->callback_column('penyakit',array($this,'cc_penyakit'));
		$crud->callback_column('solusi',array($this,'cc_solusi'));



        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // render
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $output = $crud->render();
        $this->view($this->cms_module_path().'/manage_analisa_view', $output,
            $this->cms_complete_navigation_name('manage_analisa'));

    }

    public function before_insert($post_array){
		return TRUE;
	}

	public function after_insert($post_array, $primary_key){
		$success = $this->after_insert_or_update($post_array, $primary_key);
		return $success;
	}

	public function before_update($post_array, $primary_key){
		return TRUE;
	}

	public function after_update($post_array, $primary_key){
		$success = $this->after_insert_or_update($post_array, $primary_key);
		return $success;
	}

	public function before_delete($primary_key){

		return TRUE;
	}

	public function after_delete($primary_key){
		return TRUE;
	}

	public function after_insert_or_update($post_array, $primary_key){

        return TRUE;
	}

	public function cc_penyakit($value, $row){
		$j = 0;
		for ($i=1; $i < 25; $i++) { 
			$data = $this->db->select('*,count(sp_relasi_gejala.fk_id_analisa) count_id_analisa')
							 ->where('sp_relasi_gejala.fk_id_analisa',$row->id_analisa)
							 ->where('sp_relasi_gejala.fk_kd_gejala',$i)
							 ->get('sp_relasi_gejala')->result();

			foreach($data as $d){
				$t[$i] = $d->count_id_analisa;
				$j = $j + $d->count_id_analisa;
			}
		}
		$this->k1 = $t[1] + $t[2] + $t[3] + $t[8] + $t[9] + $t[10] + $t[11] + $t[12] + $t[13];
		$this->k2 = $t[4] + $t[5] + $t[10] + $t[15] + $t[17] + $t[19] + $t[20] + $t[23] + $t[24];
		$this->k3 = $t[3] + $t[5] + $t[8] + $t[13] + $t[14] + $t[21];
		$this->k4 = $t[5] + $t[6] + $t[14] + $t[16] + $t[16] + $t[18];
		if ($this->k1 >= 7) {
			$penyakit = $this->db->where('id_penyakit',1)->get('sp_penyakit')->row();
			return $penyakit->nama_penyakit;
		} elseif ($this->k2 >= 7) {
			$penyakit = $this->db->where('id_penyakit',2)->get('sp_penyakit')->row();
			return $penyakit->nama_penyakit;
		} elseif ($this->k3 >= 4) {
			$penyakit = $this->db->where('id_penyakit',3)->get('sp_penyakit')->row();
			return $penyakit->nama_penyakit;
		} elseif ($this->k4 >= 4) {
			$penyakit = $this->db->where('id_penyakit',4)->get('sp_penyakit')->row();
			return $penyakit->nama_penyakit;
		} else {
			return 'Silahkan Konsultasikan ke Dokter.</br>';
		}

	}

	public function cc_solusi($value, $row){
		if ($this->k1 >= 7) {
			$penyakit = $this->db->where('id_penyakit',1)->get('sp_penyakit')->row();
			return $penyakit->solusi;
		} elseif ($this->k2 >= 7) {
			$penyakit = $this->db->where('id_penyakit',2)->get('sp_penyakit')->row();
			return $penyakit->solusi;
		} elseif ($this->k3 >= 4) {
			$penyakit = $this->db->where('id_penyakit',3)->get('sp_penyakit')->row();
			return $penyakit->solusi;
		} elseif ($this->k4 >= 4) {
			$penyakit = $this->db->where('id_penyakit',4)->get('sp_penyakit')->row();
			return $penyakit->solusi;
		} else {
			return 'Silahkan Konsultasikan ke Dokter.</br>';
		}

	}

	public function download(){
		$this->load->library('ipdf');
		$dt=array();
		$dt['no']=1;
		$dt['data'] = $this->db->select('*')
						 ->where('username', $this->cms_ci_session('cms_user_name'))
						 ->get($this->cms_complete_table_name('analisa'))->result();
		$html = $this->load->view($this->cms_module_path().'/manage_analisa_dl', $dt,true);
		$this->ipdf->to_pdf($html,'Analisa.pdf');
	}

	public function lihat($id){
		$dt=array();
		$dt['no']=1;
		$dt['data'] = $this->db->select('*')
						 ->where('id_analisa', $id)
						 ->join('user','sp_analisa.username=user.user_name')
						 ->get($this->cms_complete_table_name('analisa'))->result();
		$this->view($this->cms_module_path().'/manage_analisa_personal',$dt,
            $this->cms_complete_navigation_name('manage_analisa_personal'));
	}
}