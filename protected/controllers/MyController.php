<?php 

class MyController extends Controller
{
    public function actionOne() {
        echo "223232 ";
        echo $this->One();
    }
    
        private function One() {
        return "one";
    }
    
}
