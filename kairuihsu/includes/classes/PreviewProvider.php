<?php
class PreviewProvider {

    private $con;

    public function __construct($con){
        $this->con = $con;
    }

    public function createPreviewPhoto($entity){

       if($entity == null){
           $entity = $this->getRandomEntity();
       }

       $id = $entity->getId();
       $name  = $entity->getName();
       $thumbnail  = $entity->getThumbnail();
       // <img src='$thumbnail' class='previewIamge'>    
       return "<div class='previewContainer'>
                         
                    <img src='entities/thumbnails/selfie.jpg' class='previewIamge'>    

                </div>";
    }

    private function getRandomEntity(){

        $entity = EntityProvider::getEntities($this->con, null, 1);
        return $entity[0]; 
    }
}
?>



