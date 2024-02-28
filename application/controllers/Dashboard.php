<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("M_dashboard", "m_dashboard");
    }

	public function index()
	{
		$tanggal_sekarang = date("Y-m-d");
		// $tanggal_sekarang = date("Y-m-d", strtotime("2023-04-13"));
		$data['data_hvc'] = $this->m_dashboard->getCountDataHvc($tanggal_sekarang);
		$data['work_order'] = $this->m_dashboard->getCountWorkOrder($tanggal_sekarang);
		$data['consume'] = $this->m_dashboard->getCountConsume($tanggal_sekarang);

		$data['success'] = $this->m_dashboard->getCountSuccess($tanggal_sekarang);
		$data['contacted'] = $this->m_dashboard->getCountContacted($tanggal_sekarang);
		if($data['success'] == '0' || $data['contacted'] == '0') {
			$data['convertion_rate'] = 0;
		}
		else {
			$data['convertion_rate'] = round(($data['success']/$data['contacted']) * 100);
		}

		$data['telepon'] = $this->m_dashboard->getCountTelepon($tanggal_sekarang);
		$data['email'] = $this->m_dashboard->getCountEmail($tanggal_sekarang);
		$data['wa'] = $this->m_dashboard->getCountWa($tanggal_sekarang);
		$data['sms'] = $this->m_dashboard->getCountSms($tanggal_sekarang);

		$data['diamond_m1'] = $this->m_dashboard->getCountDiamondM1($tanggal_sekarang);
		$data['platinum_m1'] = $this->m_dashboard->getCountPlatinumM1($tanggal_sekarang);
		$data['gold_m1'] = $this->m_dashboard->getCountGoldM1($tanggal_sekarang);
		$data['silver_m1'] = $this->m_dashboard->getCountSilverM1($tanggal_sekarang);
		$data['reguler_m1'] = $this->m_dashboard->getCountRegularM1($tanggal_sekarang);
		$data['churn_m1'] = $this->m_dashboard->getCountChurnM1($tanggal_sekarang);

		$data['diamond_m_now'] = $this->m_dashboard->getCountDiamondMNow($tanggal_sekarang);
		$data['platinum_m_now'] = $this->m_dashboard->getCountPlatinumMNow($tanggal_sekarang);
		$data['gold_m_now'] = $this->m_dashboard->getCountGoldMNow($tanggal_sekarang);
		$data['silver_m_now'] = $this->m_dashboard->getCountSilverMNow($tanggal_sekarang);
		$data['reguler_m_now'] = $this->m_dashboard->getCountRegularMNow($tanggal_sekarang);
		$data['churn_m_now'] = $this->m_dashboard->getCountChurnMNow($tanggal_sekarang);
		// $data['diamond_growth'] = (round(($data['diamond_m_now']/$data['diamond_m1']) * 100));
		// $data['diamond_growth'] = (round(($data['diamond_m_now']/$data['diamond_m1']) * 100));
		// $data['platinum_growth'] = (round(($data['platinum_m_now']/$data['platinum_m1']) * 100));
		// $data['gold_growth'] = (round(($data['gold_m_now']/$data['gold_m1']) * 100));
		// $data['silver_growth'] = (round(($data['silver_m_now']/$data['silver_m1']) * 100));
		// $data['reguler_growth'] = (round(($data['reguler_m_now']/$data['reguler_m1']) * 100));
		// $data['churn_growth'] = (round(($data['churn_m_now']/$data['churn_m1']) * 100));
		$data['diamond_growth'] = 0;
		$data['platinum_growth'] = 0;
		$data['gold_growth'] = 0;
		$data['silver_growth'] = 0;
		$data['reguler_growth'] = 0;
		$data['churn_growth'] = 0;

		$hobby_fnb = array();
		$hobby_otomotif = array();
		$hobby_entertaiment = array();
		$hobby_healty = array();
		$hobby_sport = array();
		$hobby_movie = array();
		$hobby_education = array();
		$hobby_religi = array();
		$hobby_kids = array();

		$data_hobby = $this->m_dashboard->getHobby($tanggal_sekarang);

		foreach ($data_hobby as $row)
		{
			$d_hobby = explode(", ",$row->opt_in);
			$jumlah_array = count($d_hobby);
			for ($i=0; $i < $jumlah_array; $i++) { 
				if($d_hobby != NULL) {
					if($d_hobby[$i] == 'Food & Beverage') {
						array_push($hobby_fnb,$d_hobby[$i]);
					}
					elseif($d_hobby[$i] == 'Otomotif') {
						array_push($hobby_otomotif,$d_hobby[$i]);
					}
					elseif($d_hobby[$i] == 'Healty') {
						array_push($hobby_healty,$d_hobby[$i]);
					}
					elseif($d_hobby[$i] == 'Sport') {
						array_push($hobby_sport,$d_hobby[$i]);
					}
					elseif($d_hobby[$i] == 'Entertaiment') {
						array_push($hobby_entertaiment,$d_hobby[$i]);
					}
					elseif($d_hobby[$i] == 'Movie') {
						array_push($hobby_movie,$d_hobby[$i]);
					}
					elseif($d_hobby[$i] == 'Education') {
						array_push($hobby_education,$d_hobby[$i]);
					}
					elseif($d_hobby[$i] == 'Religi') {
						array_push($hobby_religi,$d_hobby[$i]);
					}
					elseif($d_hobby[$i] == 'Kids') {
						array_push($hobby_kids,$d_hobby[$i]);
					}
				}
			}
			
		}

		$data['jumlah_fnb'] = COUNT($hobby_fnb);
		$data['jumlah_otomotif'] = COUNT($hobby_otomotif);
		$data['jumlah_entertaiment'] = COUNT($hobby_entertaiment);
		$data['jumlah_healty'] = COUNT($hobby_healty);
		$data['jumlah_sport'] = COUNT($hobby_sport);
		$data['jumlah_movie'] = COUNT($hobby_movie);
		$data['jumlah_education'] = COUNT($hobby_education);
		$data['jumlah_religi'] = COUNT($hobby_religi);
		$data['jumlah_kids'] = COUNT($hobby_kids);

		$data['jumlah_agent'] = $this->m_dashboard->getCountAgentOnline($tanggal_sekarang);
		$data['jumlah_wfh'] = $this->m_dashboard->getAgentWfh($tanggal_sekarang);
		$data['jumlah_wfo'] = $this->m_dashboard->getAgentWfo($tanggal_sekarang);

		$revenue_bulan = $this->m_dashboard->getRevenueBulan($tanggal_sekarang);
		$revenue_last_month = $this->m_dashboard->getRevenueLastMonth($tanggal_sekarang);
		$data['persen_revenue'] = number_format((($revenue_bulan / $revenue_last_month) * 100),2);
		$data['revenue_bulan'] = number_format($revenue_bulan,0,',','.');
		$data['revenue_last_month'] = number_format($revenue_last_month,0,',','.');
		if($data['revenue_last_month'] == 0) {
			$data['growth_revenue'] = '0';
		}
		else {
			$data['growth_revenue'] = round(($revenue_bulan/$revenue_last_month) * 100);
		}

		$data['total_contacted'] = $this->m_dashboard->getTotalContacted($tanggal_sekarang);
		$data['total_success'] = $this->m_dashboard->getTotalSuccess($tanggal_sekarang);
		$data['total_agree_upselling'] = $this->m_dashboard->getTotalAgreeUpselling($tanggal_sekarang);
		$data['total_profiling'] = $this->m_dashboard->getTotalProfiling($tanggal_sekarang);
		$data['total_retention'] = $this->m_dashboard->getTotalRetention($tanggal_sekarang);
		$data['total_decline'] = $this->m_dashboard->getTotalDecline($tanggal_sekarang);
		$data['total_follow_up'] = $this->m_dashboard->getTotalFollowUp($tanggal_sekarang);

		$data['total_not_contacted'] = $this->m_dashboard->getTotalNotContacted($tanggal_sekarang);
		$data['total_rna'] = $this->m_dashboard->getTotalRna($tanggal_sekarang);
		$data['total_mailbox'] = $this->m_dashboard->getTotalMailbox($tanggal_sekarang);
		$data['total_telepon_sibuk'] = $this->m_dashboard->getTotalTeleponSibuk($tanggal_sekarang);
		$data['total_others'] = $this->m_dashboard->getTotalOthers($tanggal_sekarang);

		$data['total_agree_upselling_bar8'] = $this->m_dashboard->getTotalAgreeUpselling8($tanggal_sekarang);
		$data['total_agree_upselling_bar9'] = $this->m_dashboard->getTotalAgreeUpselling9($tanggal_sekarang);
		$data['total_agree_upselling_bar10'] = $this->m_dashboard->getTotalAgreeUpselling10($tanggal_sekarang);
		$data['total_agree_upselling_bar11'] = $this->m_dashboard->getTotalAgreeUpselling11($tanggal_sekarang);
		$data['total_agree_upselling_bar12'] = $this->m_dashboard->getTotalAgreeUpselling12($tanggal_sekarang);
		$data['total_agree_upselling_bar13'] = $this->m_dashboard->getTotalAgreeUpselling13($tanggal_sekarang);
		$data['total_agree_upselling_bar14'] = $this->m_dashboard->getTotalAgreeUpselling14($tanggal_sekarang);
		$data['total_agree_upselling_bar15'] = $this->m_dashboard->getTotalAgreeUpselling15($tanggal_sekarang);
		$data['total_agree_upselling_bar16'] = $this->m_dashboard->getTotalAgreeUpselling16($tanggal_sekarang);
		$data['total_agree_upselling_bar17'] = $this->m_dashboard->getTotalAgreeUpselling17($tanggal_sekarang);
		$data['total_agree_upselling_bar18'] = $this->m_dashboard->getTotalAgreeUpselling18($tanggal_sekarang);
		$data['total_agree_upselling_bar19'] = $this->m_dashboard->getTotalAgreeUpselling19($tanggal_sekarang);
		$data['tanggal_sekarang'] = $tanggal_sekarang;
		$this->load->view('dashboard_v', $data);
	}
}
