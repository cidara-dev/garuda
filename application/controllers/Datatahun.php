<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\120\101\124\110") or exit("\116\157\x20\x64\151\162\x65\x63\164\40\x73\143\x72\x69\x70\x74\40\141\x63\x63\145\x73\x73\x20\x61\154\154\x6f\167\x65\x64"); class Datatahun extends CI_Controller { public function __construct() { goto dqSsy; Mb6Oj: if (!$this->ion_auth->logged_in()) { goto D5SNk; } goto qhTnW; w73Cl: goto sdfLH; goto cVgWT; cVgWT: D5SNk: goto aOH52; dqSsy: parent::__construct(); goto Mb6Oj; Esd2r: show_error("\x48\141\x6e\171\141\x20\101\x64\x6d\x69\x6e\151\163\164\162\x61\x74\157\162\40\x79\x61\156\147\40\144\151\142\145\162\151\40\x68\x61\x6b\x20\165\156\164\165\x6b\x20\x6d\145\x6e\147\x61\153\163\145\x73\x20\x68\x61\154\x61\x6d\x61\156\x20\x69\x6e\151\x2c\40\x3c\x61\x20\150\x72\145\x66\75\42" . base_url("\x64\141\163\x68\x62\157\141\162\144") . "\42\76\113\145\x6d\142\141\x6c\151\40\x6b\x65\x20\155\x65\x6e\165\x20\141\x77\x61\154\x3c\57\141\x3e", 403, "\101\153\x73\x65\x73\40\x54\x65\x72\x6c\x61\162\x61\x6e\147"); goto vC4xY; qhTnW: if ($this->ion_auth->is_admin()) { goto EWXmG; } goto Esd2r; aOH52: redirect("\141\165\164\150"); goto diBr2; NOsjG: $this->load->model("\x4d\141\163\x74\x65\162\137\155\157\144\145\154", "\x6d\x61\163\164\x65\162"); goto kNH7z; vC4xY: EWXmG: goto w73Cl; SN80h: $this->load->model("\x4c\157\147\x5f\155\x6f\x64\145\x6c", "\154\x6f\x67\147\151\x6e\x67"); goto hXklr; kNH7z: $this->load->model("\x44\x61\x73\150\142\157\x61\162\144\x5f\155\x6f\x64\145\x6c", "\x64\141\x73\x68\142\x6f\x61\162\144"); goto SN80h; diBr2: sdfLH: goto XvqRJ; hXklr: $this->form_validation->set_error_delimiters('', ''); goto CSats; XvqRJ: $this->load->library(["\x64\x61\164\141\164\x61\x62\154\x65\x73", "\x66\x6f\x72\x6d\137\166\141\x6c\151\144\x61\x74\x69\157\x6e"]); goto NOsjG; CSats: } public function output_json($data, $encode = true) { goto mx4bS; kYajP: $this->output->set_content_type("\141\160\x70\x6c\x69\x63\x61\x74\x69\x6f\x6e\57\x6a\x73\157\x6e")->set_output($data); goto izxV6; Vqkyp: $data = json_encode($data); goto RAuc6; RAuc6: SPJ7Z: goto kYajP; mx4bS: if (!$encode) { goto SPJ7Z; } goto Vqkyp; izxV6: } public function index() { goto vp7C_; QGCe7: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto Z9xWO; AhjMS: $tp = $this->dashboard->getTahunActive(); goto h2sB4; A2i3I: $data["\164\x70\137\x61\x63\x74\151\x76\145"] = $tp; goto QGCe7; rDRm3: $data["\164\160"] = $this->dashboard->getTahun(); goto A2i3I; f3KIn: $data["\x6a\x6d\154\137\x68\x61\162\151"] = $jml == null ? "\x30" : $jml->jml_hari_efektif; goto vS3f1; vp7C_: $user = $this->ion_auth->user()->row(); goto yIdW9; yIdW9: $data = ["\x75\163\x65\162" => $user, "\152\x75\x64\x75\154" => "\124\x61\x68\165\156\40\x50\145\x6c\141\x6a\x61\162\141\x6e\x20\x64\141\156\40\x53\x65\x6d\x65\163\x74\x65\162", "\x73\x75\142\x6a\165\x64\165\x6c" => "\x41\164\x75\x72\40\124\x61\x68\x75\x6e\x20\120\x65\154\141\x6a\x61\x72\141\156\40\x64\x61\156\x20\123\x65\155\145\x73\x74\x65\162", "\160\162\x6f\x66\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\164\x69\156\147" => $this->dashboard->getSetting()]; goto AhjMS; vS3f1: $this->load->view("\137\x74\145\155\x70\154\x61\164\x65\163\57\x64\141\163\150\x62\x6f\141\x72\x64\x2f\x5f\150\x65\x61\144\145\162", $data); goto Sn7Rr; DiWFx: $this->load->view("\137\164\x65\x6d\160\x6c\141\x74\x65\x73\x2f\x64\x61\x73\x68\x62\x6f\141\x72\144\x2f\x5f\146\x6f\157\164\x65\162"); goto bycMH; h2sB4: $smt = $this->dashboard->getSemesterActive(); goto rDRm3; Q7s_e: $jml = $this->master->getJmlHariEfektif($tp->id_tp . $smt->id_smt); goto f3KIn; Sn7Rr: $this->load->view("\155\141\x73\x74\x65\x72\x2f\164\x61\150\x75\156\57\x64\141\x74\x61"); goto DiWFx; Z9xWO: $data["\163\x6d\x74\x5f\x61\x63\164\151\x76\145"] = $smt; goto Q7s_e; bycMH: } public function data() { $this->output_json($this->dashboard->getDataTahun(), false); } public function gantiTahun() { goto lNi61; FqvYq: $data["\163\164\141\x74\x75\x73"] = true; goto YFmpg; GmMDD: $data["\x6d\x73\147"] = "\115\x65\x72\165\142\141\x68\x20\124\x61\x68\165\156\x20\x41\153\x74\x69\x66"; goto wPUcL; YFmpg: $this->logging->saveLog(4, "\x6d\145\x6e\147\x67\141\x6e\x74\x69\40\x74\141\150\165\x6e\x20\141\152\x61\162\x61\x6e\40\x61\153\164\x69\146"); goto LyT2s; X6Zog: $inputTp = json_decode($this->input->post("\164\141\x68\x75\x6e", false)); goto uIlEw; pIrye: VLv_0: goto jfibR; LyT2s: $this->output_json($data); goto rJZXW; jfibR: $this->dashboard->update("\155\141\163\x74\145\162\137\x74\160", $update, "\151\x64\x5f\x74\x70", null, true); goto GmMDD; wPUcL: $data["\165\x70\144\x61\x74\145"] = $update; goto FqvYq; lNi61: $aktif = $this->input->post("\x61\x63\164\151\166\145", true); goto X6Zog; uIlEw: foreach ($inputTp as $tps) { goto IBD0m; l8qkt: goto IXI9K; goto KSTQQ; JSN_S: IXI9K: goto tW24m; IBD0m: $id_tp = $tps->id; goto R3QoM; s9852: $active = 1; goto JSN_S; KSTQQ: xOlfX: goto s9852; R3QoM: $tahun = $tps->tp; goto LLZSW; tW24m: $update[] = array("\x69\x64\137\x74\160" => $id_tp, "\164\141\150\165\x6e" => $tahun, "\141\x63\164\151\x76\x65" => $active); goto Ze1o2; Ze1o2: LnNNV: goto FHIVm; LLZSW: if ($id_tp === $aktif) { goto xOlfX; } goto BYoJr; BYoJr: $active = 0; goto l8qkt; FHIVm: } goto pIrye; rJZXW: } public function gantiSemester() { goto zkMO5; qXQov: $data["\155\163\x67"] = "\115\145\162\165\142\141\150\x20\123\145\155\x65\x73\164\x65\x72\40\x41\153\x74\x69\146"; goto gjc7W; s7q8q: $this->output_json($data); goto BCsOU; Ykpzq: $data["\x73\x74\141\x74\x75\x73"] = true; goto tEFd_; zkMO5: $aktif = $this->input->post("\141\x63\x74\151\x76\x65", true); goto Fsww_; Fsww_: $inputSmt = json_decode($this->input->post("\163\145\155\x65\163\164\145\x72", false)); goto dF6ul; TSeuD: $this->dashboard->update("\x6d\x61\163\164\x65\x72\137\x73\x6d\164", $update, "\x69\144\137\163\155\x74", null, true); goto qXQov; WxPYI: j7kAh: goto TSeuD; tEFd_: $this->logging->saveLog(4, "\155\x65\156\x67\x67\x61\156\x74\151\x20\163\x65\x6d\x65\x73\164\145\x72\x20\141\153\x74\x69\146"); goto s7q8q; dF6ul: foreach ($inputSmt as $tps) { goto zGHJ1; Rle83: if ($id_smt === $aktif) { goto k2fjv; } goto nKYRg; zGHJ1: $id_smt = $tps->id; goto zXyp1; nKYRg: $active = 0; goto LqxNA; R4N53: $update[] = array("\151\144\x5f\163\155\x74" => $id_smt, "\x73\x6d\164" => $smt, "\141\x63\164\x69\x76\145" => $active); goto lwiZB; wf_qz: k2fjv: goto WmbWh; zXyp1: $smt = $tps->Semester; goto Rle83; LqxNA: goto lYPPS; goto wf_qz; lwiZB: pqWs4: goto JCKg5; WmbWh: $active = 1; goto jlwBu; jlwBu: lYPPS: goto R4N53; JCKg5: } goto WxPYI; gjc7W: $data["\165\x70\x64\x61\164\145"] = $update; goto Ykpzq; BCsOU: } public function add() { goto zSZhR; NBsCr: $data = $this->master->create("\155\x61\x73\164\x65\x72\137\164\160", $insert); goto H7agx; BABvN: $this->logging->saveLog(4, "\155\145\x6e\147\145\x64\151\164\x20\164\141\x68\165\156\x20\160\145\154\141\x6a\141\x72\x61\x6e"); goto n157l; g8tQe: A0COy: goto Pl41F; YYZOE: $update = array("\x69\x64\x5f\x74\x70" => $id, "\164\141\150\x75\156" => $tahun); goto TT7Kw; QYIdE: $tahun = $this->input->post("\164\141\150\165\156", true); goto BBh0t; n157l: goto A0COy; goto nxZ5l; Pl41F: $this->output->set_content_type("\141\x70\160\154\x69\143\141\164\x69\157\x6e\57\152\x73\x6f\156")->set_output($data); goto aJ7y6; wcdr6: $id = $this->input->post("\x69\x64\137\x74\x61\x68\165\x6e", true); goto YYZOE; RUrgR: $insert = ["\164\141\x68\x75\156" => $tahun]; goto NBsCr; zSZhR: $method = $this->input->post("\155\x65\164\150\x6f\x64", true); goto QYIdE; TT7Kw: $data = $this->master->update("\155\141\163\164\145\x72\x5f\x74\160", $update, "\x69\x64\x5f\164\160", $id); goto BABvN; BBh0t: if ($method === "\141\144\x64") { goto QXOuJ; } goto wcdr6; nxZ5l: QXOuJ: goto RUrgR; H7agx: $this->logging->saveLog(3, "\155\x65\x6e\x61\x6d\142\141\x68\40\x74\x61\x68\x75\156\x20\x70\x65\x6c\x61\152\x61\162\141\156"); goto g8tQe; aJ7y6: } public function saveHariEfektif() { goto QDyjB; dBgEN: $this->output_json($data); goto r3Kje; EPi0r: $update = $this->db->replace("\x6d\141\x73\x74\145\162\x5f\150\x61\162\x69\x5f\145\146\x65\x6b\x74\x69\x66", $input); goto oWiDT; QDyjB: $tp = $this->dashboard->getTahunActive(); goto PjpcY; PjpcY: $smt = $this->dashboard->getSemesterActive(); goto Ze8hA; Ze8hA: $input = ["\151\x64\x5f\150\x61\x72\x69\137\x65\x66\x65\x6b\164\x69\x66" => $tp->id_tp . $smt->id_smt, "\152\x6d\x6c\x5f\150\x61\x72\x69\137\145\146\145\x6b\x74\151\146" => $this->input->post("\x6a\155\x6c\137\150\141\162\x69", true)]; goto EPi0r; oWiDT: $data["\x73\x74\x61\x74\165\163"] = $update; goto dBgEN; r3Kje: } public function hapusTahun() { goto qBl8p; e4u0N: $data["\155\163\x67"] = "\x4d\145\x6e\x67\150\x61\x70\165\x73\x20\x54\x61\x68\x75\x6e\x20\120\x65\154\141\x6a\141\x72\x61\156"; goto iljQE; qBl8p: $id = $this->input->post("\x68\141\160\x75\163", true); goto H5o1f; a9hca: $data["\x73\164\x61\x74\165\x73"] = false; goto hBygI; H5o1f: if ($this->dashboard->hapus("\x6d\141\x73\x74\x65\162\x5f\x74\160", $id, "\x69\x64\x5f\164\160")) { goto g19R8; } goto a9hca; OHYNt: $data["\163\x74\141\x74\165\163"] = true; goto yJ23h; hBygI: goto pWeeR; goto xWoJ7; xWoJ7: g19R8: goto SDYGc; yJ23h: pWeeR: goto e4u0N; iljQE: $this->output_json($data); goto NLe12; SDYGc: $this->logging->saveLog(5, "\x6d\x65\x6e\x67\150\x61\x70\x75\163\40\x74\x61\x68\165\x6e\40\x70\145\154\141\152\x61\162\x61\x6e"); goto OHYNt; NLe12: } public function hapus() { goto AnUSq; d5fuL: bQQZT: goto DZtZA; AnUSq: $chk = $this->input->post("\x63\x68\145\x63\x6b\x65\x64", true); goto p1ppZ; p1ppZ: if (!$chk) { goto DL9C6; } goto T2RM5; p9vq0: DL9C6: goto t7gNK; RKCpq: $this->output_json(["\163\x74\141\x74\165\x73" => true, "\164\157\164\141\154" => count($chk)]); goto rjihR; rjihR: T16Kl: goto aGXSU; t7gNK: $this->output_json(["\x73\x74\x61\164\x75\x73" => false]); goto d5fuL; T2RM5: if (!$this->dashboard->hapus("\x6d\x61\x73\164\145\x72\x5f\164\x70", $chk, "\x69\x64\137\164\x70")) { goto T16Kl; } goto WW9jm; WW9jm: $this->logging->saveLog(5, "\x6d\145\x6e\x67\150\141\x70\x75\163\x20\x74\141\150\165\156\x20\x70\x65\154\141\152\x61\x72\141\156"); goto RKCpq; aGXSU: goto bQQZT; goto p9vq0; DZtZA: } }