<?php
	/* Define the class */
	class worker{
		/* define the public variables and functions */
		public $workerName;
		public $workerMass;
		public $belongingsMass;
		public function __construct(){
			$this->workerMass=0.0;
			$this->belongingsMass=0.0;
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
	}
?>
