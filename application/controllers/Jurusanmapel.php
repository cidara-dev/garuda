<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\x53\105\120\101\124\110") or exit("\x4e\x6f\x20\x64\x69\x72\x65\x63\x74\40\163\x63\x72\151\x70\x74\x20\x61\x63\x63\x65\x73\163\40\141\154\154\x6f\167\x65\x64"); class JurusanMapel extends CI_Controller { public function __construct() { goto Mq5TT; GmAWK: if (!$this->ion_auth->logged_in()) { goto i7Oit; } goto Vvizj; a5b6s: i7Oit: goto S9Dwc; m3i3R: Go7Fh: goto kuRFc; J3ibo: goto Go7Fh; goto a5b6s; kuRFc: $this->load->library(["\144\141\164\141\164\x61\142\154\145\x73", "\x66\157\x72\155\137\166\x61\154\151\x64\141\164\151\x6f\x6e"]); goto dVc9C; LtyH8: $this->form_validation->set_error_delimiters('', ''); goto osU5P; Mq5TT: parent::__construct(); goto GmAWK; e0hsa: xNChw: goto J3ibo; dVc9C: $this->load->model("\x4d\x61\x73\x74\x65\x72\x5f\x6d\x6f\144\x65\154", "\x6d\141\163\x74\x65\x72"); goto LtyH8; z1_CQ: show_error("\x48\x61\x6e\171\141\40\101\x64\155\151\x6e\x69\163\x74\162\x61\164\x6f\x72\40\x79\141\156\147\40\144\151\x62\x65\x72\x69\40\150\141\153\40\x75\x6e\x74\x75\x6b\40\x6d\x65\x6e\x67\x61\x6b\x73\145\163\40\150\141\154\141\x6d\x61\156\40\x69\x6e\151\54\x20\74\141\x20\150\162\145\146\x3d\x22" . base_url("\144\141\x73\x68\x62\157\141\162\x64") . "\42\x3e\x4b\145\155\142\x61\x6c\x69\x20\x6b\x65\x20\155\145\156\x75\40\141\x77\141\154\x3c\57\x61\76", 403, "\x41\x6b\x73\145\x73\40\x54\145\x72\x6c\x61\x72\x61\x6e\147"); goto e0hsa; Vvizj: if ($this->ion_auth->is_admin()) { goto xNChw; } goto z1_CQ; S9Dwc: redirect("\141\x75\x74\150"); goto m3i3R; osU5P: } public function output_json($data, $encode = true) { goto lUA_w; YTweD: $this->output->set_content_type("\x61\x70\160\154\151\143\x61\164\x69\x6f\x6e\57\x6a\x73\x6f\x6e")->set_output($data); goto f3ck6; lUA_w: if (!$encode) { goto s3OvJ; } goto UJ6hb; S8YbE: s3OvJ: goto YTweD; UJ6hb: $data = json_encode($data); goto S8YbE; f3ck6: } public function index() { goto lflHi; ZMnYe: $this->load->view("\137\x74\145\155\x70\x6c\141\164\x65\x73\57\x64\141\x73\150\142\x6f\141\162\144\x2f\x5f\x66\x6f\157\164\x65\162\56\x70\x68\160"); goto Qflme; gv8MC: $this->load->view("\162\145\154\141\163\x69\57\x6a\x75\x72\x75\x73\141\156\155\x61\x70\145\x6c\57\144\x61\164\141"); goto ZMnYe; AcuJq: $this->load->view("\x5f\x74\x65\x6d\160\154\141\164\x65\x73\x2f\x64\141\x73\x68\142\157\141\x72\x64\x2f\x5f\150\145\141\144\x65\162\x2e\x70\x68\160", $data); goto gv8MC; lflHi: $data = ["\x75\163\145\x72" => $this->ion_auth->user()->row(), "\152\x75\144\x75\x6c" => "\x4a\165\162\x75\x73\x61\156\x20\x4d\x61\x74\141\40\x4b\165\x6c\x69\x61\x68", "\163\x75\142\x6a\165\x64\165\x6c" => "\x44\141\x74\x61\x20\x4a\165\x72\x75\163\141\156\x20\x4d\141\164\x61\x20\x4b\165\x6c\x69\141\150"]; goto AcuJq; Qflme: } public function data() { $this->output_json($this->master->getJurusanMapel(), false); } public function getJurusanId($id) { $this->output_json($this->master->getAllJurusan($id)); } public function add() { goto xoBKX; jB7Z2: $this->load->view("\x5f\x74\145\155\160\154\141\164\x65\163\x2f\144\141\x73\150\142\157\x61\x72\x64\x2f\137\x66\157\157\x74\x65\162\56\x70\x68\x70"); goto z5cMA; xoBKX: $data = ["\165\x73\145\162" => $this->ion_auth->user()->row(), "\x6a\165\x64\165\x6c" => "\x54\x61\x6d\142\141\150\40\112\165\x72\x75\163\x61\156\40\115\x61\x74\141\x20\x4b\x75\x6c\x69\141\150", "\163\165\142\x6a\x75\144\165\x6c" => "\x54\x61\x6d\x62\141\150\x20\104\141\x74\141\x20\x4a\x75\162\x75\163\x61\156\x20\x4d\141\164\x61\x20\x4b\165\x6c\x69\x61\150", "\155\x61\x70\145\x6c" => $this->master->getMapel()]; goto tq6SH; tq6SH: $this->load->view("\137\164\x65\155\x70\154\141\x74\x65\163\x2f\144\x61\163\x68\142\157\x61\x72\x64\57\137\x68\x65\141\144\145\x72\56\x70\150\160", $data); goto P2Emb; P2Emb: $this->load->view("\x72\145\x6c\141\163\151\x2f\x6a\165\x72\x75\163\x61\x6e\x6d\x61\x70\x65\x6c\57\141\144\x64"); goto jB7Z2; z5cMA: } public function edit($id) { goto Hb8ed; OgElj: $this->load->view("\162\145\154\x61\163\x69\x2f\152\x75\x72\x75\163\141\156\x6d\x61\x70\145\x6c\57\x65\144\151\x74"); goto Di6F3; Di6F3: $this->load->view("\x5f\164\x65\155\x70\x6c\x61\164\x65\x73\x2f\x64\141\x73\150\142\x6f\141\162\144\57\x5f\x66\x6f\157\x74\x65\162\x2e\160\150\160"); goto Hbdr8; TnfqA: $this->load->view("\137\164\x65\155\160\x6c\141\164\145\x73\57\x64\x61\163\x68\x62\157\x61\x72\x64\x2f\137\x68\x65\x61\x64\145\162\x2e\160\x68\x70", $data); goto OgElj; Hb8ed: $data = ["\165\x73\145\x72" => $this->ion_auth->user()->row(), "\152\165\144\x75\154" => "\105\x64\151\x74\x20\x4a\x75\162\165\163\x61\x6e\x20\115\141\x74\141\x20\113\165\154\x69\x61\150", "\x73\x75\142\152\165\x64\x75\x6c" => "\x45\144\x69\x74\x20\104\x61\164\141\40\x4a\165\x72\x75\163\141\156\40\115\x61\164\x61\x20\113\165\x6c\151\141\150", "\x6d\x61\160\145\x6c" => $this->master->getMapelById($id, true), "\x69\144\x5f\x6d\141\x70\145\x6c" => $id, "\141\154\154\137\x6a\x75\x72\165\x73\x61\x6e" => $this->master->getAllJurusan(), "\152\x75\x72\165\x73\141\x6e" => $this->master->getJurusanByIdMapel($id)]; goto TnfqA; Hbdr8: } public function save() { goto COErH; iMtx3: if ($method === "\x61\144\x64") { goto esAZr; } goto c1twT; g7DlY: G8Egg: goto VS9IB; mJudU: esAZr: goto SCj8B; XVstT: $this->form_validation->set_rules("\155\x61\x70\x65\154\x5f\x69\x64", "\115\141\x74\141\x20\113\165\x6c\151\141\150", "\x72\x65\x71\x75\x69\x72\145\x64"); goto r7Xvd; E9smk: goto N8zS8; goto vBpNO; s5dq6: N8zS8: goto TKLIH; UMwpI: $id = $this->input->post("\155\141\160\145\x6c\137\151\144", true); goto UUSxO; Rd51o: foreach ($jurusan_id as $key => $val) { $input[] = ["\x6d\141\160\145\x6c\x5f\151\x64" => $mapel_id, "\x6a\x75\x72\x75\163\141\156\137\151\x64" => $val]; R77I6: } goto UqguB; mbCa7: gofvi: goto qtgdA; wLhF2: $data = ["\163\164\141\164\x75\163" => false, "\145\x72\162\x6f\x72\163" => ["\x6d\141\x70\145\154\137\151\x64" => form_error("\155\141\160\145\x6c\x5f\x69\x64"), "\152\165\162\x75\x73\x61\156\x5f\151\x64\x5b\135" => form_error("\152\165\x72\x75\163\x61\x6e\x5f\x69\144\x5b\135")]]; goto Q2KZo; SCj8B: $action = $this->master->create("\152\x75\162\165\x73\141\156\x5f\155\x61\160\x65\154", $input, true); goto g7DlY; TKLIH: $this->output_json($data); goto CKvDC; Gvr2L: $jurusan_id = $this->input->post("\152\x75\x72\x75\x73\x61\156\x5f\151\x64", true); goto q0isE; UUSxO: $this->master->delete("\x6a\165\x72\165\x73\141\156\137\x6d\141\x70\145\154", $id, "\155\141\x70\x65\154\x5f\x69\x64"); goto aVw6P; aVw6P: $action = $this->master->create("\152\x75\162\165\x73\141\x6e\137\x6d\141\160\145\x6c", $input, true); goto mbCa7; Q2KZo: $this->output_json($data); goto s5dq6; q0isE: $input = []; goto Rd51o; r7Xvd: $this->form_validation->set_rules("\x6a\x75\162\x75\x73\141\x6e\x5f\x69\144\133\x5d", "\112\165\162\x75\163\x61\156", "\x72\x65\x71\x75\151\x72\145\144"); goto jcnUy; VS9IB: $data["\163\x74\x61\164\165\x73"] = $action ? TRUE : FALSE; goto E9smk; PARrM: $mapel_id = $this->input->post("\155\x61\160\x65\x6c\x5f\151\144", true); goto Gvr2L; qtgdA: goto G8Egg; goto mJudU; vBpNO: QnFTq: goto wLhF2; UqguB: nRLdo: goto iMtx3; jcnUy: if ($this->form_validation->run() == FALSE) { goto QnFTq; } goto PARrM; COErH: $method = $this->input->post("\155\x65\164\x68\157\x64", true); goto XVstT; c1twT: if (!($method === "\x65\144\151\x74")) { goto gofvi; } goto UMwpI; CKvDC: } public function delete() { goto ou3KF; vZDfU: X0gf8: goto UYNSN; Refpt: goto Ks482; goto vZDfU; UYNSN: $this->output_json(["\163\x74\141\x74\165\163" => false]); goto wbY20; F351u: if (!$chk) { goto X0gf8; } goto svBBb; ou3KF: $chk = $this->input->post("\143\x68\x65\x63\x6b\145\144", true); goto F351u; svBBb: if (!$this->master->delete("\152\x75\162\165\x73\141\156\137\155\x61\160\145\x6c", $chk, "\155\141\x70\145\154\x5f\x69\144")) { goto qizat; } goto yXXCj; wbY20: Ks482: goto ap9qM; yXXCj: $this->output_json(["\x73\x74\x61\x74\165\163" => true, "\x74\157\164\x61\154" => count($chk)]); goto mMJ_V; mMJ_V: qizat: goto Refpt; ap9qM: } }