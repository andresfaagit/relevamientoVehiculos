<?php 
    class RelevateModel {   

        public function createRelevation($dataArray){           
            include_once DBS.'dataBase.php';
            $connection = new ConnectDB();
            $actualConnection = $connection -> openConnection();

            //CONSULTA SQL
            $sql = "INSERT INTO predio (municipio, nomaperesp, direccion, almacena, titularterreno, dimensionmtr2, cantidadvehiculos, comentarioadicional, fechaAlta) 
                    VALUES ";
            $sql .= implode(',', $dataArray); //$nombre = $data[0];

            if (mysqli_query($actualConnection, $sql)) {
                //echo "New record created successfully";
            }else {
                echo "Error: " . $sql . "<br>" . mysqli_error($actualConnection);
            }

            $connection -> closeConnection($actualConnection);
        }   
    }
?>