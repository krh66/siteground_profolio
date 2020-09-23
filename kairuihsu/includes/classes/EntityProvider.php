<?php
class EntityProvider{

    public static function getEntities($con, $categoryId, $limit){

        $sql = "SELECT * FROM entities "; // must have a space at the end

        if ($categoryId != null){
            $sql .= "WHERE categoryId=:categoryId "; // must have a space at the end
        }

        $sql .= "ORDER BY RAND() LIMIT :limit";

        $query = $con->prepare($sql);

        if($categoryId != null){
            $query->bindValue(":categoryId",$categoryId);
        }

        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
        $query->execute();

        $result = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $result[] = new Entity($con, $row);
        }

        return $result;
    }
}

?>