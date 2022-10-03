<?php
include 'conexao.php';

$query_events = "SELECT id,nomeevento,descricao,inicio,fim FROM sports_goals";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['id'];
    $nomeevento = $row_events['nomeevento'];
    $descricao = $row_events['descricao'];
    $inicio = $row_events['inicio'];
    $fim = $row_events['fim'];
    
    $eventos[] = [
        'id' => $id,    
        'nomeevento' => $nomeevento, 
        'descricao' => $descricao, 
        'inicio' => $inicio, 
        'fim' => $fim, 
        ];
}

echo json_encode($eventos);