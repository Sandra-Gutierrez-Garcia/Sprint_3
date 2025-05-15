# Patrons de Disseny en PHP - Nivell 1

Aquest projecte demostra l'aplicació de dos patrons de disseny fonamentals en PHP: Singleton i Dependency Injection.

## Exercicios 03.01

📄 **Descripció**

Exercici 1: Implementa el patró Singleton a la classe `Tigger` per garantir que només existeixi una única instància. Afegeix mètodes per simular el rugit (`roar`) i comptar el nombre de vegades que ha rugit (`getCounter`).

class Tigger {

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
       }

}

Exercici 2: Crea un programa que simuli la preparació per sortir de casa utilitzant el patró Dependency Injection. Defineix classes per als objectes que una persona necessita portar (cartera, claus, smartphone, etc.)

## Exercici 03.02

📄 **Descripció**

Aquest projecte consisteix en la creació d'una aplicació per gestionar una llista de tasques pendents, en execució i acabades. Permetrà afegir, llistar, actualitzar i eliminar tasques, així com mostrar el seu estat, hora d'inici i fi, i l'usuari/ària que la va crear.

# Casos d'ús

L'aplicació ha de complir els següents casos d'ús:

* Crear tasca
* Actualitzar tasca
* Esborrar tasca
* Llistar totes les tasques
* Llistar una tasca específica
* Gestor del Usuario



## Materiales nessecitados

💻 **Tecnologies Utilitzades**
PHP

📋 **Requisits**
* PHP (versió 7.4 o superior recomanada)
Un editor de codi (per exemple, VS Code, Sublime Text, PhpStorm)

* Un editor de codi (per exemple, VS Code, Sublime Text, PhpStorm)

🛠️ **Instal·lació**

Clona aquest repositori: `git clone <URL_DEL_REPOSITORI>`
Accedeix al directori del projecte: `cd <nom_del_directori>`
No cal instal·lar dependències addicionals per a aquest exercici de PHP.


🌐 **Desplegament**

Aquest exercici se centra en la lògica del codi PHP i no requereix un desplegament típic d'aplicació web. Pots executar l'script directament en el teu entorn de desenvolupament.

