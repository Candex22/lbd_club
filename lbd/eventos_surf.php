<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deportivo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
$conn->connect_error;
}

$sql = "SELECT * FROM eventos WHERE tipo = 'Surf' AND fecha > CURRENT_DATE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4">';  
        echo '    <div class="card mb-4 style="width: 300px;"">';
        echo '        <div class="card-body" style="width: 300px;">';
        echo '            <h5 class="card-title">' . $row["nombre"] . '</h5>';
        echo '            <p class="card-text">Fecha: ' . $row["fecha"] . '</p>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo "No se encontraron eventos de surf.";
}

$conn->close();
?>