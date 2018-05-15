<?php
	/* Define the class */
	class worker{
		/* define the public variables and functions */
		private $workerName;
		private $workerMass;
		private $belongingsMass;
		public function __construct($workerMass, $belongingsMass){
			$this->workerMass=$workerMass;
			$this->belongingsMass=$belongingsMass;
		}
		public function getOneWayCost(){
			return ( $this->workerMass + $this->belongingsMass ) * 500;
		}
		public function getTotalUn(){
			return ( $this->workerMass + $this->belongingsMass ) * 10;
		}
		public function getTotalRe(){
			return ( $this->workerMass + $this->belongingsMass ) * 20;
		}
		public function getBelongingsCost(){
			return $this->belongingsMass * 500;
		}
		public function getUnCost(){
			return ($this->workerMass + $this->belongingsMass)*100;
		}
		public function getReCost(){
			return ($this->workerMass + $this->belongingsMass)*400;
		}
		public function getTwoWayCost(){
			return ($this->workerMass + $this->belongingsMass)*1000;
		}
		public function totalMass(){
			return $this->workerMass + $this->belongingsMass;
		}
		public function excessBelongingsCost(){
			if($this->belongingsMass * 500 - 15000 > 0){
				return $this->belongingsMass * 500 - 15000;
			}else{
				return 0;
			}
		}
	}
?>
