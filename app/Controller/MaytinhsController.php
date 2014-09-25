<?php
class MaytinhsController extends AppController{
	
	public function index(){
		$this->set('title_for_layout','May tinh');
		$ketqua = 0;
		$error="";
		if($this->request->is('post')){
			$soa = $this->request->data['soa'];
			$sob = $this->request->data['sob'];
			if($soa == "" || $sob == ""){
				$error = "Enter number a and b.";
			}else{
				if (is_numeric($soa) == FALSE || is_numeric($sob) == FALSE) {
					# code...
					$error = "Number a or number b is not a number";

				}else{
					$a = $this->request->data['toantu'];
					foreach ($a as $i) {
						# code...
						//echo $i;
						if($i == 1){
							$ketqua = $soa + $sob;
						}else{
							if ($i == 2) {
								# code...
								$ketqua = $soa - $sob;
							}else{
								if($i == 3){
									$ketqua = $soa * $sob;
								}
								if($i == 4){
									$ketqua = $soa/$sob;
								}
							}
						
						}
					}
				}
				
			}
			
			
			
		}
		$this->set('error',$error);
		$this->set('ketqua',$ketqua);
		
	}
}