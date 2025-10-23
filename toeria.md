Una funzione è una porzione di codice che può essere eseguita più volte durante un programma.

Ogni funzione deve sempre ritornare un risultato o comunque mostrare qualcosa all’utente;

- Estrazione;
- Incapsularlo;
- Invocarlo.

Un esempio di una funzione che mostra qualcosa è il 

```php
$x = 6;
var_dump($x);
```

Si dividono in 

- Built-in functions
- User Functions

## **1 - Built-in Functions**

Le Built-in functions sono le funzioni predefinite del linguaggio che stiamo
usando.

## 2 - User Functions

Sono le funzioni create dall'utente

## 2.1 - Dichiarazione ed Esecuzione

Cosa significa dichiarare una funzione?

1. Darle un nome
2. Esplicitare le istruzioni che compongono il corpo della funzione
3. Esplicitare i parametri che deve manipolare

Cosa significa eseguire una funzione?

1. Chiamarla utilizzando il nome scelto.

## 2.2 - Come si fa in pratica

```php
//Dichiarazione
function nome_funzione()
{
  //istruzioni
}
//Chiamata
nome_funzione();

//Esempio

function saluta()
{
  echo "Ciao";
} 
saluta();

//Oppure 

saluta();

function saluta()
{
  echo "Ciao";
}
```

## 2.3 - Scope delle variabili

Scope inteso come **campo di applicazione, settore di competenza.**

Le variabili esterne alla funzione non sono visibili all'interno della funzione.

In PHP una **variabile normale** è visibile solo nella porzione di codice in cui è
dichiarata.

```php
$name = "Francesco";
function saluta()
{
  echo "Ciao $name";
  echo "Ciao Antonio";
}
saluta();
```

Discorso diverso invece sono le costanti:

```php
const NAME = "Francesco";
function saluta()
{
  echo "Ciao Antonio";
  echo "Ciao" . NAME;
}
saluta();
```

## 2.4 - Parametri

Con parametri si intende l'insieme dei dati che la funzione deve manipolare, sono posizionali.

## 2.4.1 - Passaggio dei Parametri per Valore

```php
$name = "Francesco";
function saluta($nome)
{
  echo "Ciao $nome";
} 
saluta($name);
// Oppure

$num1 = 1;
$num2 = 2;

function sum($a, $b) //$a e $b Sono parametri Formali
{
  echo $a + $b;
} 

sum($num1 , $num2);//Sono dett parametri Attuali

```

## Altro Esempio:

```php

$num1 = 1;
$num2 = 3;

function sum($a, $b) //$a e $b Sono parametri Formali
{
  echo $a + $b;
} 

//sum($num1 , $num2);//Sono dett parametri Attuali
sum(1,3);
```

## 2.4.2 - Passaggio di valori per riferimento

Il passaggio per riferimento avviene quando passiamo non una copia del valore ma la locazione di memoria in cui è conservata la variabile.

Per passare una variabile per riferimento, utilizziamo il simbolo **&** prima del nome del parametro formale.

```php
$x = 5;

function sum(&$a, &$b)
{
  echo $a + $b;
}

sum($x, $y);
```

## 2.5 - Differenze tra Valore e Riferimento

Per valore non si modifica il valore attuale:

```php
$x = 11;
function increment($elemento)
{
  $elemento++;
}
echo "Prima della funzione x: $x\n";
increment($x);
echo "Dopo la funzione x: $x\n";
```

Per riferimento invece avremo:

```php
$x = 11;
function increment(&$elemento)
{
  $elemento++;
}
echo "Prima della funzione x: $x\n";
increment($x);
echo "Dopo la funzione x: $x\n";
```

## 2.6 - Parametri di Default

Abbiamo visto che, al momento della chiamata, una funzione deve ricevere tanti parametri reali quanti sono i formali nella sua dichiarazione.

Possiamo settare dei parametri di default che verranno utilizzati se non riusciamo a passare il giusto numero di parametri.

```php
$num1 = 1;

function sum($a, $b = 0)
{
  echo $a + $b;
}

sum($num1);

```

## 2.7 - Splat Operator - Parametri variabili

Ci sono casi ( rarissimi ) in cui non sappiamo quanti parametri verranno
mandati alla nostra funzione.

```php
$a = 1;
$b = 6;
$c = 9;
$d = 11;

function sum(...$numbers)
{
  var_dump($numbers);
  //$numbers = [1,6,3,11];
}

sum($a, $b, $c, $d);
```

## 2.8 Return Types In PHP

```php
function stampaIntero()
{
    return 'ciao';
}

stampaIntero();
```

## 2.9 Named Arguments

```php
function saluta($nome, $cognome)
{
    echo "$nome $cognome";
}

saluta(cognome: 'Mansi', nome: 'Francesco');
```

## 3 - Valori di ritorno RETURN

Abbiamo visto fino ad ora che una funzione ci può mostrare il risultato per
cui è stata creata.

**Ci sono dei casi in cui una funzione deve semplicemente ritornare un valore.**

```php
$students = [
  [
    'name' => 'Marco',
    'age' => 21,
  ],
  [
    'name' => 'Maria',
    'age' => 17,
  ],
  [
    'name' => 'Jack',
    'age' => 24,
  ],
];

function avg($array)
{
  $sum = 0;
  foreach ($array as $value) {
    $sum = $sum + $value['age'];
  }

  return $sum / count($array);
}
$media = avg($students);

echo "Età media degli studenti è: " . round($media, 2);
```

## Esempio ritorno booleano

```php
$students = [
  [
    'name' => 'Marco',
    'age' => 21,
  ],
  [
    'name' => 'Maria',
    'age' => 17,
  ],
  [
    'name' => 'Jack',
    'age' => 24,
  ],
];

function isAdult($var)
{
  if ($var >= 18) {
    return true;
  }
  return false;
}

foreach ($students  as $value) {
  if (isAdult($value['age'])) {
    echo $value["name"];
  }
}
```
