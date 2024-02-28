<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	/*MINI PACK*/

	public function getCountDataHvc($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_wo_hvc WHERE DATE(tgl_upload) = '$tanggal_sekarang'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountWorkOrder($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_wo_hvc WHERE DATE(tgl_upload) = '$tanggal_sekarang' AND `status` = '0'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountConsume($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_wo_hvc WHERE DATE(tgl_upload) = '$tanggal_sekarang' AND `status` = '1'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountSuccess($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori = 'Contacted' AND sub_kat= 'Success' AND input= 'New' AND DATE(tgl) = '$tanggal_sekarang'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountContacted($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori = 'Contacted' AND input= 'New'  AND DATE(tgl) = '$tanggal_sekarang'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountTelepon($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE channel = 'Telepon' AND input= 'New' AND DATE(tgl) = '$tanggal_sekarang'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountEmail($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE channel = 'Email' AND input= 'New' AND DATE(tgl) = '$tanggal_sekarang'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountWa($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE channel = 'WA' AND input= 'New'  AND DATE(tgl) = '$tanggal_sekarang'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountSms($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE channel = 'SMS' AND input= 'New'  AND DATE(tgl) = '$tanggal_sekarang'";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountDiamondMNow($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'DIAMOND' AND input= 'New' AND MONTH(tgl) = MONTH('$tanggal_sekarang') AND YEAR(tgl) = YEAR('$tanggal_sekarang')";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountPlatinumMNow($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'PLATINUM' AND input= 'New' AND MONTH(tgl) = MONTH('$tanggal_sekarang') AND YEAR(tgl) = YEAR('$tanggal_sekarang')";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountGoldMNow($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'GOLD' AND input= 'New' AND MONTH(tgl) = MONTH('$tanggal_sekarang') AND YEAR(tgl) = YEAR('$tanggal_sekarang')";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountSilverMNow($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'SILVER' AND input= 'New' AND MONTH(tgl) = MONTH('$tanggal_sekarang') AND YEAR(tgl) = YEAR('$tanggal_sekarang')";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountRegularMNow($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'REGULER' AND input= 'New' AND MONTH(tgl) = MONTH('$tanggal_sekarang') AND YEAR(tgl) = YEAR('$tanggal_sekarang')";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountChurnMNow($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'CHURN' AND input= 'New' AND MONTH(tgl) = MONTH('$tanggal_sekarang') AND YEAR(tgl) = YEAR('$tanggal_sekarang')";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountDiamondM1($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'DIAMOND' AND input= 'New' AND DATE(tgl) = DATE_SUB('$tanggal_sekarang', INTERVAL 1 MONTH);";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountPlatinumM1($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'PLATINUM' AND input= 'New' AND DATE(tgl) = DATE_SUB('$tanggal_sekarang', INTERVAL 1 MONTH);";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountGoldM1($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'GOLD' AND input= 'New' AND DATE(tgl) = DATE_SUB('$tanggal_sekarang', INTERVAL 1 MONTH);";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountSilverM1($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'SILVER' AND input= 'New' AND DATE(tgl) = DATE_SUB('$tanggal_sekarang', INTERVAL 1 MONTH);";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getCountRegularM1($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'REGULER' AND input= 'New' AND DATE(tgl) = DATE_SUB('$tanggal_sekarang', INTERVAL 1 MONTH);";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}
	
	public function getCountChurnM1($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE kategori_hvc = 'CHURN' AND input= 'New' AND DATE(tgl) = DATE_SUB('$tanggal_sekarang', INTERVAL 1 MONTH);";
		$result= $this->db->query($sql);
		return $result->row()->jumlah;
	}

	public function getHobby($tanggal_sekarang)
	{
		$sql="SELECT * FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND input= 'New';";
		// $result= $this->db->query($sql);
		$result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->result();
	}

	public function getCountAgentOnline($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_absen WHERE rule = 'HVC' AND DATE(date_absen)='$tanggal_sekarang' AND keterangan = 'IN';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getAgentWfh($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_absen WHERE DATE(date_absen)='$tanggal_sekarang' AND keterangan = 'IN' AND wfh_wfo = 'wfh'	AND rule='HVC';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getAgentWfo($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_absen WHERE DATE(date_absen)='$tanggal_sekarang' AND keterangan = 'IN' AND wfh_wfo = 'wfo'	AND rule='HVC';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getRevenueBulan($tanggal_sekarang)
	{
		$sql="SELECT SUM(selisih_harga) as revenue_bulan FROM app_tam_hvc WHERE MONTH(tgl) = MONTH('$tanggal_sekarang') AND YEAR(tgl) = YEAR('$tanggal_sekarang') AND valid= 'Valid' ;";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->revenue_bulan;
	}

	public function getRevenueLastMonth($tanggal_sekarang)
	{
		$sql="SELECT SUM(selisih_harga) as revenue_bulan_lalu FROM app_tam_hvc WHERE MONTH(tgl) = MONTH(DATE_SUB('$tanggal_sekarang', INTERVAL 1 MONTH)) AND YEAR(tgl) = YEAR(DATE_SUB('$tanggal_sekarang', INTERVAL 1 MONTH)) AND valid= 'Valid' ;";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->revenue_bulan_lalu;
	}

	public function getTotalContacted($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Contacted' AND input= 'New' ;";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalSuccess($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Contacted' AND sub_kat='Success' AND input= 'New'";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalProfiling($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Profiling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalRetention($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Retention' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalDecline($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Contacted' AND sub_kat='Not Success' AND input= 'New'";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalFollowUp($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Contacted' AND sub_kat='Follow Up' AND input= 'New'";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalNotContacted($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Not Contacted' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalRna($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Not Contacted' AND sub_kat='RNA' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalMailbox($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Not Contacted' AND sub_kat='Mail Box' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalTeleponSibuk($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Not Contacted' AND sub_kat='Line Busy' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalOthers($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE DATE(tgl) = '$tanggal_sekarang' AND kategori='Not Contacted' AND (sub_kat <> 'Line Busy' OR sub_kat <> 'Mail Box' OR sub_kat <> 'RNA') AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling8($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 08:00:00' AND tgl < '$tanggal_sekarang 09:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}
	
	public function getTotalAgreeUpselling9($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 09:00:00' AND tgl < '$tanggal_sekarang 10:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling10($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 10:00:00' AND tgl < '$tanggal_sekarang 11:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling11($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 11:00:00' AND tgl < '$tanggal_sekarang 12:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling12($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 12:00:00' AND tgl < '$tanggal_sekarang 13:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling13($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 13:00:00' AND tgl < '$tanggal_sekarang 14:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling14($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 14:00:00' AND tgl < '$tanggal_sekarang 15:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling15($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 15:00:00' AND tgl < '$tanggal_sekarang 16:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling16($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 16:00:00' AND tgl < '$tanggal_sekarang 17:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling17($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 17:00:00' AND tgl < '$tanggal_sekarang 18:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling18($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 18:00:00' AND tgl < '$tanggal_sekarang 19:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}

	public function getTotalAgreeUpselling19($tanggal_sekarang)
	{
		$sql="SELECT COUNT(*) as jumlah FROM app_tam_hvc WHERE tgl >= '$tanggal_sekarang 19:00:00' AND tgl < '$tanggal_sekarang 20:00:00' AND kategori='Contacted' AND sub_kat='Success' AND status_call = 'Agree Upselling' AND input= 'New';";
		$result= $this->db->query($sql);
		// $result = $this->db->get_where('app_tam_hvc',array('DATE(tgl)' => $tanggal_sekarang));
		return $result->row()->jumlah;
	}
	// public function get_jml_call_minipack()
	// {
	// 	$sql="SELECT sum(jumlah_call) as jml_call_minipack FROM app_tam_dashboard where jenis='Mini pack'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_minipack;
	// }
	// public function get_jml_call_contacted_minipack()
	// {
	// 	$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_minipack FROM app_tam_dashboard where jenis='Mini pack'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_contacted_minipack;
	// }
	// public function get_jml_call_agree_minipack()
	// {
	// 	$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_minipack FROM app_tam_dashboard where jenis='Mini pack'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_agree_minipack;
	// }
	// public function get_jml_revenue_minipack()
	// {
	// 	$sql="SELECT sum(jumlah_revenue) as jml_revenue_minipack FROM app_tam_dashboard where jenis='Mini pack'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_revenue_minipack;
	// }
	// public function get_jml_rpa_minipack()
	// {
	// 	$sql="SELECT sum(rpa) as jml_rpa_minipack FROM app_tam_dashboard where jenis='Mini pack'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_rpa_minipack;
	// }
	// public function get_jml_ppa_minipack()
	// {
	// 	$sql="SELECT sum(ppa) as jml_ppa_minipack FROM app_tam_dashboard where jenis='Mini pack'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_ppa_minipack;
	// }


	// /*UPGRADE SPEED*/

	// public function get_jml_agent_upgrade_speed()
	// {
	// 	$sql="SELECT sum(jumlah_agent) as jml_agent_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_agent_upgrade_speed;
	// }
	// public function get_jml_call_upgrade_speed()
	// {
	// 	$sql="SELECT sum(jumlah_call) as jml_call_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_upgrade_speed;
	// }
	// public function get_jml_call_contacted_upgrade_speed()
	// {
	// 	$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_contacted_upgrade_speed;
	// }
	// public function get_jml_call_agree_upgrade_speed()
	// {
	// 	$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_agree_upgrade_speed;
	// }
	// public function get_jml_revenue_upgrade_speed()
	// {
	// 	$sql="SELECT sum(jumlah_revenue) as jml_revenue_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_revenue_upgrade_speed;
	// }
	// public function get_jml_rpa_upgrade_speed()
	// {
	// 	$sql="SELECT sum(rpa) as jml_rpa_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_rpa_upgrade_speed;
	// }
	// public function get_jml_ppa_upgrade_speed()
	// {
	// 	$sql="SELECT sum(ppa) as jml_ppa_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_ppa_upgrade_speed;
	// }

	// /*Indihome 2P to 3P*/

	// public function get_jml_agent_2p3p()
	// {
	// 	$sql="SELECT sum(jumlah_agent) as jml_agent_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_agent_2p3p;
	// }
	// public function get_jml_call_2p3p()
	// {
	// 	$sql="SELECT sum(jumlah_call) as jml_call_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_2p3p;
	// }
	// public function get_jml_call_contacted_2p3p()
	// {
	// 	$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_contacted_2p3p;
	// }
	// public function get_jml_call_agree_2p3p()
	// {
	// 	$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_agree_2p3p;
	// }
	// public function get_jml_revenue_2p3p()
	// {
	// 	$sql="SELECT sum(jumlah_revenue) as jml_revenue_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_revenue_2p3p;
	// }
	// public function get_jml_rpa_2p3p()
	// {
	// 	$sql="SELECT sum(rpa) as jml_rpa_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_rpa_2p3p;
	// }
	// public function get_jml_ppa_2p3p()
	// {
	// 	$sql="SELECT sum(ppa) as jml_ppa_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_ppa_2p3p;
	// }

	// /*SMOOA*/

	// public function get_jml_agent_smooa()
	// {
	// 	$sql="SELECT sum(jumlah_agent) as jml_agent_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_agent_smooa;
	// }
	// public function get_jml_call_smooa()
	// {
	// 	$sql="SELECT sum(jumlah_call) as jml_call_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_smooa;
	// }
	// public function get_jml_call_contacted_smooa()
	// {
	// 	$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_contacted_smooa;
	// }
	// public function get_jml_call_agree_smooa()
	// {
	// 	$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_agree_smooa;
	// }
	// public function get_jml_revenue_smooa()
	// {
	// 	$sql="SELECT sum(jumlah_revenue) as jml_revenue_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_revenue_smooa;
	// }
	// public function get_jml_rpa_smooa()
	// {
	// 	$sql="SELECT sum(rpa) as jml_rpa_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_rpa_smooa;
	// }
	// public function get_jml_ppa_smooa()
	// {
	// 	$sql="SELECT sum(ppa) as jml_ppa_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_ppa_smooa;
	// }

	// /*OTT*/

	// public function get_jml_agent_ott()
	// {
	// 	$sql="SELECT sum(jumlah_agent) as jml_agent_ott FROM app_tam_dashboard where jenis='OTT'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_agent_ott;
	// }
	// public function get_jml_call_ott()
	// {
	// 	$sql="SELECT sum(jumlah_call) as jml_call_ott FROM app_tam_dashboard where jenis='OTT'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_ott;
	// }
	// public function get_jml_call_contacted_ott()
	// {
	// 	$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_ott FROM app_tam_dashboard where jenis='OTT'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_contacted_ott;
	// }
	// public function get_jml_call_agree_ott()
	// {
	// 	$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_ott FROM app_tam_dashboard where jenis='OTT'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_agree_ott;
	// }
	// public function get_jml_revenue_ott()
	// {
	// 	$sql="SELECT sum(jumlah_revenue) as jml_revenue_ott FROM app_tam_dashboard where jenis='OTT'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_revenue_ott;
	// }
	// public function get_jml_rpa_ott()
	// {
	// 	$sql="SELECT sum(rpa) as jml_rpa_ott FROM app_tam_dashboard where jenis='OTT'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_rpa_ott;
	// }
	// public function get_jml_ppa_ott()
	// {
	// 	$sql="SELECT sum(ppa) as jml_ppa_ott FROM app_tam_dashboard where jenis='OTT'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_ppa_ott;
	// }

	// /*Bundling Netflix*/

	// public function get_jml_agent_bundling_netflix()
	// {
	// 	$sql="SELECT sum(jumlah_agent) as jml_agent_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_agent_bundling_netflix;
	// }
	// public function get_jml_call_bundling_netflix()
	// {
	// 	$sql="SELECT sum(jumlah_call) as jml_call_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_bundling_netflix;
	// }
	// public function get_jml_call_contacted_bundling_netflix()
	// {
	// 	$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_contacted_bundling_netflix;
	// }
	// public function get_jml_call_agree_bundling_netflix()
	// {
	// 	$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_agree_bundling_netflix;
	// }
	// public function get_jml_revenue_bundling_netflix()
	// {
	// 	$sql="SELECT sum(jumlah_revenue) as jml_revenue_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_revenue_bundling_netflix;
	// }
	// public function get_jml_rpa_bundling_netflix()
	// {
	// 	$sql="SELECT sum(rpa) as jml_rpa_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_rpa_bundling_netflix;
	// }
	// public function get_jml_ppa_bundling_netflix()
	// {
	// 	$sql="SELECT sum(ppa) as jml_ppa_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_ppa_bundling_netflix;
	// }

	// /*UG Arpu =< 100rb*/

	// public function get_jml_agent_ug_arpu()
	// {
	// 	$sql="SELECT sum(jumlah_agent) as jml_agent_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_agent_ug_arpu;
	// }
	// public function get_jml_call_ug_arpu()
	// {
	// 	$sql="SELECT sum(jumlah_call) as jml_call_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_ug_arpu;
	// }
	// public function get_jml_call_contacted_ug_arpu()
	// {
	// 	$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_contacted_ug_arpu;
	// }
	// public function get_jml_call_agree_ug_arpu()
	// {
	// 	$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_call_agree_ug_arpu;
	// }
	// public function get_jml_revenue_ug_arpu()
	// {
	// 	$sql="SELECT sum(jumlah_revenue) as jml_revenue_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_revenue_ug_arpu;
	// }
	// public function get_jml_rpa_ug_arpu()
	// {
	// 	$sql="SELECT sum(rpa) as jml_rpa_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_rpa_ug_arpu;
	// }
	// public function get_jml_ppa_ug_arpu()
	// {
	// 	$sql="SELECT sum(ppa) as jml_ppa_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_ppa_ug_arpu;
	// }

	// /*Total All*/

	// public function get_sum_all_agent()
	// {
	// 	$sql="SELECT sum(jumlah_agent) as jml_sum_agent FROM app_tam_dashboard";
	// 	$result= $this->db->query($sql);
	// 	return $result->row()->jml_sum_agent;
	// 	$jmlagnt = $this->get_jml_agent_minipack;
	// 	dst...
	// 	$totsum = $jmlagnt + ... + ..;
	//}
}

