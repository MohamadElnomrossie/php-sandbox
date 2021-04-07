<?php 
include_once "database.php";
class product extends database{
    public function getMostRecent4(){
        $query="SELECT `products`.`id`,`products`.`arName`,`products`.`arSpecs`,`products`.`enName`,`products`.`enSpecs`,
        `products`.`photo`, `products`.`brandID`,`brands`.`EnName` as brandName FROM `products` INNER JOIN
        `brands` on `brands`.`id`=`products`.`brandID` order by `products`.`createdAt` DESC limit 4";
        return $this->runDQL($query);
    }
    public function getMostRated(){
        $query="SELECT `reviews`.`productID`,round(AVG(`reviews`.`rate`)) as rating,count(`reviews`.`productID`) as reviewCount,
        `products`.`id`,`products`.`arName`,`products`.`arSpecs`,`products`.`enName`,`products`.`enSpecs`,
                `products`.`photo`, `products`.`brandID`,`brands`.`EnName` as brandName from `reviews` 
        inner join `products` on `products`.`id`=`reviews`.`productID`
        inner join `brands` on `brands`.`id`=`products`.`brandID`
        GROUP by `reviews`.`productID` order by round(AVG(`reviews`.`rate`)) DESC";
        return $this->runDQL($query);

    }
    public function getMostOrdered(){
        $query=" SELECT count(`productorders`.`productID`) as ordersCount,
        `products`.`id`,`products`.`arName`,`products`.`arSpecs`,`products`.`enName`,`products`.`enSpecs`, `products`.`photo`, `products`.`brandID`,`brands`.`EnName` as brandName
         from `productorders` inner join `products` 
        on `products`.`id`=`productorders`.`productID` 
        inner join `brands` on `brands`.`id`=`products`.`brandID` 
    GROUP by `productorders`.`productID` order by count(`productorders`.`productID`) DESC";
        return $this->runDQL($query);

    }
}
?>