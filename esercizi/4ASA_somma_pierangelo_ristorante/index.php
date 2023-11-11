<html>

<body>
<div class="container">
    <div class="column" style="text-align: center;">
        
    </div>
<?php
$piatti = array
(
    "MARGHERITA",
    "MARINARA",
    "PROSCIUTTO E FUNGHI",
    "VIENNESE",
    "SALAMINO PICCANTE",
    "CIPOLLA ROSSA",
);
$costi = array
(
    "",
    "",
    "",
    "",
    "",
    "",
);
echo "<h1> Menù Ristorante </h1>";
echo "<ul>";
foreach ($piatti as $piatto)
{
    echo "<li>$piatto</li>";
}
echo "</ul>";
?>
</body>
</html>
<style>
h1
{
    text-align: center;
    color: red;
}
ul
{
    width: 300px;
}
</style>