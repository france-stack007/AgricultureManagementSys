<?php
include "connection.php";
include "personnel_head.php";
?>

<script>
    const handlePrint = () => print()
    const handlePreviousPage = () => window.history.back() 
</script>
<style>
    @media print {
        .print-btn {
            display: none;
        }
    }
</style>
<div class="table-responsive container">
    <div class="pt-5 pb-5 print-btn">
        <button class="btn btn-secondary" onclick="handlePreviousPage()">Back</button>
        <button class="btn btn-success" onclick="handlePrint()">Print</button>
    </div>
        <table class="table table-hover table-sm" id="tableSearch">
            <thead>
                <tr>
                <th>Reference ID</th>
                <th>Image</th>
                <th>Full Name</th>
                <th>Sex</th>
                <th>Commodity</th>
                <th>Size(HA)</th>
                <th>Barangay</th>
                <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="./img/prof1.jpg" height="100" width="100"></td>
                        <td>France Perez</td>
                        <td>Male</td>
                        <td>HVC</td>
                        <td>1.9</td>
                        <td>Ayala</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="./img/prof2.jpg" height="100" width="100"></td>
                        <td>Respituto Rompetrapo</td>
                        <td>Male</td>
                        <td>HVC</td>
                        <td>1.7</td>
                        <td>Ayala</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="./img/prof3.jpg" height="100" width="100"></td>
                        <td>Jessa Mendoza</td>
                        <td>Female</td>
                        <td>HVC</td>
                        <td>1.5</td>
                        <td>Ayala</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><img src="./img/prof4.jpg" height="100" width="100"></td>
                        <td>Vanessa Jane</td>
                        <td>Female</td>
                        <td>HVC</td>
                        <td>1.0</td>
                        <td>Baluno</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><img src="./img/prof3.jpg" height="100" width="100"></td>
                        <td>Mary Jane</td>
                        <td>Female</td>
                        <td>HVC</td>
                        <td>0.5</td>
                        <td>Patalon</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><img src="./img/prof2.jpg" height="100" width="100"></td>
                        <td>Jenny Santisima</td>
                        <td>Female</td>
                        <td>HVC</td>
                        <td>1.5</td>
                        <td>Limpapa</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td><img src="./img/prof1.jpg" height="100" width="100"></td>
                        <td>George Hokage</td>
                        <td>Male</td>
                        <td>HVC</td>
                        <td>1.2</td>
                        <td>Ayala</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td><img src="./img/prof4.jpg" height="100" width="100"></td>
                        <td>Mark Ruffalo</td>
                        <td>Male</td>
                        <td>HVC</td>
                        <td>1.5</td>
                        <td>Recodo</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td><img src="./img/prof3.jpg" height="100" width="100"></td>
                        <td>Norton Limpapa</td>
                        <td>Male</td>
                        <td>HVC</td>
                        <td>1.7</td>
                        <td>Ayala</td>
                        <td>09661574168</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td><img src="./img/prof2.jpg" height="100" width="100"></td>
                        <td>Tabs Mercado</td>
                        <td>Male</td>
                        <td>HVC</td>
                        <td>1.0</td>
                        <td>Recodo</td>
                        <td>09661574168</td>
                    </tr>
            </tbody>
        </table>
    </div>  
