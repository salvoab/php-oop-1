<?php 
/*
Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe.
Stampate a schermo gli attributi di ogni istanza.
Per chi non ha fantasia ecco qualche entitá che potete usare:
Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc.
*/

/**
 * class Automobile
 * Modello semplificato di una automobile
*/
class Automobile {
    public $marca;
    public $modello;
    public $colore;
    public $accesa;

    public function __construct(string $marca, string $modello, string $colore, bool $accesa=false) {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->colore = $colore;
        $this->accesa = $accesa;
    }

    /**
     * Gira la chiave
     * Se la macchina è accesa la spegne settando l'attributo accesa a false,
     * viceversa se la macchina è spenta la accende settando l'attributo accesa a true 
    */
    public function giraLaChiave()
    {
        $this->accesa ? $this->accesa = false : $this->accesa = true;
    }

    /**
     * Muove la macchina
     * Se la macchina è accesa restituisce un messaggio per indicare che la macchina è in movimento,
     * altrimenti restituisce un messaggio per dire che la macchina non si sta muovendo
     * 
     * @return string
    */
    public function muovi()
    {
        return $this->accesa ? "La macchina si muove" : "La macchina è spenta e non si muove"; 
    }
}

$macchine = [
    "panda" => new Automobile("FIAT", "Panda", "Rosso"),
    "model_s" => new Automobile("Tesla", "Model S", "Bianco"),
    "kona" => new Automobile("hyundai", "Kona", "Giallo", true)
];

//var_dump($macchine);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macchine OOP</title>
    <style>
        section{
            width: 80%;
            margin: auto;
            text-align: center;
        }
        .lista-macchine{
            display: flex;
        }
        .macchina{
            margin: 20px;
            padding: 10px;
            background-color: lightgrey;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1>Esercizio base sulla programmazione ad oggetti in php</h1>
    <section>
        <h2>Macchine appena istanziate</h2>
        <div class="lista-macchine">
            <?php foreach($macchine as $macchina){ ?>
                <div class="macchina">
                    <h3>Marca: <?php echo $macchina->marca; ?></h3>
                    <h3>Modello: <?php echo $macchina->modello; ?></h3>
                    <h3>Colore: <?php echo $macchina->colore; ?></h3>
                    <p>Muovi: <?php echo $macchina->muovi(); ?></p>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php 
        //Giro la chiave in tutte le macchine
        foreach($macchine as $macchina){
            $macchina->giraLaChiave();
        }
    ?>

    <section>
        <h2>Dopo aver girato la chiave in tutte le macchine</h2>
        <div class="lista-macchine">
            <?php foreach($macchine as $macchina){ ?>
                <div class="macchina">
                    <h3>Marca: <?php echo $macchina->marca; ?></h3>
                    <h3>Modello: <?php echo $macchina->modello; ?></h3>
                    <h3>Colore: <?php echo $macchina->colore; ?></h3>
                    <p>Muovi: <?php echo $macchina->muovi(); ?></p>
                </div>
            <?php } ?>
        </div>
    </section>
</body>
</html>